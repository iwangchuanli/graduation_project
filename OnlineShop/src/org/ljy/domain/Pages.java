package org.ljy.domain;

import java.util.List;

/**
 * 分页
 * @author 廖俊瑶
 * 2017年1月15日 14:59:42
 */
public class Pages {
	private int showNum;//一页显示的内容条数
	private int totalNum;//总条数
	private int pageNum;//页数
	private List<Object> content;//每一页的显示内容
	public Pages(int showNum, int totalNum, List<Object> content) {
		this.showNum = showNum;
		this.totalNum = totalNum;
		this.content = content;
	}
	public int getShowNum() {
		return showNum;
	}
	public void setShowNum(int showNum) {
		this.showNum = showNum;
	}
	public int getTotalNum() {
		return totalNum;
	}
	public void setTotalNum(int totalNum) {
		this.totalNum = totalNum;
	}
	public int getPageNum() {
		return pageNum;
	}
	public void setPageNum(int pageNum) {
		this.pageNum = pageNum;
	}
	public List<Object> getContent() {
		return content;
	}
	public void setContent(List<Object> content) {
		this.content = content;
	}
	
	
}
