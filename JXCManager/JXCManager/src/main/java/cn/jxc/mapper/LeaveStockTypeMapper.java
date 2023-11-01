package cn.jxc.mapper;

import java.util.List;

import cn.jxc.pojo.LeaveStock;


public interface LeaveStockTypeMapper {
	
	/**
	 * 查询所有出库类型信息
	 * @return
	 */
	List<LeaveStock> getLeaveStockTypeAll();
	
}
