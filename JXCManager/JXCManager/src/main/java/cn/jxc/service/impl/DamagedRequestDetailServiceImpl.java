package cn.jxc.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.DamagedRequestDetailMapper;
import cn.jxc.pojo.DamagedRequestDetail;
import cn.jxc.service.DamagedRequestDetailService;

@Service
public class DamagedRequestDetailServiceImpl implements DamagedRequestDetailService {

	@Autowired
	private DamagedRequestDetailMapper damagedRequestDetailMapper;

	@Override
	public PageInfo<DamagedRequestDetail> getDamagedRequestDetailsByDRID(String damagedRequestId, Integer pageNo,
			Integer pageSize) {
		PageHelper.startPage(pageNo, pageSize);
		List<DamagedRequestDetail> drdByDRID = damagedRequestDetailMapper.getDRDByDRID(damagedRequestId);
		return new PageInfo<DamagedRequestDetail>(drdByDRID);
	}

	@Override
	public List<DamagedRequestDetail> getDRDByDRID(String drId) {
		// TODO Auto-generated method stub
		return damagedRequestDetailMapper.getDRDByDRID(drId);
	}

	@Override
	public int AddDamagedRequesDetail(DamagedRequestDetail drd) {
		// TODO Auto-generated method stub
		return damagedRequestDetailMapper.AddDamagedRequesDetail(drd);
	}

	@Override
	public int DeleteDamagedRequestDetail(String id) {
		// TODO Auto-generated method stub

		int num = damagedRequestDetailMapper.DeleteDamagedRequestDetail(id);
		// System.out.println(num);
		return num;
	}

	@Override
	public int delDamagedRequestDetailById(int id) {
		// TODO Auto-generated method stub
		return damagedRequestDetailMapper.delDamagedRequestDetailById(id);
	}

}
