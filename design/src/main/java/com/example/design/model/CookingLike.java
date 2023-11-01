package com.example.design.model;

import org.springframework.data.annotation.Id;

/**
 * Cooking like model.
 *
 * @author lxh
 * @version 0.1
 */
public class CookingLike {
  @Id
  private long cookingId;
  @Id
  private long userId;
  private int state;

  public long getCookingId() {
    return cookingId;
  }

  public void setCookingId(long cookingId) {
    this.cookingId = cookingId;
  }

  public long getUserId() {
    return userId;
  }

  public void setUserId(long userId) {
    this.userId = userId;
  }

  public int getState() {
    return state;
  }

  public void setState(int state) {
    this.state = state;
  }
}
