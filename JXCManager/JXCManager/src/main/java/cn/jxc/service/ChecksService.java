package cn.jxc.service;

import org.apache.ibatis.annotations.Param;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.Checks;

public interface ChecksService {
	/**
	 * 根据条件查询所有盘点
	 * 
	 * @param v
	 *            单号
	 * @param crelationno
	 * @param createStartDate
	 *            开始时间
	 * @param createEndDate
	 *            结束时间
	 * @param rv
	 *            审核状态
	 * @param pageNo
	 *            页码
	 * @param pageSize
	 *            每页数量
	 * @return
	 */
	PageInfo<Checks> getALLChecks(String v, String crelationno, String createStartDate, String createEndDate, Integer rv,
			Integer pageNo, Integer pageSize);

	/**
	 * 查找对象
	 * 
	 * @param singleNo
	 * @return
	 */
	Checks checksOne(@Param("singleNo") String singleNo);

	/**
	 * 查找是否有没完成作业的记录
	 * 
	 * @return
	 */

	int selectCount();

	/**
	 * 盘点单信息的添加
	 * 
	 * 
	 */
	int ChecksAdd(@Param("ck") Checks ck);

	/**
	 * 盘点单执行审核操作
	 * 
	 * 
	 * @return
	 */
	int ChecksReview(@Param("ck") Checks ck);

	/**
	 * 盘点单信息的修改
	 * 
	 */
	int ChecksUpdate(Checks ck);

	/**
	 * 根据盘点单号删除一条入库记录
	 * 
	 * @param singleNo
	 * @return
	 */
	int ChecksDelete(@Param("singleNo") String singleNo);
}
