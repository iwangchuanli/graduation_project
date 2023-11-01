package cn.jxc.mapper;


import java.util.List;

import org.apache.ibatis.annotations.Param;

import cn.jxc.pojo.CheckDetails;


public interface CheckDetailsMapper {

	/**
	 *查询是否有记录
	 */
	int selectCount();
	/**
	 * 详情添加的方法
	 * 
	 * @param enterStockDetail
	 * @return
	 */
	int CheckDetailAdd(@Param("cda") CheckDetails cda);
  
	/**
	 * 根据盘点单号查询所有入库详细信息
	 * 
	 * @param singleNo
	 * @return
	 */
	List<CheckDetails> getCheckDetailsDetailsBySingleNo(@Param("singleNo") String singleNo);

	/**
	 * 根据盘点编号和产品编号修改入库数量
	 * 
	 * @param singleNo
	 *            入库单号
	 * @param productId
	 *            产品编号
	 * @param count
	 *            产品数量*
	 * @return
	 */
	int updateCheckDetailsDetailByProductAndSingleNo(@Param("chd") CheckDetails chd);
    int updateStock(@Param("chd") CheckDetails chd);
	/**
	 * 根据盘点详情单号删除所有明细
	 * 
	 * @param singleNo
	 *            入库单号
	 * @return
	 */
	int deleteCheckDetailsDetailBySingleNo(@Param("singleNo") String singleNo);
}
