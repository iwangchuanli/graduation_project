package cn.jxc.interceptor;

import java.util.List;

import org.aopalliance.intercept.MethodInterceptor;
import org.aopalliance.intercept.MethodInvocation;

import cn.jxc.util.RedisUtil;

public class MethodCacheInterceptor implements MethodInterceptor {

	private RedisUtil redisUtil;
	private List<String> targetNamesList; // ���û���������б�
	private List<String> methodNamesList; // ���û���ķ����б�
	private String defaultCacheExpireTime; // ����Ĭ�ϵĹ���ʱ��

	@Override
	public Object invoke(MethodInvocation invocation) throws Throwable {
		Object value = null;
		String targetName = invocation.getThis().getClass().getName();
		String methodName = invocation.getMethod().getName();
		// �ж��Ƿ���뻺��
		if (!isAddCache(targetName, methodName)) {
			// �������淵�ؽ��
			return invocation.proceed();
		}
		Object[] arguments = invocation.getArguments();
		String key = getCacheKey(targetName, methodName, arguments);
		try {
			// �ж��Ƿ��л���
			if (redisUtil.exists(key)) {
				return redisUtil.get(key);
			}
			// д�뻺��
			value = invocation.proceed();
			if (value != null) {
				final String tkey = key;
				final Object tvalue = value;
				new Thread(new Runnable() {
					@Override
					public void run() {
						redisUtil.set(tkey, tvalue, Long.parseLong(defaultCacheExpireTime));
					}
				}).start();
			}
		} catch (Exception e) {
			e.printStackTrace();
			if (value == null) {
				return invocation.proceed();
			}
		}
		return value;
	}

	/**
	 * �Ƿ���뻺��
	 *
	 * @return
	 */
	private boolean isAddCache(String targetName, String methodName) {
		boolean flag = true;
		if (targetNamesList.contains(targetName) || methodNamesList.contains(methodName)
				|| targetName.contains("$$EnhancerBySpringCGLIB$$")) {
			flag = false;
		}
		return flag;
	}

	/**
	 * ��������key
	 *
	 * @param targetName
	 * @param methodName
	 * @param arguments
	 */
	private String getCacheKey(String targetName, String methodName, Object[] arguments) {
		StringBuffer sbu = new StringBuffer();
		sbu.append(targetName).append("_").append(methodName);
		if ((arguments != null) && (arguments.length != 0)) {
			for (int i = 0; i < arguments.length; i++) {
				sbu.append("_").append(arguments[i]);
			}
		}
		return sbu.toString();
	}

	public void setRedisUtil(RedisUtil redisUtil) {
		this.redisUtil = redisUtil;
	}

	public void setTargetNamesList(List<String> targetNamesList) {
		this.targetNamesList = targetNamesList;
	}

	public void setMethodNamesList(List<String> methodNamesList) {
		this.methodNamesList = methodNamesList;
	}

	public void setDefaultCacheExpireTime(String defaultCacheExpireTime) {
		this.defaultCacheExpireTime = defaultCacheExpireTime;
	}

}
