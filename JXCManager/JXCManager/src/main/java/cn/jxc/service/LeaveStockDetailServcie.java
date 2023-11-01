package cn.jxc.service;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.LeaveStockDetail;

public interface LeaveStockDetailServcie {

	/**
	 * 根据出库编号获取出库详情单
	 */
	PageInfo<LeaveStockDetail> getLSDetailAllByLSId(Integer num, Integer pageSize, String lsId);

}
