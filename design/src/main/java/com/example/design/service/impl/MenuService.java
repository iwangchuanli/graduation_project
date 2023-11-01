package com.example.design.service.impl;

import com.example.design.component.model.Page;
import com.example.design.mapper.CookingMenuMapper;
import com.example.design.mapper.MenuLikeMapper;
import com.example.design.mapper.MenuMapper;
import com.example.design.model.Cooking;
import com.example.design.model.Menu;
import com.example.design.model.MenuCooking;
import com.example.design.model.MenuLike;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

/**
 * 菜单的服务接口
 *
 * @author lxh
 * @version 0.1
 */
@Service
@Transactional
public class MenuService {
  @Autowired
  private MenuMapper menuMapper;
  @Autowired
  private MenuLikeMapper menuLikeMapper;
  @Autowired
  private CookingMenuMapper cookingMenuMapper;

  /**
   * add a menu.
   */
  public int addMenu(Menu menu) {
    return menuMapper.add(menu);
  }

  /**
   *
   */
  public List<Menu> findByPage(Page page) {
    return menuMapper.findByPage(page);
  }

  /**
   * select findAll information by menuId
   *
   * @return Menu
   */
  public Menu findById(long menuId) {
    return menuMapper.findById(menuId);
  }

  public List<Menu> top6() {
    return menuMapper.top6();
  }

  /**
   * update menu's information except authorID,menuId,menuLike menuDate,state
   */
  public int updateMenu(Menu menu) {
    return menuMapper.updateMenu(menu);
  }

  /**
   * mark user's one menu as deleted
   */
  public int markMenuDelete(long menuId) {
    return menuMapper.markDeleted(menuId);
  }

  /**
   * select one user's findAll menu by user's Id
   */
  public List<Menu> findAllMenuByUserId(long userId) {
    return menuMapper.findByUserId(userId);
  }

  /**
   * select findAll menu
   */
  public List<Menu> all() {
    return menuMapper.all();
  }

  /**
   * if one user click Like,his(her) behavior will be recorded,and set state as 1
   */
  public int addMenuLikeUser(MenuLike menuLike) {
    return menuLikeMapper.addMenuLikeUser(menuLike);
  }

  /**
   * delete menuLike's record
   */
  public int deleteMenuLike(long userId, long menuId) {
    return menuLikeMapper.deleteMenuLike(userId, menuId);
  }

  /**
   * add one recipe to a menu
   */
  public int addCookingToMenu(MenuCooking menuCooking) {
    return cookingMenuMapper.addCookingToMenu(menuCooking);
  }

  /**
   * delete one recipe from a menu
   */
  public int deleteCookingFromMenu(MenuCooking menuCooking) {
    return cookingMenuMapper.deleteCookingFromMenu(menuCooking);
  }

  /**
   * select one menu's findAll recipe
   */
  public List<Cooking> findAllCookingOfMenu(long menuId) {
    return cookingMenuMapper.findAllCookingOfMenu(menuId);
  }

  public int likeNumIncr(long menuId) {
    return menuMapper.incrLikeNum(menuId);
  }

  public int likeNumDecr(long menuId) {
    return menuMapper.decrLikeNum(menuId);
  }
}
