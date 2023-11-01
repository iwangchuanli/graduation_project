package cn.jxc.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.PurchaseRequestDetailMapper;
import cn.jxc.pojo.PurchaseRequestDetail;
import cn.jxc.service.PurchaseRequestDetailService;

@Service
public class PurchaseRequestDetailServiceImpl implements PurchaseRequestDetailService {

	@Autowired
	private PurchaseRequestDetailMapper purchaseRequestDetailMapper;
	
	@Transactional
	@Override
	public int addPurchaseRequestDetail(PurchaseRequestDetail purchaseRequestDetail) {
		return purchaseRequestDetailMapper.purchaseRequestDetailAdd(purchaseRequestDetail);
	}
	@Transactional
	@Override
	public int delPurchaseRequestDetail(int id) {
		return purchaseRequestDetailMapper.delPurchaseRequestDetail(id);
	}

	@Override
	public PageInfo<PurchaseRequestDetail> getPurchaseRequestDetail(String purchaseRequestNo, Integer num,Integer pageSize) {
		PageHelper.startPage(num, pageSize);
		List<PurchaseRequestDetail> purchaseRequestDetailBySingleNo = purchaseRequestDetailMapper
				.getPurchaseRequestDetailBySingleNo(purchaseRequestNo);
		PageInfo<PurchaseRequestDetail> pageInfo = new PageInfo<PurchaseRequestDetail>(purchaseRequestDetailBySingleNo);
		return pageInfo;
	}
	
	@Transactional
	@Override
	public int updatePurchaseRequestDetailBySingleNoAndProductId(String singleNo, String productId) {
		// TODO Auto-generated method stub
		return 0;
	}
	
	@Transactional
	@Override
	public int delPurchaseRequestDetailBYSingleNo(String singleNo) {
		return purchaseRequestDetailMapper.delPurchaseRequestDetailBYSingleNo(singleNo);
	}

}
