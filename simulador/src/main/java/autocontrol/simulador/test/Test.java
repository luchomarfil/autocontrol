package autocontrol.simulador.test;

import java.util.Date;

import autocontrol.simulador.exceptions.SimuladorException;
import autocontrol.simulador.service.Simulador;

public class Test {

	public Test() {
		// TODO Auto-generated constructor stub
	}
	
	public static void main(String[] args) {		
		try {
			Date fecha = new Date();
			Simulador.getInstance();
			Simulador.getInstance().altaCentroAlmacenamiento(12L, "ubicacionCentro12");
			Simulador.getInstance().altaBateria(13L, 12L, "ubicacionBateria13", 8000F, 0F);
			Simulador.getInstance().altaBateria(14L, 12L, "ubicacionBateria14", 8000F, 0F);
			Simulador.getInstance().altaTerminal(14L, 13L, "ubicacionTerminal14", 0.180F);
			Simulador.getInstance().altaTerminal(14L, 13L, "ubicacionTerminal15", 0.180F);
			Simulador.getInstance().altaTerminal(14L, 13L, "ubicacionTerminal16", 0.180F);
			Simulador.getInstance().altaTerminal(15L, 13L, "ubicacionTerminal17", 0.080F);
			Simulador.getInstance().altaTerminal(16L, 14L, "ubicacionTerminal18", 0.080F);
			Simulador.getInstance().altaTerminal(17L, 14L, "ubicacionTerminal19", 0.280F);
			while(true){
				Thread.sleep(10000);
				Simulador.getInstance().consultarUltimosEstadosBateria(13L,fecha);
				fecha = new Date();
			}
		} catch (SimuladorException | InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	
	}
}
