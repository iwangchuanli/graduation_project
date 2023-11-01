package cn.jxc.controller;

import java.util.Date;
import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import com.alibaba.fastjson.JSON;
import com.alibaba.fastjson.JSONArray;
import com.alibaba.fastjson.JSONObject;
import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.CheckDetails;
import cn.jxc.pojo.Checks;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.EnterStockType;
import cn.jxc.pojo.Product;
import cn.jxc.pojo.ReviewStatus;
import cn.jxc.pojo.StoreHouse;
import cn.jxc.service.CheckDetailsService;
import cn.jxc.service.ChecksService;
import cn.jxc.service.EmployeeService;
import cn.jxc.service.EnterStockTypeService;
import cn.jxc.service.ProductService;
import cn.jxc.service.ReviewStatusService;
import cn.jxc.service.StoreHouseService;
import cn.jxc.util.OrderGenerator;

@Controller
public class CheckConroller {
	@Autowired
	private ReviewStatusService rsmapperservice;
	@Autowired
	private ChecksService checkService;
	@Autowired
	private EnterStockTypeService enterStockType;
	@Autowired
	private EmployeeService employeeService;

	@Autowired
	private ProductService productService;
	@Autowired
	private ChecksService checksService;
	@Autowired
	private CheckDetailsService checkDetailsService;
	@Autowired
	private StoreHouseService storehouseservice;

	private static int pageSize = 5;

	/**
	 * 盘点单首页展示
	 * 
	 * @param singleNo
	 * @param pageNo
	 * @param start
	 * @param end
	 * @param model
	 * @return
	 */

	@RequestMapping("/goCheck")
	public String gopermission(@RequestParam(value = "singleNo", required = false) String singleNo,
			@RequestParam(value = "pageNo", required = false) Integer pageNo,
			@RequestParam(value = "start", required = false) String start,
			@RequestParam(value = "end", required = false) String end,
			@RequestParam(value = "rsid", required = false) Integer rsid, HttpServletRequest request, Model model) {
		if (pageNo == null) {
			pageNo = 1;
		}
		System.err.println(singleNo);
		System.err.println(start);
		System.err.println(end);
		System.err.println(rsid);
		List<StoreHouse> storehouse = storehouseservice.getStoreHouselist();
		List<ReviewStatus> rslist = rsmapperservice.getReviewStatus();
		PageInfo<Checks> checklist = checkService.getALLChecks(singleNo, null, start, end, rsid, pageNo, pageSize);
		model.addAttribute("cs", checklist);
		model.addAttribute("rslist", rslist);
		model.addAttribute("storehouse", storehouse);
		model.addAttribute("singleNo", singleNo);
		model.addAttribute("start", start);
		model.addAttribute("end", end);
		model.addAttribute("rsid", rsid);
		return "check/CheckList";
	}

	/**
	 * 跳转到盘点添加的页面
	 * 
	 * @param model
	 * @return
	 */
	@RequestMapping("/goCheckAdd")
	public String goegoCheckAdd(Model model) {
		List<EnterStockType> enterStockTypeAll = enterStockType.getEnterStockTypeAll();
		PageInfo<Employee> employeeAll = employeeService.getEmployeeAll(1, 10000);
		List<StoreHouse> storehouse = storehouseservice.getStoreHouselist();
		PageInfo<Product> productAll = productService.getProductAll(1, 5);
		List<ReviewStatus> rslist = rsmapperservice.getReviewStatus();
		System.out.println(storehouse.size() + "\t" + storehouse.get(0).getShName());

		String orderNo = OrderGenerator.getOrderNo("Check");
		model.addAttribute("orderNo", orderNo);
		model.addAttribute("estAll", enterStockTypeAll);
		model.addAttribute("employeeAll", employeeAll.getList());
		model.addAttribute("storehouse", storehouse);
		model.addAttribute("productAll", productAll);
		model.addAttribute("rslist", rslist);
		return "check/CheckAdd";
	}

	/**
	 * 跳转到盘点修改的页面
	 * 
	 * @param model
	 * @return
	 */
	@RequestMapping("/goChecksUpdate")
	public String goegoCheckUpdate(String singleNo, Model model, Integer productPageNo) {
		if (null == productPageNo) {
			productPageNo = 1;
		}
		// 根据订单号查询一个订单所有信息e

		Checks ck = new Checks();
		String orderNo = OrderGenerator.getOrderNo("CheckUpdate");
		ck.setCid(orderNo);
		Checks check = checksService.checksOne(singleNo);
		PageInfo<CheckDetails> checkdetails = checkDetailsService.getCheckDetails(singleNo, 1, 1000);
		checkdetails.getList().get(0).setCid(check);
		PageInfo<Product> productAll = productService.getProductAll(productPageNo, 5);
		List<Employee> list = employeeService.getEmployeeAll(1, 10000).getList();
		model.addAttribute("ck", ck);
		model.addAttribute("productAll", productAll);
		model.addAttribute("cd", checkdetails);
		model.addAttribute("ck", check);
		model.addAttribute("employees", list);

		return "check/CheckUpdate";
	}

	/**
	 * 添加详细信息 CheckDetailsAdd
	 */
	@RequestMapping("/CheckDetailsAdd")
	public String CheckDetailsAdd(@RequestParam("cid") String cid,
			@RequestParam("createStartDate") Date createStartDate, @RequestParam("ccreater") String ccreater,
			@RequestParam("products") String products) {
		System.out.println("进入ajax CheckDetailsAdd===============" + products);
		System.err.println(createStartDate + "\t" + ccreater);
		Checks ck = new Checks();
		ck.setCcreater(ccreater);
		ck.setCid(cid);
		ck.setCreateStartDate(createStartDate);
		ck.setCreateEndDate(createStartDate);
		List<CheckDetails> parseArray = JSONObject.parseArray(products, CheckDetails.class);
		ck.setList(parseArray);
		int n = checksService.ChecksAdd(ck);
		if (n == 1) { // 申请失败
			return "error";
		} else { // 申请成功
			return "redirect:/goCheck"; // 跳转到首页查询页面
		}
	}

	/**
	 * ajax返回盘点详细
	 * 
	 */
	@RequestMapping("/ajaxCheckDetails")
	@ResponseBody
	public String ajaxCheckDetails(@RequestParam("singleNo") String singleNo,
			@RequestParam(value = "pageNo", required = false) Integer pageNo) {
		if (null == pageNo) {
			pageNo = 1;
		}
		Checks list = checksService.checksOne(singleNo);
		PageInfo<CheckDetails> listpageInfos = checkDetailsService.getCheckDetails(singleNo, pageNo, 3);
		listpageInfos.getList().get(0).setCid(list);
		System.err.println(listpageInfos.getList().get(0).getCid().getCreateStartDate());
		System.err.println(listpageInfos.getList().get(0).getCid().getCcreater());
		return JSON.toJSONString(listpageInfos);
	}

	/**
	 * 修改盘点详情
	 * 
	 * @param ck
	 * @param products
	 * @return
	 */
	@RequestMapping("/CheckDetailsUpdate")
	public String CheckDetailsUpdate(Checks ck, String products) {
		List<CheckDetails> parseArray = JSONArray.parseArray(products, CheckDetails.class);
		ck.setList(parseArray);
		int n = checksService.ChecksUpdate(ck);
		if (n == 1) { // 申请失败
			return "error";
		} else { // 申请成功
			return "redirect:goCheck"; // 跳转到首页查询页面
		}
	}

	/**
	 * 刷新首页
	 * 
	 */
	@RequestMapping("/goRefresh")
	public String goCheckStockDetail(Checks ck, String products) {
		System.out.println("进入 goRefresh===============");

		return "forward:/goCheck"; // 跳转到首页查询页面

	}

	/**
	 * 删除盘点单
	 * 
	 * @param singleNo
	 *            盘点单号
	 * @param model
	 * @return
	 */
	@RequestMapping("/deleteCheckAndDetails")
	public String deleteCheckAndDetails(@RequestParam("singleNo") String singleNo, Model model) {
		int n = checksService.ChecksDelete(singleNo);
		if (n == 1) { // 申请失败
			model.addAttribute("message", "删除盘点单失败===");
			return "error";
		} else { // 申请成功
			return "redirect:/goCheck"; // 跳转到首页查询页面
		}
	}

	/**
	 * ajax判断是否存在记录
	 * 
	 */
	@RequestMapping("/ajaxHasRow")
	@ResponseBody
	public String ajaxHasRow() {
		System.out.println("进入ajax ajaxHasRow===============");
		int n = checksService.selectCount();
		if (n >= 1) { // 申请失败
			return "1";
		} else { // 申请成功
			return "0"; // 跳转到首页查询页面
		}
	}

	/**
	 * 盘点单据审核
	 * 
	 * @param singleNo
	 * @return
	 */
	@RequestMapping("/ChecksReview")
	public String ajaxChecksReview(String singleNo, Integer review, HttpSession session, Model model) {
		try {
			Employee employee = (Employee) session.getAttribute("loginEmp");
			Checks ck = new Checks();
			// 对象中加入审核人
			ck.setCreviewEmp(employee);
			ck.setCreviewDate(new Date());
			ReviewStatus rs = new ReviewStatus();
			if (review == 0) {// 审核是否通过 0 表示不通过 1表示通过
				rs.setRsId(3);
			} else {
				rs.setRsId(2);
			}
			ck.setStates(rs);
			ck.setCid(singleNo);
			checksService.ChecksReview(ck);
			return "redirect:/goCheck"; // 跳转到首页查询页面
		} catch (Exception e) {
			// TODO: handle exception
			model.addAttribute("message", e.getMessage());
			return "error";
		}
	}
}
