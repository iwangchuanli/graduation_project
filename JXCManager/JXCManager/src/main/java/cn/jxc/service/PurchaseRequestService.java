package cn.jxc.service;

import java.util.Date;
import java.util.List;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.PurchaseRequest;

/**
 * 采购申请 service
 * 
 * @author Administrator
 *
 */
public interface PurchaseRequestService {

	/**
	 * 添加采购申请
	 * 
	 * @param purchaseRequest
	 *            采购订单对象
	 * @return 是否成功
	 */
	int addPurchaseRequest(PurchaseRequest purchaseRequest);

	/**
	 * 分页+模糊查询采购申请
	 * 
	 * @param num
	 *            页码
	 * @param empNo
	 *            申请人
	 * @param singleNo
	 *            单号
	 * @param suppId
	 *            供应商
	 * @return
	 */
	PageInfo<PurchaseRequest> getPurchaseRequestByBlurry(Integer num, Integer pageSize, String empNo, String singleNo,
			String suppName);

	/**
	 * 根据单号查询采购申请单
	 * 
	 * @param no
	 *            单号
	 * @return 采购申请对象
	 */
	PurchaseRequest getPurchaseRequestBySingleNo(String singleNo);

	/**
	 * 根据订单状态查询采购单
	 * 
	 * @param status
	 *            采购单状态
	 * @return 采购单集合
	 */
	List<PurchaseRequest> getPurchaseRequestByOrderStatus(Integer status);

	/**
	 * 更新部门审核状态
	 * 
	 * @param singleNo
	 *            申请单号
	 * @param reviewEmp
	 *            审核人
	 * @param date
	 *            时间
	 * @param status
	 *            状态
	 * @param reason
	 *            原因
	 * @return 是否成功
	 */
	int updateDeptReivewStatus(String singleNo, String reviewEmp, Date date, Integer status, String reason);

	/**
	 * 财务审核操作
	 * 
	 * @param singleNo
	 *            订单号
	 * @param reviewEmp
	 *            审核人
	 * @param date
	 *            时间
	 * @param status
	 *            审核状态
	 * @param reason
	 *            原因
	 * @return
	 */
	int updateFinancialReivewStatus(String singleNo, String reviewEmp, Date date, Integer status, String reason);

	/**
	 * 修改采购订单信息
	 * 
	 * @param purchaseRequest
	 * @return
	 */
	int updatePurchaseRequest(PurchaseRequest purchaseRequest);

	/**
	 * 根据订单号和状态修改订单状态
	 * 
	 * @param singleNo
	 * @param status
	 * @return
	 */
	int updatePurchaseOrderStatus(String singleNo, Integer status);

	/**
	 * 根据采购单号删除所有相关信息
	 * 
	 * @param singleNo
	 *            采购单号
	 * @return
	 */
	int deletePurchaseRequest(String singleNo);

}
