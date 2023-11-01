package cn.jxc.service;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.Customer;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.SalesOrder;
import cn.jxc.pojo.StockPile;

public interface SaleOrderService {

	/**
	 * 根据销售单号、销售人进行模糊查询
	 * @return
	 */
	PageInfo<SalesOrder> getSaleByBlurry(@Param("num")Integer num,@Param("pageSize")Integer pageSize,@Param("soId")String soId,@Param("empLoginName")String empLoginName);
	

	/**
	 * 查询库存产品信息
	 */
	PageInfo<StockPile> searchAllStockPile(@Param("num")Integer num,@Param("pageSize")Integer pageSize);
	
	
	/**
	 * 查询销售人
	 */
	List<Employee> searchEmpName();
	
	/**
	 * 查询客户
	 */
	List<Customer> searchCusName();
	
}
