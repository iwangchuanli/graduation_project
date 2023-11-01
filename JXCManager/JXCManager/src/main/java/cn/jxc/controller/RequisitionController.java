package cn.jxc.controller;

import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

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
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.Product;
import cn.jxc.pojo.Requisition;
import cn.jxc.pojo.RequisitionDetail;
import cn.jxc.pojo.StoreHouse;
import cn.jxc.service.EmployeeService;
import cn.jxc.service.ProductService;
import cn.jxc.service.RequisitionDetailService;
import cn.jxc.service.RequisitionService;
import cn.jxc.service.StoreHouseService;
import cn.jxc.util.OrderGenerator;

@Controller
public class RequisitionController {
	
	@Autowired
	private RequisitionService requisitionmapperservice;
	@Autowired
	private EmployeeService employeeservice;
	@Autowired
	private StoreHouseService storehouseservice;
	@Autowired
	private ProductService productService;
	@Autowired
	private RequisitionDetailService requisitiondetailservice;
	
	//进入调拨页面
	@RequestMapping("/gorequisition")
	public String gorequisition(
			@RequestParam(value="requisitionId",required=false) String requisitionId,
			@RequestParam(value="shname",required=false) String shname,
			@RequestParam(value="startDate",required=false) String time1,
			@RequestParam(value="endDate",required=false) String time2,
			@RequestParam(value="pageNo",required=false)Integer pageNo,
			Model model) {
		if(pageNo==null || pageNo==0) {
			pageNo=1;
		}
		//调拨订单表查询
		PageInfo<Requisition> reslist = requisitionmapperservice.getRequisition(null,null,null,null,pageNo,8);		
		model.addAttribute("reslist", reslist);
		model.addAttribute("requisitionid", requisitionId);
		model.addAttribute("shname", shname);
		model.addAttribute("startDate", time1);
		model.addAttribute("endDate", time2);
		return "resuisition/requisition";
	}
	
	//按条件查询
	@RequestMapping("getbyrsid")
	public String getByrsid(
			@RequestParam(value="requisitionId",required=false) String requisitionId,
			@RequestParam(value="shname",required=false) String shname,
			@RequestParam(value="startDate",required=false) String time1,
			@RequestParam(value="endDate",required=false) String time2,
			@RequestParam(value="pageNo",required=false)Integer pageNo,
			Model model) {
		if(pageNo==null || pageNo==0){
			pageNo=1;
		}
		PageInfo<Requisition> reslist = requisitionmapperservice.getRequisition(requisitionId,
				shname,time1,time2,pageNo,8);
		model.addAttribute("reslist", reslist);
		model.addAttribute("requisitionid", requisitionId);
		model.addAttribute("shname", shname);
		model.addAttribute("startDate", time1);
		model.addAttribute("endDate", time2);
		return "resuisition/requisition";
	}
	
	//明细查询
	@RequestMapping("/requisitionId")
	public String requisitionId(String requisitionId,Model model) {
		Requisition requisition = requisitionmapperservice.requisitionByid(requisitionId);
		model.addAttribute("requisition",requisition);
		return "resuisition/requisition";
	}
	
	//跳转至新增
	@RequestMapping("/gorequisitionadd")
	public String gorequisitionadd(Model model,HttpServletRequest request) {
		//单号
		String requisitionid=OrderGenerator.getOrderNo("DB");
		//制单人
		Employee e =(Employee) request.getSession().getAttribute("loginEmp");
		String name = e.getEmpLoginName();
		//员工信息
		PageInfo<Employee> employees = employeeservice.getEmployeeAll(1,10000);
		//仓库信息
		List<StoreHouse> storehouse = storehouseservice.getStoreHouselist();
		//产品信息
		PageInfo<Product> productAll = productService.getProductAll(1,5); 
		model.addAttribute("requisitionId", requisitionid);
		model.addAttribute("empLoginName", name);
		model.addAttribute("employees", employees.getList());
		model.addAttribute("storehouse", storehouse);
		model.addAttribute("productAll", productAll);
		return "resuisition/requisitionAdd";
	}
	
	
	//调拨新增
	@RequestMapping("requisitionAdd")
	public String addRequisition(
			Requisition requisition,
			String products,
			HttpServletRequest request) {
		List<RequisitionDetail> requisitionDetail = JSONObject.
				parseArray(products,RequisitionDetail.class);
		requisition.setRequisitiondetails(requisitionDetail);
		requisition.setRequestTime(new Date());
		int requisitioncount = requisitionmapperservice.Requisitionadd(requisition);
		if(requisitioncount == 1) {
			return "redirect:/gorequisitionadd";
		}else {
			return "redirect:/gorequisition";
		}
	}
	
	
	
//	/**
//	 * 根据仓库编号和页码获取库存中的产品信息
//	 * 
//	 * @param storeHouseId
//	 *            仓库编号
//	 * @param pageNo
//	 *            页码
//	 * @return
//	 */
//	@RequestMapping("/getProductByPage")
//	@ResponseBody
//	public String getStockPileByStoreHouseId(@RequestParam("storeHouseId") Integer storeHouseId,
//			@RequestParam(value = "pageNum", required = false) Integer pageNo) {
//		System.err.println("今天周二===");
//		if (pageNo == null || pageNo == 0) {
//			pageNo = 1;
//		}
//		PageInfo<StockPile> stockPileAll = stockPileService.getStockPileAll(storeHouseId, null, pageNo, 2);
//		System.err.println(stockPileAll.getList().size()+"==长度");
//		return JSON.toJSONString(stockPileAll);
//	}
	
	
	//跳转至修改
	@RequestMapping("gorequisitionupdate")
	public String gorequisitionupdate(String requisitionId,HttpServletRequest request,Model model) {		
		//调拨订单表
		Requisition requisition = requisitionmapperservice.requisitionByid(requisitionId);
		//调拨订单详情表
		PageInfo<RequisitionDetail> requisitionDetail = requisitiondetailservice
				.requisitionDetailById(requisitionId, 1, 1000);
		//仓库信息
		List<StoreHouse> storehouse = storehouseservice.getStoreHouselist();
		//产品信息
		PageInfo<Product> productAll = productService.getProductAll(1,5); 
		model.addAttribute("requisition",requisition);
		model.addAttribute("requisitionDetail",requisitionDetail);
		model.addAttribute("storehouse",storehouse);
		model.addAttribute("productAll",productAll);
		return "resuisition/requisitionUpdate";
	}
	/**
	 * 使用ajax实现根据id删除一条采购明细
	 * 
	 * @param id
	 * @return
	 */
	@RequestMapping("delrequisitionDetailById")
	public String delrequisitionByid(int id) {
		int delPurchaseRequestDetail = requisitiondetailservice.delrequisitionByid(id);
		if (delPurchaseRequestDetail > 0) { // 删除成功
			return "1";
		} else
			return "0";
	}	
	
	//修改提交
	@RequestMapping("requisitionUpdate")
	public String requisitionUpdate(Requisition requisition, Model model, String products) {
		try {
			// 修改基本信息
			List<RequisitionDetail> parseArray = JSONObject.parseArray(products, RequisitionDetail.class);
			requisition.setRequisitiondetails(parseArray);// 为产品详情赋值
			requisition.setRequestTime(new Date());
			int requisitioncount = requisitionmapperservice.RequisitionUpdate(requisition);
			if (requisitioncount > 0) {
				return "redirect:gorequisition";
			} else {
				return "error";
			} 
		} catch (Exception e) {
			e.printStackTrace();
			model.addAttribute("message", e.getMessage());
			return "error";
		}
	}
	
	/**
	 * 通过ajax实现 根据单号查询一个采购订单所有信息
	 * 
	 * @param singleNo
	 * @return
	 */
	@RequestMapping("getRequisitionBySingleNo")
	@ResponseBody
	public String getPurchaseRequestBySingleNo(@RequestParam("singleNo") String singleNo,
			@RequestParam(value = "pageNo", required = false) Integer pageNo) {
		if (null == pageNo) {
			pageNo = 1;
		}
		Requisition requisition = requisitionmapperservice.requisitionByid(singleNo);
		PageInfo<RequisitionDetail> pageinfos = requisitiondetailservice.requisitionDetailById(singleNo, pageNo, 3);
		pageinfos.getList().get(0).setRequisition(requisition);
		String jsonString = JSON.toJSONString(pageinfos);
		return jsonString;
	}
	/**
	 * 删除调拨订单
	 * 
	 * */
	@RequestMapping("deleteRequisition")
	public String deleteRequisition(String requisitionid) {
		try {
			String[] single = requisitionid.split("-");
			for (int i = 1; i < single.length; i++) {
				requisitionmapperservice.RequisitionDelete(single[i]);
			}
			return "redirect:gorequisition";
		} catch (Exception e) {
			e.printStackTrace();
			return "error";
		}
	}
	
	@RequestMapping("judgmens")
	@ResponseBody
	public String judgmen(String singleNo) {
		Requisition requisitionByid=requisitionmapperservice.getRequisitionById(singleNo);
		int count = requisitionByid.getOrderStatus().getNo();
		String num = "";
		if(count == 1|| count == 2|| count==5||count ==7) {
			num = "1";
			return num;
		} else{
			num = "0";
			return num;
		}
	}
	
	/**
	 * 导出excel 有pageNo导出当前 没有导出所有
	 * 
	 * @param pageNo
	 * @param request
	 * @param response
	 * @throws IOException
	 */
	@RequestMapping("/requisitionExport")
	public void requisitionExportExcel(
			@RequestParam(value = "pageNo", required = false) Integer pageNo,
			@RequestParam(value = "requisitionId", required = false) String requisitionId,
			@RequestParam(value = "requisitionnameEmp", required = false) String requisitionnameEmp,		
			HttpServletRequest request,
			HttpServletResponse response) throws IOException {
		// 获取数据
		List<Requisition> list =null;
		if (null == pageNo) {
			list = requisitionmapperservice.getRequisition(null, null,null,null, 1, 100000).getList();
		} else {
			list = requisitionmapperservice.getRequisition(requisitionId, null,null,null, pageNo, 8).getList();
		}
		// 获取文件名
		String fileName = "Requisition" + new SimpleDateFormat("MMddhhmmsss").format(new Date())
				+ String.valueOf((int) (Math.random() * 9 + 1) * 1000) + ".xlsx";
		// 生成excel并且下载
		new ExportExcel(null, Requisition.class, 1).setDataList(list).write(response, fileName).dispose();
	}
	
	//审核
	@RequestMapping("requisitionReview")
	public String deptReview(String requisitionId, Integer status, String reason, HttpServletRequest request) {
		Employee employee = (Employee) request.getSession().getAttribute("loginEmp");
		int order = 0;
		if(status==2){
			order = 4;
		}else if(status==3){
			order = 5;
		}
		int updaterequisition = requisitionmapperservice.updaterequisition(requisitionId, employee.getEmpLoginName(),
				new Date(), status,order, reason);
		if (updaterequisition > 0) { // 执行成功
			return "redirect:/gorequisition";
		} else {
			return "error";
		}
	}
	
	//修改订单状态
	@RequestMapping("requisitionoperaOrder")
	public String operaOrder(String trquisitionid, Integer orderid) {
		//int updatePurchaseOrderStatus = purchaseRequestService.updatePurchaseOrderStatus(singleNo, statusNo);// 直接把订单状态改成订单审核中
		int updaterequisition = requisitionmapperservice.UpdateOrderStatus(orderid, trquisitionid);
		if (updaterequisition > 0) { // 修改成功
			return "redirect:/gorequisition"; // 跳转到查询所有
		} else {
			return "error";
		}
	}
}