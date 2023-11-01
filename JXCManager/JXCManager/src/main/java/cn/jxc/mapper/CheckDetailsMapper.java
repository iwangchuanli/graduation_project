package cn.jxc.mapper;


import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.CheckDetails;


public interface CheckDetailsMapper {

	/**
	 *��ѯ�Ƿ��м�¼
	 */
	int selectCount();
	/**
	 * ������ӵķ���
	 * 
	 * @param enterStockDetail
	 * @return
	 */
	int CheckDetailAdd(@Param("cda") CheckDetails cda);
  
	/**
	 * �����̵㵥�Ų�ѯ���������ϸ��Ϣ
	 * 
	 * @param singleNo
	 * @return
	 */
	List<CheckDetails> getCheckDetailsDetailsBySingleNo(@Param("singleNo") String singleNo);

	/**
	 * �����̵��źͲ�Ʒ����޸��������
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @param productId
	 *            ��Ʒ���
	 * @param count
	 *            ��Ʒ����*
	 * @return
	 */
	int updateCheckDetailsDetailByProductAndSingleNo(@Param("chd") CheckDetails chd);
    int updateStock(@Param("chd") CheckDetails chd);
	/**
	 * �����̵����鵥��ɾ��������ϸ
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @return
	 */
	int deleteCheckDetailsDetailBySingleNo(@Param("singleNo") String singleNo);
}
