package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.LeaveStockDetail;

public interface LeaveStockDetailMapper {

	/**
	 * 根据出库编号获取出库详情单
	 * 
	 * @param lsId
	 * @return
	 */
	List<LeaveStockDetail> getLSDetailAllByLSId(@Param("lsId") String lsId);

}
