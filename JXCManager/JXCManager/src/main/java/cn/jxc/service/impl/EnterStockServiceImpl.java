package cn.jxc.service.impl;

import java.text.ParseException;
import java.util.Date;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.EnterStockMapper;
import cn.jxc.pojo.EnterStock;
import cn.jxc.pojo.EnterStockDetail;
import cn.jxc.service.EnterStockDetailService;
import cn.jxc.service.EnterStockService;
import cn.jxc.util.DateConverter;

@Service
public class EnterStockServiceImpl implements EnterStockService {

	@Autowired
	private EnterStockMapper enterStockMapper;
	@Autowired
	private EnterStockDetailService enterStockDetailService;

	@Override
	public PageInfo<EnterStock> getEnterStockBySuless(String singleNo, String shName, String start, String end,
			Integer pageNo, Integer pageSize) throws ParseException {
		PageHelper.startPage(pageNo, pageSize);
		List<EnterStock> enterStocks = enterStockMapper.getEnterStockBySuless(singleNo, shName,
				DateConverter.convertStringyyyy(start), DateConverter.convertStringyyyy(end));
		return new PageInfo<EnterStock>(enterStocks);
	}

	@Transactional
	@Override
	public int enterStockAdd(EnterStock enterStock) {
		try {
			enterStock.setEnterDate(new Date());
			enterStockMapper.enterStockAdd(enterStock); // ���������������
			for (EnterStockDetail est : enterStock.getEnterstockdetails()) { // ѭ��ʵ����������
				est.setEnterstock(enterStock);
				enterStockDetailService.enterStockDetailAdd(est);
			}
			return 1;
		} catch (Exception e) {
			e.printStackTrace();
			return 0;
		}
	}

	@Transactional
	@Override
	public int enterStockReview(String singleNo, String emp, Date date, Integer reviewStatus, String reason) {
		// TODO Auto-generated method stub
		return enterStockMapper.enterStockReview(singleNo, emp, date, reviewStatus, reason);
	}

	@Transactional
	@Override
	public int enterStockUpdate(EnterStock enterStock) {
		// TODO Auto-generated method stub
		return enterStockMapper.enterStockUpdate(enterStock);
	}

	@Override
	public EnterStock getEnterStockBySingleNo(String singleNo) {
		// TODO Auto-generated method stub
		return enterStockMapper.getEnterStockBySuless(singleNo, null, null, null).get(0);
	}

	@Transactional
	@Override
	public int enterStockDelete(String singleNo) {
		try {
			enterStockDetailService.deleteEnterStockDetailBySingleNo(singleNo);
			enterStockMapper.enterStockDelete(singleNo);
			return 1;
		} catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
			return 0;
		}
	}

	@Override
	public int getEnterStockTypeByESS(String singleNo) {
		// TODO Auto-generated method stub
		return enterStockMapper.getEnterStockTypeByESS(singleNo);
	}

}
