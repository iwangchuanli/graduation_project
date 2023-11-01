package cn.jxc.service;

import java.sql.Date;

import org.apache.ibatis.annotations.Param;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.LeaveStock;


public interface LeaveStockService {
	
	/**
	 * 根据出库单、出库人、出库时间分页查询
	 */
	PageInfo<LeaveStock> getAllLeaveStock(
			@Param("num")Integer num,
			@Param("pageSize")Integer pageSize,
			@Param("lsId") String lsId, 
			@Param("empName") String empName,
			@Param("leaveStockTime") Date leaveStockTime);
	
}
