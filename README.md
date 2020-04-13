### 抖音快手微视短视频平台无水印接口服务

##### 调用方式

`GET 请求`

https://v.taokeduo.cn/api?uid=应用uid&url=短视频平台的分享链接

例如：[https://v.taokeduo.cn/api?uid=06217e0cdb27d0200e3a4690f8907fd2&url=https://v.douyin.com/vc4bUC/](http://v.taokeduo.cn/api?uid=06217e0cdb27d0200e3a4690f8907fd2&url=https://v.douyin.com/vc4bUC/)

##### 返回参数

| 参数               | 说明                      |
| ------------------ | ------------------------- |
| code               | 1正常返回， 0有错误       |
| data.video_src     | 无水印短视频播放url       |
| data.cover_image   | 短视频封面图片url         |
| data.call_left_num | 剩余的接口调用次数        |
| msg                | code为0时返回错误提示信息 |

##### 实例

```json
{
    "code": 1,
    "data": {
        "video_src": "http://v3-dy-a.ixigua.com/410bfc02727fbc71e68284b13e5c1f5e/5e8ca0b2/video/tos/cn/tos-cn-ve-15/ea32ee5c68a84de5bfa3247d49f59d10/?a=1128&amp;br=0&amp;bt=557&amp;cr=0&amp;cs=0&amp;dr=0&amp;ds=6&amp;er=&amp;l=2020040722475701001404602108403DBE&amp;lr=&amp;qs=0&amp;rc=amt5Om91bXhvdDMzNGkzM0ApOzg1NWk2ZTs2N2g7OTM2Nmdic2tlamNhcTBfLS1gLS9zczFfYTYtMjMwLzQ0NWNiMWI6Yw%3D%3D&amp;vl=&amp;vr=",
        "cover_image": "https://p9-dy.byteimg.com/obj/tos-cn-p-0015/4a484a9830d446a39762ac6e52a2c21c_1585930069?from=2563711402_large",
        "call_left_num": 550096
    },
    "msg": "成功"
}
```



##### 注意事项

`url 参数需要是 url编码后的` 如果不编码则微视平台不能使用。

##### 功能成品
关注微信公众号 "抖乐圈" 点击菜单即可进入小程序看产品功能

<img src="./douyin-program-code.png"/>
##### 购买服务

基本接口调用，代码出售服务

链接：https://w.url.cn/s/ATkDaeB 

##### 联系我

QQ1361683946

