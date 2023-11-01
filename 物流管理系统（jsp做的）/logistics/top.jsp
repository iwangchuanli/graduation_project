<%@ page contentType="text/html; charset=gb2312"language="java" %>
<%@ page import="java.util.*"%>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="/logistics/CSS/style.css">
<table width="786"  border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="117" colspan="9" background="image/head.gif">&nbsp;</td>
  </tr>
  <tr>
    <td width="215" height="31" background="image/date.JPG" align="center">
	<%
	Date date=new Date();
	String str="今天是"+(date.getYear()+1900)+"年"+(date.getMonth()+1)+"月"+date.getDate()+"日";
	int xx=date.getDay();
	String xq=null;
	switch(xx)
	{
	case 0:
	xq="星期日";
	break;
	case 1:
	xq="星期一";
	break;
	case 2:
	xq="星期二";
	break;
	case 3:
	xq="星期三";
	break;
	case 4:
	xq="星期四";
	break;
	case 5:
	xq="星期五";
	break;
	case 6:
	xq="星期六";
	break;
	}
	%>
	<font color="#FFFFFF"><%=str%>&nbsp;&nbsp;<%=xq%></font>
	</td>
    <td width="71" height="31" align="center" background="image/banner.JPG"><a href="/logistics/index.jsp"><font color="#FFFFFF" >本站首页</font></a></td>
    <td width="71" align="center" background="image/banner.JPG"> <a href="/logistics/Active/active.jsp"><font color="#FFFFFF" >物流动态</font></a></td>
    <td width="71" align="center" background="image/banner.JPG"><a href="/logistics/Knowledge/knowledge.jsp"><font color="#FFFFFF" >物流知识</font></a></td>
    <td width="71" align="center" background="image/banner.JPG"><a href="/logistics/Goods/Goods_show.jsp"><font color="#FFFFFF" >货物信息</font></a></td>
    <td width="71" align="center" background="image/banner.JPG"><a href="/logistics/Cars/CarMessage.jsp"><font color="#FFFFFF" >车辆信息</font></a></td>
    <td width="71" align="center" background="image/banner.JPG"><a href="/logistics/Enterprise/enterprise.jsp"><font color="#FFFFFF" >企业信息</font></a></td>
    <td width="71" align="center" background="image/banner.JPG"><a href="/logistics/Assistant/Assistant.jsp"><font color="#FFFFFF" >辅助工具</font></a></td>
    <td width="74" background="image/banner.JPG">&nbsp;&nbsp;<a href="/logistics/logout.jsp"><font color="#FFFFFF" >退出</font></a></td>
  </tr>
</table>
