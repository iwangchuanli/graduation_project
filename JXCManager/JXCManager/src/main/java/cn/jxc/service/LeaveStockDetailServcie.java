package cn.jxc.service;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.LeaveStockDetail;

public interface LeaveStockDetailServcie {

	/**
	 * ���ݳ����Ż�ȡ�������鵥
	 */
	PageInfo<LeaveStockDetail> getLSDetailAllByLSId(Integer num, Integer pageSize, String lsId);

}
