package autocontrol.simulador.webservice;

import java.io.InputStream;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;

import autocontrol.simulador.exceptions.SimuladorException;
import autocontrol.simulador.model.bateria.BateriaHW;
import autocontrol.simulador.service.Simulador;

@Path("/")
public class WebServiceController {

	// @GET
	// @Produces("text/html")
	// @Path("/singup")
	// public Viewable getSignUp() {
	// return new Viewable("/public/signup", "Test");
	// }
	//
	@GET
	@Path("/verify")
	@Produces(MediaType.TEXT_PLAIN)
	public Response verifyRESTService(InputStream incomingData) {
		String result = "CrunchifyRESTService Successfully started..";

		// return HTTP response 200 in case of success
		return Response.status(200).entity(result).build();
	}

	@GET
	@Path("/altaCentro/{id}/{gps}")	
	public Response altaCentroAlmacenamiento(@PathParam("id") Long id, @PathParam("gps") String gps) throws SimuladorException {
		Simulador.getInstance().altaCentroAlmacenamiento(id, gps);
		return Response.status(200).entity("ok").build();
	}
	
	@GET
	@Path("/altaBateria/{id}/{idCentro}/{gps}/{cm}/{ca}")
	public Response altaBateria(@PathParam("id") Long id, @PathParam("idCentro") Long idCentro, @PathParam("gps") String gps, @PathParam("cm") Float capacidadMaxima, @PathParam("ca") Float capacidadActual) throws SimuladorException{
		Simulador.getInstance().altaBateria(id, idCentro, gps, capacidadMaxima, capacidadActual);
		return Response.status(200).entity("ok").build();
	}
	
	@GET
	@Path("/altaTerminal/{id}/{idBateria}/{gps}/{cg}")
	public Response altaTerminal(@PathParam("id") Long id, @PathParam("idBateria") Long idBateria, @PathParam("gps") String gps, @PathParam("cg") Float capacidadGeneradora) throws SimuladorException{
		Simulador.getInstance().altaTerminal(id, idBateria, gps, capacidadGeneradora);
		return Response.status(200).entity("ok").build();
	}
	
	@GET
	@Path("/eventosCentro/{id}/{idUltimoEventoConocido}")
	public Response eventosCentro(@PathParam("id") Long id, @PathParam("idUltimoConocido") Long idUltimoRegistroConocido) throws SimuladorException{
		Simulador.getInstance().consultarUltimosEstadosCentro(id, idUltimoRegistroConocido);
		return Response.status(200).entity("ok").build();
	}
	
	@GET
	@Path("/eventosBateria/{id}/{idUltimoEventoConocido}")
	public Response eventosBateria(@PathParam("id") Long id, @PathParam("idUltimoConocido") Long idUltimoRegistroConocido) throws SimuladorException{
		Simulador.getInstance().consultarUltimosEstadosBateria(id, idUltimoRegistroConocido);
		return Response.status(200).entity("ok").build();
	}
	
	@GET
	@Path("/eventosTerminal/{id}/{idUltimoEventoConocido}")
	public Response eventosTerminal(@PathParam("id") Long id, @PathParam("idUltimoConocido") Long idUltimoRegistroConocido) throws SimuladorException{
		Simulador.getInstance().consultarUltimosEstadosTerminal(id, idUltimoRegistroConocido);
		return Response.status(200).entity("ok").build();
	}
	
}
