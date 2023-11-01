package cn.jxc.service.impl;

import java.util.List;

import javax.annotation.Resource;

import org.springframework.stereotype.Service;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.CheckDetailsMapper;
import cn.jxc.pojo.CheckDetails;
import cn.jxc.service.CheckDetailsService;
@Service
public class ChecksDetailsServiceImpl implements CheckDetailsService {

	
	@Resource
	private CheckDetailsMapper checkDetailsMapper;
	@Override
	public int CheckDetailAdd(CheckDetails cda) {
		// TODO Auto-generated method stub
		return checkDetailsMapper.CheckDetailAdd(cda);
	}

	@Override
	public List<CheckDetails> getCheckDetailsDetailsBySingleNo(String singleNo) {
		// TODO Auto-generated method stub
		return checkDetailsMapper.getCheckDetailsDetailsBySingleNo(singleNo);
	}

	@Override
	public int updateCheckDetailsDetailByProductAndSingleNo(String singleNo, String productId, Integer count) {
		// TODO Auto-generated method stub
		return checkDetailsMapper.deleteCheckDetailsDetailBySingleNo(singleNo);
	}

	@Override
	public int deleteCheckDetailsDetailBySingleNo(String singleNo) {
		// TODO Auto-generated method stub
		return checkDetailsMapper.deleteCheckDetailsDetailBySingleNo(singleNo)
				;
	}

	@Override
	public PageInfo<CheckDetails> getCheckDetails(String singleNo, Integer num, Integer pageSize) {
		// TODO Auto-generated method stub
		PageHelper.startPage(num, pageSize);
		List<CheckDetails> purchaseRequestDetailBySingleNo =checkDetailsMapper.getCheckDetailsDetailsBySingleNo(singleNo);
		PageInfo<CheckDetails> pageInfo = new PageInfo<CheckDetails>(purchaseRequestDetailBySingleNo);
		
		return pageInfo;
	}

}
