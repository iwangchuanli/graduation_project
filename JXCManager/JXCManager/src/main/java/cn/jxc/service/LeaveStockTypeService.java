package cn.jxc.service;

import java.util.List;

import cn.jxc.pojo.LeaveStock;

public interface LeaveStockTypeService {
	

	/**
	 * 查询所有出库类型信息
	 * @return
	 */
	List<LeaveStock> getLeaveStockTypeAll();
	
}
