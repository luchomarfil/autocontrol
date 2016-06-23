package autocontrol.simulador.model.bateria;

import java.util.Date;

public class EventoBateria {

	public Date fecha;
	public Long id;
	public Float energia;         //en miliamperes, energia de la carga/descarga
	public Float capacidadActual; //en miliamperes, energia de la bateria posterior a la carga
	public Boolean esDescarga;    //si fue una carga, o una descarga
	public Float temperatura; //en °C
	
	public EventoBateria() {
	}

	@Override
	public String toString() {
		String str = energia+","+capacidadActual;
		if(esDescarga){
			return "D,"+str;
		}
		else{
			return "C,"+str;
		}
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
		EventoBateria other = (EventoBateria) obj;
		if (id == null) {
			if (other.id != null)
				return false;
		} else if (!id.equals(other.id))
			return false;
		return true;
	}

	
	
}
