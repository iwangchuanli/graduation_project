package cn.jxc.service;

import org.apache.ibatis.annotations.Param;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.Checks;

public interface ChecksService {
	/**
	 * ����������ѯ�����̵�
	 * 
	 * @param v
	 *            ����
	 * @param crelationno
	 * @param createStartDate
	 *            ��ʼʱ��
	 * @param createEndDate
	 *            ����ʱ��
	 * @param rv
	 *            ���״̬
	 * @param pageNo
	 *            ҳ��
	 * @param pageSize
	 *            ÿҳ����
	 * @return
	 */
	PageInfo<Checks> getALLChecks(String v, String crelationno, String createStartDate, String createEndDate, Integer rv,
			Integer pageNo, Integer pageSize);

	/**
	 * ���Ҷ���
	 * 
	 * @param singleNo
	 * @return
	 */
	Checks checksOne(@Param("singleNo") String singleNo);

	/**
	 * �����Ƿ���û�����ҵ�ļ�¼
	 * 
	 * @return
	 */

	int selectCount();

	/**
	 * �̵㵥��Ϣ�����
	 * 
	 * 
	 */
	int ChecksAdd(@Param("ck") Checks ck);

	/**
	 * �̵㵥ִ����˲���
	 * 
	 * 
	 * @return
	 */
	int ChecksReview(@Param("ck") Checks ck);

	/**
	 * �̵㵥��Ϣ���޸�
	 * 
	 */
	int ChecksUpdate(Checks ck);

	/**
	 * �����̵㵥��ɾ��һ������¼
	 * 
	 * @param singleNo
	 * @return
	 */
	int ChecksDelete(@Param("singleNo") String singleNo);
}
