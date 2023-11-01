package cn.jxc.excel;

import java.lang.annotation.ElementType;
import java.lang.annotation.Retention;
import java.lang.annotation.RetentionPolicy;
import java.lang.annotation.Target;

@Target({ ElementType.FIELD, ElementType.TYPE, ElementType.METHOD })
@Retention(RetentionPolicy.RUNTIME)
public @interface ExcelField {
	/**
	 * �����ֶ���(Ĭ�ϵ��õ�ǰ�ֶε�"get"����,��ָ�������ֶ�Ϊ����,����д"������.��������", ����
	 */
	String value() default "";

	/**
	 * �����ֶα���(��Ҫ�����ע����"**"�ָ�������**��ע�����Ե���ģ����Ч)
	 */
	String title();

	/**
	 * �ֶ�����(0:��������;1:������;2:������)
	 */
	int type() default 0;

	/**
	 * �����ֶζ��뷽ʽ(0:�Զ�;1:����;2:����;3:����)
	 */
	int align() default 0;

	/**
	 * �����ֶ��ֶ�����(����)
	 */
	int sort() default 0;

	/**
	 * ������ֵ����ͣ��������ֵ��typeֵ
	 */
	String dictType() default "";

	/**
	 * ��������
	 */
	Class<?> fieldType() default Class.class;

	/**
	 * �ֶι�����(���ݷ��鵼������)
	 */
	int[] groups() default {};

}
