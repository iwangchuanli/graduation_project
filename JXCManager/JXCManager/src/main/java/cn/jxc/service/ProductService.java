package cn.jxc.service;

import com.github.pagehelper.PageInfo;

import cn.jxc.pojo.Product;

public interface ProductService {
	/**
	 * ��ҳ��ѯ���в�Ʒ��Ϣ
	 * @param num ҳ��
	 * @return   ���ز�Ʒ��Ϣ����
	 */
	PageInfo<Product> getProductAll(int num,int pageSize);
	
	/**
	 * ���ݲ�Ʒ���ֺͱ�Ž���ģ����ҳ��ѯ
	 * @param num  ҳ��
	 * @param name ��Ʒ����
	 * @param no ��Ʒ���
	 * @return
	 */
	PageInfo<Product> getProductByNameAndNum(Integer num,String name,String no);
	
}
