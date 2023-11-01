package cn.jxc.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import cn.jxc.pojo.LeaveStock;
import cn.jxc.service.LeaveStockTypeService;

@Service
public class LeaveStockTypeServiceImpl implements LeaveStockTypeService {
	
	@Autowired
	private LeaveStockTypeService leaveStockTypeService;
	
	@Override
	public List<LeaveStock> getLeaveStockTypeAll() {
		// TODO Auto-generated method stub
		return leaveStockTypeService.getLeaveStockTypeAll();
	}

}
