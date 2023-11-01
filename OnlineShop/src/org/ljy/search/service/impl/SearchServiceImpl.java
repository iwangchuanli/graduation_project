package org.ljy.search.service.impl;

import java.util.List;

import org.ljy.domain.Goods;
import org.ljy.domain.Shop;
import org.ljy.domain.User;
import org.ljy.search.service.ISearchService;
import org.springframework.stereotype.Service;

@Service("searchService")
public class SearchServiceImpl implements ISearchService{

	@Override
	public List<Goods> searchGoodsByGoodsName(String goodsName) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<Shop> searchShopByShopName(String shopName) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<User> searchUserByUserName(String userName) {
		// TODO Auto-generated method stub
		return null;
	}

}
