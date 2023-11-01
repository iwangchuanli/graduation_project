package cn.jxc.mapper;

import java.util.Date;
import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.Requisition;

public interface RequisitionMapper {

	/*
	 * ����
	 * 
	 **/
	// ��ѯ���еĵ�����������
	List<Requisition> getRequisition(@Param("requisitionId") String requisitionId, @Param("shname") String shname,
			@Param("time1") String time1, @Param("time2") String time2);

	// ��������ѯ
	Requisition requisitionByid(String requisitionId);

	// ������������
	int Requisitionadd(@Param("rs") Requisition requisition);

	// �����޸�
	int RequisitionUpdete(@Param("rs") Requisition requisition);

	// ����idɾ��
	int RequisitionDelete(@Param("id") String requisitionid);

	// ���״̬����
	int updaterequisition(@Param("requisitionId") String requisitionId, @Param("reviewEmp") String reviewEmp,
			@Param("reviewTime") Date reviewTime, @Param("status") Integer reviewstatus, @Param("order") Integer order,
			@Param("reason") String reason);

	// �޸Ķ���״̬
	int UpdateOrderStatus(@Param("OrderStatus") Integer OrderStatus, @Param("Requisition_id") String Requisition_id);
}
