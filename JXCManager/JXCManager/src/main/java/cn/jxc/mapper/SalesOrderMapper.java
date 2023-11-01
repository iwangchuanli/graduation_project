package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.Customer;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.SalesOrder;
import cn.jxc.pojo.StockPile;

public interface SalesOrderMapper {

	/**
	 * �������۵��š������˽���ģ����ѯ
	 * 
	 * @return
	 */
	List<SalesOrder> getSaleByBlurry(@Param("soId") String soId, @Param("empLoginName") String empLoginName);

	List<SalesOrder> getSaleAll();

	List<SalesOrder> getSale(@Param("soId") String soId, @Param("empLoginName") String empLoginName,
			@Param("customerId") Integer customerId);

	SalesOrder salesorderbyId(String soId);

	/**
	 * ��ѯ������
	 */
	List<Employee> searchEmpName();

	/**
	 * ��ѯ�ͻ�
	 */
	List<Customer> searchCusName();

	/**
	 * ��ѯ����Ʒ��Ϣ
	 */
	List<StockPile> searchAllStockPile();

}
