package com.example.design.constant;

/**
 * 资源返回状态的定义 Created by lxh on 4/20/16.
 */
public enum AuthResultStatus {
  SUCCESS(100, "成功"),
  USERNAME_OR_PASSWORD_ERROR(101, "用户名或密码错误"),
  USER_NOT_FOUND(102, "用户不存在"),
  USER_NOT_LOGIN(103, "用户未登录");

  /**
   * 返回码.
   */
  private int code;

  /**
   * 返回结果描述.
   */
  private String message;

  AuthResultStatus(int code, String message) {
    this.code = code;
    this.message = message;
  }

  public int getCode() {
    return code;
  }

  public void setCode(int code) {
    this.code = code;
  }

  public String getMessage() {
    return message;
  }

  public void setMessage(String message) {
    this.message = message;
  }
}
