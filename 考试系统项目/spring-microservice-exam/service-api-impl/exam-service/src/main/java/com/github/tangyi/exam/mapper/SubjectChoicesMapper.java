package com.github.tangyi.exam.mapper;

import com.github.tangyi.common.core.persistence.CrudMapper;
import com.github.tangyi.exam.api.module.SubjectChoices;
import org.apache.ibatis.annotations.Mapper;

/**
 * 选择题Mapper
 *
 * @author tangyi
 * @date 2018/11/8 21:15
 */
@Mapper
public interface SubjectChoicesMapper extends CrudMapper<SubjectChoices> {

    /**
     * 根据序号查找
     *
     * @param subjectChoices subjectChoices
     * @return SubjectChoices
     * @author tangyi
     * @date 2019/01/20 12:19
     */
    SubjectChoices getBySerialNumber(SubjectChoices subjectChoices);

    /**
     * 物理删除
     *
     * @param subjectChoices subjectChoices
     * @return int
     * @author tangyi
     * @date 2019/06/16 22:44
     */
    int physicalDelete(SubjectChoices subjectChoices);

    /**
     * 物理批量删除
     *
     * @param ids ids
     * @return int
     * @author tangyi
     * @date 2019/06/16 22:44
     */
    int physicalDeleteAll(String[] ids);
}
