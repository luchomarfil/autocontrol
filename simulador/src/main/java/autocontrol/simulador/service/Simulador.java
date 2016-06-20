package autocontrol.simulador.service;

import java.util.ArrayList;
import java.util.Collection;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Random;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import java.util.concurrent.TimeUnit;

import org.apache.log4j.Logger;

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
		terminalIADensa.setMaxGenerada(10.0F);
		terminalIADensa.setMinGenerada(0.001F);
		terminalIADensa.setMilisegundosMinFrecuencia(100);
		terminalIADensa.setMilisegundosMaxFrecuencia(3000);		
		//los parametros para esta terminal son mas laxos
		terminalIADesierta = new TerminalIA("TerminalDesiertaIA");
		terminalIADesierta.setMaxGenerada(9.0F);
		terminalIADesierta.setMinGenerada(0.001F);
		terminalIADesierta.setMilisegundosMinFrecuencia(10000);
		terminalIADesierta.setMilisegundosMaxFrecuencia(60000);
		//una IA que deberia consumir bastante de las baterias
		centroAlmacenamientoIACapitalista = new CentroAlmacenamientoIA("CentroIACapitalista");
		centroAlmacenamientoIACapitalista.setMaxConsumo(100);
		centroAlmacenamientoIACapitalista.setMinConsumo(1);
		centroAlmacenamientoIACapitalista.setMilisegundosMinFrecuencia(1000);
		centroAlmacenamientoIACapitalista.setMilisegundosMaxFrecuencia(20000);		
		//una Ia que deberia consumir mucho menos
		centroAlmacenamientoIAComunista = new CentroAlmacenamientoIA("CentroIAComunista");
		centroAlmacenamientoIAComunista.setMaxConsumo(3);
		centroAlmacenamientoIAComunista.setMinConsumo(1);
		centroAlmacenamientoIAComunista.setMilisegundosMinFrecuencia(13000);
		centroAlmacenamientoIAComunista.setMilisegundosMaxFrecuencia(35000);	

		getExecutor().execute(terminalIADensa);
		getExecutor().execute(terminalIADesierta);
		getExecutor().execute(centroAlmacenamientoIACapitalista);
		getExecutor().execute(centroAlmacenamientoIAComunista);
		
		
		
		
//		Runtime.getRuntime().addShutdownHook(new Thread() {
//		    public void run() {
//		        getExecutor().shutdown();
//		        try {
//					if (!getExecutor().awaitTermination(3,TimeUnit.SECONDS)) { //optional *
//					    Logger.getLogger(Simulador.class).info("Executor did not terminate in the specified time."); //optional *
//					    List<Runnable> droppedTasks = getExecutor().shutdownNow(); //optional **
//					    Logger.getLogger(Simulador.class).info("Executor was abruptly shut down. " + droppedTasks.size() + " tasks will not be executed."); //optional **
//					}
//				} catch (InterruptedException e) {
//					// TODO Auto-generated catch block
//					e.printStackTrace();
//				}
//		    }
//		});
//		
		
	}
	
	public synchronized static Simulador getInstance(){
		if(INSTANCE==null){
			INSTANCE = new Simulador();			
		}
		return INSTANCE;
	}

	public synchronized void altaCentroAlmacenamiento(Long id, String gps) throws SimuladorException{
		
		CentroAlmacenamientoHW centroHW = centros.get(id);
		
		if(centroHW!=null){
			throw new SimuladorException("Ya existe el centro dado de alta idCentro=:"+id);
		}
		
		CentroAlmacenamientoHW c = new CentroAlmacenamientoHW();		
		c.setId(id);
		c.setGps(gps);		
		centros.put(id,c);
		
		//lo agrego a la IA de centros
		if(r.nextBoolean()){
			centroAlmacenamientoIACapitalista.getCentros().add(c);
		}
		else{
			centroAlmacenamientoIAComunista.getCentros().add(c);
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

		//lo agrego al simulador
		terminales.put(id, t);
		
		//hago el enganche bidireccional entre bateria y terminal
		bateriaHW.agregarBateria(t);
		
		//lo agrego a la IA de terminales
		if(r.nextBoolean()){
			terminalIADensa.getTerminales().add(t);
		}
		else{
			terminalIADesierta.getTerminales().add(t);
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

	public List<CentroAlmacenamientoIA> getCentrosIA() {
		List<CentroAlmacenamientoIA> centros = new ArrayList<CentroAlmacenamientoIA>();
		centros.add(centroAlmacenamientoIACapitalista);
		centros.add(centroAlmacenamientoIAComunista);
		return centros;
	}

	public void matarInteligenciaArtificial() {
		
		List<CentroAlmacenamientoIA> centrosIA = getCentrosIA();
		for (CentroAlmacenamientoIA c : centrosIA) {
			c.activa = false;		
			
		}
		
		List<TerminalIA> terminalesIA = getTerminalesIA();
		for (TerminalIA t : terminalesIA) {
			t.setActiva(false);
		}
		
	}

	public List<TerminalIA> getTerminalesIA() {
		
		List<TerminalIA> t = new ArrayList<TerminalIA>();
		t.add(terminalIADensa);
		t.add(terminalIADesierta);
		return t;
		
	}

	public ExecutorService getExecutor() {
		return executor;
	}

	public void setExecutor(ExecutorService executor) {
		this.executor = executor;
	}
}
