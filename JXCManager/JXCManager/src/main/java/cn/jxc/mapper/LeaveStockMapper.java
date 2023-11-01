package cn.jxc.mapper;

import java.sql.Date;
import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.LeaveStock;

public interface LeaveStockMapper {
	
	/**
	 * ���ݳ��ⵥ�������ˡ�����ʱ���ҳ��ѯ
	 */
	List<LeaveStock> getAllLeaveStock(
			@Param("lsId") String lsId, 
			@Param("empName") String empName,
			@Param("leaveStockTime") Date leaveStockTime);
	
	
}
