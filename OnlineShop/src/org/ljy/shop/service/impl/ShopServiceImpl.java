package org.ljy.shop.service.impl;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Shop;
import org.ljy.shop.service.IShopService;
import org.springframework.stereotype.Service;

@Service("shopService")
public class ShopServiceImpl implements IShopService {

	@Override
	public void openShop(HashMap<String, Object> userAndShop) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void closeShop(Shop shop) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void updateShop(Shop shop) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public List<Shop> queryShopByShopName(String shopName) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public Shop queryShopByShopID(String shopID) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<Shop> listAllShops() {
		// TODO Auto-generated method stub
		return null;
	}

}
