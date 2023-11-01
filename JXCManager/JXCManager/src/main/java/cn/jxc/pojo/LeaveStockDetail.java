package cn.jxc.pojo;

/**
 * ³ö¿âÃ÷Ï¸
 */
public class LeaveStockDetail implements java.io.Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	
	private int lsdId;
	private LeaveStock leavestockId;
	private Product productId;
	private int productCount;
	private Double productPrice;
	private ProductUnit productUnitId;
	private int	shouldCount;

	public LeaveStock getLeavestockId() {
		return leavestockId;
	}

	public void setLeavestockId(LeaveStock leavestockId) {
		this.leavestockId = leavestockId;
	}

	public Product getProductId() {
		return productId;
	}

	public void setProductId(Product productId) {
		this.productId = productId;
	}

	public int getProductCount() {
		return productCount;
	}

	public void setProductCount(int productCount) {
		this.productCount = productCount;
	}

	public Double getProductPrice() {
		return productPrice;
	}

	public void setProductPrice(Double productPrice) {
		this.productPrice = productPrice;
	}

	public ProductUnit getProductUnitId() {
		return productUnitId;
	}

	public void setProductUnitId(ProductUnit productUnitId) {
		this.productUnitId = productUnitId;
	}

	public int getShouldCount() {
		return shouldCount;
	}

	public void setShouldCount(int shouldCount) {
		this.shouldCount = shouldCount;
	}

	public LeaveStockDetail() {
		super();
	}


	public int getLsdId() {
		return this.lsdId;
	}

	public void setLsdId(int lsdId) {
		this.lsdId = lsdId;
	}

	
}
