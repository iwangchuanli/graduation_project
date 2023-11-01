package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.EnterStockDetail;

public interface EnterStockDetailMapper {
	/**
	 * ���������ӵķ���
	 * 
	 * @param enterStockDetail
	 * @return
	 */
	int enterStockDetailAdd(@Param("esd") EnterStockDetail enterStockDetail);

	/**
	 * ������ⵥ�Ų�ѯ���������ϸ��Ϣ
	 * 
	 * @param singleNo
	 * @return
	 */
	List<EnterStockDetail> getEnterStockDetailsBySingleNo(@Param("singleNo") String singleNo);

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
	int updateEnterStockDetailByProductAndSingleNo(@Param("singleNo") String singleNo,
			@Param("productId") String productId, @Param("count") Integer count);

	/**
	 * ������ⵥ��ɾ��������ϸ
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @return
	 */
	int deleteEnterStockDetailBySingleNo(@Param("singleNo")String singleNo);

}
