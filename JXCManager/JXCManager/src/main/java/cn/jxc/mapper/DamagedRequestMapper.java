package cn.jxc.mapper;

import java.util.Date;
import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.DamagedRequest;

public interface DamagedRequestMapper {

	/**
	 * 查询所有的报损详情
	 * 
	 * @param id
	 *            报损编号
	 * @param name
	 *            申请人姓名
	 * @return
	 */
	List<DamagedRequest> getDamageRequest(@Param("id") String id, 
			@Param("name") String name,
			@Param("startDate")String startDate,@Param("endDate")String endDate);

	/**
	 * 添加报损单
	 * 
	 * @param dr
	 * @return
	 */
	int AddDamagedRequest(DamagedRequest dr);

	/**
	 * 根据报损编号获取订单状态
	 * 
	 * @param id
	 *            编号
	 * @return
	 */
	int getDDZT(String id);

	/**
	 * 根据报损单编号删除报损单
	 * 
	 * @param id
	 *            报损单编号
	 * @return
	 */
	int DeleteDamagedRequest(String id);

	/**
	 * 根据报损单id修改报损单据状态
	 * 
	 * @param damagedRequestId
	 *            报损单据
	 * @param orderType
	 *            要修改的订单状态
	 * @return
	 */
	int updateDamagedRequestOrderTypeById(@Param("drId") String damagedRequestId, @Param("orderType") int orderType);

	/**
	 * 审核报损单
	 * 
	 * @param singleNo
	 *            报损单号
	 * @param emp
	 *            审核人
	 * @param status
	 *            审核状态
	 * @param reason
	 *            原因
	 * @param date
	 *            日期
	 * @return
	 */
	int damagedReview(@Param("singleNo") String singleNo, @Param("emp") String emp, @Param("status") int status,
			@Param("reason") String reason, @Param("date") Date date);

	/**
	 * 修改报损单
	 * 
	 * @param damagedRequest
	 *            报损单对象
	 * @return
	 */
	int updateDamagedRequest(DamagedRequest damagedRequest);

}
