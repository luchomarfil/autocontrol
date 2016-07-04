package autocontrol.simulador.webservice;

import java.text.SimpleDateFormat;
import java.util.Date;

import javax.xml.bind.annotation.adapters.XmlAdapter;

public class CustomDateXmlAdapter  extends XmlAdapter<String, Date> {

    private SimpleDateFormat format = new SimpleDateFormat("Y-MM-dd HH:mm:ss");

    @Override
    public Date unmarshal(String v) throws Exception {
        System.out.println(format.parse(v));
        return format.parse(v);
    }

    @Override
    public String marshal(Date v) throws Exception {
        return format.format(v);
    }

}