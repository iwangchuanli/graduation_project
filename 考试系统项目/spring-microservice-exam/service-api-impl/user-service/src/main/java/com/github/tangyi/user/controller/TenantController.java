package com.github.tangyi.user.controller;

import com.github.pagehelper.PageInfo;
import com.github.tangyi.common.core.constant.CommonConstant;
import com.github.tangyi.common.core.model.ResponseBean;
import com.github.tangyi.common.core.utils.PageUtil;
import com.github.tangyi.common.core.utils.SysUtil;
import com.github.tangyi.common.core.web.BaseController;
import com.github.tangyi.common.log.annotation.Log;
import com.github.tangyi.user.api.constant.TenantConstant;
import com.github.tangyi.user.api.module.Tenant;
import com.github.tangyi.user.service.TenantService;
import io.swagger.annotations.Api;
import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import lombok.AllArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.apache.commons.lang.StringUtils;
import org.springframework.web.bind.annotation.*;

import javax.validation.Valid;
import java.util.List;
import java.util.Optional;

/**
 * 租户管理Controller
 *
 * @author tangyi
 * @date 2019/5/22 22:52
 */
@Slf4j
@AllArgsConstructor
@Api("租户信息管理")
@RestController
@RequestMapping("/v1/tenant")
public class TenantController extends BaseController {

    private final TenantService tenantService;

    /**
     * 根据ID获取
     *
     * @param id id
     * @return ResponseBean
     * @author tangyi
     * @date 2019/05/22 22:53
     */
    @ApiOperation(value = "获取租户信息", notes = "根据租户id获取租户详细信息")
    @ApiImplicitParam(name = "id", value = "租户ID", required = true, dataType = "String", paramType = "path")
    @GetMapping("/{id}")
    public ResponseBean<Tenant> tenant(@PathVariable String id) {
        Tenant tenant = new Tenant();
        tenant.setId(id);
        return new ResponseBean<>(tenantService.get(tenant));
    }

    /**
     * 根据租户标识获取
     *
     * @param tenantCode tenantCode
     * @return ResponseBean
     * @author tangyi
     * @date 2019/05/26 10:23
     */
    @GetMapping("findTenantByTenantCode/{tenantCode}")
    public ResponseBean<Tenant> findTenantByTenantCode(@PathVariable String tenantCode) {
        return new ResponseBean<>(tenantService.getByTenantCode(tenantCode));
    }

    /**
     * 分页查询
     *
     * @param pageNum  pageNum
     * @param pageSize pageSize
     * @param sort     sort
     * @param order    order
     * @param tenant   tenant
     * @return PageInfo
     * @author tangyi
     * @date 2019/05/22 23:29
     */
    @GetMapping("tenantList")
    @ApiOperation(value = "获取租户列表")
    @ApiImplicitParams({
            @ApiImplicitParam(name = CommonConstant.PAGE_NUM, value = "分页页码", defaultValue = CommonConstant.PAGE_NUM_DEFAULT, dataType = "String"),
            @ApiImplicitParam(name = CommonConstant.PAGE_SIZE, value = "分页大小", defaultValue = CommonConstant.PAGE_SIZE_DEFAULT, dataType = "String"),
            @ApiImplicitParam(name = CommonConstant.SORT, value = "排序字段", defaultValue = CommonConstant.PAGE_SORT_DEFAULT, dataType = "String"),
            @ApiImplicitParam(name = CommonConstant.ORDER, value = "排序方向", defaultValue = CommonConstant.PAGE_ORDER_DEFAULT, dataType = "String"),
            @ApiImplicitParam(name = "tenant", value = "租户信息", dataType = "Tenant")
    })
    public PageInfo<Tenant> tenantList(@RequestParam(value = CommonConstant.PAGE_NUM, required = false, defaultValue = CommonConstant.PAGE_NUM_DEFAULT) String pageNum,
                                       @RequestParam(value = CommonConstant.PAGE_SIZE, required = false, defaultValue = CommonConstant.PAGE_SIZE_DEFAULT) String pageSize,
                                       @RequestParam(value = CommonConstant.SORT, required = false, defaultValue = CommonConstant.PAGE_SORT_DEFAULT) String sort,
                                       @RequestParam(value = CommonConstant.ORDER, required = false, defaultValue = CommonConstant.PAGE_ORDER_DEFAULT) String order,
                                       Tenant tenant) {
        return tenantService.findPage(PageUtil.pageInfo(pageNum, pageSize, sort, order), tenant);
    }

    /**
     * 创建租户
     *
     * @param tenant tenant
     * @return ResponseBean
     * @author tangyi
     * @date 2019/05/22 23:32
     */
    @PostMapping
    @ApiOperation(value = "创建租户", notes = "创建租户")
    @ApiImplicitParam(name = "tenant", value = "租户实体tenant", required = true, dataType = "Tenant")
    @Log("新增租户")
    public ResponseBean<Boolean> add(@RequestBody @Valid Tenant tenant) {
        tenant.setCommonValue(SysUtil.getUser(), SysUtil.getSysCode());
        // 初始化状态为待审核
        tenant.setStatus(TenantConstant.PENDING_AUDIT);
        // 保存租户
        return new ResponseBean<>(tenantService.insert(tenant) > 0);
    }

    /**
     * 更新租户
     *
     * @param tenant tenant
     * @return ResponseBean
     * @author tangyi
     * @date 2019/05/22 23:33
     */
    @PutMapping
    @ApiOperation(value = "更新租户信息", notes = "根据租户id更新租户的基本信息")
    @ApiImplicitParam(name = "tenant", value = "租户实体tenant", required = true, dataType = "Tenant")
    @Log("修改租户")
    public ResponseBean<Boolean> update(@RequestBody @Valid Tenant tenant) {
        try {
            return new ResponseBean<>(tenantService.update(tenant) > 0);
        } catch (Exception e) {
            log.error("更新租户信息失败！", e);
        }
        return new ResponseBean<>(Boolean.FALSE);
    }

    /**
     * 删除租户
     *
     * @param id id
     * @return ResponseBean
     * @author tangyi
     * @date 2019/05/22 23:35
     */
    @DeleteMapping("/{id}")
    @ApiOperation(value = "删除租户", notes = "根据ID删除租户")
    @ApiImplicitParam(name = "id", value = "租户ID", required = true, paramType = "path")
    @Log("删除租户")
    public ResponseBean<Boolean> delete(@PathVariable String id) {
        try {
            Tenant tenant = new Tenant();
            tenant.setId(id);
            tenant = tenantService.get(tenant);
            tenant.setCommonValue(SysUtil.getUser(), SysUtil.getSysCode());
            tenantService.delete(tenant);
        } catch (Exception e) {
            log.error("删除租户信息失败！", e);
        }
        return new ResponseBean<>(Boolean.FALSE);
    }

    /**
     * 批量删除
     *
     * @param tenant tenant
     * @return ResponseBean
     * @author tangyi
     * @date 2019/05/22 23:37
     */
    @PostMapping("deleteAll")
    @ApiOperation(value = "批量删除租户", notes = "根据租户id批量删除租户")
    @ApiImplicitParam(name = "tenant", value = "租户信息", dataType = "Tenant")
    @Log("批量删除租户")
    public ResponseBean<Boolean> deleteAll(@RequestBody Tenant tenant) {
        boolean success = false;
        try {
            if (StringUtils.isNotEmpty(tenant.getIdString()))
                success = tenantService.deleteAll(tenant.getIdString().split(",")) > 0;
        } catch (Exception e) {
            log.error("删除租户失败！", e);
        }
        return new ResponseBean<>(success);
    }

    /**
     * 根据ID查询
     *
     * @param tenant tenant
     * @return ResponseBean
     * @author tangyi
     * @date 2019/05/22 23:38
     */
    @RequestMapping(value = "findById", method = RequestMethod.POST)
    @ApiOperation(value = "根据ID查询租户", notes = "根据ID查询租户")
    @ApiImplicitParam(name = "tenant", value = "租户信息", required = true, paramType = "Tenant")
    public ResponseBean<List<Tenant>> findById(@RequestBody Tenant tenant) {
        List<Tenant> tenantList = tenantService.findListById(tenant);
        return Optional.ofNullable(tenantList).isPresent() ? new ResponseBean<>(tenantList) : null;
    }
}
