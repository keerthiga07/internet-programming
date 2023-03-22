

<%@page import="java.sql.*"%>
<%@page import="java.sql.Connection"%>
<%@page import="java.sql.DriverManager"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%  
         Connection c=DriverManager.getConnection("jdbc:derby://localhost:1527/employes");
        Statement st=c.createStatement();
  
         ResultSet rs3=st.executeQuery("select*from Employee");
         out.println("<table border=2>");
        out.println("<th>empid</th>");
        out.println("<th>firstname</th>");
        out.println("<th>lastname</th>");
        out.println("<th>salary</th>");
        while(rs3.next())
        {
           out.println("<tr><td>"+rs3.getInt(1)+"</td>");
           out.println("<td>"+rs3.getString(2)+"</td>");
           out.println("<td>"+rs3.getString(3)+"</td>");
           out.println("<td>"+rs3.getDouble(4)+"</td></tr>");
        }
        out.println("</table>");
        
          
        ResultSet rs=st.executeQuery("select count(employeeid) as count from Employee");
        out.println("<h1> number of employee</h1>");
        out.println("<table border='2' style='margin-left:100px;padding:2px;text-align:center;'><tr><th> count </th></tr>");
        while(rs.next())
        {
            int n=rs.getInt(1);
            out.println("<tr><td>"+n+"</td></tr>");
            
        }
         out.println("</table>");
         ResultSet rs1=st.executeQuery("select avg(salary)as average from Employee");
         out.println("<h1> Average of salary</h1>");
         out.println("<table border='2' style='margin-left:100px;padding:2px;text-align:center;'><tr><th> Average</th></tr>");
         while(rs1.next())
         {
             int n=rs1.getInt(1);
             out.println("<tr><td>"+n+"</td></tr>");
         }
           out.println("</table>");
              ResultSet rs2=st.executeQuery("select max(salary)as average from Employee");
              out.println("<h1> Maximum  salary</h1>");
                out.println("<table border='2' style='margin-left:100px;padding:2px;text-align:center;'><tr><th>Maximum</th></tr>");
              while(rs2.next())
         {
             int n=rs2.getInt(1);
             out.println("<tr><td>"+n+"</td></tr>");
         }
           out.println("</table>");
           
         
    
         
              %>
    </body>
</html>
