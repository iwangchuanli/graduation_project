package com.example.design.configuration;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.data.redis.connection.jedis.JedisConnectionFactory;
import org.springframework.data.redis.core.RedisTemplate;
import org.springframework.data.redis.serializer.StringRedisSerializer;

/**
 * Redis Config.
 *
 * @author lxh
 * @version 0.1
 */
@Configuration
public class AppRedisConfig {

  @Autowired
  private JedisConnectionFactory jedisConnectionFactory;

  /**
   * 构建redis template.
   *
   * @return redisTemplate
   */
  @Bean
  public <T> RedisTemplate<String, T> redisTemplate() {
    RedisTemplate<String, T> template = new RedisTemplate<>();
    template.setConnectionFactory(jedisConnectionFactory);
    template.setKeySerializer(new StringRedisSerializer());
    return template;
  }
}
