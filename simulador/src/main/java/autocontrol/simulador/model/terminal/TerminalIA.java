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
	private List<TerminalHW> terminales;
	private Integer milisegundosMaxFrecuencia;
	private Integer milisegundosMinFrecuencia;
	private Float maxGenerada;
	private Float minGenerada;
	private Boolean activa;
	private Random r = new Random();
	private String nombre;
	
	public TerminalIA(String nombreIA) {
		setActiva(true);
		setTerminales(new ArrayList<TerminalHW>());
		setNombre(nombreIA);
	}
	
	public void actualizarMundo(){
		
		//envia un evento a cada terminal generando aleatoriamente entre los parametros los valores para 
		//el evento
		for (TerminalHW terminalHW : getTerminales()) {
			//la terminal tiene su limite inferior en 0 y tiene su limite superior, vemos cual tiene mas importancia, si la de IA o la de terminal
			Float min = getMinGenerada()<terminalHW.getCapacidadGeneradora()? getMinGenerada():terminalHW.getCapacidadGeneradora();
			Float max = getMaxGenerada()>terminalHW.getCapacidadGeneradora()? terminalHW.getCapacidadGeneradora():getMaxGenerada();
			Float tot = new Float(r.nextInt((int)(max*1000)))/1000;
			Float generada = min + tot ;
			terminalHW.generarEnergia(generada);
		}

	}
	
	public void run() {

		setActiva(true);
		try {

			while (getActiva()) {
				while (getTerminales() == null || getTerminales().size() == 0) {
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

	public List<TerminalHW> getTerminales() {
		return terminales;
	}

	public void setTerminales(List<TerminalHW> terminales) {
		this.terminales = terminales;
	}

	
	public Integer getCantidadEventos(){
		Integer c = 0;
		for (TerminalHW terminal : getTerminales()) {
			c+=terminal.getBuffer().size();
		}
		return c;
	}
	
	public Float getSumaEnergiaGenerada(){
		Float c = 0F;
		for (TerminalHW t : getTerminales()) {
			List<EventoTerminal> buffer = t.getBuffer();
			for (EventoTerminal e : buffer) {
				if(e.aceptadoPorBateria){
					c+=e.generado;
				}
			}
		}
		return c;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public Float getMaxGenerada() {
		return maxGenerada;
	}

	public void setMaxGenerada(Float maxGenerada) {
		this.maxGenerada = maxGenerada;
	}

	public Float getMinGenerada() {
		return minGenerada;
	}

	public void setMinGenerada(Float minGenerada) {
		this.minGenerada = minGenerada;
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

	public Boolean getActiva() {
		return activa;
	}

	public void setActiva(Boolean activa) {
		this.activa = activa;
	}
}
