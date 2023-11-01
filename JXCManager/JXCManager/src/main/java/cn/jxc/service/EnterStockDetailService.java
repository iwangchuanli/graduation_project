package cn.jxc.service;

import java.util.List;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.EnterStockDetail;

public interface EnterStockDetailService {

	/**
	 * ����������
	 * 
	 * @param enterStockDetail
	 *            ����������
	 * @return
	 */
	int enterStockDetailAdd(EnterStockDetail enterStockDetail);

	/**
	 * ���ݵ��ŷ�ҳ��ѯ�������
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @param pageNo
	 *            ҳ����
	 * @param pageSize
	 *            ÿҳ��ʾ����
	 * @return
	 */
	PageInfo<EnterStockDetail> getEnterStockDetailBySingleNo(String singleNo, Integer pageNo, Integer pageSize);

	/**
	 * �޸������������� ���ݵ���
	 * 
	 * @param singleNo
	 *            ����
	 * @param enterStockDetails
	 *            Ҫ�޸ĵ����鼯��
	 * @return
	 */
	int updateEnterStockDetailByProductAndSingleNo(String singleNo, List<EnterStockDetail> enterStockDetails);

	/**
	 * ������ⵥ��ɾ�����������ϸ
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @return
	 */
	int deleteEnterStockDetailBySingleNo(String singleNo);

}
