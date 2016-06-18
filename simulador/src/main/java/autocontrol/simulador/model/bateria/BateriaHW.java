package autocontrol.simulador.model.bateria;

import java.util.ArrayList;
import java.util.Date;
import java.util.Iterator;
import java.util.List;

import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

import org.apache.log4j.Logger;

import autocontrol.simulador.model.centro.CentroAlmacenamientoHW;

@XmlRootElement
public class BateriaHW {

	private static Logger logger = Logger.getLogger(BateriaHW.class);
	private Float capacidadMaxima; //cantidad en miliamperes
	private Float capacidadActual; //cantidad en miliamperes
	private Long id;
	private Float temperatura; //en °C
	private String gps;
	
	@XmlTransient
	public CentroAlmacenamientoHW centro;
	
	public List<EventoBateria> buffer;
	
	
	public BateriaHW() {
		buffer = new ArrayList<EventoBateria>();
	}
	
	public synchronized void cargarBateria(Float cantidad){
		setCapacidadActual(getCapacidadActual() + cantidad);
		generarEventoCarga(cantidad);
		logger.info(this);
	}
	

	public synchronized Float descargarBateria(Float cantidad){
		logger.debug("Se le pide a la bateria: "+cantidad+" tiene:" +getCapacidadActual());
		Float aEntregar = 0.0F;
		//cuando me piden una carga, debo devolverla y actualizar mi cantidad, si me piden mas 
		//de lo que tengo, doy hasta que puedo, y nada mas, generando un evento de descarga
		if(getCapacidadActual()<cantidad){
			aEntregar = getCapacidadActual();
		}
		else{
			aEntregar = cantidad;
			setCapacidadActual(getCapacidadActual() - cantidad);
		}		
		logger.debug("Entrega:" +aEntregar+ " le queda:"+getCapacidadActual());
		generarEventoDescarga(cantidad,aEntregar);
		logger.info(this);
		return aEntregar;
		
	}

	private synchronized void generarEventoDescarga(Float cantidad, Float aEntregar) {
		EventoBateria e = new EventoBateria();
		e.energia = aEntregar;
		e.temperatura = getTemperatura();
		e.capacidadActual = getCapacidadActual();
		e.fecha = new Date();
		e.id = e.fecha.getTime();
		e.esDescarga =true;
		this.buffer.add(e);
	}

	private synchronized void generarEventoCarga(Float cantidad) {
		EventoBateria e = new EventoBateria();
		e.fecha = new Date();
		e.energia = cantidad;
		e.esDescarga = false;
		e.temperatura = getTemperatura();
		e.capacidadActual = getCapacidadActual();
		e.id = e.fecha.getTime();
		this.buffer.add(e);
	}
	

	
	
	@Override
	public String toString() {
		return "BateriaHW  [id=" + getId() + ", capacidadActual=" + getCapacidadActual() + ", " + "ultimoEvento()=" + ultimoEvento()	+ "]";
	}

	private synchronized String ultimoEvento() {
		String ultimaCapacidadGenerada ="";
		if(!this.buffer.isEmpty()){
			EventoBateria ultimoEvento = this.buffer.get(this.buffer.size()-1);
			Float energia = ultimoEvento.esDescarga? ultimoEvento.energia * -1: ultimoEvento.energia;
			ultimaCapacidadGenerada = energia.toString();
		}
		return ultimaCapacidadGenerada;
	}

	public synchronized List<EventoBateria> getEventos(Long idUltimoRegistroConocido) {
		synchronized (this.buffer) {
			//primero separa todos los elementos menores a la fecha
			List<EventoBateria> aBorrar = obtenerEventosViejos(idUltimoRegistroConocido);
			logger.info("A borrar:"+aBorrar.size()+"     buffer antes: "+this.buffer.size());
			
			this.buffer.removeAll(aBorrar);
			//una vez borrado, retorno el buffer // no se borrara nada hasta que venga una siguiente peticion
			//con la fecha del ultimo evento confirmado
			logger.info("buffer despues: "+this.buffer.size());
			return this.buffer;
		}

	}

	private synchronized List<EventoBateria> obtenerEventosViejos(Long idUltimoRegistroConocido) {
		List<EventoBateria> eventos = new ArrayList<EventoBateria>();
		Iterator<EventoBateria> iterator = this.buffer.iterator();
		while (iterator.hasNext()) {
			EventoBateria e = (EventoBateria) iterator.next();
			if(e.fecha.before(new Date(idUltimoRegistroConocido))){
				eventos.add(e);
			}
			else{
				break;
			}
		}
		return eventos;
	}

	public Float getCapacidadMaxima() {
		return capacidadMaxima;
	}

	public void setCapacidadMaxima(Float capacidadMaxima) {
		this.capacidadMaxima = capacidadMaxima;
	}

	public Float getCapacidadActual() {
		return capacidadActual;
	}

	public void setCapacidadActual(Float capacidadActual) {
		this.capacidadActual = capacidadActual;
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public Float getTemperatura() {
		return temperatura;
	}

	public void setTemperatura(Float temperatura) {
		this.temperatura = temperatura;
	}

	public String getGps() {
		return gps;
	}

	public void setGps(String gps) {
		this.gps = gps;
	}
	

}
