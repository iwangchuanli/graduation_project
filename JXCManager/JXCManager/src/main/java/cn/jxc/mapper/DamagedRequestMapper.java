package cn.jxc.mapper;

import java.util.Date;
import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.DamagedRequest;

public interface DamagedRequestMapper {

	/**
	 * ��ѯ���еı�������
	 * 
	 * @param id
	 *            ������
	 * @param name
	 *            ����������
	 * @return
	 */
	List<DamagedRequest> getDamageRequest(@Param("id") String id, 
			@Param("name") String name,
			@Param("startDate")String startDate,@Param("endDate")String endDate);

	/**
	 * ��ӱ���
	 * 
	 * @param dr
	 * @return
	 */
	int AddDamagedRequest(DamagedRequest dr);

	/**
	 * ���ݱ����Ż�ȡ����״̬
	 * 
	 * @param id
	 *            ���
	 * @return
	 */
	int getDDZT(String id);

	/**
	 * ���ݱ��𵥱��ɾ������
	 * 
	 * @param id
	 *            ���𵥱��
	 * @return
	 */
	int DeleteDamagedRequest(String id);

	/**
	 * ���ݱ���id�޸ı��𵥾�״̬
	 * 
	 * @param damagedRequestId
	 *            ���𵥾�
	 * @param orderType
	 *            Ҫ�޸ĵĶ���״̬
	 * @return
	 */
	int updateDamagedRequestOrderTypeById(@Param("drId") String damagedRequestId, @Param("orderType") int orderType);

	/**
	 * ��˱���
	 * 
	 * @param singleNo
	 *            ���𵥺�
	 * @param emp
	 *            �����
	 * @param status
	 *            ���״̬
	 * @param reason
	 *            ԭ��
	 * @param date
	 *            ����
	 * @return
	 */
	int damagedReview(@Param("singleNo") String singleNo, @Param("emp") String emp, @Param("status") int status,
			@Param("reason") String reason, @Param("date") Date date);

	/**
	 * �޸ı���
	 * 
	 * @param damagedRequest
	 *            ���𵥶���
	 * @return
	 */
	int updateDamagedRequest(DamagedRequest damagedRequest);

}
