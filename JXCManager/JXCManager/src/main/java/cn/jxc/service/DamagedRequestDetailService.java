package cn.jxc.service;

import java.util.List;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.DamagedRequestDetail;

public interface DamagedRequestDetailService {

	/**
	 * ��ӱ�������
	 * @param drd ����
	 * @return
	 */
	int AddDamagedRequesDetail(DamagedRequestDetail drd);

	/**
	 * ���ݱ����� ��ҳ��ѯ��������
	 * @param damagedRequestId �������
	 * @param pageNo ҳ��
	 * @param pageSize ҳ��
	 * @return
	 */
	PageInfo<DamagedRequestDetail> getDamagedRequestDetailsByDRID(String damagedRequestId, Integer pageNo,
			Integer pageSize);

	/**
	 * ����
	 * @param drId
	 * @return
	 */
	List<DamagedRequestDetail> getDRDByDRID(String drId);

	int DeleteDamagedRequestDetail(String id);

	int delDamagedRequestDetailById(int id);

}
