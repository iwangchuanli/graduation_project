package cn.jxc.pojo;

import java.io.Serializable;

public class DamagedRequestDetail implements Serializable{

	/**
	 * ����������ϸ��
	 */
	private static final long serialVersionUID = 1L;
	
	private int dRDId;							//����id			
	private DamagedRequest damagedRequest;		//������
	private Product product;					//��Ʒ���
	private int count;							//��Ʒ����
	private ProductUnit productUnit;			//��Ʒ���
	
	public DamagedRequestDetail() {
		super();
	}
	public DamagedRequestDetail(int dRDId, DamagedRequest damagedRequest, Product product, int count,
			ProductUnit productUnit) {
		super();
		this.dRDId = dRDId;
		this.damagedRequest = damagedRequest;
		this.product = product;
		this.count = count;
		this.productUnit = productUnit;
	}
	public int getdRDId() {
		return dRDId;
	}
	public void setdRDId(int dRDId) {
		this.dRDId = dRDId;
	}
	public DamagedRequest getDamagedRequest() {
		return damagedRequest;
	}
	public void setDamagedRequest(DamagedRequest damagedRequest) {
		this.damagedRequest = damagedRequest;
	}
	public Product getProduct() {
		return product;
	}
	public void setProduct(Product product) {
		this.product = product;
	}
	public int getCount() {
		return count;
	}
	public void setCount(int count) {
		this.count = count;
	}
	public ProductUnit getProductUnit() {
		return productUnit;
	}
	public void setProductUnit(ProductUnit productUnit) {
		this.productUnit = productUnit;
	}
	
}
