package cn.jxc.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.SalesOrderMapper;
import cn.jxc.pojo.Customer;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.SalesOrder;
import cn.jxc.pojo.StockPile;
import cn.jxc.service.SaleOrderService;

@Service
public class SaleOrderServiceImpl implements SaleOrderService {

	@Autowired
	private SalesOrderMapper saleMap;

	@Override
	public PageInfo<SalesOrder> getSaleByBlurry(Integer num, Integer pageSize, String soId, String empLoginName) {
		// 开始分页 num是页码 第二个参数是每页显示的数量
		PageHelper.startPage(num, pageSize);
		List<SalesOrder> sales = saleMap.getSaleByBlurry(soId, empLoginName);

		PageInfo<SalesOrder> pageInfos = new PageInfo<SalesOrder>(sales);
		return pageInfos;
	}

	@Override
	public List<Employee> searchEmpName() {
		// TODO Auto-generated method stub
		return saleMap.searchEmpName();
	}

	@Override
	public List<Customer> searchCusName() {
		// TODO Auto-generated method stub
		return saleMap.searchCusName();
	}

	@Override
	public PageInfo<StockPile> searchAllStockPile(Integer num, Integer pageSize) {
		// 开始分页 num是页码 第二个参数是每页显示的数量
		PageHelper.startPage(num, pageSize);
		List<StockPile> sales = saleMap.searchAllStockPile();
		PageInfo<StockPile> pageInfos = new PageInfo<StockPile>(sales);
		return pageInfos;
	}

}
