package cn.jxc.service;

import java.sql.Date;

import org.apache.ibatis.annotations.Param;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.LeaveStock;


public interface LeaveStockService {
	
	/**
	 * ���ݳ��ⵥ�������ˡ�����ʱ���ҳ��ѯ
	 */
	PageInfo<LeaveStock> getAllLeaveStock(
			@Param("num")Integer num,
			@Param("pageSize")Integer pageSize,
			@Param("lsId") String lsId, 
			@Param("empName") String empName,
			@Param("leaveStockTime") Date leaveStockTime);
	
}
