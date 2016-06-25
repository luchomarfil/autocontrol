package autocontrol.simulador.webservice;

import java.io.InputStream;
import java.util.List;

import javax.ws.rs.DefaultValue;
import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;

import autocontrol.simulador.exceptions.SimuladorException;
import autocontrol.simulador.model.bateria.EventoBateria;
import autocontrol.simulador.model.centro.EventoCentroAlmacenamiento;
import autocontrol.simulador.model.terminal.EventoTerminal;
import autocontrol.simulador.service.Simulador;

@Path("/")
public class WebServiceController {

	@GET
	@Path("/verify")
	@Produces(MediaType.TEXT_PLAIN)
	public Response verificarRestService(InputStream incomingData) {
		try {
			String result = "Servicio funcionando!";
			// return HTTP response 200 in case of success
			return Response.status(200).entity(result).build();
		} catch (Exception e) {
			return Response.status(500).entity(e.getMessage()).build();
		}
	}

	@GET
	@Path("/altaCentro/{id}/{gps}")	
	public Response altaCentroAlmacenamiento(@PathParam("id") Long id, @PathParam("gps") String gps) throws SimuladorException {
		try {
			Simulador.getInstance().altaCentroAlmacenamiento(id, gps);
			return Response.status(200).entity("ok").build();			
		} catch (Exception e) {
			return Response.status(500).entity(e.getMessage()).build();
		}
	}
	
	@GET
	@Path("/altaBateria/{id}/{idCentro}/{gps}/{cm}/{ca}")
	public Response altaBateria(@PathParam("id") Long id, @PathParam("idCentro") Long idCentro, @PathParam("gps") String gps, @PathParam("cm") Float capacidadMaxima, @PathParam("ca") Float capacidadActual) throws SimuladorException{
		try{
		Simulador.getInstance().altaBateria(id, idCentro, gps, capacidadMaxima, capacidadActual);
		return Response.status(200).entity("ok").build();
		} catch (Exception e) {
			return Response.status(500).entity(e.getMessage()).build();
		}
	}
	
	@GET
	@Path("/altaTerminal/{id}/{idBateria}/{gps}/{cg}")
	public Response altaTerminal(@PathParam("id") Long id, @PathParam("idBateria") Long idBateria, @PathParam("gps") String gps, @PathParam("cg") Float capacidadGeneradora) throws SimuladorException{
		try {
			Simulador.getInstance().altaTerminal(id, idBateria, gps, capacidadGeneradora);
			return Response.status(200).entity("ok").build();
		} catch (Exception e) {
			return Response.status(500).entity(e.getMessage()).build();
		}
	}
	
	@GET
	@Path("/eventosCentro/{id}/{idUltimoEventoConocido}")	
	@Produces(MediaType.APPLICATION_JSON)
	public List<EventoCentroAlmacenamiento> eventosCentro(@PathParam("id") Long id, @PathParam("idUltimoEventoConocido") Long idUltimoRegistroConocido) throws SimuladorException{
		try {
			List<EventoCentroAlmacenamiento> consultarUltimosEstadosCentro = Simulador.getInstance().consultarUltimosEstadosCentro(id, idUltimoRegistroConocido);
			return consultarUltimosEstadosCentro;
			//eturn Response.status(200).entity("ok").build();
		} catch (Exception e) {
			Response.status(500).entity(e.getMessage()).build();
			return null;
		}
	}
	
	@GET
	@Path("/eventosCentro/{id}")	
	@Produces(MediaType.APPLICATION_JSON)
	public List<EventoCentroAlmacenamiento> eventosCentro(@PathParam("id") Long id) throws SimuladorException{
		return eventosCentro(id, null);
	}
	
	@GET
	@Path("/eventosBateria/{id}/{idUltimoEventoConocido}")
	@Produces(MediaType.APPLICATION_JSON)
	public List<EventoBateria> eventosBateria(@PathParam("id") Long id, @PathParam("idUltimoEventoConocido") Long idUltimoRegistroConocido) throws SimuladorException{
		try {
			return Simulador.getInstance().consultarUltimosEstadosBateria(id, idUltimoRegistroConocido);
//			return Response.status(200).entity("ok").build();
		} catch (Exception e) {
			Response.status(500).entity(e.getMessage()).build();
			return null;
		}
	}
	
	@GET
	@Path("/eventosBateria/{id}")
	@Produces(MediaType.APPLICATION_JSON)
	public List<EventoBateria> eventosBateria(@PathParam("id") Long id) throws SimuladorException{
		return eventosBateria(id, null);
	}
	
	@GET
	@Path("/eventosTerminal/{id}/{idUltimoEventoConocido}")
	@Produces(MediaType.APPLICATION_JSON)
	public List<EventoTerminal> eventosTerminal(@PathParam("id") Long id, @PathParam("idUltimoEventoConocido") Long idUltimoRegistroConocido) throws SimuladorException{
		try {
			return Simulador.getInstance().consultarUltimosEstadosTerminal(id, idUltimoRegistroConocido);
//			return Response.status(200).entity("ok").build();
		} catch (Exception e) {
			Response.status(500).entity(e.getMessage()).build();
			return null;
		}
	}
	
	@GET
	@Path("/eventosTerminal/{id}")
	@Produces(MediaType.APPLICATION_JSON)
	public List<EventoTerminal> eventosTerminal(@PathParam("id") Long id) throws SimuladorException{
		return eventosTerminal(id, null);
	}
	
}
