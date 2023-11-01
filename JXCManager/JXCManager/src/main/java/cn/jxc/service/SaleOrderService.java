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
	 * �������۵��š������˽���ģ����ѯ
	 * @return
	 */
	PageInfo<SalesOrder> getSaleByBlurry(@Param("num")Integer num,@Param("pageSize")Integer pageSize,@Param("soId")String soId,@Param("empLoginName")String empLoginName);
	

	/**
	 * ��ѯ����Ʒ��Ϣ
	 */
	PageInfo<StockPile> searchAllStockPile(@Param("num")Integer num,@Param("pageSize")Integer pageSize);
	
	
	/**
	 * ��ѯ������
	 */
	List<Employee> searchEmpName();
	
	/**
	 * ��ѯ�ͻ�
	 */
	List<Customer> searchCusName();
	
}
