package cn.jxc.service.impl;

import java.util.Date;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.github.pagehelper.*;

import cn.jxc.mapper.RequisitionDetailMapper;
import cn.jxc.mapper.RequisitionMapper;
import cn.jxc.pojo.Requisition;
import cn.jxc.pojo.RequisitionDetail;
import cn.jxc.service.RequisitionService;

@Service
public class RequisitionServiceImpl implements RequisitionService{

	/*
	 * ����
	 * */
	@Autowired
	private RequisitionMapper resMapper;
	@Autowired
	private RequisitionDetailMapper resdMapper;
	//��������ѯ
	@Override
	public Requisition requisitionByid(String requisitionId) {
		return resMapper.requisitionByid(requisitionId);
	}
	
	//��ѯ���еĵ�����������
	@Override
	public PageInfo<Requisition> getRequisition(String requisitionId,String shname,String time1,String time2,Integer num,Integer pageSize) {
		PageHelper.startPage(num, pageSize);
		List<Requisition> requisition = resMapper.getRequisition(requisitionId,shname,time1,time2);
		PageInfo<Requisition> pageInfos=new PageInfo<Requisition>(requisition);
		return pageInfos;
	}
	
	//��������
	@Transactional
	@Override
	public int Requisitionadd(Requisition requisition) {
		try {
			resMapper.Requisitionadd(requisition);
			for(int i=0;i<requisition.getRequisitiondetails().size();i++) {
				requisition.getRequisitiondetails().get(i).setRequisition(requisition);
				resdMapper.addRequisitionDetail(requisition.getRequisitiondetails().get(i));
			}
			return 0;
		}catch (Exception e) {
			e.printStackTrace();
			return 1;
		}
	}
	//�����޸�
	@Transactional
	@Override
	public int RequisitionUpdate(Requisition requisition) {
		try {
			resMapper.RequisitionUpdete(requisition);
			resdMapper.RequisitionDetailDelete(requisition.getRequisitionId());
			List<RequisitionDetail> requisitiondetail = requisition.getRequisitiondetails();
			for(RequisitionDetail rsd : requisitiondetail) {
				rsd.setRequisition(requisition);
				resdMapper.addRequisitionDetail(rsd);
			}
			return 1;
		} catch (Exception e) {
			e.printStackTrace();
			return 0;
		}
	}
	//����ɾ��
	@Transactional
	@Override
	public int RequisitionDelete(String requisitionid) {
		try {
			resdMapper.RequisitionDetailDelete(requisitionid);
			resMapper.RequisitionDelete(requisitionid);
		return 1;
		}catch (Exception e) {
			e.printStackTrace();
			return 0;
		}
	}

	@Override
	public Requisition getRequisitionById(String requisitionId) {
		List<Requisition> requisitionByid = resMapper.getRequisition(requisitionId, null,null,null);
		return requisitionByid.get(0);
	}
	//��˲���
	@Override
	public int updaterequisition(String requisitionId, String reviewEmp, Date reviewTime, Integer reviewstatus,
			Integer order,String reason) {
		return resMapper.updaterequisition(requisitionId, reviewEmp, reviewTime, reviewstatus, order, reason);
	}
	//�޸Ķ���״̬
	@Override
	public int UpdateOrderStatus(Integer OrderStatus, String Requisition_id) {
		return resMapper.UpdateOrderStatus(OrderStatus, Requisition_id);
	}

}