package wuliu;

public class LoginBean {
 private String username;
 private boolean  login;
 public void setUsername(String username)
 {this.username=username;}
 public String getUsername()
 {
   return this.username;

 }
 public void setLogin(boolean login)
 {
   this.login=login;
 }
 public boolean getLogin()
 {return login;}
public void clear()
 {
 login=false;
username=null;
 }
}