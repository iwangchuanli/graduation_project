package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.Customer;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.SalesOrder;
import cn.jxc.pojo.StockPile;

public interface SalesOrderMapper {

	/**
	 * 根据销售单号、销售人进行模糊查询
	 * 
	 * @return
	 */
	List<SalesOrder> getSaleByBlurry(@Param("soId") String soId, @Param("empLoginName") String empLoginName);

	List<SalesOrder> getSaleAll();

	List<SalesOrder> getSale(@Param("soId") String soId, @Param("empLoginName") String empLoginName,
			@Param("customerId") Integer customerId);

	SalesOrder salesorderbyId(String soId);

	/**
	 * 查询销售人
	 */
	List<Employee> searchEmpName();

	/**
	 * 查询客户
	 */
	List<Customer> searchCusName();

	/**
	 * 查询库存产品信息
	 */
	List<StockPile> searchAllStockPile();

}
