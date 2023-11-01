package cn.jxc.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import cn.jxc.mapper.StoreHouseMapper;
import cn.jxc.pojo.StoreHouse;
import cn.jxc.service.StoreHouseService;
@Service
public class StoreHouseServiceImpl implements StoreHouseService{
	
	@Autowired
	private StoreHouseMapper storehousemapper;
	//��ѯ���вֿ���Ϣ
	@Override
	public List<StoreHouse> getStoreHouselist() {
		
		return storehousemapper.getStoreHouselist();
	}

}
