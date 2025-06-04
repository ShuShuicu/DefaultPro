# Default Pro Theme for Typecho

这是基于Typecho默认主题二次开发版，命名为`Default Pro`

## 修改说明

 - 副标题
 - 代码高亮
 - 图片灯箱
 - 渐入渐出
 - RESTAPI
 - NProgress
 - 夜间主题模式

### RESTAPI 使用说明

一个简单的 REST API，你可以使用它来获取一些数据。
> `API`路由及状态在`Core/TTDF.Config.php`中定义。 

全局参数

`page` 控制当前页码（默认值：`1`
`pageSize` 控制每页显示条数（默认值：`10`
`format` 控制返回格式，支持格式为`html`&`markdown`
`excerptLength` 控制文章摘要长度（默认值：`200`

| 调用  |                路由                | 其他参数&路由 |         描述         |
| :---: | :--------------------------------: | :-----------: | :------------------: |
|  Get  |                /API                |     null      |     获取网站信息     |
|  Get  |             /API/posts             |     null      |     获取文章列表     |
|  Get  |             /API/pages             |     null      |     获取页面列表     |
|  Get  |        /API/search/{string}        |    string     |     搜索文章列表     |
|  Get  |       /API/category/{string}       |   mid, slug   |     获取分类列表     |
|  Get  |         /API/tag/{string}          |   mid, slug   |     获取标签列表     |
|  Get  |       /API/content/{string}        |   cid, slug   |     获取内容数据     |
|  Get  |          /API/attachments          |     null      |     获取附件列表     |
|  Get  |           /API/comments            |     post      |     获取评论列表     |
|  Get  |    /API/comments/post/{string}     |    string     |   获取文章评论列表   |
|  Get  |     /API/fields/{name}/{value}     |    string     |   获取字段文章列表   |
|  Get  | /API/advancedFields/{name}/{value} |    string     | 获取高级字段查询列表 |
|  Get  |           /API/options/            |     null      |    获取设置项列表    |
|  Get  |    /API/options/{name}/{value}     |    string     |    获取设置项详情    |
|  Get  |         /API/themeOptions          |     null      |  获取主题设置项列表  |
|  Get  |      /API/themeOptions/{name}      |    string     |  获取主题设置项详情  |

### 字段查询
> TTDF内置了字段查询文章列表功能

#### 普通查询  

普通字段查询文章

```bash
GET /API/fields/{name}/{value}
```

#### 高级查询

##### 复杂查询​​使用 JSON

```bash
GET /API/advancedFields?conditions=[{"name":"color","value":"red"},{"name":"price","operator":">=","value":100}]
```

##### 模糊搜索​

```bash
GET /API/advancedFields/title/%重要%?operator=LIKE
```

#### 查询运算符与值类型规范

##### 运算符对照表

| 运算符 | 名称     | 描述           | 使用示例            |
| ------ | -------- | -------------- | ------------------- |
| =      | 等于     | 完全匹配字段值 | `color=red`         |
| !=     | 不等于   | 排除指定值     | `color!=blue`       |
| >      | 大于     | 数值比较       | `price>100`         |
| <      | 小于     | 数值比较       | `price<200`         |
| >=     | 大于等于 | 数值比较       | `price>=100`        |
| <=     | 小于等于 | 数值比较       | `price<=200`        |
| LIKE   | 模糊匹配 | 支持通配符%    | `title LIKE %重要%` |

##### 值类型定义

| 类型  | 说明               | 典型应用场景      | 示例             |
| ----- | ------------------ | ----------------- | ---------------- |
| str   | 字符串（默认类型） | 文本字段精确匹配  | `category=tech`  |
| int   | 整型数字           | ID/数量等数值比较 | `views>1000`     |
| float | 浮点数字           | 价格等精确数值    | `price<=19.99`   |
| text  | 长文本             | 内容全文检索      | `content=查询词` |

#### 注意事项

 - 字段名和值区分大小写
 - 特殊字符需要进行 URL 编码