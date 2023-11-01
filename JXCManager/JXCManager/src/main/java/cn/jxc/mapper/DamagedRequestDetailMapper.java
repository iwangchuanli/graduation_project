package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.DamagedRequestDetail;

public interface DamagedRequestDetailMapper {

	/**
	 * 添加一个报损详情
	 * 
	 * @param drd
	 *            报损detail对象
	 * @return
	 */
	int AddDamagedRequesDetail(DamagedRequestDetail drd);

	/**
	 * 根据报损单号 查询所有报损详情
	 * 
	 * @param drId
	 * @return
	 */
	List<DamagedRequestDetail> getDRDByDRID(@Param("drId") String drId);

	/**
	 * 根据报损单据编号删除报损详情
	 * 
	 * @param id
	 *            报损单据编号
	 * @return
	 */
	int DeleteDamagedRequestDetail(String id);

	/**
	 * 根据id删除报损详情
	 * 
	 * @param id
	 *            编号
	 * @return
	 */
	int delDamagedRequestDetailById(@Param("id") int id);

}
