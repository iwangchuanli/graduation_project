package org.efood.service;

import java.util.List;

import org.efood.vo.Menu;

public interface MenuService {
	public List<Menu> getRandomMenuList();
	public List<Menu> getMenuByCatalog(Integer catalogid,int currentPage,int pageSize);
	public int getTotalByCatalog(Integer catalogid);
	public Menu getMenuById(Integer menuid);
	public List<Menu> getAllMenu(int currentPage,int pageSize);
	public int getTotalMenu();
	public void deleteMenu(Integer menuid);
	public void updateMenu(Menu menu);
	public void saveMenu(Menu menu);
	public List<Menu> getMenuByName(String menuname);
	public List<Menu> getMenuByPrice(double mixprice,double maxprice);
}
