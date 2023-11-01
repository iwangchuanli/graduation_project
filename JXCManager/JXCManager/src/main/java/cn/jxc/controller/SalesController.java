package cn.jxc.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import com.github.pagehelper.PageInfo;
import java.util.List;

import cn.jxc.pojo.Customer;
import cn.jxc.pojo.Employee;
import cn.jxc.pojo.SalesOrder;
import cn.jxc.pojo.StockPile;
import cn.jxc.service.SaleOrderService;

@Controller
public class SalesController {

	@Autowired
	private SaleOrderService saleOrderService;

	@RequestMapping("/gosales")
	public String gopurchase(@RequestParam(value = "pageNo", required = false) Integer pageNo,
			@RequestParam(value = "soId", required = false) String soId,
			@RequestParam(value = "empLoginName", required = false) String empLoginName, Model model) {
		if (pageNo == null) {
			pageNo = 1;
		}
		PageInfo<SalesOrder> purchaseRequestByBlurry = saleOrderService.getSaleByBlurry(pageNo, 5, soId, empLoginName);
		PageInfo<StockPile> purchaseRequestByBlurry1 = saleOrderService.searchAllStockPile(pageNo, 5);
		model.addAttribute("prbb1", purchaseRequestByBlurry1);
		model.addAttribute("prbb", purchaseRequestByBlurry);
		model.addAttribute("soId", soId); // 查询条件保存
		model.addAttribute("empLoginName", empLoginName);
		return "sales/sales";
	}

	@RequestMapping("/gosalesSearch")
	public String gosalesSearch(Model m) {
		java.util.List<Employee> emplist = saleOrderService.searchEmpName();
		List<Customer> cuslist = saleOrderService.searchCusName();
		m.addAttribute("cuslist", cuslist);
		m.addAttribute("emplist", emplist);
		return "sales/salesAdd";
	}

	@RequestMapping("/gosalesadd")
	public String gosalesadd(Model model, @RequestParam(value = "pageNo", required = false) Integer pageNo) {
		if (null == pageNo) {
			pageNo = 1;
		}
		PageInfo<StockPile> searchAllStockPile = saleOrderService.searchAllStockPile(pageNo, 5);
		model.addAttribute("searchAllStockPile", searchAllStockPile);
		return "sales/salesAdd";
	}

	@RequestMapping("/gosalesupdate")
	public String gosalesupdate() {
		return "sales/salesUpdate";
	}
}
