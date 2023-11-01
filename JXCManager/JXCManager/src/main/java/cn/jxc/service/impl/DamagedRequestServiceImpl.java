package cn.jxc.service.impl;

import java.util.Date;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.DamagedRequestDetailMapper;
import cn.jxc.mapper.DamagedRequestMapper;
import cn.jxc.pojo.DamagedRequest;
import cn.jxc.pojo.DamagedRequestDetail;
import cn.jxc.service.DamagedRequestService;
import cn.jxc.service.StockPileService;

/**
 * 报损业务
 * 
 * @author lxq
 *
 */
@Service
public class DamagedRequestServiceImpl implements DamagedRequestService {
	@Autowired
	private DamagedRequestMapper damagedRequestMapper;
	@Autowired
	private DamagedRequestDetailMapper damagedRequestDetailMapper;
	@Autowired
	private StockPileService stockPileService;

	/**
	 * 查询所有
	 */
	@Override
	public PageInfo<DamagedRequest> getDamageRequest(String damagedid, String damagredname, Integer pageNo,
			Integer pageSize,String startDate,String endDate) {
		System.err.println(pageNo);
		System.err.println(pageSize);
		PageHelper.startPage(pageNo, pageSize);
		List<DamagedRequest> damaged = damagedRequestMapper.getDamageRequest(damagedid, damagredname, startDate, endDate);
		PageInfo<DamagedRequest> pageinfo = new PageInfo<DamagedRequest>(damaged);
		return pageinfo;
	}

	@Transactional
	@Override
	public int AddDamagedRequest(DamagedRequest dr) {
		try {
			damagedRequestMapper.AddDamagedRequest(dr);
			for (int i = 0; i < dr.getDamagedrequestdetail().size(); i++) {
				dr.getDamagedrequestdetail().get(i).setDamagedRequest(dr);
				damagedRequestDetailMapper.AddDamagedRequesDetail(dr.getDamagedrequestdetail().get(i));
			}
			return 0;
		} catch (Exception e) {
			e.printStackTrace();
			return 1;
		}
	}

	@Transactional
	@Override
	public int DeleteDamagedRequest(String id) {
		try {
			String[] split = id.split("-");
			for (int i = 1; i < split.length; i++) {
				damagedRequestDetailMapper.DeleteDamagedRequestDetail(split[i]);
				damagedRequestMapper.DeleteDamagedRequest(split[i]);
			}
			return 1;
		} catch (Exception e) {
			// TODO: handle exception
			return 0;
		}
	}

	@Override
	public int getDDZT(String id) {
		// TODO Auto-generated method stub
		return damagedRequestMapper.getDDZT(id);
	}

	@Transactional
	@Override
	public int updateDamagedRequestOrderTypeById(String drId, int orderStatus) {
		// TODO Auto-generated method stub
		return damagedRequestMapper.updateDamagedRequestOrderTypeById(drId, orderStatus);
	}

	@Transactional
	@Override
	public int damagedReview(String singleNo, String emp, int status, String reason) {
		// TODO Auto-generated method stub
		Date date = new Date();
		return damagedRequestMapper.damagedReview(singleNo, emp, status, reason, date);
	}

	@Transactional
	@Override
	public int updateStockPileSumByDamagedId(String damagedRequestId) {
		System.err.println(damagedRequestId);
		try {
			// 报损单据
			DamagedRequest damagedRequest = damagedRequestMapper.getDamageRequest(damagedRequestId, null,null,null).get(0);
			// 报损详情
			List<DamagedRequestDetail> drdByDRID = damagedRequestDetailMapper.getDRDByDRID(damagedRequestId);
			// 循环修改库存中的值
			System.err.println(damagedRequest.getDamagedStoreHouse().getStoreHouseId() + "仓库编号");
			for (DamagedRequestDetail s : drdByDRID) {
				System.err.println(s.getCount());
				stockPileService.cutbackStockPile(damagedRequest.getDamagedStoreHouse().getStoreHouseId(),
						s.getProduct().getProductId(), s.getCount());
			}
			return 1;
		} catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
			return 0;
		}
	}

	@Transactional
	@Override
	public int updateDamagedRequest(DamagedRequest damagedRequest) {
		try {
			damagedRequestMapper.updateDamagedRequest(damagedRequest);
			damagedRequestDetailMapper.DeleteDamagedRequestDetail(damagedRequest.getDamagedRequestId());
			List<DamagedRequestDetail> damagedrequestdetail = damagedRequest.getDamagedrequestdetail();
			for (DamagedRequestDetail drd : damagedrequestdetail) {
				drd.setDamagedRequest(damagedRequest);
				damagedRequestDetailMapper.AddDamagedRequesDetail(drd);
			}
			return 1;
		} catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
			return 0;
		}
	}

}
