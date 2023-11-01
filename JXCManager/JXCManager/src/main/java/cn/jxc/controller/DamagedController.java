package cn.jxc.controller;

import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.apache.ibatis.annotations.Param;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import com.alibaba.fastjson.JSON;
import com.alibaba.fastjson.JSONObject;
import com.github.pagehelper.PageInfo;

import cn.jxc.excel.ExportExcel;
import cn.jxc.pojo.DamagedRequest;
import cn.jxc.pojo.DamagedRequestDetail;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.StockPile;
import cn.jxc.pojo.StoreHouse;
import cn.jxc.service.DamagedRequestDetailService;
import cn.jxc.service.DamagedRequestService;
import cn.jxc.service.EmployeeService;
import cn.jxc.service.StockPileService;
import cn.jxc.service.StoreHouseService;
import cn.jxc.util.OrderGenerator;

/**
 * 报损控制器
 * 
 * @author lw
 *
 */
@Controller
public class DamagedController {

	@Autowired
	private EmployeeService employeeservice;
	@Autowired
	private StoreHouseService storehouseservice;
	@Autowired
	private DamagedRequestService damagedRequestService;
	@Autowired
	private DamagedRequestDetailService damagedRequestDetailService;
	@Autowired
	private StockPileService stockPileService;

	/**
	 * 跳转到报损单首页
	 * 
	 * @param damagedRequestId
	 *            报损单id
	 * @param requestEmp
	 *            申请人
	 * @param pageNo
	 *            页码
	 * @param model
	 * @return
	 */
	@RequestMapping("/godamaged")
	public String godamaged(@RequestParam(value = "damagedRequestId", required = false) String damagedRequestId,
			@RequestParam(value = "requestEmp", required = false) String requestEmp, Integer pageNo, Model model,
			@RequestParam(value = "startDate", required = false) String startDate,
			@RequestParam(value = "endDate", required = false) String endDate) {
		if (pageNo == null || pageNo == 0) {
			pageNo = 1;
		}
		PageInfo<DamagedRequest> damged = damagedRequestService.getDamageRequest(damagedRequestId, requestEmp, pageNo,
				10, startDate, endDate);
		model.addAttribute("damged", damged);
		model.addAttribute("damagedRequestId", damagedRequestId);
		model.addAttribute("requestEmp", requestEmp);
		model.addAttribute("startDate", startDate);
		model.addAttribute("endDate", endDate);
		return "damaged/Damaged";
	}

	/**
	 * 跳转到报损新增页面
	 * 
	 * @param model
	 * @return
	 */
	@RequestMapping("damagedrequestadd")
	public String addDamafedRequest(Model model) {
		// 员工信息
		PageInfo<Employee> employees = employeeservice.getEmployeeAll(1, 10000);
		// 仓库信息
		String orderNo = OrderGenerator.getOrderNo("BS");
		List<StoreHouse> storehouse = storehouseservice.getStoreHouselist();
		model.addAttribute("employees", employees.getList());
		model.addAttribute("storehouse", storehouse);
		model.addAttribute("orderNo", orderNo);
		return "damaged/DamagedRequestadd";
	}

	/**
	 * 新增报损单 实现添加功能
	 * 
	 * @param dr
	 *            报损单据
	 * @param products
	 *            报损的产品信息
	 * @return
	 */
	@RequestMapping("AddDamageRequest")
	public String AddDamafedRequest(DamagedRequest dr, String products) {
		List<DamagedRequestDetail> requisitionDetail = JSONObject.parseArray(products, DamagedRequestDetail.class);
		dr.setDamagedrequestdetail(requisitionDetail);
		dr.setRequestTime(new Date());
		int result = damagedRequestService.AddDamagedRequest(dr);
		if (result > 0) { // 失败
			return "/damagedrequestadd";
		} else { // 成功
			return "redirect:/godamaged";
		}
	}

	/**
	 * 根据仓库编号和页码获取库存中的产品信息
	 * 
	 * @param storeHouseId
	 *            仓库编号
	 * @param pageNo
	 *            页码
	 * @return
	 */
	@RequestMapping("/getStockPileByStoreHouseId")
	@ResponseBody
	public String getStockPileByStoreHouseId(@RequestParam("storeHouseId") Integer storeHouseId,
			@RequestParam(value = "pageNo", required = false) Integer pageNo) {
		System.out.println(storeHouseId+"1111111111111111111进入ajax方法查询库存1111111111111111111111111111111");
		if (pageNo == null || pageNo == 0) {
			pageNo = 1;
		}
		PageInfo<StockPile> stockPileAll = stockPileService.getStockPileAll(storeHouseId, null, pageNo, 2);
		return JSON.toJSONString(stockPileAll);
	}

	/**
	 * 根据入库单号查询入库单
	 * 
	 * @param id
	 *            入库单号
	 * @return
	 */
	@RequestMapping("getDamagedRequestById")
	@ResponseBody
	public String getDamagedRequestById(@RequestParam("id") String id,
			@RequestParam(value = "pageNo", required = false) Integer pageNo) {
		if (null == pageNo) {
			pageNo = 1;
		}
		DamagedRequest damagedRequest = damagedRequestService.getDamageRequest(id, null, 1, 1, null, null).getList()
				.get(0);
		PageInfo<DamagedRequestDetail> pageInfos = damagedRequestDetailService.getDamagedRequestDetailsByDRID(id,
				pageNo, 3);
		pageInfos.getList().get(0).setDamagedRequest(damagedRequest);
		return JSON.toJSONString(pageInfos);
	}

	@RequestMapping("lw")
	@ResponseBody
	public String lw(String id) {
		int a = damagedRequestService.getDDZT(id);
		if (a == 2) {
			return "1";
		} else {
			return "0";
		}
	}

	/**
	 * 根据报损单id删除报损单
	 * 
	 * @param damagedid
	 *            报损单id
	 * @param model
	 * @return
	 */
	@RequestMapping("deleteDamagedRequest")
	public String deleteDamagedRequest(String damagedid, Model model) {
		int a = damagedRequestService.DeleteDamagedRequest(damagedid);
		if (a > 0) {// 成功
			return "redirect:/godamaged";
		} else {
			model.addAttribute("message", "删除报损单错误=============");
			return "error";
		}
	}

	/**
	 * 对订单状态进行操作 可以提交 取消订单
	 * 
	 * @param singleNo
	 *            订单号
	 * @param type
	 *            类型
	 * @return
	 */
	@RequestMapping("/operaDamaged")
	public String operaDamaged(@Param("singleNo") String singleNo, @Param("type") Integer type, Model model) {
		int a = damagedRequestService.updateDamagedRequestOrderTypeById(singleNo, type);
		if (type == 7) { // 报损订单完成 减少库存数量
			damagedRequestService.updateStockPileSumByDamagedId(singleNo);
		}
		if (a > 0) {
			return "redirect:/godamaged";
		}
		model.addAttribute("message", "报损单操作出现错误  具体为啥我也不清楚");
		return "error";
	}

	/**
	 * 审核报损单
	 * 
	 * @param singleNo
	 *            报损单编号
	 * @param status
	 *            状态
	 * @param reason
	 *            原因
	 * @return
	 */
	@RequestMapping("/damagedReview")
	public String damagedReview(String singleNo, Integer status, String reason, HttpSession session) {
		Employee employee = (Employee) session.getAttribute("loginEmp");
		damagedRequestService.damagedReview(singleNo, employee.getEmpLoginName(), status, reason);
		if (status == 2) { // 审核通过
			damagedRequestService.updateDamagedRequestOrderTypeById(singleNo, 9);
		} else if (status == 3) { // 审核没有通过
			damagedRequestService.updateDamagedRequestOrderTypeById(singleNo, 5);
		}
		return "redirect:/godamaged";
	}

	/**
	 * 跳转到修改报损单页面
	 * 
	 * @param model
	 * @param damagedRequestId
	 *            报损编号
	 * @return
	 */
	@RequestMapping("/goDamagedUpdate")
	public String goDamagedUpdate(Model model, String damagedRequestId) {
		DamagedRequest damagedRequest = damagedRequestService.getDamageRequest(damagedRequestId, null, 1, 1, null, null)
				.getList().get(0);
		List<DamagedRequestDetail> drdByDRID = damagedRequestDetailService.getDRDByDRID(damagedRequestId);
		List<Employee> list = employeeservice.getEmployeeAll(1, 99999).getList();
		List<StoreHouse> storeHouselist = storehouseservice.getStoreHouselist();
		model.addAttribute("damagedRequest", damagedRequest);
		model.addAttribute("damagedRequestDetails", drdByDRID);
		model.addAttribute("employees", list);
		model.addAttribute("storehouses", storeHouselist);
		return "damaged/DamagedUpdate";
	}

	/**
	 * 报损单修改
	 * 
	 * @param damagedRequest
	 *            报损单对象
	 * @param products
	 *            报损详情
	 * @return 跳转的页面
	 */
	@RequestMapping("/damageRequestUpdate")
	public String damageRequestUpdate(DamagedRequest damagedRequest, String products, Model model) {
		List<DamagedRequestDetail> parseArray = JSONObject.parseArray(products, DamagedRequestDetail.class);
		damagedRequest.setDamagedrequestdetail(parseArray);
		int a = damagedRequestService.updateDamagedRequest(damagedRequest);
		if (a > 0) { // 修改成功
			return "redirect:/godamaged";
		}
		model.addAttribute("message", "修改报损单错误====具体为啥自己找");
		return "error";
	}

	@RequestMapping("/delDamagedRequestDetailById")
	@ResponseBody
	public String delDamagedRequestDetailById(int id) {
		int a = damagedRequestDetailService.delDamagedRequestDetailById(id);
		if (a > 0) { // 删除成功
			return "1";
		}
		return "0";
	}

	/**
	 * 导出excel 有pageNo导出当前 没有导出所有
	 * 
	 * @param pageNo
	 * @param request
	 * @param response
	 * @throws IOException
	 */
	@RequestMapping("/damagedExport")
	public void requisitionExportExcel(@RequestParam(value = "pageNo", required = false) Integer pageNo,
			@RequestParam(value = "damagedRequestId", required = false) String damagedRequestId,
			@RequestParam(value = "requestEmp", required = false) String requestEmp,
			@RequestParam(value = "startDate", required = false) String startDate,
			@RequestParam(value = "endDate", required = false) String endDate, HttpServletRequest request,
			HttpServletResponse response) throws IOException {
		// 获取数据
		List<DamagedRequest> list = null;
		if (null == pageNo) {
			list = damagedRequestService.getDamageRequest(null, null, 1, 99999, null, null).getList();
		} else {
			list = damagedRequestService.getDamageRequest(damagedRequestId, requestEmp, pageNo, 10, startDate, endDate)
					.getList();
		}
		// 获取文件名
		String fileName = "Damaged" + new SimpleDateFormat("MMddhhmmsss").format(new Date())
				+ String.valueOf((int) (Math.random() * 9 + 1) * 1000) + ".xlsx";
		// 生成excel并且下载
		new ExportExcel(null, DamagedRequest.class, 1).setDataList(list).write(response, fileName).dispose();
	}

}
