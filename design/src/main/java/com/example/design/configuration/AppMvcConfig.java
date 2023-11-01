package com.example.design.configuration;


import com.example.design.constant.TokenConstant;
import com.example.design.interceptor.AuthorizationInterceptor;
import com.example.design.resolver.CurrentUserMethodArgumentResolver;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.method.support.HandlerMethodArgumentResolver;
import org.springframework.web.servlet.config.annotation.CorsRegistry;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;
import org.springframework.web.servlet.config.annotation.InterceptorRegistry;
import org.springframework.web.servlet.config.annotation.ResourceHandlerRegistry;
import org.springframework.web.servlet.config.annotation.ViewControllerRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurerAdapter;

import java.util.List;

/**
 * 对spring mvc 的一些配置. Created by lxh on 4/13/16.
 */
@Configuration
@EnableWebMvc
public class AppMvcConfig extends WebMvcConfigurerAdapter {
  /**
   * 用户认证拦截器.
   */
  @Autowired
  private AuthorizationInterceptor authorizationInterceptor;
  /**
   * currentUser 注解.
   */
  @Autowired
  private CurrentUserMethodArgumentResolver currentUserMethodArgumentResolver;

  @Override
  public void addCorsMappings(CorsRegistry registry) {
    super.addCorsMappings(registry);
    registry.addMapping("/api/**").allowedOrigins("http://localhost:8080")
            .allowedMethods("GET", "POST", "PUT", "DELETE");
    registry.addMapping("/elastic/**").allowedOrigins("http://localhost:8080")
            .allowedMethods("GET", "POST", "PUT", "DELETE");
  }

  /**
   * @param registry ViewControllerRegistry.
   */
  @Override
  public final void addViewControllers(
          final ViewControllerRegistry registry) {
    super.addViewControllers(registry);
    registry.addViewController("/").setViewName("index");
  }

  /**
   * @param registry ResourceHandlerRegistry.
   */
  @Override
  public final void addResourceHandlers(
          final ResourceHandlerRegistry registry) {
    super.addResourceHandlers(registry);
  }

  /**
   * @param registry InterceptorRegistry.
   */
  @Override
  public final void addInterceptors(final InterceptorRegistry registry) {
    authorizationInterceptor.setAuthHeader(TokenConstant.AUTHORIZATION);
    authorizationInterceptor.setHttpHeaderPrefix(TokenConstant.PREFIX);
    registry.addInterceptor(authorizationInterceptor);
  }


  /**
   * @param argumentResolvers List.
   */
  @Override
  public final void addArgumentResolvers(
          final List<HandlerMethodArgumentResolver> argumentResolvers) {
    argumentResolvers.add(currentUserMethodArgumentResolver);
  }
}
