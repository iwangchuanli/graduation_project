package cn.jxc.mapper;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.Checks;

public interface CheckMapper {

	/**
	 * 获得单个盘点单对象
	 * 
	 * @param singleNo
	 * @return
	 */
	Checks checksOne(@Param("singleNo") String singleNo);

	/**
	 * 查找信息
	 * 
	 * @param cid
	 * @param crelationno
	 * @param createStartDate
	 * @param createEndDate
	 * @return
	 */
	List<Checks> getALLChecks(@Param("cid") String cid, @Param("crelationno") String crelationno,
			@Param("createStartDate") String createStartDate, @Param("createEndDate") String createEndDate,
			@Param("states") Integer states);

	/**
	 * 查找是否有没完成作业的记录
	 * 
	 * @return
	 */

	int selectCount();

	/**
	 * 入库信息的添加
	 * 
	 * @param enterStock
	 * @return
	 */
	int ChecksAdd(@Param("ck") Checks ck);

	/**
	 * 执行审核操作
	 * 
	 * @param singleNo
	 *            入库单号
	 * @param emp
	 *            审核人
	 * @param date
	 *            入库时间
	 * @param reviewStatus
	 *            审核状态
	 * @param reason
	 *            审核原因
	 * @return
	 */
	int ChecksReview(@Param("ck") Checks ck);

	/**
	 * 盘点信息的修改
	 * 
	 * @param enterStock
	 * @return
	 */
	int ChecksUpdate(@Param("ck") Checks ck);

	/**
	 * 根据C_id删除记录
	 * 
	 * @param singleNo
	 * @return
	 */
	int ChecksDelete(@Param("singleNo") String singleNo);
}
