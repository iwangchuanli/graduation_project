package com.github.tangyi.exam.controller;

import com.github.pagehelper.PageInfo;
import com.github.tangyi.common.core.constant.CommonConstant;
import com.github.tangyi.common.core.model.ResponseBean;
import com.github.tangyi.common.core.utils.*;
import com.github.tangyi.common.core.vo.DeptVo;
import com.github.tangyi.common.core.vo.UserVo;
import com.github.tangyi.common.core.web.BaseController;
import com.github.tangyi.common.log.annotation.Log;
import com.github.tangyi.common.security.constant.SecurityConstant;
import com.github.tangyi.exam.api.dto.ExaminationRecordDto;
import com.github.tangyi.exam.api.dto.StartExamDto;
import com.github.tangyi.exam.api.module.Examination;
import com.github.tangyi.exam.api.module.ExaminationRecord;
import com.github.tangyi.exam.service.AnswerService;
import com.github.tangyi.exam.service.ExamRecordService;
import com.github.tangyi.exam.service.ExaminationService;
import com.github.tangyi.exam.utils.ExamRecordUtil;
import com.github.tangyi.user.api.feign.UserServiceClient;
import io.swagger.annotations.Api;
import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import lombok.AllArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.apache.commons.collections4.CollectionUtils;
import org.apache.commons.lang.StringUtils;
import org.springframework.beans.BeanUtils;
import org.springframework.http.HttpHeaders;
import org.springframework.security.access.prepost.PreAuthorize;
import org.springframework.web.bind.annotation.*;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.validation.Valid;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.HashSet;
import java.util.List;
import java.util.Set;
import java.util.stream.Stream;

/**
 * 考试记录controller
 *
 * @author tangyi
 * @date 2018/11/8 21:27
 */
@Slf4j
@AllArgsConstructor
@Api("考试记录信息管理")
@RestController
@RequestMapping("/v1/examRecord")
public class ExamRecordController extends BaseController {

    private final ExamRecordService examRecordService;

    private final ExaminationService examinationService;

    private final UserServiceClient userServiceClient;

    private final AnswerService answerService;

    /**
     * 根据ID获取
     *
     * @param id id
     * @return ResponseBean
     * @author tangyi
     * @date 2018/11/10 21:33
     */
    @GetMapping("/{id}")
    @ApiOperation(value = "获取考试记录信息", notes = "根据考试记录id获取考试记录详细信息")
    @ApiImplicitParam(name = "id", value = "考试记录ID", required = true, dataType = "String", paramType = "path")
    public ResponseBean<ExaminationRecord> examRecord(@PathVariable String id) {
        ExaminationRecord examRecord = new ExaminationRecord();
        examRecord.setId(id);
        return new ResponseBean<>(examRecordService.get(examRecord));
    }

    /**
     * 获取分页数据
     *
     * @param pageNum    pageNum
     * @param pageSize   pageSize
     * @param sort       sort
     * @param order      order
     * @param examRecord examRecord
     * @return PageInfo
     * @author tangyi
     * @date 2018/11/10 21:33
     */
    @GetMapping("examRecordList")
    @ApiOperation(value = "获取考试记录列表")
    @ApiImplicitParams({
            @ApiImplicitParam(name = CommonConstant.PAGE_NUM, value = "分页页码", defaultValue = CommonConstant.PAGE_NUM_DEFAULT, dataType = "String"),
            @ApiImplicitParam(name = CommonConstant.PAGE_SIZE, value = "分页大小", defaultValue = CommonConstant.PAGE_SIZE_DEFAULT, dataType = "String"),
            @ApiImplicitParam(name = CommonConstant.SORT, value = "排序字段", defaultValue = CommonConstant.PAGE_SORT_DEFAULT, dataType = "String"),
            @ApiImplicitParam(name = CommonConstant.ORDER, value = "排序方向", defaultValue = CommonConstant.PAGE_ORDER_DEFAULT, dataType = "String"),
            @ApiImplicitParam(name = "examRecord", value = "考试记录信息", dataType = "ExamRecord")
    })
    public PageInfo<ExaminationRecordDto> examRecordList(@RequestParam(value = CommonConstant.PAGE_NUM, required = false, defaultValue = CommonConstant.PAGE_NUM_DEFAULT) String pageNum,
                                                         @RequestParam(value = CommonConstant.PAGE_SIZE, required = false, defaultValue = CommonConstant.PAGE_SIZE_DEFAULT) String pageSize,
                                                         @RequestParam(value = CommonConstant.SORT, required = false, defaultValue = CommonConstant.PAGE_SORT_DEFAULT) String sort,
                                                         @RequestParam(value = CommonConstant.ORDER, required = false, defaultValue = CommonConstant.PAGE_ORDER_DEFAULT) String order,
                                                         ExaminationRecord examRecord) {
        examRecord.setTenantCode(SysUtil.getTenantCode());
        PageInfo<ExaminationRecordDto> examRecordDtoPageInfo = new PageInfo<>();
        List<ExaminationRecordDto> examRecordDtoList = new ArrayList<>();
        // 查询考试记录
        PageInfo<ExaminationRecord> examRecordPageInfo = examRecordService.findPage(PageUtil.pageInfo(pageNum, pageSize, sort, order), examRecord);
        if (CollectionUtils.isNotEmpty(examRecordPageInfo.getList())) {
            Examination examination = new Examination();
            // 获取考试ID集合，转成字符串数组
            examination.setIds(examRecordPageInfo.getList().stream().map(ExaminationRecord::getExaminationId).distinct().toArray(String[]::new));
            // 查询考试信息
            List<Examination> examinations = examinationService.findListById(examination);
            // 查询用户信息
            UserVo userVo = new UserVo();
            // 获取用户ID集合，转成字符串数组
            userVo.setIds(examRecordPageInfo.getList().stream().map(ExaminationRecord::getUserId).distinct().toArray(String[]::new));
            ResponseBean<List<UserVo>> returnT = userServiceClient.findUserById(userVo);
            if (returnT != null && CollectionUtils.isNotEmpty(returnT.getData())) {
                examRecordPageInfo.getList().forEach(tempExamRecord -> {
                    // 找到考试记录所属的考试信息
                    Examination examinationRecordExamination = examinations.stream()
                            .filter(tempExamination -> tempExamRecord.getExaminationId().equals(tempExamination.getId()))
                            .findFirst().orElse(null);
                    // 转换成ExamRecordDto
                    if (examinationRecordExamination != null) {
                        ExaminationRecordDto examRecordDto = new ExaminationRecordDto();
                        BeanUtils.copyProperties(examinationRecordExamination, examRecordDto);
                        examRecordDto.setId(tempExamRecord.getId());
                        examRecordDto.setStartTime(tempExamRecord.getStartTime());
                        examRecordDto.setEndTime(tempExamRecord.getEndTime());
                        examRecordDto.setScore(tempExamRecord.getScore());
                        examRecordDto.setUserId(tempExamRecord.getUserId());
                        examRecordDto.setExaminationId(tempExamRecord.getExaminationId());
                        // 正确题目数
                        examRecordDto.setCorrectNumber(tempExamRecord.getCorrectNumber());
                        examRecordDto.setInCorrectNumber(tempExamRecord.getInCorrectNumber());
                        // 提交状态
                        examRecordDto.setSubmitStatus(tempExamRecord.getSubmitStatus());
                        examRecordDtoList.add(examRecordDto);
                    }
                });
                // 查询部门信息
                DeptVo deptVo = new DeptVo();
                // 获取部门ID集合，转成字符串数组
                deptVo.setIds(returnT.getData().stream().map(UserVo::getDeptId).distinct().toArray(String[]::new));
                ResponseBean<List<DeptVo>> deptResponseBean = userServiceClient.findDeptById(deptVo);
                examRecordDtoList.forEach(tempExamRecordDto -> {
                    // 查询、设置用户信息
                    UserVo examRecordDtoUserVo = returnT.getData().stream()
                            .filter(tempUserVo -> tempExamRecordDto.getUserId().equals(tempUserVo.getId()))
                            .findFirst().orElse(null);
                    if (examRecordDtoUserVo != null) {
                        // 设置用户名
                        tempExamRecordDto.setUserName(examRecordDtoUserVo.getName());
                        // 查询、设置部门信息
                        if (deptResponseBean != null && CollectionUtils.isNotEmpty(deptResponseBean.getData())) {
                            DeptVo examRecordDtoDeptVo = deptResponseBean.getData().stream()
                                    // 根据部门ID过滤
                                    .filter(tempDept -> tempDept.getId().equals(examRecordDtoUserVo.getDeptId()))
                                    .findFirst().orElse(null);
                            // 设置部门名称
                            if (examRecordDtoDeptVo != null)
                                tempExamRecordDto.setDeptName(examRecordDtoDeptVo.getDeptName());
                        }
                    }
                });
            }
        }
        examRecordDtoPageInfo.setTotal(examRecordPageInfo.getTotal());
        examRecordDtoPageInfo.setPages(examRecordPageInfo.getPages());
        examRecordDtoPageInfo.setPageSize(examRecordPageInfo.getPageSize());
        examRecordDtoPageInfo.setPageNum(examRecordPageInfo.getPageNum());
        examRecordDtoPageInfo.setList(examRecordDtoList);
        return examRecordDtoPageInfo;
    }

    /**
     * 创建
     *
     * @param examRecord examRecord
     * @return ResponseBean
     * @author tangyi
     * @date 2018/11/10 21:33
     */
    @PostMapping
    @ApiOperation(value = "创建考试记录", notes = "创建考试记录")
    @ApiImplicitParam(name = "examRecord", value = "考试记录实体examRecord", required = true, dataType = "ExamRecord")
    @Log("新增考试记录")
    public ResponseBean<ExaminationRecord> addExamRecord(@RequestBody @Valid ExaminationRecord examRecord) {
        Examination examination = new Examination();
        examination.setId(examRecord.getExaminationId());
        // 查找考试信息
        examination = examinationService.get(examination);
        examRecord.setCommonValue(SysUtil.getUser(), SysUtil.getSysCode(), SysUtil.getTenantCode());
        examRecord.setStartTime(examRecord.getCreateDate());
        examRecordService.insert(examRecord);
        return new ResponseBean<>(examRecord);
    }

    /**
     * 更新
     *
     * @param examRecord examRecord
     * @return ResponseBean
     * @author tangyi
     * @date 2018/11/10 21:34
     */
    @PutMapping
    @ApiOperation(value = "更新考试记录信息", notes = "根据考试记录id更新考试记录的基本信息")
    @ApiImplicitParam(name = "examRecord", value = "考试记录实体examRecord", required = true, dataType = "ExamRecord")
    @Log("更新考试记录")
    public ResponseBean<Boolean> updateExamRecord(@RequestBody @Valid ExaminationRecord examRecord) {
        examRecord.setCommonValue(SysUtil.getUser(), SysUtil.getSysCode(), SysUtil.getTenantCode());
        return new ResponseBean<>(examRecordService.update(examRecord) > 0);
    }

    /**
     * 删除
     *
     * @param id id
     * @return ResponseBean
     * @author tangyi
     * @date 2018/11/10 21:34
     */
    @DeleteMapping("{id}")
    @ApiOperation(value = "删除考试记录", notes = "根据ID删除考试记录")
    @ApiImplicitParam(name = "id", value = "考试记录ID", required = true, paramType = "path")
    @Log("删除考试记录")
    public ResponseBean<Boolean> deleteExamRecord(@PathVariable String id) {
        boolean success = false;
        try {
            ExaminationRecord examRecord = examRecordService.get(id);
            if (examRecord != null) {
                examRecord.setCommonValue(SysUtil.getUser(), SysUtil.getSysCode(), SysUtil.getTenantCode());
                success = examRecordService.delete(examRecord) > 0;
            }
        } catch (Exception e) {
            log.error("删除考试记录失败！", e);
        }
        return new ResponseBean<>(success);
    }

    /**
     * 导出
     *
     * @param examRecordDto examRecordDto
     * @author tangyi
     * @date 2018/12/31 22:28
     */
    @PostMapping("export")
    @PreAuthorize("hasAuthority('exam:examRecord:export') or hasAnyRole('" + SecurityConstant.ROLE_ADMIN + "')")
    @ApiOperation(value = "导出考试成绩", notes = "根据成绩id导出成绩")
    @ApiImplicitParam(name = "examRecordDto", value = "成绩信息", required = true, dataType = "ExamRecordDto")
    @Log("导出考试记录")
    public void exportExamRecord(@RequestBody ExaminationRecordDto examRecordDto, HttpServletRequest request, HttpServletResponse response) {
        try {
            // 配置response
            response.setCharacterEncoding("utf-8");
            response.setContentType("multipart/form-data");
            response.setHeader(HttpHeaders.CONTENT_DISPOSITION, Servlets.getDownName(request, "考试成绩" + DateUtils.localDateMillisToString(LocalDateTime.now()) + ".xlsx"));
            List<ExaminationRecord> examRecordList;
            if (StringUtils.isNotEmpty(examRecordDto.getIdString())) {
                ExaminationRecord examRecord = new ExaminationRecord();
                examRecord.setIds(Stream.of(examRecordDto.getIdString().split(",")).filter(StringUtils::isNotEmpty).distinct().toArray(String[]::new));
                examRecordList = examRecordService.findListById(examRecord);
            } else {
                // 导出全部
                ExaminationRecord examRecord = new ExaminationRecord();
                examRecord.setTenantCode(SysUtil.getTenantCode());
                examRecordList = examRecordService.findList(examRecord);
            }
            // 查询考试、用户、部门数据
            if (CollectionUtils.isNotEmpty(examRecordList)) {
                List<ExaminationRecordDto> examRecordDtoList = new ArrayList<>();
                // 查询考试信息
                Examination examination = new Examination();
                examination.setIds(examRecordList.stream().map(ExaminationRecord::getExaminationId).distinct().toArray(String[]::new));
                List<Examination> examinations = examinationService.findListById(examination);
                // 用户id
                Set<String> userIdSet = new HashSet<>();
                examRecordList.forEach(tempExamRecord -> {
                    // 查找考试记录所属的考试信息
                    Examination examRecordExamination = examinations.stream()
                            .filter(tempExamination -> tempExamRecord.getExaminationId().equals(tempExamination.getId()))
                            .findFirst().orElse(null);
                    if (examRecordExamination != null) {
                        ExaminationRecordDto recordDto = new ExaminationRecordDto();
                        recordDto.setId(tempExamRecord.getId());
                        recordDto.setExaminationName(examRecordExamination.getExaminationName());
                        //recordDto.setExamTime(tempExamRecord.getCreateDate());
                        recordDto.setScore(tempExamRecord.getScore());
                        recordDto.setUserId(tempExamRecord.getUserId());
                        recordDto.setCorrectNumber(tempExamRecord.getCorrectNumber());
                        recordDto.setInCorrectNumber(tempExamRecord.getInCorrectNumber());
                        recordDto.setSubmitStatus(tempExamRecord.getSubmitStatus());
                        userIdSet.add(tempExamRecord.getUserId());
                        examRecordDtoList.add(recordDto);
                    }
                });
                // 查询用户信息
                UserVo userVo = new UserVo();
                userVo.setIds(userIdSet.toArray(new String[0]));
                ResponseBean<List<UserVo>> returnT = userServiceClient.findUserById(userVo);
                if (returnT != null && CollectionUtils.isNotEmpty(returnT.getData())) {
                    // 查询部门信息
                    DeptVo deptVo = new DeptVo();
                    deptVo.setIds(returnT.getData().stream().map(UserVo::getDeptId).distinct().toArray(String[]::new));
                    // 获取部门信息
                    ResponseBean<List<DeptVo>> deptResponseBean = userServiceClient.findDeptById(deptVo);
                    examRecordDtoList.forEach(tempExamRecordDto -> {
                        // 查询用户信息
                        UserVo examRecordDtoUserVo = returnT.getData().stream().filter(tempUserVo -> tempExamRecordDto.getUserId().equals(tempUserVo.getId()))
                                .findFirst().orElse(null);
                        if (examRecordDtoUserVo != null) {
                            tempExamRecordDto.setUserName(examRecordDtoUserVo.getName());
                            // 查询部门信息
                            if (deptResponseBean != null && CollectionUtils.isNotEmpty(deptResponseBean.getData())) {
                                // 查找用户所属部门
                                DeptVo examRecordDtoDeptVo = deptResponseBean.getData().stream()
                                        .filter(tempDept -> tempDept.getId().equals(examRecordDtoUserVo.getDeptId()))
                                        .findFirst().orElse(null);
                                // 设置所属部门名称
                                if (examRecordDtoDeptVo != null)
                                    tempExamRecordDto.setDeptName(examRecordDtoDeptVo.getDeptName());
                            }
                        }
                    });
                }
                // 导出
                ExcelToolUtil.exportExcel(request.getInputStream(), response.getOutputStream(), MapUtil.java2Map(examRecordDtoList), ExamRecordUtil.getExamRecordDtoMap());
            }
        } catch (Exception e) {
            log.error("导出成绩数据失败！", e);
        }
    }

    /**
     * 开始考试
     *
     * @param examRecord examRecord
     * @return ResponseBean
     * @author tangyi
     * @date 2019/04/30 16:45
     */
    @PostMapping("start")
    @Log("开始考试")
    public ResponseBean<StartExamDto> start(@RequestBody ExaminationRecord examRecord) {
        return new ResponseBean<>(answerService.start(examRecord));
    }

    /**
     * 获取服务器当前时间
     *
     * @return ResponseBean
     * @author tangyi
     * @date 2019/05/07 22:03
     */
    @GetMapping("currentTime")
    public ResponseBean<String> currentTime() {
        return new ResponseBean<>(DateUtils.localDateToString(LocalDateTime.now()));
    }

    /**
     * 完成批改
     *
     * @param examRecord examRecord
     * @return ResponseBean
     * @author tangyi
     * @date 2019/06/19 14:33
     */
    @PutMapping("completeMarking")
    public ResponseBean<Boolean> completeMarking(@RequestBody ExaminationRecord examRecord) {
        return new ResponseBean<>(answerService.completeMarking(examRecord));
    }
}
