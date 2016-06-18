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
	public List<CentroAlmacenamientoHW> centros;

	public Integer milisegundosMaxFrecuencia;
	public Integer milisegundosMinFrecuencia;

	public Float maxConsumo;
	public Float minConsumo;

	public Boolean activa; // esta actica la IA?

	private Random r; // para randomizar internamente


	private String nombre;

	public CentroAlmacenamientoIA(String nombreIA) {
		r = new Random();
		activa = true;
		centros = new ArrayList<CentroAlmacenamientoHW>();
		nombre = nombreIA;
	}

	public void actualizarMundo() {

		// envia un evento a cada centro de almacenamiento generando aleatoriamente entre los
		// parametros los valores para el evento
		for (CentroAlmacenamientoHW centroHW : centros) {
			Float consumo = minConsumo + new Float(r.nextInt((int)(maxConsumo*1000)))/1000;
			centroHW.consumirEnergia(consumo);
		}

	}

	public synchronized void run(){
		activa = true;
		try {
			
			while (activa) {
				while(centros==null||centros.size()==0){
					logger.debug(nombre+":Empty");
					Thread.sleep(3000);
				}
				// primero calcula un tiempo para dormir el thread
				Integer sleep = milisegundosMinFrecuencia + r.nextInt(milisegundosMaxFrecuencia + 1);
				actualizarMundo();
				Thread.sleep(sleep);
				
			}			
		} catch (Exception e) {
			e.printStackTrace();
		}
		
	}

	public void agregarCentro(CentroAlmacenamientoHW c) {
		this.centros.add(c);
	}

}
