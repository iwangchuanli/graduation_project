package cn.jxc.controller;

import java.io.IOException;
import java.text.ParseException;
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
import com.alibaba.fastjson.JSONArray;
import com.github.pagehelper.PageInfo;

import cn.jxc.excel.ExportExcel;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.EnterStock;
import cn.jxc.pojo.EnterStockDetail;
import cn.jxc.pojo.EnterStockType;
import cn.jxc.pojo.Product;
import cn.jxc.pojo.ProductUnit;
import cn.jxc.pojo.StockPile;
import cn.jxc.pojo.StoreHouse;
import cn.jxc.service.BackSalesDetailService;
import cn.jxc.service.BackSalesService;
import cn.jxc.service.EmployeeService;
import cn.jxc.service.EnterStockDetailService;
import cn.jxc.service.EnterStockService;
import cn.jxc.service.EnterStockTypeService;
import cn.jxc.service.ProductService;
import cn.jxc.service.PurchaseRequestDetailService;
import cn.jxc.service.PurchaseRequestService;
import cn.jxc.service.RequisitionDetailService;
import cn.jxc.service.RequisitionService;
import cn.jxc.service.StockPileService;
import cn.jxc.service.StoreHouseService;
import cn.jxc.util.OrderGenerator;

/**
 * 入库控制器
 * 
 * @author lxq
 *
 */
@Controller
public class EnterStockController {

	@Autowired
	private EnterStockTypeService enterStockType;
	@Autowired
	private EnterStockService enterStockService;
	@Autowired
	private EnterStockDetailService enterStockDetailService;
	@Autowired
	private EmployeeService employeeService;
	@Autowired
	private StoreHouseService storeHouseService;
	@Autowired
	private ProductService productService;
	@Autowired
	private BackSalesService backSalesService;
	@Autowired
	private RequisitionService requisitionService;
	@Autowired
	private PurchaseRequestService purchaseRequestService;
	@Autowired
	private PurchaseRequestDetailService purchaseRequestDetailService;
	@Autowired
	private BackSalesDetailService backSalesDetailService;
	@Autowired
	private RequisitionDetailService requisitionDetailService;
	@Autowired
	private StockPileService stockPileService;// 库存信息业务

	/**
	 * 跳转到入库单页面
	 * 
	 * @param singleNo
	 * @param shName
	 * @param start
	 * @param end
	 * @param pageNo
	 * @param model
	 * @return
	 * @throws ParseException
	 */
	@RequestMapping("/goenterstock")
	public String goenterstock(@RequestParam(value = "singleNo", required = false) String singleNo,
			@RequestParam(value = "shName", required = false) String shName,
			@RequestParam(value = "start", required = false) String start,
			@RequestParam(value = "end", required = false) String end,
			@RequestParam(value = "pageNo", required = false) Integer pageNo, Model model) throws ParseException {
		if (null == pageNo) {
			pageNo = 1;
		}
		PageInfo<EnterStock> enterStockBySuless = enterStockService.getEnterStockBySuless(singleNo, shName, start, end,
				pageNo, 5);
		model.addAttribute("ess", enterStockBySuless);
		model.addAttribute("singleNo", singleNo);
		model.addAttribute("shName", shName);
		model.addAttribute("start", start);
		model.addAttribute("end", end);
		return "enterStork/enterStock";
	}

	/**
	 * 跳转到入库添加的页面
	 * 
	 * @param model
	 * @return
	 */
	@RequestMapping("/goenterstockadd")
	public String goenterstockadd(Model model) {
		List<EnterStockType> enterStockTypeAll = enterStockType.getEnterStockTypeAll();
		PageInfo<Employee> employeeAll = employeeService.getEmployeeAll(1, 10000);
		List<StoreHouse> storeHouselist = storeHouseService.getStoreHouselist();
		PageInfo<Product> productAll = productService.getProductAll(1, 5);
		String orderNo = OrderGenerator.getOrderNo("RK");
		model.addAttribute("estAll", enterStockTypeAll);
		model.addAttribute("employeeAll", employeeAll.getList());
		model.addAttribute("storeHouseAll", storeHouselist);
		model.addAttribute("productAll", productAll);
		model.addAttribute("orderNo", orderNo);
		return "enterStork/enterStockAdd";
	}

	/**
	 * 入库添加
	 * 
	 * @param enterStock
	 *            入库对象
	 * @param enterStockProducts
	 *            入库详情信息
	 * @return
	 */
	@RequestMapping("/enterStockInsert")
	public String enterStockInsert(EnterStock enterStock,
			@RequestParam("enterStockProducts") String enterStockProducts) {
		List<EnterStockDetail> parseArray = JSONArray.parseArray(enterStockProducts, EnterStockDetail.class);
		enterStock.setEnterstockdetails(parseArray);
		int enterStockAdd = enterStockService.enterStockAdd(enterStock);
		if (enterStockAdd > 0) { // 添加成功
			return "redirect:goenterstock";
		} else {
			return "error";
		}
	}

	/**
	 * 通过ajax实现级联上游单号
	 * 
	 * @param type
	 *            入库类型
	 * @return
	 */
	@RequestMapping("/getUpstreamNo")
	@ResponseBody
	public String getUpstreamNo(String type) {
		if ("1".equals(type)) {
			// 查询出采购单中可以入库的单子 订单状态为6的单据
			return JSON.toJSONString(purchaseRequestService.getPurchaseRequestByOrderStatus(6));
		} else if ("2".equals(type)) {
			return JSON.toJSONString(backSalesService.getBackSalesAll());
		} else if ("3".equals(type)) {
			return JSON.toJSONString(requisitionService.getRequisition(null, null,null,null, 1, 1000).getList());
		} else {
			return "";
		}
	}

	/**
	 * 根据选中的订单号 获取订单详情
	 * 
	 * @param singleNo
	 * @param type
	 * @return
	 */
	@RequestMapping("/getSingleNoDetail")
	@ResponseBody
	public String getSingleNoDetail(String singleNo, String type) {
		if ("1".equals(type)) { // 采购
			return JSON
					.toJSONString(purchaseRequestDetailService.getPurchaseRequestDetail(singleNo, 1, 10000).getList());
		} else if ("2".equals(type)) { // 退货入库
			return JSON.toJSONString(backSalesDetailService.getBackSalesDetailBySingleNo(singleNo));
		} else if ("3".equals(type)) { // 调拨入库
			return JSON.toJSONString(requisitionDetailService.requisitionDetailById(singleNo, 1, 10000).getList());
		} else {
			return "";
		}
	}

	/**
	 * 使用ajax实现根据订单号查询入库单 入库单详情使用分页实现
	 * 
	 * @param singleNo
	 *            入库单号
	 * @param pageNo
	 *            页码数
	 * @return
	 * @throws ParseException
	 */
	@RequestMapping("/getEnterStockBySingleNo")
	@ResponseBody
	public String getEnterStockBySingleNo(String singleNo,
			@RequestParam(value = "pageNo", required = false) Integer pageNo) throws ParseException {
		EnterStock enterStock = enterStockService.getEnterStockBySuless(singleNo, null, null, null, 1, 1000).getList()
				.get(0);
		if (pageNo == null) {
			pageNo = 1;
		}
		PageInfo<EnterStockDetail> enterStockDetailBySingleNo = enterStockDetailService
				.getEnterStockDetailBySingleNo(singleNo, pageNo, 3);
		enterStockDetailBySingleNo.getList().get(0).setEnterstock(enterStock);
		return JSON.toJSONString(enterStockDetailBySingleNo);
	}
	// ←↙↓↘→↗↑↖
	// ' ─ wow ──▌▒█───────────▄▀▒▌─── \n', \ ←←←←←←      ------  -------
	// ' ────────▌▒▒▀▄───────▄▀▒▒▒▐─── \n', \ ←←←←←←      |    |    |  |
	// ' ───────▐▄▀▒▒▀▀▀▀▄▄▄▀▒▒▒▒▒▐─── \n', \ ←←←←←←      |    |   |  |
	// ' ─────▄▄▀▒▒▒▒▒▒▒▒▒▒▒█▒▒▄█▒▐─── \n', \ ←←←←←←      |----|  |  |
	// ' ───▄▀▒▒▒▒▒▒ ▒▒▒▒ ▒▒▒▄▀rence ─ \n', \ ←←←←←←      |    |  ------
	// ' ──▐▒▒▒▄▄▄▒▒▒▒▒▒▒▒▒▒▒▒▒▀▄▒▒▌── \n', \ ←←←←←←      |    |  |    |
	// ' ──▌▒▒▐▄█▀▒▒▒▒▄▀█▄▒▒▒▒▒▒▒█▒▐── \n', \ ←←←←←←      ------  ------
	// ' ─▐▒▒▒▒▒▒▒▒▒▒▒▌██▀▒▒▒▒▒▒▒▒▀▄▌─ \n', \ ←←←←←←      
	// ' ─▌▒▀▄██▄▒▒▒▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌─ \n', \ ←←←←←←      
	// ' ─▌▀▐▄█▄█▌▄▒▀▒▒▒▒▒▒░░░░░░▒▒▒▐─ \n', \ ←←←←←←      
	// ' ▐▒▀▐▀▐▀▒▒▄▄▒▄▒▒▒ electrons ▒▌ \n', \ ←←←←←←      
	// ' ▐▒▒▒▀▀▄▄▒▒▒▄▒▒▒▒▒▒░░░░░░▒▒▒▐─ \n', \ ←←←←←←      
	// ' ─▌▒▒▒▒▒▒▀▀▀▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌─ \n', \ ←←←←←←      
	// ' ─▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▐── \n', \ ←←←←←←      
	// ' ──▀ amaze ▒▒▒▒▒▒▒▒▒▒▒▄▒▒▒▒▌── \n', \ ←←←←←←      
	// ' ────▀▄▒▒▒▒▒▒▒▒▒▒▄▄▄▀▒▒▒▒▄▀─── \n', \ ←←←←←←      
	// ' ───▐▀▒▀▄▄▄▄▄▄▀▀▀▒▒▒▒▒▄▄▀───── \n', \ ←←←←←←      
	// ' ──▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀▀──────── \n', \ ←←←←←←      

	/**
	 * 入库单审核
	 * 
	 * @param singleNo
	 *            单号
	 * @param no
	 *            审核是否通过
	 * @param reason
	 *            审核原因
	 * @param request
	 * @return
	 */
	@RequestMapping("/enterStockReview")
	public String enterStockReview(String singleNo, Integer no, String reason, HttpServletRequest request,
			Model model) {
		Employee employee = (Employee) request.getSession().getAttribute("loginEmp");
		if (no == 1) { // 审核同意
			no = 2;
			// ==============================重中之重 整个项目的核心在此
			// ========================================
			// 审核通过 向库存信息添加货物
			addStockPile(singleNo);
			// 入库审核通过的时候 如果是采购入库 回填采购单订单信息
			int enterStockTypeByESS = enterStockService.getEnterStockTypeByESS(singleNo);
			// 根据入库单号查询出上游单号
			EnterStock a = enterStockService.getEnterStockBySingleNo(singleNo);
			if (enterStockTypeByESS == 1) { // 采购入库
				// 采购入库单据回填数据 订单状态改成已入库
				purchaseRequestService.updatePurchaseOrderStatus(a.getUpstreamNo(), 7);
			} else if (enterStockTypeByESS == 2) { // 退货入库

			} else if (enterStockTypeByESS == 3) { // 调拨入库
				// 调拨单回填数据 订单状态改成已入库

			}
		} else if (no == 0) { // 审核不同意
			no = 3;
		}
		int enterStockReview = enterStockService.enterStockReview(singleNo, employee.getEmpLoginName(), new Date(), no,
				reason);
		if (enterStockReview > 0) {
			return "redirect:goenterstock";
		} else
			model.addAttribute("message", "审核入库单出现错误");
		return "error";
	}

	/**
	 * 向库存信息添加数据
	 * 
	 * @param singleNo
	 *            订单号
	 * @return
	 */
	public void addStockPile(String singleNo) {
		try {
			// 根据订单号查询出入库单详情
			List<EnterStockDetail> enterStockDetailsBySingleNo = enterStockDetailService
					.getEnterStockDetailBySingleNo(singleNo, 1, 1000000).getList();
			// 根据订单号查询入库单
			EnterStock enterStockBySingleNo = enterStockService.getEnterStockBySingleNo(singleNo);
			// 循环入库单详情所有产品
			for (EnterStockDetail esd : enterStockDetailsBySingleNo) {
				// 根据产品id和仓库编号查询是否有数据
				Integer hasProductByProductIdAndStoreHouseId = stockPileService.hasProductByProductIdAndStoreHouseId(
						esd.getProduct().getProductId(), enterStockBySingleNo.getStorehouse().getStoreHouseId());
				if (hasProductByProductIdAndStoreHouseId > 0) { // 代表有数据应该修改数量以及均价
					// 根据仓库编号和产品编号获取库存对象
					StockPile stockPile = stockPileService
							.getStockPileAll(enterStockBySingleNo.getStorehouse().getStoreHouseId(),
									esd.getProduct().getProductId(), 1, 1)
							.getList().get(0);
					// 修改对象中的数量以及均价
					StockPile stock = calcStockPilePriceAndSum(stockPile, esd.getProductCount(), esd.getProductPrice());
					// 执行修改功能
					stockPileService.updateStockPileCountAvgByStoreHouseAndProduct(
							stock.getStorehouse().getStoreHouseId(), stock.getProsPecification(),
							stock.getProduct().getProductId(), stock.getQuantity(), stock.getCostPrice());

				} else { // 没有数据 执行添加
					// 封装对象
					StockPile stockPile = getStockPile(esd.getProduct().getProductId(),
							esd.getProductUnit().getProductUnitId(),
							enterStockBySingleNo.getStorehouse().getStoreHouseId(), esd.getProductCount(),
							esd.getProductPrice());
					// 执行添加
					stockPileService.insertStockPile(stockPile);
				}
			}
		} catch (Exception e) {
			// TODO: handle exception
			System.err.println("----------------执行入库审核通过的时候  向库存信息添加修改数据的时候错误---------------");
			e.printStackTrace();
		}
	}

	/**
	 * 修改对象中应该修改的数据 均价和数量 顺便修改批量 就是当前日期
	 * 
	 * @param sp
	 *            数据库查询出的对象
	 * @param productSum
	 *            待添加产品的数量
	 * @param productPrice
	 *            待添加产品均价
	 * @return
	 */
	private StockPile calcStockPilePriceAndSum(StockPile sp, Integer productSum, Double productPrice) {
		int totalCount = productSum + sp.getQuantity();
		Double oldTotal = sp.getQuantity() * sp.getCostPrice();// 仓库中的价格
		Double addTotal = productPrice * productSum; // 待添加的价格
		Double costPrice = (oldTotal + addTotal) / (totalCount);// 最新均价
		sp.setCostPrice(costPrice);
		sp.setQuantity(totalCount);
		sp.setProsPecification(new SimpleDateFormat("yyyy-MM-dd").format(new Date()));
		return sp;
	}

	/**
	 * 根据数据封装库存信息对象
	 * 
	 * @param productId
	 *            产品id
	 * @param productunit
	 *            规格
	 * @param storeHouseId
	 *            仓库id
	 * @param quantity
	 *            数量
	 * @param costPrice
	 *            均价
	 * @return
	 */
	private StockPile getStockPile(String productId, Integer productunit, Integer storeHouseId, Integer quantity,
			Double costPrice) {
		StockPile s = new StockPile();
		// 封装产品
		Product product = new Product();
		product.setProductId(productId);
		s.setProduct(product);
		// 封装规格
		ProductUnit pu = new ProductUnit();
		pu.setProductUnitId(productunit);
		s.setProductunit(pu);
		// 封装仓库
		StoreHouse sh = new StoreHouse();
		sh.setStoreHouseId(storeHouseId);
		s.setStorehouse(sh);
		// 封装数量
		s.setQuantity(quantity);
		// 封装均价
		s.setCostPrice(costPrice);
		// 封装批次
		String date = new SimpleDateFormat("yyyy-MM-dd").format(new Date());
		s.setProsPecification(date);
		return s;
	}

	/**
	 * 跳转到入库单修改的页面
	 * 
	 * @param singleNo
	 *            入库单号
	 * @param model
	 * @return
	 * @throws ParseException
	 */
	@RequestMapping("/goEnterStockUpdate")
	public String goEnterStockUpdate(String singleNo, Model model) throws ParseException {
		// 根据单号查询入库单信息
		EnterStock enterStockBySingleNo = enterStockService.getEnterStockBySuless(singleNo, null, null, null, 1, 1)
				.getList().get(0);
		// 根据入库单号查询入库详情
		List<EnterStockDetail> enterStockDetails = enterStockDetailService
				.getEnterStockDetailBySingleNo(singleNo, 1, 100000).getList();
		PageInfo<Employee> employeeAll = employeeService.getEmployeeAll(1, 100000); // 所有员工
		List<StoreHouse> storeHouselist = storeHouseService.getStoreHouselist(); // 所有仓库
		model.addAttribute("enterStock", enterStockBySingleNo);
		model.addAttribute("enterStockDetails", enterStockDetails);
		model.addAttribute("employeeAll", employeeAll.getList());
		model.addAttribute("storeHouseAll", storeHouselist);
		return "enterStork/enterStockUpdate";
	}

	/**
	 * 修改入库信息表
	 * 
	 * @param enterStock
	 * @param enterStockProducts
	 * @return
	 */
	@RequestMapping("/enterStockUpdate")
	public String enterStockUpdate(EnterStock enterStock,
			@RequestParam("enterStockProducts") String enterStockProducts) {
		int enterStockUpdate = enterStockService.enterStockUpdate(enterStock);
		List<EnterStockDetail> parseArray = JSONArray.parseArray(enterStockProducts, EnterStockDetail.class);
		int a = enterStockDetailService.updateEnterStockDetailByProductAndSingleNo(enterStock.getEnterStockId(),
				parseArray);
		if (a > 0 && enterStockUpdate > 0)
			return "redirect:goenterstock";
		else
			return "error";
	}

	/**
	 * 删除单据
	 * 
	 * @param enterStocks
	 *            所有单据
	 * @return
	 */
	@RequestMapping("/deleteEnterStocks")
	public String deleteEnterStocks(@RequestParam("enterStocks") String enterStocks) {
		try {
			String[] split = enterStocks.split("-");
			for (String singleNo : split) {
				enterStockService.enterStockDelete(singleNo);
			}
			return "redirect:goenterstock";
		} catch (Exception e) {
			e.printStackTrace();
			return "error";
		}
	}

	/**
	 * 导出数据到excel
	 * 
	 * @param singleNo
	 * @param shName
	 * @param start
	 * @param end
	 * @param pageNo
	 * @param request
	 * @param response
	 * @throws ParseException
	 * @throws IOException
	 */
	@RequestMapping("/enterStockExport")
	public void export(@RequestParam(value = "singleNo", required = false) String singleNo,
			@RequestParam(value = "shName", required = false) String shName,
			@RequestParam(value = "start", required = false) String start,
			@RequestParam(value = "end", required = false) String end,
			@RequestParam(value = "pageNo", required = false) Integer pageNo, HttpServletRequest request,
			HttpServletResponse response) throws ParseException, IOException {
		List<EnterStock> list = null;
		if (pageNo == null) {
			list = enterStockService.getEnterStockBySuless(null, null, null, null, 1, 10000000).getList();
		} else {
			list = enterStockService.getEnterStockBySuless(singleNo, shName, start, end, pageNo, 5).getList();
		}
		// 获取文件名
		String fileName = "EnterStock" + new SimpleDateFormat("MMddhhmmsss").format(new Date())
				+ String.valueOf((int) (Math.random() * 9 + 1) * 1000) + ".xlsx";
		// 输出
		new ExportExcel(null, EnterStock.class, 1).setDataList(list).write(response, fileName).dispose();
	}

}
