package org.ljy.goods.service.impl;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Goods;
import org.ljy.goods.service.IGoodsService;
import org.springframework.stereotype.Service;

@Service("goodsService")
public class GoodsServiceImpl implements IGoodsService{

	@Override
	public void addGoods(Goods goods) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void removeGoods(Goods goods) {
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
