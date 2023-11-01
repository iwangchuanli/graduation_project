package cn.jxc.pojo;

import java.io.Serializable;

/**
 * ≈Ãµ„œÍ«È
 * 
 * @author lc
 *
 */
public class CheckDetails implements Serializable {
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	
	private int id;
	private Checks cid;
	private Product productid;
	private int productCount;
	private int checkCount;

	public int getCheckCount() {
		return checkCount;
	}

	public void setCheckCount(int checkCount) {
		this.checkCount = checkCount;
	}

	public int getProductCount() {
		return productCount;
	}

	public void setProductCount(int productCount) {
		this.productCount = productCount;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public Checks getCid() {
		return cid;
	}

	public void setCid(Checks cid) {
		this.cid = cid;
	}

	public Product getProductid() {
		return productid;
	}

	public void setProductid(Product productid) {
		this.productid = productid;
	}

}