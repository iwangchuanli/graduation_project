package cn.jxc.service;

import java.util.List;

import org.apache.ibatis.annotations.Param;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.CheckDetails;

public interface CheckDetailsService {
	/**
	 * 
	 * @param singleNo
	 * @param num
	 * @param pageSize
	 * @return
	 */
	PageInfo<CheckDetails> getCheckDetails(String singleNo,Integer num,Integer pageSize);
	
	/**
	 * 详情添加的方法
	 * 
	 * @param enterStockDetail
	 * @return
	 */
	int CheckDetailAdd(@Param("cda") CheckDetails cda);

	/**
	 * 根据入库单号查询所有入库详细信息
	 * 
	 * @param singleNo
	 * @return
	 */
	List<CheckDetails> getCheckDetailsDetailsBySingleNo(@Param("singleNo") String singleNo);

	/**
	 * 根据入库编号和产品编号修改入库数量
	 * 
	 * @param singleNo
	 *            入库单号
	 * @param productId
	 *            产品编号
	 * @param count
	 *            产品数量
	 * @return
	 */
	int updateCheckDetailsDetailByProductAndSingleNo(@Param("singleNo") String singleNo,
			@Param("productId") String productId, @Param("count") Integer count);

	/**
	 * 根据入库单号删除所有明细
	 * 
	 * @param singleNo
	 *            入库单号
	 * @return
	 */
	int deleteCheckDetailsDetailBySingleNo(@Param("singleNo")String singleNo);
}
