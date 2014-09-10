外国语网站模板文件
=========

外国语网站模板文件-for emlog
 <blockquote>这是整体的模板包，必须添加插件有“数据调用”、“EM相册”，可选插件为“主题编辑”</blockquote>
 网站地址：<a href="http://http://www4.gdin.edu.cn:8080/foreign" target="_blank">http://http://www4.gdin.edu.cn:8080/foreign</a>

**相关注意事项**
--------------------

 1.这仅为网站的模板文件，相关配置文件和登陆UI界面修改文件得自行修改和同步

 2,页面分为pc版和手机版，利用css3的viewpoint来控制，具体可以看main.css

 3.不分开文件夹存放css和js是因为方便登陆后台后利用“主题编辑”插件来修改模板文件

 4.module.php是网站的组件库，可以自行添加内容进去

 5.数据调用插件相关：

 （1）学校公告（限制11条）：  
```html
    <li>{title}<span class="listTime">[{date}]</span></li>
```
  （2）学生公告和教师公告（限制8条）：  
  ```html
  <li><a href="{log_url}" title="{title_without_link}" target="_blank">{title_without_link}</a><span class="listTime">[{date}]</span></li>  
```
  （3）首页版头：   
  ```html
  <li><div  class="imgWrap"><img src="{photo_url}" /></div><p>{photo_description}</p></li>  
```
