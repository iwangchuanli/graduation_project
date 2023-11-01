package org.ljy.shop.dao;

import java.util.List;

import org.ljy.domain.Shop;

public interface IShopDao {
	
	/**
	 * 创建新的商店
	 * @param shop
	 */
	public void addShop(Shop shop);
	
	/**
	 * 删除一个商店
	 * @param shop
	 */
	public void deleteShop(Shop shop);
	
	/**
	 * 修改商店信息
	 * @param shop
	 */
	public void updateShop(Shop shop);
	
	/**
	 * 按商店名查找商店
	 * @param shopName
	 * @return List<Shop>
	 */
	public List<Shop> queryShopByShopName(String shopName);
	
	/**
	 * 按商店ID查找商店
	 * @param shopID
	 * @return Shop
	 */
	public Shop queryShopByShopID(String shopID);
	
	/**
	 * 列出所有商店
	 * @return
	 */
	public List<Shop> listAllShops();
	
}
