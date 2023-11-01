package com.example.design.model;

import org.springframework.data.annotation.Id;

import java.util.Date;

/**
 * 评论模型.
 *
 * @author lxh
 * @version 0.1
 */
public class Comment {
  @Id
  private long commentId;
  private long userId;
  private String commentContent;
  private Date commentDate;
  private String commentType;
  private long commentForId;
  private int state;

  public long getCommentId() {
    return commentId;
  }

  public void setCommentId(long commentId) {
    this.commentId = commentId;
  }

  public long getUserId() {
    return userId;
  }

  public void setUserId(long userId) {
    this.userId = userId;
  }

  public String getCommentContent() {
    return commentContent;
  }

  public void setCommentContent(String commentContent) {
    this.commentContent = commentContent;
  }

  public Date getCommentDate() {
    return commentDate;
  }

  public void setCommentDate(Date commentDate) {
    this.commentDate = commentDate;
  }

  public String getCommentType() {
    return commentType;
  }

  public void setCommentType(String commentType) {
    this.commentType = commentType;
  }

  public long getCommentForId() {
    return commentForId;
  }

  public void setCommentForId(long commentForId) {
    this.commentForId = commentForId;
  }

  public int getState() {
    return state;
  }

  public void setState(int state) {
    this.state = state;
  }
}
