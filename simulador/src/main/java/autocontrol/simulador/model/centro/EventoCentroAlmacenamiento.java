package autocontrol.simulador.model.centro;

import java.util.Date;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class EventoCentroAlmacenamiento {

	public Date fecha;
	public Long id;
	public Float energia; //representa el movimiento de consumo energetico en miliamperes
	public Float capacidadActual; //representa la cantidad de energia que posee la central, sumarizando la de todas las baterias
	public Boolean aceptadoPorCentro; //determina si el evento se pudo cumplir o si faltaba energia para cumplirlo
	
	public EventoCentroAlmacenamiento() {

	}

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + ((id == null) ? 0 : id.hashCode());
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		EventoCentroAlmacenamiento other = (EventoCentroAlmacenamiento) obj;
		if (id == null) {
			if (other.id != null)
				return false;
		} else if (!id.equals(other.id))
			return false;
		return true;
	}


	
}
