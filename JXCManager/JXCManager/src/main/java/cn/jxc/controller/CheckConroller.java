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
	 * �̵㵥��ҳչʾ
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
	 * ��ת���̵���ӵ�ҳ��
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
	 * ��ת���̵��޸ĵ�ҳ��
	 * 
	 * @param model
	 * @return
	 */
	@RequestMapping("/goChecksUpdate")
	public String goegoCheckUpdate(String singleNo, Model model, Integer productPageNo) {
		if (null == productPageNo) {
			productPageNo = 1;
		}
		// ���ݶ����Ų�ѯһ������������Ϣe

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
	 * �����ϸ��Ϣ CheckDetailsAdd
	 */
	@RequestMapping("/CheckDetailsAdd")
	public String CheckDetailsAdd(@RequestParam("cid") String cid,
			@RequestParam("createStartDate") Date createStartDate, @RequestParam("ccreater") String ccreater,
			@RequestParam("products") String products) {
		System.out.println("����ajax CheckDetailsAdd===============" + products);
		System.err.println(createStartDate + "\t" + ccreater);
		Checks ck = new Checks();
		ck.setCcreater(ccreater);
		ck.setCid(cid);
		ck.setCreateStartDate(createStartDate);
		ck.setCreateEndDate(createStartDate);
		List<CheckDetails> parseArray = JSONObject.parseArray(products, CheckDetails.class);
		ck.setList(parseArray);
		int n = checksService.ChecksAdd(ck);
		if (n == 1) { // ����ʧ��
			return "error";
		} else { // ����ɹ�
			return "redirect:/goCheck"; // ��ת����ҳ��ѯҳ��
		}
	}

	/**
	 * ajax�����̵���ϸ
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
	 * �޸��̵�����
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
		if (n == 1) { // ����ʧ��
			return "error";
		} else { // ����ɹ�
			return "redirect:goCheck"; // ��ת����ҳ��ѯҳ��
		}
	}

	/**
	 * ˢ����ҳ
	 * 
	 */
	@RequestMapping("/goRefresh")
	public String goCheckStockDetail(Checks ck, String products) {
		System.out.println("���� goRefresh===============");

		return "forward:/goCheck"; // ��ת����ҳ��ѯҳ��

	}

	/**
	 * ɾ���̵㵥
	 * 
	 * @param singleNo
	 *            �̵㵥��
	 * @param model
	 * @return
	 */
	@RequestMapping("/deleteCheckAndDetails")
	public String deleteCheckAndDetails(@RequestParam("singleNo") String singleNo, Model model) {
		int n = checksService.ChecksDelete(singleNo);
		if (n == 1) { // ����ʧ��
			model.addAttribute("message", "ɾ���̵㵥ʧ��===");
			return "error";
		} else { // ����ɹ�
			return "redirect:/goCheck"; // ��ת����ҳ��ѯҳ��
		}
	}

	/**
	 * ajax�ж��Ƿ���ڼ�¼
	 * 
	 */
	@RequestMapping("/ajaxHasRow")
	@ResponseBody
	public String ajaxHasRow() {
		System.out.println("����ajax ajaxHasRow===============");
		int n = checksService.selectCount();
		if (n >= 1) { // ����ʧ��
			return "1";
		} else { // ����ɹ�
			return "0"; // ��ת����ҳ��ѯҳ��
		}
	}

	/**
	 * �̵㵥�����
	 * 
	 * @param singleNo
	 * @return
	 */
	@RequestMapping("/ChecksReview")
	public String ajaxChecksReview(String singleNo, Integer review, HttpSession session, Model model) {
		try {
			Employee employee = (Employee) session.getAttribute("loginEmp");
			Checks ck = new Checks();
			// �����м��������
			ck.setCreviewEmp(employee);
			ck.setCreviewDate(new Date());
			ReviewStatus rs = new ReviewStatus();
			if (review == 0) {// ����Ƿ�ͨ�� 0 ��ʾ��ͨ�� 1��ʾͨ��
				rs.setRsId(3);
			} else {
				rs.setRsId(2);
			}
			ck.setStates(rs);
			ck.setCid(singleNo);
			checksService.ChecksReview(ck);
			return "redirect:/goCheck"; // ��ת����ҳ��ѯҳ��
		} catch (Exception e) {
			// TODO: handle exception
			model.addAttribute("message", e.getMessage());
			return "error";
		}
	}
}
