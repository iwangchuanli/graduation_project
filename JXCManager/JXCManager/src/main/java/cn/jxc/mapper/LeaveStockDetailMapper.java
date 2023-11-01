package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.LeaveStockDetail;

public interface LeaveStockDetailMapper {

	/**
	 * ���ݳ����Ż�ȡ�������鵥
	 * 
	 * @param lsId
	 * @return
	 */
	List<LeaveStockDetail> getLSDetailAllByLSId(@Param("lsId") String lsId);

}
