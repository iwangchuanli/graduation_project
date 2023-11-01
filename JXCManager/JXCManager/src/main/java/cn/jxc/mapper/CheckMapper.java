package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.Checks;

public interface CheckMapper {

	/**
	 * ��õ����̵㵥����
	 * 
	 * @param singleNo
	 * @return
	 */
	Checks checksOne(@Param("singleNo") String singleNo);

	/**
	 * ������Ϣ
	 * 
	 * @param cid
	 * @param crelationno
	 * @param createStartDate
	 * @param createEndDate
	 * @return
	 */
	List<Checks> getALLChecks(@Param("cid") String cid, @Param("crelationno") String crelationno,
			@Param("createStartDate") String createStartDate, @Param("createEndDate") String createEndDate,
			@Param("states") Integer states);

	/**
	 * �����Ƿ���û�����ҵ�ļ�¼
	 * 
	 * @return
	 */

	int selectCount();

	/**
	 * �����Ϣ�����
	 * 
	 * @param enterStock
	 * @return
	 */
	int ChecksAdd(@Param("ck") Checks ck);

	/**
	 * ִ����˲���
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @param emp
	 *            �����
	 * @param date
	 *            ���ʱ��
	 * @param reviewStatus
	 *            ���״̬
	 * @param reason
	 *            ���ԭ��
	 * @return
	 */
	int ChecksReview(@Param("ck") Checks ck);

	/**
	 * �̵���Ϣ���޸�
	 * 
	 * @param enterStock
	 * @return
	 */
	int ChecksUpdate(@Param("ck") Checks ck);

	/**
	 * ����C_idɾ����¼
	 * 
	 * @param singleNo
	 * @return
	 */
	int ChecksDelete(@Param("singleNo") String singleNo);
}
