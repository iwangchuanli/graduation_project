package org.ljy.search.service;

import java.util.List;

import org.ljy.domain.Goods;
import org.ljy.domain.Shop;
import org.ljy.domain.User;

public interface ISearchService {
	/**
	 * 按商品名搜索商品
	 * @param goodsName
	 * @return List<Goods>
	 */
	public List<Goods> searchGoodsByGoodsName(String goodsName);
	
	/**
	 * 按商店名搜索商店
	 * @param shopName
	 * @return List<Shop>
	 */
	public List<Shop> searchShopByShopName(String shopName);
	
	/**
	 * 根据用户名搜索用户
	 * @param userName
	 * @return List<User>
	 */
	public List<User> searchUserByUserName(String userName);
}
