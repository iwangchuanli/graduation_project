package cn.jxc.service;


import java.util.Date;


import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.Requisition;

public interface RequisitionService {

	/**
	 * ��ѯ���еĵ�����������
	 * 
	 * @param requisitionId
	 * @param rsid
	 * @param pageNo
	 * @param pageSize
	 * @return
	 */
	PageInfo<Requisition> getRequisition(String requisitionId,
			String shname,
			String time1,
			String time2,
			Integer pageNo, 
			Integer pageSize);

	Requisition getRequisitionById(String requisitionId);
	// ��������ѯ
	Requisition requisitionByid(String requisitionId);

	// ��������
	int Requisitionadd(Requisition requisition);

	// �����޸�
	int RequisitionUpdate(Requisition requisition);
	
	//����idɾ��
	int RequisitionDelete(String requisitionid);
	//���״̬����
	int updaterequisition(String requisitionId,String reviewEmp,Date reviewTime,Integer reviewstatus,Integer order,String reason);
	//�޸Ķ���״̬
	int UpdateOrderStatus(Integer OrderStatus,String Requisition_id);
}
