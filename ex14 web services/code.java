import java.sql.SQLException;
public class NewMain {
    public static void main(String[] args) {
        // TODO code application logic here
        System.out.println(operation("john","john12@gmail.com"));
    }
    private static String operation(java.lang.String username, java.lang.String email){
        try{
        webpgm.NewWebService service = new webpgm.NewWebService();
        webpgm.NewWebService port = service;
        return port.operation(username,email);
        }
        catch(Exception e)
        {
            return "exception";
        }
    }
}