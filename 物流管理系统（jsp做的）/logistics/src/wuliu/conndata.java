package wuliu;
import java.sql.*;
public class conndata {
Connection conn=null;
ResultSet rs=null;
  Statement st=null;
  boolean n=false;

  public conndata() {
    try
    {
     Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
    }catch(Exception e)
    {e.printStackTrace();}
  }
  public ResultSet executeQuery(String sql)
  {
    try
    {
      conn=DriverManager.getConnection("jdbc:odbc:dbsource","sa","");
     st=conn.createStatement(ResultSet.TYPE_SCROLL_SENSITIVE,ResultSet.CONCUR_READ_ONLY);
     rs=st.executeQuery(sql);
    }catch(SQLException e)
    {
      e.printStackTrace();
      System.out.println("Query Exception");
    }
return rs;
  }
  public boolean executeUpdata(String sql)
  {
  try
  {
    conn=DriverManager.getConnection("jdbc:odbc:dbsource","sa","");
  st=conn.createStatement();
  int m=st.executeUpdate(sql);
  n=true;
  }catch(Exception e)
  {
    n=false;
    e.printStackTrace();
    System.out.print("Updata Exception");
  }
  return n;
  }
  public  boolean executeInsert(String sql)
  {
    try
    {
      conn=DriverManager.getConnection("jdbc:odbc:dbsource","sa","");
    st=conn.createStatement();
    st.executeUpdate(sql);
    n=true;
   }catch(Exception ex)
    {
      n=false;
     ex.printStackTrace();
     System.out.println("Insert Exception");
    }
return n;

  }
  public boolean executeDelete(String sql)
  {
  try
  {
    conn=DriverManager.getConnection("jdbc:odbc:dbsource","sa","");
  st=conn.createStatement();
  st.executeUpdate(sql);
   n=true;
  }
  catch(Exception e)
  {
    n=false;
    e.printStackTrace();
    System.out.println("Delete exception");
  }
  return n;
  }
  public void closeConn()
  {
  try
  {
  conn.close();
  }catch(Exception e)
  {e.printStackTrace();}
  }
  public void closeStatement()
  {
  try
  {
  st.close();
  }catch(Exception e)
  {e.printStackTrace();}

  }
}
