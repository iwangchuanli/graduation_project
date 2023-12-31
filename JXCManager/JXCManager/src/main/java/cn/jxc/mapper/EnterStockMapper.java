package cn.jxc.mapper;

import java.util.Date;
import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.EnterStock;

public interface EnterStockMapper {

	/**
	 * 查询入库单
	 * 
	 * @param singleNo
	 *            入库单号模糊查询
	 * @param shName
	 *            仓库名称
	 * @param start
	 *            入库开始时间
	 * @param end
	 *            入库结束时间
	 * @return
	 */
	List<EnterStock> getEnterStockBySuless(@Param("singleNo") String singleNo, @Param("shName") String shName,
			@Param("start") String start, @Param("end") String end);

	/**
	 * 入库信息的添加
	 * 
	 * @param enterStock
	 * @return
	 */
	int enterStockAdd(@Param("es") EnterStock enterStock);

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
	int enterStockReview(@Param("singleNo") String singleNo, @Param("emp") String emp, @Param("date") Date date,
			@Param("reviewStatus") Integer reviewStatus, @Param("reason") String reason);

	/**
	 * 入库信息的修改
	 * 
	 * @param enterStock
	 * @return
	 */
	int enterStockUpdate(@Param("es") EnterStock enterStock);

	/**
	 * 根据入库单号删除一条入库记录
	 * 
	 * @param singleNo
	 * @return
	 */
	int enterStockDelete(@Param("singleNo") String singleNo);

	/**
	 * 根据入库单号查询入库类型
	 * 
	 * @param singleNo
	 *            入库单号
	 * @return 入库类型
	 */
	int getEnterStockTypeByESS(@Param("singleNo") String singleNo);

}
