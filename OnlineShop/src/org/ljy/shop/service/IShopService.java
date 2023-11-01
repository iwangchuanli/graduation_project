package org.ljy.shop.service;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Shop;

public interface IShopService {
	/**
	 * 开店
	 * 
	 * @param userAndShop
	 */
	public void openShop(HashMap<String, Object> userAndShop);

	/**
	 * 删除一个商店
	 * @param shop
	 */
	public void closeShop(Shop shop);
	
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
