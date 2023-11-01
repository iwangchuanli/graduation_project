package cn.jxc.service.impl;

import java.sql.Date;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.LeaveStockMapper;
import cn.jxc.pojo.LeaveStock;
import cn.jxc.service.LeaveStockService;

@Service
public class LeaveStockServiceImpl implements LeaveStockService {

	@Autowired
	private LeaveStockMapper leaveStockMapper;

	@Override
	public PageInfo<LeaveStock> getAllLeaveStock(Integer num, Integer pageSize, String lsId, String empName,
			Date leaveStockTime) {
		// 开始分页 num是页码 第二个参数是每页显示的数量
		PageHelper.startPage(num, pageSize);
		List<LeaveStock> sales = leaveStockMapper.getAllLeaveStock(lsId, empName, leaveStockTime);
		PageInfo<LeaveStock> pageInfos = new PageInfo<LeaveStock>(sales);
		return pageInfos;
	}

}
