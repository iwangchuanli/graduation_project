package cn.jxc.service.impl;

import java.util.Date;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.PurchaseRequestMapper;
import cn.jxc.pojo.PurchaseRequest;
import cn.jxc.pojo.PurchaseRequestDetail;
import cn.jxc.service.PurchaseRequestDetailService;
import cn.jxc.service.PurchaseRequestService;

@Service
public class PurchaseRequestServiceImpl implements PurchaseRequestService {

	@Autowired
	private PurchaseRequestMapper purchaseRequestMapper;

	@Autowired
	private PurchaseRequestDetailService purchaseRequestDetailService;
	
	@Transactional
	@Override
	public int addPurchaseRequest(PurchaseRequest purchaseRequest) {
		try {
			purchaseRequest.setRequestTime(new Date());
			// ѭ��������������е��ֶθ�ֵ ���������ݿ����������
			purchaseRequestMapper.addPurchaseRequest(purchaseRequest);
			
			for (int i = 0; i < purchaseRequest.getPurchaserequestdetails().size(); i++) {
				purchaseRequest.getPurchaserequestdetails().get(i).setPurchaserequest(purchaseRequest);
				purchaseRequestDetailService
						.addPurchaseRequestDetail(purchaseRequest.getPurchaserequestdetails().get(i));
			}
			return 0;
		} catch (Exception e) {
			e.printStackTrace();
			return 1;
		}
	}

	@Override
	public PageInfo<PurchaseRequest> getPurchaseRequestByBlurry(Integer num, Integer pageSize, String empNo,
			String singleNo, String suppName) {
		// ��ʼ��ҳ num��ҳ�� �ڶ���������ÿҳ��ʾ������
		PageHelper.startPage(num, pageSize);
		List<PurchaseRequest> purchaseRequests = purchaseRequestMapper.getPurchaseRequestByBlurry(empNo, singleNo,
				suppName);
		PageInfo<PurchaseRequest> pageInfos = new PageInfo<PurchaseRequest>(purchaseRequests);
		return pageInfos;
	}

	@Override
	public PurchaseRequest getPurchaseRequestBySingleNo(String singleNo) {
		List<PurchaseRequest> purchaseRequestByBlurry = purchaseRequestMapper.getPurchaseRequestByBlurry(null, singleNo,
				null);
		return purchaseRequestByBlurry.get(0);
	}

	@Transactional
	@Override
	public int updatePurchaseRequest(PurchaseRequest purchaseRequest) {
		try {
			// ɾ��ָ������������ϸ
			purchaseRequestDetailService.delPurchaseRequestDetailBYSingleNo(purchaseRequest.getPurchaseRequestId());
			// // ָ���������е���ϸ
			// PageInfo<PurchaseRequestDetail> purchaseRequestDetails =
			// purchaseRequestDetailService
			// .getPurchaseRequestDetail(purchaseRequest.getPurchaseRequestId(), 1,
			// 1000000);
			purchaseRequestMapper.updatePurchaseRequest(purchaseRequest);
			for (PurchaseRequestDetail purchaseRequestDetail : purchaseRequest.getPurchaserequestdetails()) {
				purchaseRequestDetail.setPurchaserequest(purchaseRequest);
				purchaseRequestDetailService.addPurchaseRequestDetail(purchaseRequestDetail);
			}
			return 1;
		} catch (Exception e) {
			e.printStackTrace();
			return 0;
		}
	}

	@Transactional
	@Override
	public int updatePurchaseOrderStatus(String singleNo, Integer status) {

		return purchaseRequestMapper.updatePurchaseOrderStatus(singleNo, status);
	}

	@Transactional
	@Override
	public int updateDeptReivewStatus(String singleNo, String reviewEmp, Date date, Integer status, String reason) {
		if (status == 1) { // ͨ��
			status = 2;
		} else if (status == 0) { // ��ͨ��
			purchaseRequestMapper.updatePurchaseOrderStatus(singleNo, 5); // ����״̬�ĳɾܾ�
			status = 3;
		}
		return purchaseRequestMapper.updateDeptReivewStatus(singleNo, reviewEmp, date, status, reason);
	}

	@Transactional
	@Override
	public int updateFinancialReivewStatus(String singleNo, String reviewEmp, Date date, Integer status,
			String reason) {
		if (status == 1) {
			purchaseRequestMapper.updatePurchaseOrderStatus(singleNo, 6);
			status = 2;
		} else if (status == 0) {
			purchaseRequestMapper.updatePurchaseOrderStatus(singleNo, 5); // ����״̬�ĳɾܾ�
			status = 3;
		}
		return purchaseRequestMapper.updateFinancialReivewStatus(singleNo, reviewEmp, date, status, reason);
	}

	@Transactional
	@Override
	public int deletePurchaseRequest(String singleNo) {
		try {
			purchaseRequestDetailService.delPurchaseRequestDetailBYSingleNo(singleNo);
			purchaseRequestMapper.deletePurchaseRequest(singleNo);
			return 1;
		} catch (Exception e) {
			e.printStackTrace();
			return 0;
		}
	}

	@Override
	public List<PurchaseRequest> getPurchaseRequestByOrderStatus(Integer status) {
		// TODO Auto-generated method stub
		return purchaseRequestMapper.getPurchaseRequestByOrderStatus(status);
	}

}
