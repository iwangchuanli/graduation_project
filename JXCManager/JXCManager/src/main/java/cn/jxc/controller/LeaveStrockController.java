package cn.jxc.controller;

import java.sql.Date;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import com.alibaba.fastjson.JSON;
import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.LeaveStock;
import cn.jxc.pojo.LeaveStockDetail;
import cn.jxc.service.LeaveStockDetailServcie;
import cn.jxc.service.LeaveStockService;

@Controller
public class LeaveStrockController {

	@Autowired
	private LeaveStockService leaveStockService;

	@Autowired
	private LeaveStockDetailServcie leaveStockDetailServcie;

	@RequestMapping("/goleaveStock")
	public String gopurchase(@RequestParam(value = "pageNo", required = false) Integer pageNo,
			@RequestParam(value = "lsId", required = false) String lsId,
			@RequestParam(value = "empName", required = false) String empName,
			@RequestParam(value = "leaveStockTime", required = false) Date leaveStockTime, Model model) {
		if (pageNo == null) {
			pageNo = 1;
		}
		PageInfo<LeaveStock> purchaseRequestByBlurry = leaveStockService.getAllLeaveStock(pageNo, 5, lsId, empName,
				leaveStockTime);
		model.addAttribute("prbb", purchaseRequestByBlurry);
		model.addAttribute("lsId", lsId);
		model.addAttribute("empName", empName);
		model.addAttribute("leaveStockTime", leaveStockTime);
		return "levaeStore/leaveStock";
	}

	@RequestMapping("/getLSDetailAll")
	@ResponseBody
	public String getSingleNoDetail(String lsId,@RequestParam(value="pageNo",required=false)Integer pageNo) {
		LeaveStock leaveStock = leaveStockService.getAllLeaveStock(1, 1, lsId, null, null).getList().get(0);
		if (null==pageNo) {
			pageNo=1;
		}
		PageInfo<LeaveStockDetail> lsDetailAllByLSId = leaveStockDetailServcie.getLSDetailAllByLSId(pageNo, 3, lsId);
		lsDetailAllByLSId.getList().get(0).setLeavestockId(leaveStock);
		return JSON.toJSONString(lsDetailAllByLSId);
	}
	

	@RequestMapping("/goleaveStockadd")
	public String goleaveStockadd() {
		return "levaeStore/leaveStockAdd";
	}

	@RequestMapping("/goleaveStockupdate")
	public String goleaveStockupdate() {
		return "levaeStore/leaveStockUpdate";
	}
}
