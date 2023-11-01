package cn.jxc.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.StockPileMapper;
import cn.jxc.pojo.StockPile;
import cn.jxc.service.StockPileService;

/**
 * 库存信息业务逻辑
 * 
 * @author lxq 5.24
 *
 */
@Service
public class StockPileServiceImpl implements StockPileService {

	@Autowired
	private StockPileMapper stockPileMapper;

	@Override
	public PageInfo<StockPile> getStockPileAll(Integer storeHouseId, String productId, Integer pageNo,
			Integer pageSize) {
		PageHelper.startPage(pageNo, pageSize);
		List<StockPile> stockPileAll = stockPileMapper.getStockPileByStoreHouseIdAndProductId(storeHouseId, productId);
		return new PageInfo<StockPile>(stockPileAll);
	}

	@Transactional
	@Override
	public Integer insertStockPile(StockPile sp) {
		// TODO Auto-generated method stub
		return stockPileMapper.insertStockPile(sp);
	}

	@Transactional
	@Override
	public Integer updateStockPileCountAvgByStoreHouseAndProduct(Integer storeHouseId, String prosPecification,
			String productId, Integer quantity, Double costPrice) {
		// TODO Auto-generated method stub
		return stockPileMapper.updateStockPileCountAvgByStoreHouseAndProduct(storeHouseId, prosPecification, productId,
				quantity, costPrice);
	}

	@Override
	public Integer hasProductByProductIdAndStoreHouseId(String productId, Integer storeHouseId) {
		// TODO Auto-generated method stub
		return stockPileMapper.hasProductByProductIdAndStoreHouseId(productId, storeHouseId);
	}

	@Transactional
	@Override
	public Integer cutbackStockPile(Integer storeHouseId, String productId, Integer count) {
		// TODO Auto-generated method stub
		return stockPileMapper.cutbackStockPile(storeHouseId, productId, count);
	}


}
