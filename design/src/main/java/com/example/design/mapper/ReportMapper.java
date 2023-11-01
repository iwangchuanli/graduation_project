package com.example.design.mapper;

import com.example.design.model.Report;

import org.apache.ibatis.annotations.Delete;
import org.apache.ibatis.annotations.Insert;
import org.apache.ibatis.annotations.Mapper;
import org.apache.ibatis.annotations.Select;
import org.apache.ibatis.annotations.Update;
import org.springframework.stereotype.Repository;

import java.util.List;

/**
 * 举报持久化接口. Created by lxh on 4/20/16.
 */
@Repository
@Mapper
public interface ReportMapper {

  @Select("SELECT * FROM `report`")
  List<Report> findAll();

  @Select("SELECT * FROM `report` WHERE `reportId` = #{findById}")
  Report findById(long id);

  @Delete("DELETE FROM `report` WHERE `reportId` = #{reportId}")
  int delete(Report report);

  @Insert("INSERT INTO `message`(`userId`, `reportType`, `reportedItemId`, `reportDate`, "
          + "`reportReason`) VALUES (#{userId}, #{reportType}, #{reportedItemId}, #{reportDate},"
          + " #{reportReason})")
  int add(Report report);            //添加举报

  @Update("UPDATE `report` SET `state` = 1, `result` = #{result}, `closeDate` = #{closeDate}"
          + "WHERE `messageId` = #{messageId}")
  int dealReport(Report report);          //处理并关闭举报

  @Select("SELECT * FROM `report` WHERE `state` = #{state}")
  List<Report> findByState(int state);           //按处理状态来处理举报

  @Select("SELECT * FROM `report` WHERE `reportType` = #{reportType} AND `state` = 0")
  List<Report> findByReportType(String reportType);           //按被举报类型查询未处理举报

}
