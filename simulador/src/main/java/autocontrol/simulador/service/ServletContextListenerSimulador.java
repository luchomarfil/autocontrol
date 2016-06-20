package autocontrol.simulador.service;

import java.util.List;
import java.util.concurrent.TimeUnit;

import javax.servlet.ServletContextEvent;
import javax.servlet.ServletContextListener;
import javax.servlet.annotation.WebListener;

import org.apache.log4j.Logger;

import autocontrol.simulador.exceptions.SimuladorException;

@WebListener
public class ServletContextListenerSimulador implements ServletContextListener {

	@Override
	public void contextDestroyed(ServletContextEvent arg0) {
//		Logger.getLogger(ServletContextListenerSimulador.class).info("Frenando inteligencia artificial");
//		Simulador.getInstance().matarInteligenciaArtificial();
//		Logger.getLogger(ServletContextListenerSimulador.class).info("Frenando inteligencia artificial...hecho");
	    Logger.getLogger(Simulador.class).info("Executor tratara de finalizar los threads."); //optional *
		Simulador.getInstance().getExecutor().shutdown();
        try {
			if (!Simulador.getInstance().getExecutor().awaitTermination(3,TimeUnit.SECONDS)) { //optional *
			    Logger.getLogger(Simulador.class).info("Executor did not terminate in the specified time."); //optional *
			    List<Runnable> droppedTasks = Simulador.getInstance().getExecutor().shutdownNow(); //optional **
			    Logger.getLogger(Simulador.class).info("Executor was abruptly shut down. " + droppedTasks.size() + " tasks will not be executed."); //optional **
			}
		} catch (InterruptedException e) {
			e.printStackTrace();
		}
	}

	@Override
	public void contextInitialized(ServletContextEvent arg0) {

		try {

			Simulador.getInstance();
			Simulador.getInstance().altaCentroAlmacenamiento(12L, "ubicacionCentro12");
			Simulador.getInstance().altaBateria(13L, 12L, "ubicacionBateria13", 8000F, 0F);
			Simulador.getInstance().altaBateria(14L, 12L, "ubicacionBateria14", 8000F, 0F);
			Simulador.getInstance().altaTerminal(14L, 13L, "ubicacionTerminal14", 0.180F);
			Simulador.getInstance().altaTerminal(15L, 13L, "ubicacionTerminal15", 0.180F);
			Simulador.getInstance().altaTerminal(16L, 13L, "ubicacionTerminal16", 0.180F);
			Simulador.getInstance().altaTerminal(17L, 13L, "ubicacionTerminal17", 0.080F);
			Simulador.getInstance().altaTerminal(18L, 14L, "ubicacionTerminal18", 0.080F);
			Simulador.getInstance().altaTerminal(19L, 14L, "ubicacionTerminal19", 0.280F);
			
			
		} catch (SimuladorException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	}

}
