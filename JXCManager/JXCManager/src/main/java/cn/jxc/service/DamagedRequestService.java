package cn.jxc.service;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.DamagedRequest;

public interface DamagedRequestService {

	/**
	 * 
	 * 查询所有和分页
	 * 
	 * @param id
	 * @param name
	 * @return
	 */
	PageInfo<DamagedRequest> getDamageRequest(String damagedid, String damagredname, Integer pageNo, Integer pageSize,String startDate,String endDate);

	/**
	 * 添加报损单据
	 * 
	 * @param dr
	 *            报损单对象
	 * @return
	 */
	int AddDamagedRequest(DamagedRequest dr);

	/**
	 * 根据单据id删除单据
	 * 
	 * @param id
	 *            单据id
	 * @return
	 */
	int DeleteDamagedRequest(String id);

	/**
	 * 查询订单状态
	 * 
	 * @param id
	 * @return
	 */
	int getDDZT(String id);

	/**
	 * 根据报损单编号修改订单状态
	 * 
	 * @param drId
	 *            编号
	 * @param orderStatus
	 *            订单状态
	 * @return
	 */
	int updateDamagedRequestOrderTypeById(String drId, int orderStatus);

	/**
	 * 报损单审核
	 * 
	 * @param singleNo
	 *            报损单编号
	 * @param emp
	 *            审核人
	 * @param status
	 *            审核状态
	 * @param reason
	 *            审核原因
	 * @return
	 */
	int damagedReview(String singleNo, String emp, int status, String reason);

	/**
	 * 根据报损单号减少库存数量
	 * 
	 * @param damagedRequestId
	 *            报损单号
	 * @return
	 */
	int updateStockPileSumByDamagedId(String damagedRequestId);
	
	/**
	 * 修改报损订单
	 * @param damagedRequest 报损订单对象
	 * @return
	 */
	int updateDamagedRequest(DamagedRequest damagedRequest);

}
