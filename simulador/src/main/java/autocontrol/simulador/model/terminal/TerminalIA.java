package autocontrol.simulador.model.terminal;

import java.util.ArrayList;
import java.util.List;
import java.util.Random;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

public class TerminalIA implements Runnable{
	private static Logger logger = LoggerFactory.getLogger(TerminalIA.class);
	
	//lista de terminales manipuladas por la misma IA, que tiene determinados parametros
	//todas las terminales sufriran un evento parecido en cada loop
	public List<TerminalHW> terminales;
	public Integer milisegundosMaxFrecuencia;
	public Integer milisegundosMinFrecuencia;
	public Float maxGenerada;
	public Float minGenerada;
	public Boolean activa;
	private Random r = new Random();
	private String nombre;
	
	public TerminalIA(String nombreIA) {
		activa = true;
		terminales = new ArrayList<TerminalHW>();
		nombre = nombreIA;
	}
	
	public void actualizarMundo(){
		
		//envia un evento a cada terminal generando aleatoriamente entre los parametros los valores para 
		//el evento
		for (TerminalHW terminalHW : terminales) {
			//la terminal tiene su limite inferior en 0 y tiene su limite superior, vemos cual tiene mas importancia, si la de IA o la de terminal
			Float min = minGenerada<terminalHW.getCapacidadGeneradora()? minGenerada:terminalHW.getCapacidadGeneradora();
			Float max = maxGenerada>terminalHW.getCapacidadGeneradora()? terminalHW.getCapacidadGeneradora():maxGenerada;
			Float tot = new Float(r.nextInt((int)(max*1000)))/1000;
			Float generada = min + tot ;
			terminalHW.generarEnergia(generada);
		}

	}
	
	public synchronized void run() {

		activa = true;
		try {

			while (activa) {
				while (terminales == null || terminales.size() == 0) {
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

}
