package com.github.tangyi.exam.service;

import com.github.pagehelper.PageInfo;
import com.github.tangyi.common.core.service.CrudService;
import com.github.tangyi.exam.api.dto.SubjectDto;
import com.github.tangyi.exam.api.module.SubjectShortAnswer;
import com.github.tangyi.exam.mapper.SubjectShortAnswerMapper;
import com.github.tangyi.exam.utils.SubjectUtil;
import org.springframework.beans.BeanUtils;
import org.springframework.cache.annotation.CacheEvict;
import org.springframework.cache.annotation.Cacheable;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

/**
 * 简答题service
 *
 * @author tangyi
 * @date 2019/6/16 14:58
 */
@Service
public class SubjectShortAnswerService extends CrudService<SubjectShortAnswerMapper, SubjectShortAnswer> implements BaseSubjectService {

    /**
     * 查找题目
     *
     * @param subjectShortAnswer subjectShortAnswer
     * @return SubjectShortAnswer
     * @author tangyi
     * @date 2019/6/16 14:58
     */
    @Override
    @Cacheable(value = "subjectShortAnswer", key = "#subjectShortAnswer.id")
    public SubjectShortAnswer get(SubjectShortAnswer subjectShortAnswer) {
        return super.get(subjectShortAnswer);
    }

    /**
     * 根据序号查找
     *
     * @param subjectShortAnswer subjectShortAnswer
     * @return SubjectShortAnswer
     * @author tangyi
     * @date 2019/6/16 14:58
     */
    public SubjectShortAnswer getBySerialNumber(SubjectShortAnswer subjectShortAnswer) {
        return this.dao.getBySerialNumber(subjectShortAnswer);
    }

    /**
     * 新增
     *
     * @param subjectShortAnswer subjectShortAnswer
     * @return int
     * @author tangyi
     * @date 2019/6/16 14:58
     */
    @Override
    @Transactional
    public int insert(SubjectShortAnswer subjectShortAnswer) {
        return super.insert(subjectShortAnswer);
    }

    /**
     * 更新题目
     *
     * @param subjectShortAnswer subjectShortAnswer
     * @return int
     * @author tangyi
     * @date 2019/6/16 14:58
     */
    @Override
    @Transactional
    @CacheEvict(value = "subjectShortAnswer", key = "#subjectShortAnswer.id")
    public int update(SubjectShortAnswer subjectShortAnswer) {
        return super.update(subjectShortAnswer);
    }

    /**
     * 删除题目
     *
     * @param subjectShortAnswer subjectShortAnswer
     * @return int
     * @author tangyi
     * @date 2019/6/16 14:58
     */
    @Override
    @Transactional
    @CacheEvict(value = "subjectShortAnswer", key = "#subjectShortAnswer.id")
    public int delete(SubjectShortAnswer subjectShortAnswer) {
        return super.delete(subjectShortAnswer);
    }

    /**
     * 物理删除题目
     *
     * @param subjectShortAnswer subjectShortAnswer
     * @return int
     * @author tangyi
     * @date 2019/6/16 22:58
     */
    @Transactional
    @CacheEvict(value = "subjectShortAnswer", key = "#subjectShortAnswer.id")
    public int physicalDelete(SubjectShortAnswer subjectShortAnswer) {
        return this.dao.physicalDelete(subjectShortAnswer);
    }

    /**
     * 批量删除题目
     *
     * @param ids ids
     * @return int
     * @author tangyi
     * @date 2019/6/16 14:58
     */
    @Override
    @Transactional
    @CacheEvict(value = "subjectChoices", allEntries = true)
    public int deleteAll(String[] ids) {
        return super.deleteAll(ids);
    }

    /**
     * 批量删除题目
     *
     * @param ids ids
     * @return int
     * @author tangyi
     * @date 2019/6/16 22:58
     */
    @Transactional
    @CacheEvict(value = "subjectChoices", allEntries = true)
    public int physicalDeleteAll(String[] ids) {
        return this.dao.physicalDeleteAll(ids);
    }

    /**
     * 根据ID查询
     *
     * @param id id
     * @return SubjectDto
     * @author tangyi
     * @date 2019/06/16 17:36
     */
    @Override
    public SubjectDto getSubject(String id) {
        SubjectShortAnswer subjectShortAnswer = new SubjectShortAnswer();
        subjectShortAnswer.setId(id);
        return SubjectUtil.subjectShortAnswerToDto(this.get(subjectShortAnswer));
    }

    /**
     * 根据题目序号查询
     *
     * @param serialNumber serialNumber
     * @return SubjectDto
     * @author tangyi
     * @date 2019/06/16 17:54
     */
    @Override
    public SubjectDto getSubjectBySerialNumber(Integer serialNumber) {
        SubjectShortAnswer subjectShortAnswer = new SubjectShortAnswer();
        subjectShortAnswer.setSerialNumber(serialNumber);
        return SubjectUtil.subjectShortAnswerToDto(this.getBySerialNumber(subjectShortAnswer));
    }

    /**
     * 保存
     *
     * @param subjectDto subjectDto
     * @return SubjectDto
     * @author tangyi
     * @date 2019/06/16 17:54
     */
    @Override
    @Transactional
    public int insertSubject(SubjectDto subjectDto) {
        SubjectShortAnswer subjectShortAnswer = new SubjectShortAnswer();
        BeanUtils.copyProperties(subjectDto, subjectShortAnswer);
        return this.insert(subjectShortAnswer);
    }

    /**
     * 更新
     *
     * @param subjectDto subjectDto
     * @return SubjectDto
     * @author tangyi
     * @date 2019/06/16 17:54
     */
    @Override
    @Transactional
    public int updateSubject(SubjectDto subjectDto) {
        SubjectShortAnswer subjectShortAnswer = new SubjectShortAnswer();
        BeanUtils.copyProperties(subjectDto, subjectShortAnswer);
        // 参考答案
        subjectShortAnswer.setAnswer(subjectDto.getAnswer().getAnswer());
        return this.update(subjectShortAnswer);
    }

    /**
     * 删除
     *
     * @param subjectDto subjectDto
     * @return SubjectDto
     * @author tangyi
     * @date 2019/06/16 17:54
     */
    @Override
    @Transactional
    public int deleteSubject(SubjectDto subjectDto) {
        SubjectShortAnswer subjectShortAnswer = new SubjectShortAnswer();
        BeanUtils.copyProperties(subjectDto, subjectShortAnswer);
        return this.delete(subjectShortAnswer);
    }

    /**
     * 物理删除
     *
     * @param subjectDto subjectDto
     * @return SubjectDto
     * @author tangyi
     * @date 2019/06/16 22:59
     */
    @Override
    @Transactional
    public int physicalDeleteSubject(SubjectDto subjectDto) {
        SubjectShortAnswer subjectShortAnswer = new SubjectShortAnswer();
        BeanUtils.copyProperties(subjectDto, subjectShortAnswer);
        return this.physicalDelete(subjectShortAnswer);
    }

    /**
     * 批量删除
     *
     * @param subjectDto subjectDto
     * @return SubjectDto
     * @author tangyi
     * @date 2019/06/16 17:54
     */
    @Override
    @Transactional
    public int deleteAllSubject(SubjectDto subjectDto) {
        return this.deleteAll(subjectDto.getIds());
    }

    /**
     * 物理删除
     *
     * @param subjectDto subjectDto
     * @return SubjectDto
     * @author tangyi
     * @date 2019/06/16 22:59
     */
    @Override
    @Transactional
    public int physicalDeleteAllSubject(SubjectDto subjectDto) {
        return this.physicalDeleteAll(subjectDto.getIds());
    }

    /**
     * 查询列表
     *
     * @param subjectDto subjectDto
     * @return List
     * @author tangyi
     * @date 2019/06/16 18:17
     */
    @Override
    public List<SubjectDto> findSubjectList(SubjectDto subjectDto) {
        SubjectShortAnswer subjectShortAnswer = new SubjectShortAnswer();
        BeanUtils.copyProperties(subjectDto, subjectShortAnswer);
        return SubjectUtil.subjectShortAnswerToDto(this.findList(subjectShortAnswer));
    }

    /**
     * 查询分页列表
     *
     * @param pageInfo   pageInfo
     * @param subjectDto subjectDto
     * @return PageInfo
     * @author tangyi
     * @date 2019/06/16 18:17
     */
    @Override
    public PageInfo<SubjectDto> findSubjectPage(PageInfo pageInfo, SubjectDto subjectDto) {
        SubjectShortAnswer subjectShortAnswer = new SubjectShortAnswer();
        BeanUtils.copyProperties(subjectDto, subjectShortAnswer);
        PageInfo subjectShortAnswerPageInfo = this.findPage(pageInfo, subjectShortAnswer);
        List subjectDtos = SubjectUtil.subjectShortAnswerToDto(subjectShortAnswerPageInfo.getList());
        PageInfo<SubjectDto> subjectDtoPageInfo = new PageInfo<>();
        subjectDtoPageInfo.setList(subjectDtos);

        subjectDtoPageInfo.setTotal(subjectShortAnswerPageInfo.getTotal());
        subjectDtoPageInfo.setPageSize(subjectShortAnswerPageInfo.getPageSize());
        subjectDtoPageInfo.setPageNum(subjectShortAnswerPageInfo.getPageNum());
        return subjectDtoPageInfo;
    }

    /**
     * 根据ID查询列表
     *
     * @param subjectDto subjectDto
     * @return List
     * @author tangyi
     * @date 2019/06/16 18:17
     */
    @Override
    public List<SubjectDto> findSubjectListById(SubjectDto subjectDto) {
        SubjectShortAnswer subjectShortAnswer = new SubjectShortAnswer();
        BeanUtils.copyProperties(subjectDto, subjectShortAnswer);
        return SubjectUtil.subjectShortAnswerToDto(this.findListById(subjectShortAnswer));
    }
}
