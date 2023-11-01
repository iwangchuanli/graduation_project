package com.example.design.service.impl;

import com.example.design.component.model.Page;
import com.example.design.mapper.CommentMapper;
import com.example.design.model.Comment;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

/**
 * 评论服务
 *
 * @author lxh
 * @version 0.1
 */
@Service
@Transactional
public class CommentService {

  @Autowired
  private CommentMapper commentMapper;

  public List<Comment> all() {
    return commentMapper.findAll();
  }

  public Comment findById(long id) {
    return commentMapper.queryById(id);
  }

  public List<Comment> findByUserId(long userId) {
    return commentMapper.findByUserId(userId);
  }

  public List<Comment> findByPage(Page page) {
    return commentMapper.findByPage(page);
  }

  public int add(Comment comment) {
    return commentMapper.add(comment);
  }

  public int update(Comment comment) {
    return commentMapper.update(comment);
  }

  public int delete(Comment comment) {
    return commentMapper.delete(comment);
  }
}
