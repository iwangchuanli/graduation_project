package cn.jxc.service;

import java.text.ParseException;
import java.util.Date;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.EnterStock;

public interface EnterStockService {

	/**
	 * ����������ѯ������ⵥ
	 * 
	 * @param singleNo
	 *            ����
	 * @param shName
	 *            �ֿ�����
	 * @param start
	 *            ��ʼʱ��
	 * @param end
	 *            ����ʱ��
	 * @param pageNo
	 *            ҳ����
	 * @param pageSize
	 *            ÿҳ��ʾ����
	 * @return
	 * @throws ParseException
	 */
	PageInfo<EnterStock> getEnterStockBySuless(String singleNo, String shName, String start, String end, Integer pageNo,
			Integer pageSize) throws ParseException;

	/**
	 * ���һ����ⵥ
	 * 
	 * @param enterStock
	 * @return
	 */
	int enterStockAdd(EnterStock enterStock);

	/**
	 * ��ⵥ�����
	 * 
	 * @param singleNo
	 *            ����
	 * @param emp
	 *            ���Ա��
	 * @param date
	 *            ���ʱ��
	 * @param reviewStatus
	 *            ���״̬
	 * @param reason
	 *            ���ԭ��
	 * @return
	 */
	int enterStockReview(String singleNo, String emp, Date date, Integer reviewStatus, String reason);

	/**
	 * ��ⵥ����Ϣ�޸�
	 * 
	 * @param enterStock
	 *            ��ⵥ����
	 * @return
	 */
	int enterStockUpdate(EnterStock enterStock);

	/**
	 * ���ݶ����Ų�ѯ��ⶩ��
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @return
	 */
	EnterStock getEnterStockBySingleNo(String singleNo);

	/**
	 * ���ݵ���ɾ����ⵥ
	 * 
	 * @param singleNo
	 *            ����
	 * @return
	 */
	int enterStockDelete(String singleNo);
	
	/**
	 * ������ⵥ�Ų�ѯ�������
	 * 
	 * @param singleNo
	 *            ��ⵥ��
	 * @return �������
	 */
	int getEnterStockTypeByESS(String singleNo);

}
