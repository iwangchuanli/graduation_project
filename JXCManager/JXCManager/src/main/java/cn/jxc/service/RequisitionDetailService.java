package cn.jxc.service;


import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.RequisitionDetail;

public interface RequisitionDetailService {

	//��������ѯ������ϸ��
	PageInfo<RequisitionDetail> requisitionDetailById(String rsid,Integer num,Integer pageSize);
	//ɾ��
	int delrequisitionByid(int reid);
}
