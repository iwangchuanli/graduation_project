package cn.jxc.service;

import java.util.List;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.DamagedRequestDetail;

public interface DamagedRequestDetailService {

	/**
	 * 添加报损详情
	 * @param drd 对象
	 * @return
	 */
	int AddDamagedRequesDetail(DamagedRequestDetail drd);

	/**
	 * 根据报损编号 分页查询所有详情
	 * @param damagedRequestId 调拨编号
	 * @param pageNo 页码
	 * @param pageSize 页数
	 * @return
	 */
	PageInfo<DamagedRequestDetail> getDamagedRequestDetailsByDRID(String damagedRequestId, Integer pageNo,
			Integer pageSize);

	/**
	 * 根据
	 * @param drId
	 * @return
	 */
	List<DamagedRequestDetail> getDRDByDRID(String drId);

	int DeleteDamagedRequestDetail(String id);

	int delDamagedRequestDetailById(int id);

}
