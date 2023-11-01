package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.DamagedRequestDetail;

public interface DamagedRequestDetailMapper {

	/**
	 * ���һ����������
	 * 
	 * @param drd
	 *            ����detail����
	 * @return
	 */
	int AddDamagedRequesDetail(DamagedRequestDetail drd);

	/**
	 * ���ݱ��𵥺� ��ѯ���б�������
	 * 
	 * @param drId
	 * @return
	 */
	List<DamagedRequestDetail> getDRDByDRID(@Param("drId") String drId);

	/**
	 * ���ݱ��𵥾ݱ��ɾ����������
	 * 
	 * @param id
	 *            ���𵥾ݱ��
	 * @return
	 */
	int DeleteDamagedRequestDetail(String id);

	/**
	 * ����idɾ����������
	 * 
	 * @param id
	 *            ���
	 * @return
	 */
	int delDamagedRequestDetailById(@Param("id") int id);

}
