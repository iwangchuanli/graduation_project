package org.ljy.util;

import java.util.UUID;
/**
 * ID生成工具
 * @author 廖俊瑶
 *
 */
public class IDUtil {
	/**
	 * 用户ID生成，总共32位
	 * @return 用户ID
	 */
	public static String generateUserID() {
		String id = UUID.randomUUID().toString().replace("-", "").substring(0, 27);
		return "user-" + id;
	}

	/**
	 * 购物车ID生成，总共32位
	 * @return 购物车ID
	 */
	public static String generateCartID() {
		String id = UUID.randomUUID().toString().replace("-", "").substring(0, 27);
		return "cart-" + id;
	}
	
	/**
	 * 商品ID生成，总共32位
	 * @return 商品ID
	 */
	public static String generateGoodsID() {
		String id = UUID.randomUUID().toString().replace("-", "").substring(0, 26);
		return "goods-" + id;
	}

	/**
	 * 订单ID生成，总共32位
	 * @return 订单ID
	 */
	public static String generateOrderID() {
		String id = UUID.randomUUID().toString().replace("-", "").substring(0, 26);
		return "order-" + id;
	}

}
