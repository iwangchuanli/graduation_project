package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.RequisitionDetail;

public interface RequisitionDetailMapper {

	/*
	 * ������ϸ��
	 * */
	//������ϸ������
	int addRequisitionDetail(@Param("rsd")RequisitionDetail requisitiondetail);
	
	//��������ѯ������ϸ��
	List<RequisitionDetail> requisitionDetailById(String rsid);
	//���ݵ��������idɾ��
	int delrequisitionByid(int reid);
	//���ݵ������idɾ������
	int RequisitionDetailDelete(@Param("id")String requisitionid);
}
