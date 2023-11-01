
package cn.jxc.controller;

import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.shiro.authz.annotation.RequiresPermissions;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import com.alibaba.fastjson.JSON;
import com.alibaba.fastjson.JSONObject;
import com.github.pagehelper.PageInfo;

import cn.jxc.excel.ExportExcel;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.Product;
import cn.jxc.pojo.PurchaseRequest;
import cn.jxc.pojo.PurchaseRequestDetail;
import cn.jxc.pojo.Supplier;
import cn.jxc.service.EmployeeService;
import cn.jxc.service.ProductService;
import cn.jxc.service.PurchaseRequestDetailService;
import cn.jxc.service.PurchaseRequestService;
import cn.jxc.service.SupplierService;
import cn.jxc.util.OrderGenerator;

@Controller
public class PurchaseRequestController {

	@Autowired
	private EmployeeService employeeService;
	@Autowired
	private SupplierService supplierService;
	@Autowired
	private ProductService productService;
	@Autowired
	private PurchaseRequestService purchaseRequestService;
	@Autowired
	private PurchaseRequestDetailService purchaseRequestDetailService;

	@RequiresPermissions("purchase:list")
	@RequestMapping("/gopurchase")
	public String gopurchase(@RequestParam(value = "pageNo", required = false) Integer pageNo,
			@RequestParam(value = "empNo", required = false) String empNo,
			@RequestParam(value = "singleNo", required = false) String singleNo,
			@RequestParam(value = "suppName", required = false) String suppName, Model model) {
		if (pageNo == null) {
			pageNo = 1;
		}
		PageInfo<PurchaseRequest> purchaseRequestByBlurry = purchaseRequestService.getPurchaseRequestByBlurry(pageNo, 10,
				empNo, singleNo, suppName);
		model.addAttribute("prbb", purchaseRequestByBlurry);
		model.addAttribute("empNo", empNo); // ��ѯ��������
		model.addAttribute("singleNo", singleNo);
		model.addAttribute("suppName", suppName);
		// model.addAttribute("msg", "a"); //ǰ̨��ʾ���
		return "purchase/purchaseRequest";
	}

	/**
	 * ��ת���ɹ���������ҳ��
	 * 
	 * @param model
	 * @return
	 */
	@RequiresPermissions("purchase:add")
	@RequestMapping("/goPurchaseRequest")
	public String goPurchaseRequest(Model model) {
		PageInfo<Employee> employees = employeeService.getEmployeeAll(1, 10000);
		List<Supplier> suppliers = supplierService.getSupplierAll();
		PageInfo<Product> productAll = productService.getProductAll(1, 5); // ��ҳ��ѯ �տ�ʼ�����ѯ��һҳ������

		model.addAttribute("employees", employees.getList());
		model.addAttribute("suppliers", suppliers);
		model.addAttribute("productAll", productAll);
		model.addAttribute("orderNo", OrderGenerator.getOrderNo("CG"));
		return "purchase/purchaseRequestAdd";
	}

	/**
	 * ͨ��ajaxʵ�ַ�ҳ��Ʒ��Ϣ �ɹ���������ҳ����
	 * 
	 * @return
	 */
	@RequestMapping(value = "/getProductByPage", method = RequestMethod.POST)
	@ResponseBody
	public String getProductPage(@RequestParam("pageNum") Integer pageNum) {
		PageInfo<Product> productAll = productService.getProductAll(pageNum, 5);
		return JSON.toJSONString(productAll);
	}

	/**
	 * ͨ��ajaxʵ�� ���ݲɹ����Ų�ѯһ���ɹ�����������Ϣ
	 * 
	 * @param singleNo
	 * @return
	 */
	@RequestMapping("getPurchaseRequestBySingleNo")
	@ResponseBody
	public String getPurchaseRequestBySingleNo(@RequestParam("singleNo") String singleNo,
			@RequestParam(value = "pageNo", required = false) Integer pageNo) {
		if (null == pageNo) {
			pageNo = 1;
		}
		PurchaseRequest purchaseRequestBySingleNo = purchaseRequestService.getPurchaseRequestBySingleNo(singleNo);
		PageInfo<PurchaseRequestDetail> pageInfos = purchaseRequestDetailService.getPurchaseRequestDetail(singleNo,
				pageNo, 3);
		pageInfos.getList().get(0).setPurchaserequest(purchaseRequestBySingleNo);
		String jsonString = JSON.toJSONString(pageInfos);
		return jsonString;
	}

	/**
	 * �ɹ����������
	 * 
	 * @return
	 * @author Killy
	 * @param purchaseRequestadd
	 *            ���еĲ���
	 * @param products
	 *            �ɹ�������ϸ
	 */
	@RequestMapping("/productRequestAdd")
	public String productRequestAdd(PurchaseRequest purchaseRequestadd, String products) {
		List<PurchaseRequestDetail> purchaseRequestDetails = JSONObject.parseArray(products,
				PurchaseRequestDetail.class);
		purchaseRequestadd.setPurchaserequestdetails(purchaseRequestDetails);
		int addPurchaseRequest = purchaseRequestService.addPurchaseRequest(purchaseRequestadd);
		if (addPurchaseRequest == 1) { // ����ʧ��
			return "error";
		} else { // ����ɹ�
			return "redirect:gopurchase"; // ��ת����ҳ��ѯҳ��
		}
	}

	/**
	 * ��ת���޸ĵ�ҳ��
	 * 
	 * @param singleNo
	 * @param model
	 * @return
	 */
	@RequiresPermissions("purchase:update")
	@RequestMapping("/goPurchaseUpdate")
	public String goPurchaseUpdate(String singleNo, Model model, Integer productPageNo) {
		if (null == productPageNo) {
			productPageNo = 1;
		}
		// ���ݶ����Ų�ѯһ������������Ϣ
		PurchaseRequest purchase = purchaseRequestService.getPurchaseRequestBySingleNo(singleNo);
		PageInfo<PurchaseRequestDetail> purchaseRequestDetails = purchaseRequestDetailService
				.getPurchaseRequestDetail(singleNo, 1, 1000);
		PageInfo<Employee> employeeAll = employeeService.getEmployeeAll(1, 10000);
		List<Supplier> supplierAll = supplierService.getSupplierAll();
		PageInfo<Product> productAll = productService.getProductAll(productPageNo, 5);
		model.addAttribute("purchase", purchase);
		model.addAttribute("purchaseDetails", purchaseRequestDetails);
		model.addAttribute("employeeAll", employeeAll.getList());
		model.addAttribute("supplierAll", supplierAll);
		model.addAttribute("productAll", productAll);
		return "purchase/purchaseUpdate";
	}

	/**
	 * �ɹ������޸ĵķ��� ͬʱ��Ӳɹ�������ϸ
	 * 
	 * @return
	 */
	@RequestMapping("productRequestUpdate")
	public String productRequestUpdate(PurchaseRequest purchaseRequest, Model model, String products) {
		// �޸Ļ�����Ϣ
		List<PurchaseRequestDetail> parseArray = JSONObject.parseArray(products, PurchaseRequestDetail.class);
		purchaseRequest.setPurchaserequestdetails(parseArray);// Ϊ��Ʒ���鸳ֵ
		int updatePurchaseRequest = purchaseRequestService.updatePurchaseRequest(purchaseRequest);
		if (updatePurchaseRequest > 0) { // �޸ĳɹ�
			return "redirect:gopurchase";
		} else { // �޸�ʧ��
			return "error";
		}
	}

	/**
	 * 
	 * �޸�ҳ���ҳ��ѯ�ɹ�������ϸ
	 * 
	 * @param pageNum
	 * @param purchaseId
	 * @return
	 */
	@RequestMapping("getExistProductByPage")
	@ResponseBody
	public String getExistProductByPage(Integer pageNum, String purchaseId) {
		PageInfo<PurchaseRequestDetail> purchaseRequestDetail = purchaseRequestDetailService
				.getPurchaseRequestDetail(purchaseId, pageNum, 99999);
		return JSON.toJSONString(purchaseRequestDetail);
	}

	/**
	 * ʹ��ajaxʵ�ָ���idɾ��һ���ɹ���ϸ
	 * 
	 * @param id
	 * @return
	 */
	@RequiresPermissions("purchase:delete")
	@RequestMapping("delPurchaseDetailById")
	@ResponseBody
	public String delPurchaseDetailById(int id) {
		int delPurchaseRequestDetail = purchaseRequestDetailService.delPurchaseRequestDetail(id);
		if (delPurchaseRequestDetail > 0) { // ɾ���ɹ�
			return "1";
		} else
			return "0";
	}

	/**
	 * �ύ��
	 * 
	 * @return
	 */
	@RequestMapping("operaOrder")
	public String operaOrder(String singleNo, Integer statusNo) {
		int updatePurchaseOrderStatus = purchaseRequestService.updatePurchaseOrderStatus(singleNo, statusNo);// ֱ�ӰѶ���״̬�ĳɶ��������
		if (updatePurchaseOrderStatus > 0) { // �޸ĳɹ�
			return "redirect:gopurchase"; // ��ת����ѯ����
		} else {
			return "error";
		}
	}

	/**
	 * ������� ���ž������
	 * 
	 * @param singleNo
	 *            ������
	 * @param no
	 *            �Ƿ�ͨ��
	 * @param reason
	 *            ԭ��
	 * @return
	 */
	@RequiresPermissions("purchase:deptreview")
	@RequestMapping("deptReview")
	public String deptReview(String singleNo, Integer no, String reason, HttpServletRequest request) {
		Employee employee = (Employee) request.getSession().getAttribute("loginEmp");
		int updateDeptReivewStatus = purchaseRequestService.updateDeptReivewStatus(singleNo, employee.getEmpLoginName(),
				new Date(), no, reason);
		if (updateDeptReivewStatus > 0) { // ִ�гɹ�
			return "redirect:gopurchase";
		} else {
			return "error";
		}
	}

	/**
	 * ������˲ɹ���
	 * 
	 * @param singleNo
	 *            �ɹ�����
	 * @param no
	 *            �Ƿ�ͬ��
	 * @param reason
	 *            ԭ��
	 * @param request
	 * @return
	 */
	@RequiresPermissions("purchase:finalreview")
	@RequestMapping("finalReview")
	public String finalReview(String singleNo, Integer no, String reason, HttpServletRequest request) {
		Employee employee = (Employee) request.getSession().getAttribute("loginEmp");
		int updateFinancialReivewStatus = purchaseRequestService.updateFinancialReivewStatus(singleNo,
				employee.getEmpLoginName(), new Date(), no, reason);
		if (updateFinancialReivewStatus > 0) {// ִ�гɹ�
			return "redirect:gopurchase";
		} else
			return "error";
	}

	/**
	 * ʹ��ajax��֤�Ƿ����ִ�в���
	 * 
	 * @param singleNo
	 * @return
	 */
	@RequestMapping("judgmen")
	@ResponseBody
	public String judgmen(String singleNo) {
		PurchaseRequest purchaseRequestBySingleNo = purchaseRequestService.getPurchaseRequestBySingleNo(singleNo);
		int no = purchaseRequestBySingleNo.getOrderStatus().getNo();
		if (no == 2 || no == 5 || no == 7) { // ������״̬����ȡ�� �ܾ� ȫ������״̬�ſ���ɾ��
			return "1";
		} else
			return "0"; // ������ɾ��
	}

	/**
	 * ɾ����ѡ����
	 * 
	 * @return
	 */
	@RequestMapping("deletePurchases")
	public String deletePurchases(String singleNos) {
		try {
			String[] single = singleNos.split("-");
			for (int i = 1; i < single.length; i++) {
				purchaseRequestService.deletePurchaseRequest(single[i]);
			}
			return "redirect:gopurchase";
		} catch (Exception e) {
			e.printStackTrace();
			return "error";
		}
	}

	/**
	 * ����excel ��pageNo������ǰ û�е�������
	 * 
	 * @param pageNo
	 * @param request
	 * @param response
	 * @throws IOException
	 */
	@RequestMapping("/purchaseExport")
	public void exportExcel(@RequestParam(value = "pageNo", required = false) Integer pageNo,
			@RequestParam(value = "empNo", required = false) String empNo,
			@RequestParam(value = "singleNo", required = false) String singleNo,
			@RequestParam(value = "suppName", required = false) String suppName, HttpServletRequest request,
			HttpServletResponse response) throws IOException {
		// ��ȡ����
		List<PurchaseRequest> list = null;
		if (null == pageNo && empNo == null && singleNo == null && suppName == null) {
			list = purchaseRequestService.getPurchaseRequestByBlurry(1, 100000, null, null, null).getList();
		} else if (null == pageNo && (empNo != null || singleNo != null || suppName != null)) {
			list = purchaseRequestService.getPurchaseRequestByBlurry(1, 999999, empNo, singleNo, suppName).getList();
		} else {
			list = purchaseRequestService.getPurchaseRequestByBlurry(pageNo, 5, empNo, singleNo, suppName).getList();
		}
		// ��ȡ�ļ���
		String fileName = "Purchase" + new SimpleDateFormat("MMddhhmmsss").format(new Date())
				+ String.valueOf((int) (Math.random() * 9 + 1) * 1000) + ".xlsx";
		// ����excel��������
		new ExportExcel(null, PurchaseRequest.class, 1).setDataList(list).write(response, fileName).dispose();
	}

	/**
	 *
	 * �����Ѿ�������ݵ�Excel
	 * 
	 * @param multipartFile
	 */
	/*
	 * @RequestMapping(value = "purchaseImport", method = RequestMethod.GET) public
	 * void importFile(MultipartFile multipartFile) { try { int failureNum = 0;
	 * StringBuilder failureMsg = new StringBuilder(); ImportExcel ei = new
	 * ImportExcel(multipartFile, 1, 0); List<PurchaseRequest> list =
	 * ei.getDataList(PurchaseRequest.class); for (PurchaseRequest user : list) {
	 * try { // to do: ���洦������ // userService.save(user); //
	 * logger.info(user.toString());
	 * purchaseRequestService.addPurchaseRequest(user); } catch (Exception ex) {
	 * failureNum++; } }
	 * 
	 * if (failureNum > 0) { failureMsg.insert(0, ", Failures: " + failureNum); } }
	 * catch (Exception e) { e.printStackTrace(); } }
	 */

}
