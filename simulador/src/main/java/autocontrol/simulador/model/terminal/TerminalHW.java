package autocontrol.simulador.model.terminal;

import java.util.ArrayList;
import java.util.Date;
import java.util.Iterator;
import java.util.List;

import org.apache.commons.collections4.CollectionUtils;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

import autocontrol.simulador.model.bateria.BateriaHW;

public class TerminalHW {

	private static Logger logger = LoggerFactory.getLogger(TerminalHW.class);

	private String gps;
	private Float capacidadGeneradora;
	private Long id;
	
	public BateriaHW bateria;	
	public List<EventoTerminal> buffer = new ArrayList<EventoTerminal>();
	
	
	public TerminalHW() {
		
	}


	public synchronized void generarEnergia(Float generada) {
		//genero mi evento, y alimento a la bateria
		EventoTerminal e = new EventoTerminal();
		e.fecha = new Date();
		e.id = e.fecha.getTime();
		e.generado = generada;
		e.aceptadoPorBateria = (bateria.getCapacidadActual() + generada) < bateria.getCapacidadMaxima();
		buffer.add(e);
		logger.debug(this.toString());
		if(e.aceptadoPorBateria){
			bateria.cargarBateria(generada);
		}
		
	}


	public synchronized List<EventoTerminal> getEventos(Long idUltimoRegistroConocido) {
		synchronized (this.buffer) {

			//primero separa todos los elementos menores a la fecha
			List<EventoTerminal> aBorrar = obtenerEventosViejos(idUltimoRegistroConocido);		
			CollectionUtils.removeAll(this.buffer,aBorrar);
			//una vez borrado, retorno el buffer // no se borrara nada hasta que venga una siguiente peticion
			//con la fecha del ultimo evento confirmado
			return this.buffer;
			
		}		
	}

	private synchronized List<EventoTerminal> obtenerEventosViejos(Long idUltimoRegistroConocido) {
		List<EventoTerminal> eventos = new ArrayList<EventoTerminal>();
		Iterator<EventoTerminal> iterator = this.buffer.iterator();
		while (iterator.hasNext()) {
			EventoTerminal e = (EventoTerminal) iterator.next();
			if(e.fecha.before(new Date(idUltimoRegistroConocido))){
				eventos.add(e);
			}
			else{
				break;
			}
		}
		return eventos;
	}
	


	@Override
	public String toString() {
		return "TerminalHW [id=" + getId() + ", ultimaGenerada()=" + ultimaGenerada() + "]";
	}


	private String ultimaGenerada() {
		String ultimaCapacidadGenerada ="";
		if(!this.buffer.isEmpty()){
			ultimaCapacidadGenerada = this.buffer.get(this.buffer.size()-1).generado.toString();
		}
		return ultimaCapacidadGenerada;
	}


	public String getGps() {
		return gps;
	}


	public void setGps(String gps) {
		this.gps = gps;
	}


	public Float getCapacidadGeneradora() {
		return capacidadGeneradora;
	}


	public void setCapacidadGeneradora(Float capacidadGeneradora) {
		this.capacidadGeneradora = capacidadGeneradora;
	}


	public Long getId() {
		return id;
	}


	public void setId(Long id) {
		this.id = id;
	}
	
	
	

}
