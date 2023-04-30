import javax.jws.WebParam;
import javax.jws.WebService;
@WebService(serviceName = "NewWebService")
public class NewWebService {

 @WebMethod(operationName = "hello")
    public String hello(@WebParam(name = "name") String txt) {
        return "Hello " + txt + " !";
    }

   @WebMethod(operationName = "operation")
    public String operation(@WebParam(name = "username") String username, @WebParam(name = "email") String email) throws SQLException {
      boolean flag=false;
      try{
       
      Connection c=DriverManager.getConnection("jdbc:derby://localhost:1527/form");
      Statement st=c.createStatement();
      ResultSet rs=st.executeQuery("select * from FORM");
      while(rs.next())
      {
          String name=rs.getString("username");
          String mail=rs.getString("email");
     
      if(username.equals(name)&&email.equals(mail))
      {
        flag=true;
        break;
      }
      }
      c.close();
      if(flag)
          return "valid user";
      else
          return "invalid user";
      }
    catch(Exception e)
    {
        return "exception";
    }
    }
 }
