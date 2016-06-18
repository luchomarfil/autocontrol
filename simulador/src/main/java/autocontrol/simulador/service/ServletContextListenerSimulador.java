package autocontrol.simulador.service;

import javax.servlet.ServletContextEvent;
import javax.servlet.ServletContextListener;
import javax.servlet.annotation.WebListener;

import autocontrol.simulador.exceptions.SimuladorException;

@WebListener
public class ServletContextListenerSimulador implements ServletContextListener {

	@Override
	public void contextDestroyed(ServletContextEvent arg0) {
		// TODO Auto-generated method stub

	}

	@Override
	public void contextInitialized(ServletContextEvent arg0) {

		try {

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
			
			
		} catch (SimuladorException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	}

}
