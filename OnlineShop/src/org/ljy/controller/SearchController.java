package org.ljy.controller;

import javax.servlet.http.HttpServletRequest;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class SearchController {
	@RequestMapping("/search")
	public String search(String keyWord,HttpServletRequest request){
		System.out.println("搜索关键字："+keyWord);
		request.getSession().setAttribute("keyWord", keyWord);
		return "search/searchResult";
	}
}
