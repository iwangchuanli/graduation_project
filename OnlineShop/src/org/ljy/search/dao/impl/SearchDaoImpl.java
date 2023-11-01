package org.ljy.search.dao.impl;

import java.util.List;

import org.ljy.domain.Goods;
import org.ljy.domain.Shop;
import org.ljy.domain.User;
import org.ljy.search.dao.ISearchDao;
import org.springframework.stereotype.Repository;

@Repository("searchDao")
public class SearchDaoImpl implements ISearchDao {

	@Override
	public List<Goods> queryGoodsByGoodsName(String goodsName) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<Shop> queryShopByShopName(String shopName) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<User> queryUserByUserName(String userName) {
		// TODO Auto-generated method stub
		return null;
	}

}
