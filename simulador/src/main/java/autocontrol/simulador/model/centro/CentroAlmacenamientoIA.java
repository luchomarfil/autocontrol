package autocontrol.simulador.model.centro;

import java.util.ArrayList;
import java.util.List;
import java.util.Random;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

public class CentroAlmacenamientoIA implements Runnable{

	private static Logger logger = LoggerFactory.getLogger(CentroAlmacenamientoIA.class);

	
	// lista de terminales manipuladas por la misma IA, que tiene determinados
	// parametros
	// todas las terminales sufriran un evento parecido en cada loop
	private List<CentroAlmacenamientoHW> centros;

	private Integer milisegundosMaxFrecuencia;
	private Integer milisegundosMinFrecuencia;

	private Integer maxConsumo;
	private Integer minConsumo;

	public Boolean activa; // esta actica la IA?

	private Random r; // para randomizar internamente


	private String nombre;

	public CentroAlmacenamientoIA(String nombreIA) {
		r = new Random();
		activa = true;
		setCentros(new ArrayList<CentroAlmacenamientoHW>());
		setNombre(nombreIA);
	}

	public void actualizarMundo() {

		// envia un evento a cada centro de almacenamiento generando aleatoriamente entre los
		// parametros los valores para el evento
		for (CentroAlmacenamientoHW centroHW : getCentros()) {
			Integer consumo = getMinConsumo() + r.nextInt(getMaxConsumo());
			centroHW.consumirEnergia((float)consumo);
		}

	}

	public void run(){
		activa = true;
		try {
			
			while (activa) {
				while(getCentros()==null||getCentros().size()==0){
					logger.debug(getNombre()+":Empty");
					Thread.sleep(3000);
				}
				// primero calcula un tiempo para dormir el thread
				Integer sleep = getMilisegundosMinFrecuencia() + r.nextInt(getMilisegundosMaxFrecuencia() + 1);
				actualizarMundo();
				Thread.sleep(sleep);
				
			}			
		} catch (Exception e) {
			e.printStackTrace();
		}
		
	}

	public void agregarCentro(CentroAlmacenamientoHW c) {
		this.getCentros().add(c);
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public Integer getMilisegundosMaxFrecuencia() {
		return milisegundosMaxFrecuencia;
	}

	public void setMilisegundosMaxFrecuencia(Integer milisegundosMaxFrecuencia) {
		this.milisegundosMaxFrecuencia = milisegundosMaxFrecuencia;
	}

	public Integer getMilisegundosMinFrecuencia() {
		return milisegundosMinFrecuencia;
	}

	public void setMilisegundosMinFrecuencia(Integer milisegundosMinFrecuencia) {
		this.milisegundosMinFrecuencia = milisegundosMinFrecuencia;
	}

	public Integer getMaxConsumo() {
		return maxConsumo;
	}

	public void setMaxConsumo(Integer maxConsumo) {
		this.maxConsumo = maxConsumo;
	}

	public Integer getMinConsumo() {
		return minConsumo;
	}

	public void setMinConsumo(Integer minConsumo) {
		this.minConsumo = minConsumo;
	}

	public List<CentroAlmacenamientoHW> getCentros() {
		return centros;
	}

	public void setCentros(List<CentroAlmacenamientoHW> centros) {
		this.centros = centros;
	}

	public Integer getCantidadEventos(){
		Integer c = 0;
		for (CentroAlmacenamientoHW centro : centros) {
			c+=centro.getBuffer().size();
		}
		return c;
	}
	
	public Float getSumaConsumo(){
		Float c = 0F;
		for (CentroAlmacenamientoHW centro : centros) {
			List<EventoCentroAlmacenamiento> buffer = centro.getBuffer();
			for (EventoCentroAlmacenamiento eventoCentroAlmacenamiento : buffer) {
				if(eventoCentroAlmacenamiento.aceptadoPorCentro){
					c+=eventoCentroAlmacenamiento.energia;
				}
			}
		}
		return c;
	}
}
