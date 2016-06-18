package autocontrol.simulador.model.centro;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Date;
import java.util.Iterator;
import java.util.List;

import org.apache.commons.collections4.CollectionUtils;
import org.apache.log4j.Logger;

import autocontrol.simulador.model.bateria.BateriaHW;

public class CentroAlmacenamientoHW {

	private static Logger logger = Logger.getLogger(CentroAlmacenamientoHW.class);
	private Long id;
	private String gps;	
	private List<EventoCentroAlmacenamiento> buffer;
	private List<BateriaHW> baterias;
	
	public CentroAlmacenamientoHW() {
		baterias = new ArrayList<BateriaHW>();
		buffer = new ArrayList<EventoCentroAlmacenamiento>();
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getGps() {
		return gps;
	}

	public void setGps(String gps) {
		this.gps = gps;
	}

	public List<EventoCentroAlmacenamiento> getBuffer() {
		return buffer;
	}

	public void setBuffer(List<EventoCentroAlmacenamiento> buffer) {
		this.buffer = buffer;
	}

	public List<BateriaHW> getBaterias() {
		return baterias;
	}

	public void setBaterias(List<BateriaHW> baterias) {
		this.baterias = baterias;
	}

	public synchronized void consumirEnergia(Float consumoRequerido) {
		logger.debug(this.toString());

		EventoCentroAlmacenamiento e = new EventoCentroAlmacenamiento();
		e.fecha = new Date();
		e.id = e.fecha.getTime();
		e.energia = consumoRequerido;
		Float capacidadActual = getCapacidadActual();
		//si me alcanza la capacidad de las baterias, voy a ir consumiendo de todas las baterias hasta obtener
		//la potencia deseada
		if(capacidadActual>0 && capacidadActual >= consumoRequerido){
			Float consumoUtilizado = 0.0F; // va de 0 hasta consumo
			//luego de actualizar las baterias, tengo capacidadActual - consumo
			Collections.shuffle(baterias);
			for (BateriaHW b : baterias) {
				consumoUtilizado += b.descargarBateria(consumoRequerido-consumoUtilizado);
				if(consumoUtilizado.equals(consumoRequerido)){
					break;
				}
			}
			//llego aca, ya realice el consumo
			e.aceptadoPorCentro=true;
			e.capacidadActual = capacidadActual;
		}
		//si no tengo capacidad genero el evento de rechazo, mostrando la capacidad actual de la bateria, pero no consumo de la bateria
		else{
			e.capacidadActual = getCapacidadActual();
			e.aceptadoPorCentro = false;			
		}
		
		//agrego el evento
		this.buffer.add(e);

		
	}
	
	private synchronized Float getCapacidadActual() {
		Float cap = 0.0f;
		for (BateriaHW bateriaHW : baterias) {
			cap += bateriaHW.getCapacidadActual();
		}
		return cap;
		
	}

	@Override
	public String toString() {
		return "CentroAlmacenamientoHW [id=" + id + ", getCapacidadActual()=" + getCapacidadActual() + "]";
	}

	public synchronized void agregarBateria(BateriaHW b) {
		this.baterias.add(b);
		b.centro = this;
	}

	public synchronized List<EventoCentroAlmacenamiento> getEventos(Long idUltimoRegistroConocido) {
		synchronized (this.buffer) {
			//primero separa todos los elementos menores a la fecha
			List<EventoCentroAlmacenamiento> aBorrar = obtenerEventosViejos(idUltimoRegistroConocido);		
			CollectionUtils.removeAll(this.buffer,aBorrar);
			//una vez borrado, retorno el buffer // no se borrara nada hasta que venga una siguiente peticion
			//con la fecha del ultimo evento confirmado
			return this.buffer;
			
		}		
	}

	private synchronized List<EventoCentroAlmacenamiento> obtenerEventosViejos(Long idUltimoRegistroConocido) {
		List<EventoCentroAlmacenamiento> eventos = new ArrayList<EventoCentroAlmacenamiento>();
		Iterator<EventoCentroAlmacenamiento> iterator = this.buffer.iterator();
		while (iterator.hasNext()) {
			EventoCentroAlmacenamiento e = (EventoCentroAlmacenamiento) iterator.next();
			if(e.fecha.before(new Date(idUltimoRegistroConocido))){
				eventos.add(e);
			}
			else{
				break;
			}
		}
		return eventos;
	}
	
	

}
