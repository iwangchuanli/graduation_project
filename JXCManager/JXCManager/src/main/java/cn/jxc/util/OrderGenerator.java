package cn.jxc.util;

import java.text.SimpleDateFormat;
import java.util.Date;
//import java.util.Random;

/**
 * ������ɶ�����
 * @author Administrator
 *
 */
public class OrderGenerator {
	
	private static String getLetter(String type) {
//		String randomcode = "";
//		Random random=new Random();
//		for (int i = 0; i < 4; i++) {
//			// 52����ĸ��6����Сд��ĸ��ķ��ţ���ΧΪ91~96
//			int value = random.nextInt(26)+65;
//			randomcode = randomcode + (char) value;
//		}
		return type;
	}
	
	private static String getNumber() {
		SimpleDateFormat simpleDateFormat=new SimpleDateFormat("MMddhhmmsss");
		return simpleDateFormat.format(new Date())+String.valueOf( (int)((Math.random()*9+1)*1000));
	}
	/**
	 * ������ɶ�����
	 * �ɹ����-�ɹ����뵥-��ⵥ-������-���۶���-�ͻ����- ���ⵥ
	 * @param type ���ɵ����ֵ���
	 * @return
	 */
	public static String getOrderNo(String type) {
		return getLetter(type)+getNumber();
	}
	
}
