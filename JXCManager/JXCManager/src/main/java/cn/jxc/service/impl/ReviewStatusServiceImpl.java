package cn.jxc.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import cn.jxc.mapper.ReviewStatusMapper;
import cn.jxc.pojo.ReviewStatus;
import cn.jxc.service.ReviewStatusService;

@Service
public class ReviewStatusServiceImpl implements ReviewStatusService {
	@Autowired
	private ReviewStatusMapper rsmapper;
	//��ѯȫ�����״̬
	@Override
	public List<ReviewStatus> getReviewStatus() {
		// TODO Auto-generated method stub
		return rsmapper.getReviewStatus();
	}
	
}
