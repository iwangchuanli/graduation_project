package org.ljy.domain;

import java.util.ArrayList;

/**
 * 搜索结果
 * @author 廖俊瑶
 *
 */
public class SearchResult {
	private String keyword;//关键字
	private String type;//搜索类型
	private ArrayList<Object> result;//搜索结果
	public String getKeyword() {
		return keyword;
	}
	public void setKeyword(String keyword) {
		this.keyword = keyword;
	}
	public String getType() {
		return type;
	}
	public void setType(String type) {
		this.type = type;
	}
	public ArrayList<Object> getResult() {
		return result;
	}
	public void setResult(ArrayList<Object> result) {
		this.result = result;
	}
	

}
