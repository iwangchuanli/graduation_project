package cn.jxc.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.LeaveStockDetailMapper;
import cn.jxc.pojo.LeaveStockDetail;
import cn.jxc.service.LeaveStockDetailServcie;

@Service
public class LeaveStockDetailServiceImpl implements LeaveStockDetailServcie {

	@Autowired
	private LeaveStockDetailMapper leaveStockDetailMapper;

	@Override
	public PageInfo<LeaveStockDetail> getLSDetailAllByLSId( Integer num,
			Integer pageSize, String lsId) {
		PageHelper.startPage(num, pageSize);
		List<LeaveStockDetail> lsDetailAllByLSId = leaveStockDetailMapper.getLSDetailAllByLSId(lsId);
		System.err.println(lsDetailAllByLSId.size()+"====service³¤¶È");
		return new PageInfo<LeaveStockDetail>(lsDetailAllByLSId);
	}

}
