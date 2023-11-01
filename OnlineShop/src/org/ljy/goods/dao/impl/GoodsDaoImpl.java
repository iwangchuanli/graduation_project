package org.ljy.goods.dao.impl;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Goods;
import org.ljy.goods.dao.IGoodsDao;
import org.springframework.stereotype.Repository;

@Repository("goodsDao")
public class GoodsDaoImpl implements IGoodsDao {

	@Override
	public void addGoods(Goods goods) {
		// TODO Auto-generated method stub

	}

	@Override
	public void deleteGoods(Goods goods) {
		// TODO Auto-generated method stub

	}

	@Override
	public void updateGoods(Goods goods) {
		// TODO Auto-generated method stub

	}

	@Override
	public List<Goods> queryGoodsByGoodsName(HashMap<String, Object> shopIDAndGoodsName) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public Goods queryGoodsByGoodsID(HashMap<String, Object> shopIDAndGoodsID) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<Goods> listAllGoods(String shopID) {
		// TODO Auto-generated method stub
		return null;
	}

}
