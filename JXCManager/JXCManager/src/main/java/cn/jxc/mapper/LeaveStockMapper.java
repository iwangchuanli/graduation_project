package cn.jxc.mapper;

import java.sql.Date;
import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.LeaveStock;

public interface LeaveStockMapper {
	
	/**
	 * 根据出库单、出库人、出库时间分页查询
	 */
	List<LeaveStock> getAllLeaveStock(
			@Param("lsId") String lsId, 
			@Param("empName") String empName,
			@Param("leaveStockTime") Date leaveStockTime);
	
	
}
