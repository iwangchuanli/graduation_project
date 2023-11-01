package org.ljy.shoppingcart.service.impl;

import java.util.HashMap;
import java.util.List;

import org.ljy.domain.Goods;
import org.ljy.shoppingcart.service.IShoppingCartService;
import org.springframework.stereotype.Service;

@Service("shoppingService")
public class ShoppingCartServiceImpl implements IShoppingCartService {

	@Override
	public void addToShoppingCart(HashMap<String, Object> cartIDGoodsIDAndGoodsNum) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void removeGoods(HashMap<String, Object> cartIDAndGoodsID) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void removeAll(String cartID) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public List<Goods> listAll(String cartID) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public double balance(String cartID) {
		// TODO Auto-generated method stub
		return 0;
	}

}
