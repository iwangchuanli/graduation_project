package com.github.tangyi.user.api.module;

import com.github.tangyi.common.core.persistence.BaseEntity;
import com.github.tangyi.user.api.enums.IdentityType;
import lombok.Data;

/**
 * 用户授权信息
 *
 * @author tangyi
 * @date 2019/07/03 11:10
 */
@Data
public class UserAuths extends BaseEntity<UserAuths> {

    /**
     * 用户id
     */
    private String userId;

    /**
     * 授权类型，1：用户名密码，2：手机号，3：邮箱，4：微信，5：QQ
     */
    private Integer identityType = IdentityType.PASSWORD.getValue();

    /**
     * 唯一标识，如用户名、手机号
     */
    private String identifier;

    /**
     * 密码凭证，跟授权类型有关，如密码、第三方系统的token等
     */
    private String credential;

}
