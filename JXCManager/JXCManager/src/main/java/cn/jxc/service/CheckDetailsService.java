package cn.jxc.service;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.CheckDetails;

public interface CheckDetailsService {
	/**
	 * 
	 * @param singleNo
	 * @param num
	 * @param pageSize
	 * @return
	 */
	PageInfo<CheckDetails> getCheckDetails(String singleNo,Integer num,Integer pageSize);
	
	/**
	 * ������ӵķ���
	 * 
	 * @param enterStockDetail
	 * @return
	 */
	int CheckDetailAdd(@Param("cda") CheckDetails cda);

	/**
	 * ������ⵥ�Ų�ѯ���������ϸ��Ϣ
	 * 
	 * @param singleNo
	 * @return
	 */
	List<CheckDetails> getCheckDetailsDetailsBySingleNo(@Param("singleNo") String singleNo);

	/**
	 * ��������źͲ�Ʒ����޸��������
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @param productId
	 *            ��Ʒ���
	 * @param count
	 *            ��Ʒ����
	 * @return
	 */
	int updateCheckDetailsDetailByProductAndSingleNo(@Param("singleNo") String singleNo,
			@Param("productId") String productId, @Param("count") Integer count);

	/**
	 * ������ⵥ��ɾ��������ϸ
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @return
	 */
	int deleteCheckDetailsDetailBySingleNo(@Param("singleNo")String singleNo);
}
