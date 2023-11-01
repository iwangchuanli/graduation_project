package cn.jxc.pojo;

/**
 * ��������ϸ��
 */
public class RequisitionDetail implements java.io.Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	
	private int reId;//������ϸid
	private Product product;//��Ʒ���
	private Requisition requisition;//���������
	private int count;//��Ʒ����
	private ProductUnit productUnit;//�������

	public RequisitionDetail() {
	}

	public RequisitionDetail(int reId, Product product, Requisition requisition, int count,ProductUnit productUnit) {
		this.reId = reId;
		this.product = product;
		this.requisition = requisition;
		this.count = count;
		this.productUnit=productUnit;
	}

	public int getReId() {
		return this.reId;
	}

	public void setReId(int reId) {
		this.reId = reId;
	}

	public Product getProduct() {
		return this.product;
	}

	public void setProduct(Product product) {
		this.product = product;
	}

	public Requisition getRequisition() {
		return this.requisition;
	}

	public void setRequisition(Requisition requisition) {
		this.requisition = requisition;
	}

	public int getCount() {
		return this.count;
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
