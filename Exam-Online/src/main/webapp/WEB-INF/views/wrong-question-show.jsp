<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%@include file="/common/taglibs.jsp"%>
<%
	Map<Integer, Character> int2char = new HashMap<>();
	for (int i=0; i<26; ++i) {
		int2char.put(i, (char)('A' + i));
	}
	request.setAttribute("int2char", int2char);
%>
<html>

<head>
<%@include file="/common/head.jsp" %>
</head>

<body>
<%@include file="/common/header.jsp" %>
<div class="container">
  <div class="row">
	<!-- 题目 -->
	<div class="col-md-offset-1 col-md-10">
	  <div class="panel panel-info">
	    <div class="panel-heading">
	      <h3 class="panel-title">
	        <span class="glyphicon glyphicon-th-list"></span>&nbsp;错题集
	      </h3>
	    </div>
	    <div class="panel-body" style="font-size:18px;">
		  <c:forEach items="${entities}" var="result" varStatus="st">
		    <div class="panel ${result.correct ? 'panel-success' : 'panel-danger'} _questionDiv" 
		      id="result-${result.id}">
	          <div class="panel-heading">
			    <h3 class="panel-title">${result.question.type}题
			    <a class="btn btn-default btn-xs pull-right" 
			      onclick="removeQuestion(this, '${result.id}')">不再显示</a>
			    </h3>
		      </div>
		      <div class="panel-body _chooseDiv">
		        <p>${result.question.content}</p>
		        <c:forEach items="${result.question.choices}" var="choice" varStatus="innerSt">
	              <div class="checkbox">
		            <label>
	                  <span class="_choiceNo" id="choice-${choice.id}" 
	                    data-isanswer="${choice.answer}">${int2char[innerSt.index]}</span>
	                  .&nbsp;${choice.content}
	          	    </label>
				  </div>
		        </c:forEach>
		        <p>正确答案：<span class="_answer"></span>
		          &emsp;&emsp;你的选择：<span class="_choose"></span>
		          <a class="btn btn-primary pull-right" target="_blank"
		            href="${ctx}/question/${result.question.id}">查看讨论区
		          </a>
		        </p>
		      </div>
		    </div>
		  </c:forEach>
	  </div>
	</div>
  </div>
</div>
</body>
<script>
function removeQuestion(obj, id) {
	$.post("${ctx}/exam/wrong/hide?id=" + id);
	$(obj).parents("._questionDiv").hide(300);
}
$(function() {
	$("._answer").each(function() {
		var $div = $(this).parents("._chooseDiv");
		var answer = "";
		$div.find("._choiceNo").each(function() {
			var $this = $(this);
			if ($this.attr("data-isanswer") === "true") {
				answer += $this.text();
			}
		});
		$div.find("._answer").text(answer);
	});
	var chooses = {<c:forEach items="${entities}" var="result" varStatus="i">
		${result.id}: [<c:forEach items="${result.choose}" var="choice" varStatus="j">
			${choice.id}${j.last ? "" : ","}
		</c:forEach>]${i.last ? "" : ","}
	</c:forEach>};
	Object.getOwnPropertyNames(chooses).forEach(function(id) {
		var $div = $("#result-" + id);
		var text = "";
		chooses[id].forEach(function(id) {
			text += $("#choice-" + id).text();
		});
		$div.find("._choose").text(text);
	});
});
</script>
</html>