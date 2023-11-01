package cn.jxc.exception;

/**
 * �Զ����쳣
 * 
 * @author LXQ 2018/4/24
 *
 */
@SuppressWarnings("serial")
public class CustomException extends Exception {

	private String message;

	public CustomException(String message) {
		// TODO Auto-generated constructor stub
		super(message);
		this.message = message;
	}

	@Override
	public String getMessage() {
		return message;
	}

	public void setMessage(String message) {
		this.message = message;
	}

}
