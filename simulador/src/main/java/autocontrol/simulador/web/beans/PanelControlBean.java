package autocontrol.simulador.web.beans;

import java.io.Serializable;
import java.text.SimpleDateFormat;
import java.util.List;

import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.context.FacesContext;

import org.primefaces.event.SlideEndEvent;

import autocontrol.simulador.model.bateria.BateriaHW;
import autocontrol.simulador.model.centro.CentroAlmacenamientoHW;
import autocontrol.simulador.model.centro.CentroAlmacenamientoIA;
import autocontrol.simulador.model.terminal.TerminalHW;
import autocontrol.simulador.model.terminal.TerminalIA;
import autocontrol.simulador.service.Simulador;
 
@ManagedBean
//@RequestScoped
@SessionScoped
public class PanelControlBean implements Serializable {
 
    private static final long serialVersionUID = 1L;
 
    private String name;
    private CentroAlmacenamientoHW selectedCentro;
    
 
    public String hello() {
 
        System.out.println("Calling hellworld.xhtml");
 
        return "success";
 
    }
    
    public List<CentroAlmacenamientoHW> getCentros(){
    	return Simulador.getInstance().getCentros();
    }
    public List<BateriaHW> getBaterias(){
    	return Simulador.getInstance().getBaterias();
    }
    public List<TerminalHW> getTerminales(){
    	return Simulador.getInstance().getTerminales();
    }
    public List<CentroAlmacenamientoIA> getCentrosIA(){
    	return Simulador.getInstance().getCentrosIA();
    }
    public List<TerminalIA> getTerminalesIA(){
    	return Simulador.getInstance().getTerminalesIA();
    }
 
    public String getCurrentTime() {
 
        return new SimpleDateFormat("dd MMM yyyy:HH:mm:SS").format(new java.util.Date().getTime()); // Older version, SimpleDateFormat is not thread safe
        //return LocalDateTime.now().format(DateTimeFormatter.ofPattern("dd MMM-yyyy HH:mm:ss"));  // Requires Java 8
    }
    public String getName() {
        return name;
    }
    public void setName(String name) {
        this.name = name;
    }

	public CentroAlmacenamientoHW getSelectedCentro() {
		return selectedCentro;
	}

	public void setSelectedCentro(CentroAlmacenamientoHW selectedCentro) {
		this.selectedCentro = selectedCentro;
	}
	
    public void onSlideEnd(SlideEndEvent event) {
        FacesMessage message = new FacesMessage("Slide Ended", "Value: " + event.getValue());
        FacesContext.getCurrentInstance().addMessage(null, message);
    } 
}