package autocontrol.simulador.service;

import java.util.ArrayList;
import java.util.Collection;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Random;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;

import autocontrol.simulador.exceptions.SimuladorException;
import autocontrol.simulador.model.bateria.BateriaHW;
import autocontrol.simulador.model.bateria.EventoBateria;
import autocontrol.simulador.model.centro.CentroAlmacenamientoHW;
import autocontrol.simulador.model.centro.CentroAlmacenamientoIA;
import autocontrol.simulador.model.centro.EventoCentroAlmacenamiento;
import autocontrol.simulador.model.terminal.EventoTerminal;
import autocontrol.simulador.model.terminal.TerminalHW;
import autocontrol.simulador.model.terminal.TerminalIA;

public class Simulador {
	private ExecutorService executor = Executors.newCachedThreadPool();	  
	private static Simulador INSTANCE;
	private TerminalIA terminalIADensa;
	private TerminalIA terminalIADesierta;
	private CentroAlmacenamientoIA centroAlmacenamientoIACapitalista;
	private CentroAlmacenamientoIA centroAlmacenamientoIAComunista;
	private Map<Long,CentroAlmacenamientoHW> centros = new HashMap<Long,CentroAlmacenamientoHW>();	
	private Map<Long,BateriaHW> baterias= new HashMap<Long,BateriaHW>();
	private Map<Long,TerminalHW> terminales = new HashMap<Long,TerminalHW>();
	private Random r = new Random();


	private Simulador() {
		//una IA que deberia generar varios eventos para una terminal
		terminalIADensa = new TerminalIA("TerminalDensaIA");
		terminalIADensa.maxGenerada =   10.0F;
		terminalIADensa.minGenerada =  0.001F;
		terminalIADensa.milisegundosMinFrecuencia = 100;
		terminalIADensa.milisegundosMaxFrecuencia = 3000;		
		//los parametros para esta terminal son mas laxos
		terminalIADesierta = new TerminalIA("TerminalDesiertaIA");
		terminalIADesierta.maxGenerada =  9.0F;
		terminalIADesierta.minGenerada =  0.001F;
		terminalIADesierta.milisegundosMinFrecuencia = 10000;
		terminalIADesierta.milisegundosMaxFrecuencia = 60000;
		//una IA que deberia consumir bastante de las baterias
		centroAlmacenamientoIACapitalista = new CentroAlmacenamientoIA("CentroIACapitalista");
		centroAlmacenamientoIACapitalista.maxConsumo =  1.0F;
		centroAlmacenamientoIACapitalista.minConsumo =  0.1F;
		centroAlmacenamientoIACapitalista.milisegundosMinFrecuencia = 10000;
		centroAlmacenamientoIACapitalista.milisegundosMaxFrecuencia =  9000;		
		//una Ia que deberia consumir mucho menos
		centroAlmacenamientoIAComunista = new CentroAlmacenamientoIA("CentroIAComunista");
		centroAlmacenamientoIAComunista.maxConsumo =  0.3F;
		centroAlmacenamientoIAComunista.minConsumo =  0.1F;
		centroAlmacenamientoIAComunista.milisegundosMinFrecuencia = 30000;
		centroAlmacenamientoIAComunista.milisegundosMaxFrecuencia =  15000;	

		executor.execute(terminalIADensa);
		executor.execute(terminalIADesierta);
		executor.execute(centroAlmacenamientoIACapitalista);
		executor.execute(centroAlmacenamientoIAComunista);
	}
	
	public synchronized static Simulador getInstance(){
		if(INSTANCE==null){
			INSTANCE = new Simulador();			
		}
		return INSTANCE;
	}

	public synchronized void altaCentroAlmacenamiento(Long id, String gps) throws SimuladorException{
		
		CentroAlmacenamientoHW centroHW = centros.get(id);
		
		if(centroHW==null){
			throw new SimuladorException("Ya existe el centro dado de alta idCentro=:"+id);
		}
		
		CentroAlmacenamientoHW c = new CentroAlmacenamientoHW();		
		c.setId(id);
		c.setGps(gps);		
		centros.put(id,c);
		
		//lo agrego a la IA de centros
		if(r.nextBoolean()){
			centroAlmacenamientoIACapitalista.centros.add(c);
		}
		else{
			centroAlmacenamientoIAComunista.centros.add(c);
		}
	}
	
	public synchronized void altaBateria(Long id, Long idCentro, String gps, Float capacidadMaxima, Float capacidadActual) throws SimuladorException{
		CentroAlmacenamientoHW centroHW = centros.get(idCentro);
		
		if(centroHW==null){
			throw new SimuladorException("No se encuentra el centro especificado por idCentro=:"+idCentro+ ". Debe simular priimero el centro");
		}
		
		BateriaHW b = new BateriaHW();
		b.setId(id);
		b.setTemperatura((float) 1 + r.nextInt(120));
		b.setGps(gps);
		b.setCapacidadMaxima(capacidadMaxima);
		b.setCapacidadActual(capacidadActual);
		
		//lo agrego al simulador
		baterias.put(id, b);
		//hago el enganche bidireccional entre bateria y centro
		centroHW.agregarBateria(b);
		
	}
	
	public synchronized void altaTerminal(Long id, Long idBateria, String gps, Float capacidadGeneradora) throws SimuladorException{
		BateriaHW bateriaHW = baterias.get(idBateria);
		
		if(bateriaHW==null){
			throw new SimuladorException("No se encuentra la bateria especificada por idBateria=:"+idBateria+ ". Debe simular primero la bateria");
		}
		
		TerminalHW t = new TerminalHW();
		t.setId(id);
		t.setGps(gps);
		t.setCapacidadGeneradora(capacidadGeneradora);
		//hago el enganche entre las clases del modelo
		t.bateria = bateriaHW;
		//lo agrego al simulador
		terminales.put(id, t);
		
		//lo agrego a la IA de terminales
		if(r.nextBoolean()){
			terminalIADensa.terminales.add(t);
		}
		else{
			terminalIADesierta.terminales.add(t);
		}
	}
	
	public synchronized List<EventoCentroAlmacenamiento> consultarUltimosEstadosCentro(Long idCentro, Long idUltimoRegistroConocido) throws SimuladorException{
		CentroAlmacenamientoHW centroAlmacenamientoHW = centros.get(idCentro);
		
		if(centroAlmacenamientoHW==null){
			throw new SimuladorException("No se encuentra el centro especificada por idCentro=:"+idCentro+ ". Debe simular primero el centro");
		}
		
		List<EventoCentroAlmacenamiento> lista = centroAlmacenamientoHW.getEventos(idUltimoRegistroConocido);
		return lista;
	}
	
	public synchronized List<EventoBateria> consultarUltimosEstadosBateria(Long id, Long idUltimoRegistroConocido) throws SimuladorException{
		BateriaHW bateriaHW = baterias.get(id);
		
		if(bateriaHW==null){
			throw new SimuladorException("No se encuentra la bateria especificada por idBateria=:"+id+ ". Debe simular primero la bateria");
		}
		
		List<EventoBateria> lista = bateriaHW.getEventos(idUltimoRegistroConocido);
		return lista;
	}
	
	public synchronized List<EventoTerminal> consultarUltimosEstadosTerminal(Long id, Long idUltimoRegistroConocido) throws SimuladorException{
		TerminalHW terminalHW = terminales.get(id);
		
		if(terminalHW==null){
			throw new SimuladorException("No se encuentra la terminal especificada por idTerminal=:"+id+ ". Debe simular primero la terminal");
		}
		
		List<EventoTerminal> lista = terminalHW.getEventos(idUltimoRegistroConocido);
		return lista;
	}

	public BateriaHW getBateria(long l) {
		return this.baterias.get(l);
	}

	public List<CentroAlmacenamientoHW> getCentros() {
		List<CentroAlmacenamientoHW> aRetornar = new ArrayList<CentroAlmacenamientoHW>();
		Collection<CentroAlmacenamientoHW> values = centros.values();
		for (CentroAlmacenamientoHW c : values) {
			aRetornar.add(c);
		}
		return aRetornar;
		
	}

	public List<BateriaHW> getBaterias() {
		List<BateriaHW> aRetornar = new ArrayList<BateriaHW>();
		Collection<BateriaHW> values = baterias.values();
		for (BateriaHW c : values) {
			aRetornar.add(c);
		}
		return aRetornar;
	}

	public List<TerminalHW> getTerminales() {
		List<TerminalHW> aRetornar = new ArrayList<TerminalHW>();
		Collection<TerminalHW> values = terminales.values();
		for (TerminalHW c : values) {
			aRetornar.add(c);
		}
		return aRetornar;
	}
}
