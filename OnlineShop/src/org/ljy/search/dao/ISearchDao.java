package org.ljy.search.dao;

import java.util.List;

import org.ljy.domain.Goods;
import org.ljy.domain.Shop;
import org.ljy.domain.User;

public interface ISearchDao {
	
	/**
	 * 按商品名查询商品
	 * @param goodsName
	 * @return List<Goods>
	 */
	public List<Goods> queryGoodsByGoodsName(String goodsName);
	
	/**
	 * 按商店名查询商店
	 * @param shopName
	 * @return List<Shop>
	 */
	public List<Shop> queryShopByShopName(String shopName);
	
	/**
	 * 根据用户名查询用户
	 * @param userName
	 * @return List<User>
	 */
	public List<User> queryUserByUserName(String userName);
}
