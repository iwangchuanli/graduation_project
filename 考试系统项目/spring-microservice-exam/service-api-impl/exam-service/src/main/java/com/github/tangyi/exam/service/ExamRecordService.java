package com.github.tangyi.exam.service;

import com.github.tangyi.common.core.service.CrudService;
import com.github.tangyi.exam.api.module.ExaminationRecord;
import com.github.tangyi.exam.mapper.ExamRecordMapper;
import lombok.AllArgsConstructor;
import org.springframework.cache.annotation.CacheEvict;
import org.springframework.cache.annotation.Cacheable;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

/**
 * 考试记录service
 *
 * @author tangyi
 * @date 2018/11/8 21:20
 */
@AllArgsConstructor
@Service
public class ExamRecordService extends CrudService<ExamRecordMapper, ExaminationRecord> {

    /**
     * 查询考试记录
     *
     * @param examRecord examRecord
     * @return ExamRecord
     * @author tangyi
     * @date 2019/1/3 14:10
     */
    @Override
    @Cacheable(value = "record", key = "#examRecord.id")
    public ExaminationRecord get(ExaminationRecord examRecord) {
        return super.get(examRecord);
    }

    /**
     * 更新考试记录
     *
     * @param examRecord examRecord
     * @return ExamRecord
     * @author tangyi
     * @date 2019/1/3 14:10
     */
    @Override
    @Transactional
    @CacheEvict(value = "record", key = "#examRecord.id")
    public int update(ExaminationRecord examRecord) {
        return super.update(examRecord);
    }

    /**
     * 删除考试记录
     *
     * @param examRecord examRecord
     * @return ExamRecord
     * @author tangyi
     * @date 2019/1/3 14:10
     */
    @Override
    @Transactional
    @CacheEvict(value = "record", key = "#examRecord.id")
    public int insert(ExaminationRecord examRecord) {
        return super.insert(examRecord);
    }

    /**
     * 根据用户id、考试id查找
     *
     * @param examRecord examRecord
     * @return ExamRecord
     * @author tangyi
     * @date 2018/12/26 13:58
     */
    public ExaminationRecord getByUserIdAndExaminationId(ExaminationRecord examRecord) {
        return this.dao.getByUserIdAndExaminationId(examRecord);
    }

    /**
     * 批量删除
     *
     * @param ids ids
     * @return int
     * @author tangyi
     * @date 2019/1/3 14:11
     */
    @Override
    @Transactional
    @CacheEvict(value = "record", allEntries = true)
    public int deleteAll(String[] ids) {
        return super.deleteAll(ids);
    }
}
