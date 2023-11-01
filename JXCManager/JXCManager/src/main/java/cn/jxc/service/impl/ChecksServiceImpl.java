package cn.jxc.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.github.pagehelper.PageHelper;
import com.github.pagehelper.PageInfo;

import cn.jxc.mapper.CheckDetailsMapper;
import cn.jxc.mapper.CheckMapper;
import cn.jxc.pojo.Checks;
import cn.jxc.service.ChecksService;

@Service
public class ChecksServiceImpl implements ChecksService {
	@Autowired
	private CheckMapper checkmapper;
	@Autowired
	private CheckDetailsMapper checkDetailsMapper;

	@Override
	public int selectCount() {
		// TODO Auto-generated method stub
		return checkmapper.selectCount();
	}

	@Transactional
	@Override
	public int ChecksAdd(Checks ck) {
		try {
			checkmapper.ChecksAdd(ck);
			for (int i = 0; i < ck.getList().size(); i++) {
				ck.getList().get(i).setCid(ck);
				int n = checkDetailsMapper.CheckDetailAdd(ck.getList().get(i));
				if (n == 1)
					System.out.println("--------------------------------");
			}
			return 0;
		} catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
			return 1;
		}

	}

	@Transactional
	@Override
	public int ChecksReview(Checks ck) {
		return checkmapper.ChecksReview(ck);
	}

	@Transactional
	@Override
	public int ChecksDelete(String singleNo) {
		try {
			String[] split = singleNo.split("-");
			for (int i = 1; i < split.length; i++) {
				checkDetailsMapper.deleteCheckDetailsDetailBySingleNo(split[i]);
				checkmapper.ChecksDelete(split[i]);
			}
			return 0;
		} catch (Exception e) {
			return 1;
		}
	}

	@Transactional
	@Override
	public int ChecksUpdate(Checks ck) {
		// TODO Auto-generated method stub
		try {
			System.err.println(ck.getCid()+"===¶©µ¥ºÅ");
			checkmapper.ChecksUpdate(ck);
			checkDetailsMapper.deleteCheckDetailsDetailBySingleNo(ck.getCid());
			for (int i = 0; i < ck.getList().size(); i++) {
				ck.getList().get(i).getProductCount();
				ck.getList().get(i).setCid(ck);
				checkDetailsMapper.CheckDetailAdd(ck.getList().get(i));
			}
			return 0;
		} catch (Exception e) {
			e.printStackTrace();
			return 1;
		}
	}

	@Override
	public Checks checksOne(String singleNo) {
		// TODO Auto-generated method stub
		return checkmapper.checksOne(singleNo);
	}

	@Override
	public PageInfo<Checks> getALLChecks(String v, String crelationno, String createStartDate, String createEndDate,
			Integer rv, Integer pageNo, Integer pageSize) {
		PageHelper.startPage(pageNo, pageSize);
		List<Checks> allChecks = checkmapper.getALLChecks(v, null, createStartDate, createEndDate, rv);
		PageInfo<Checks> pageInfo = new PageInfo<Checks>(allChecks);
		return pageInfo;
	}

}
