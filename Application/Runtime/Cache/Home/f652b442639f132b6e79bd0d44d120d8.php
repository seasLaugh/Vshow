<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vshow-秀出自我</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Vshow学生发布平台,提供学生的作品发布">
    <meta name="keywords" content="Vshow,致力于发展为高校的学生作品发布平台">

    <link rel="stylesheet" type="text/css" href="/vshow/Public/style/Index/reset.css"> 
    <link rel="stylesheet" type="text/css" href="/vshow/Public/style/Index/comment.css">
    <link rel="stylesheet" type="text/css" href="/vshow/Public/style/Index/index.css">

    <script type="text/javascript" src="/vshow/Public/script/Index/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/vshow/Public/script/Index/jquery-color.js"></script>
    <script type="text/javascript" src="/vshow/Public/script/Index/easing.1.3.js" ></script>   
    <script type="text/javascript" src="/vshow/Public/script/Index/comm.js"></script>

</head>
<body>
    <script type="text/javascript">
	var active = "learning";
</script>
<div id="header">
		<div class="header-inner">
			<h1 class="logo"><a href="/vshow" title="Vshow唯秀">Vshow唯秀</a></h1>
			<div class="login-box" id="login">
					<?php if(empty($_SESSION['UID'])): ?><a href="/vshow/index.php/Home/User/login" class="login">登陆</a>
					<a href="/vshow/index.php/Home/User/userReg" class="registr">注册</a>
					
				<?php else: ?>
					<?php if($_SESSION['group_id']== 3 ): ?><a href="/vshow/index.php/Home/StudentCenter/index" class="login">个人中心</a>
						<a href="/vshow/index.php/Home/User/logout" class="registr">退出登录</a>
					<?php else: ?>
						<a href="/vshow/index.php/Home/TeacherCenter/index" class="login">个人中心</a>
						<a href="/vshow/index.php/Home/User/logout" class="registr">退出登录</a><?php endif; endif; ?>
				
			</div>
			<div class="search-box" id="search">
				<form action="/vshow/index.php/Home/Index/workList" method="get">
					<input type="text" class="text" name="key" value="输入关键字">
					<input type="submit" class="submit">
				</form>
			</div>	
			<div class="nav" id="nav">
				<div class="nav-inner">
					<li id="index">
						<a href="/vshow/index.php/Home/Index/index.html" title="首页" >
						<strong class="tit">首页</strong><span>index</span>
					</a>
					</li>
					<li id="project">
						<a href="/vshow/index.php/Home/Index/workList.html" title="所有作品">
							<strong class="tit">所有作品</strong><span>project</span>
						</a>
					</li>
					<li id="learning">
						<a href="/vshow/index.php/Home/Index/learning.html" title="学习资源">
							<strong class="tit">学习资源</strong><span>learning</span>
						</a>
					</li>
					<li id="message">
						<a href="/vshow/index.php/Home/Index/message.html" title="留言区">
							<strong class="tit">留言区</strong><span>message</span>
						</a>
					</li>						
				</div>
			</div>				
		</div>
	</div>

 <!--    <div id="header">
        <div class="header-inner">
            <h1 class="logo"><a href="/vshow" title="Vshow唯秀">Vshow唯秀</a></h1>
            <div class="login-box" id="login">
                <a href="/vshow/index.php/Home/User/login" class="login">登陆</a>
                <a href="/vshow/index.php/Home/User/userReg" class="registr">注册</a>
            </div>
            <div class="search-box" id="search">
                <form action="#">
                    <input type="text" class="text" name="text" value="输入关键字">
                    <input type="submit" class="submit" name="submit">
                </form>
            </div>  
            <div class="nav" id="nav">
                <div class="nav-inner">
                    <li><a href="/vshow/index.php/Home/Index/index.html" title="首页" ><strong class="tit">首页</strong><span>index</span></a></li>
                    <li class="active"><a href="/vshow/index.php/Home/Index/workList.html" title="所有作品"><strong class="tit">所有作品</strong><span>project</span></a></li>
                    <li><a href="/vshow/index.php/Home/Index/learning.html" title="学习资源"><strong class="tit">学习资源</strong><span>learning</span></a></li>
                    <li><a href="/vshow/index.php/Home/Index/message.html" title="留言区"><strong class="tit">留言区</strong><span>message</span></a></li>                      
                </div>
            </div>              
        </div>
    </div> -->
    
    <div id="container">
        <div class="main clearfix">
            <div class="learn clearfix">
                <div class="learn-left fl">
                    <ul class="article-list" id="articleList">
                        <li class="article clearfix">
                            <div class="entry-img fl">
                                <a href="#">
                                    <img src="/vshow/Public/images/Index/article/art-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="entry-main fl">
                                <h3 class="entry-title">
                                    js性能优化，收藏!
                                </h3>
                                <dl class="entry-meta clearfix">
                                    <dd class="entry-cate">javascript</dd> 
                                    <dd class="entry-views">0</dd>
                                    <dd class="entry-author">陈国龙</dd>
                                    <dd class="entry-date">2015-02-10</dd>
                                </dl>
                                <div class="entry-content">
                                    <p>通过网上查找资料了解关于性能优化方面的内容，现简单整理，仅供大家在优化的过程中参考使用，如有什么问题请及时提出，再做出相应的补充修改。 一、让代码简洁：一些简略的表达方式也会产生很好的优化 eg：x=x+1;在不影响功能的情况下可以简写</p>
                                </div>
                            </div>
                        </li>

                        <li class="article clearfix">
                            <div class="entry-img fl">
                                <a href="#">
                                    <img src="/vshow/Public/images/Index/article/art-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="entry-main fl">
                                <h3 class="entry-title">
                                   关于$.extend()
                                </h3>
                                <dl class="entry-meta clearfix">
                                    <dd class="entry-cate">javascript</dd> 
                                    <dd class="entry-views">0</dd>
                                    <dd class="entry-author">陈国龙</dd>
                                    <dd class="entry-date">2015-02-10</dd>
                                </dl>
                                <div class="entry-content">
                                    <p>不管说什么我喜欢先看例子，这样会更容易理解： 例1：合并对象obj1和obj2，并且修改第一个对象obj1 </p>
                                </div>
                            </div>
                        </li>
                        <li class="article clearfix">
                            <div class="entry-img fl">
                                <a href="#">
                                    <img src="/vshow/Public/images/Index/article/art-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="entry-main fl">
                                <h3 class="entry-title">
                                    jquery完美判断图片是否加载完毕&lt;转载>
                                </h3>
                                <dl class="entry-meta clearfix">
                                    <dd class="entry-cate">jquery</dd> 
                                    <dd class="entry-views">0</dd>
                                    <dd class="entry-author">默然</dd>
                                    <dd class="entry-date">2015-02-10</dd>
                                </dl>
                                <div class="entry-content">
                                    <p>Web和Web浏览器在过去几年取得了快速的进步，这些进步与新技术通常被认识是HTML5达到的惊人的成果。然而</p>
                                </div>
                            </div>
                        </li>
                        <li class="article clearfix">
                            <div class="entry-img fl">
                                <a href="#">
                                    <img src="/vshow/Public/images/Index/article/art-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="entry-main fl">
                                <h3 class="entry-title">
                                    HTML5应用新鲜出炉
                                </h3>
                                <dl class="entry-meta clearfix">
                                    <dd class="entry-cate">html5</dd> 
                                    <dd class="entry-views">0</dd>
                                    <dd class="entry-author">陈国龙</dd>
                                    <dd class="entry-date">2015-02-10</dd>
                                </dl>
                                <div class="entry-content">
                                    <p>[size=13.333333015441895px]1、CSS3/jQuery自定义弹出窗口多种弹出动画这是一款利用jQuery和CSS3实现的自定义弹出窗口，这可比浏览器默认的弹出窗口漂亮多了。弹出窗口中可以自定义html，十分灵活。另外最重要的一个特点是，它利用了jQuer</p>
                                </div>
                            </div>
                        </li>
                        <li class="article clearfix">
                            <div class="entry-img fl">
                                <a href="#">
                                    <img src="/vshow/Public/images/Index/article/art-5.jpg" alt="">
                                </a>
                            </div>
                            <div class="entry-main fl">
                                <h3 class="entry-title">
                                    CSS3制作的动物人物动画
                                </h3>
                                <dl class="entry-meta clearfix">
                                    <dd class="entry-cate">css3</dd> 
                                    <dd class="entry-views">0</dd>
                                    <dd class="entry-author">陈国龙</dd>
                                    <dd class="entry-date">2015-02-10</dd>
                                </dl>
                                <div class="entry-content">
                                    <p>1、纯CSS3绘制可爱的蚱蜢还有眨眼动画今天我们要分享一个利用纯CSS3绘制的蚱蜢动画，非常可爱.在线演示源码下载2、HTML5Canvas头发飘逸动画很酷的HTML5动画HTML5Canvas动画非常炫酷，很多有创意的开发者可以利用HTML5的Canvas特性创造出</p>
                                </div>
                            </div>
                        </li>
                        <li class="article clearfix">
                            <div class="entry-img fl">
                                <a href="#">
                                    <img src="/vshow/Public/images/Index/article/art-6.jpg" alt="">
                                </a>
                            </div>
                            <div class="entry-main fl">
                                <h3 class="entry-title">
                                    meta标签以及清除浏览器js缓存的方法？
                                </h3>
                                <dl class="entry-meta clearfix">
                                    <dd class="entry-cate">html5</dd> 
                                    <dd class="entry-views">0</dd>
                                    <dd class="entry-author">陈国龙</dd>
                                    <dd class="entry-date">2015-02-10</dd>
                                </dl>
                                <div class="entry-content">
                                    <p>一、meta标签 meta是html语言head区的一个辅助性标签。也许你认为这些代码可有可无。其实如果你能够用好meta标签，会给你带来意想不到的效果，meta标签的作用有：搜索引擎优化（SEO），定义页面使用语言，自动刷新并指向新的页面，实现网页转</p>
                                </div>
                            </div>
                        </li>
                        <li class="article clearfix">
                            <div class="entry-img fl">
                                <a href="#">
                                    <img src="/vshow/Public/images/Index/article/art-7.jpg" alt="">
                                </a>
                            </div>
                            <div class="entry-main fl">
                                <h3 class="entry-title">
                                    常见浏览器兼容性问题与解决方案
                                </h3>
                                <dl class="entry-meta clearfix">
                                    <dd class="entry-cate">html/css</dd> 
                                    <dd class="entry-views">0</dd>
                                    <dd class="entry-author">陈国龙</dd>
                                    <dd class="entry-date">2015-02-10</dd>
                                </dl>
                                <div class="entry-content">
                                    <p>浏览器兼容问题一：不同浏览器的标签默认的margin和padding不同 问题症状：随便写几个标签，不加样式控制的情况下，各自的margin和padding差异较大。 碰到频率:100% 解决方案： CSS里加一行 1 *{margin:0;padding:0;} 备注：这个是最常见的也</p>
                                </div>
                            </div>
                        </li>
                        <li class="article clearfix">
                            <div class="entry-img fl">
                                <a href="#">
                                    <img src="/vshow/Public/images/Index/article/art-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="entry-main fl">
                                <h3 class="entry-title">
                                    js封装类
                                </h3>
                                <dl class="entry-meta clearfix">
                                    <dd class="entry-cate">javascript;</dd> 
                                    <dd class="entry-views">0</dd>
                                    <dd class="entry-author">陈国龙</dd>
                                    <dd class="entry-date">2015-02-10</dd>
                                </dl>
                                <div class="entry-content">
                                    <p>//简单理解如下： //封装：将字段，属性，方法等封装成类 //例如：将人封装成一个类，有name,age等字段，有sayHi,walk方法 functionCreatePerson(name,sex,birthday,fn) { this.name=name; this.sex=sex; this.birthday=birthday; } /*Create</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="page" id="page">
                        <ul class="clearfix">
                            <li><a class="active" href="javascript:;">1</a></li>
                            <li><a href="javascript:;">2</a></li>
                            <li><a href="javascript:;">3</a></li>
                            <li><a href="javascript:;">4</a></li>
                            <li><a href="javascript:;">5</a></li>
                            <li><a href="javascript:;">6</a></li>
                            <li><a href="javascript:;">7</a></li>
                            <li><a href="javascript:;">8</a></li>
                            <li><a href="javascript:;">&gt;&gt;</a></li>
                        </ul>
                    </div>
                </div>

                <div class="learn-right fr" id="learnRight">
                    <div class="section">
                        <h3><strong>视频下载</strong></h3>
                        <ul>
                            <li><a href="#">jquery实例视频教程</a></li>
                            <li><a href="#">php视频教程PHP100新版</a></li>
                            <li><a href="#">SQL Server 2008 视频教程</a></li>
                            <li><a href="#">妙味课堂js中级视频全集</a></li>
                            <li><a href="#">智能社CSS系列视频教程</a></li>
                            <li><a href="#">智能社javascript系列视频</a></li>
                            <li><a href="#">后盾网html学习视频</a></li>
                            <li><a href="#">Ajax_原理和封装</a></li>
                            <li><a href="#">03 Ajax_AJAX跨域解决方案：JSONP</a></li>
                            <li><a href="#">php+mysql全集</a></li>
                        </ul>                    
                    </div>
                    
                     <div class="section section-repeat">
                        <h3><strong>热门学习</strong></h3>
                        <ul>
                            <li><span>1.</span><a href="#">js性能优化，收藏!</a></li>
                            <li><span>2.</span><a href="#">记下移动端开发界面的那些事儿</a></li>
                            <li><span>3.</span><a href="#">类似百度页面的分享效果</a></li>
                            <li><span>4.</span><a href="#">移动端浏览器30坑</a></li>
                            <li><span>5.</span><a href="#">前端常用技术汇总</a></li>
                            <li><span>6.</span><a href="#">超赞值得一试的六款jQuery插件和CSS3应用</a></li>
                            <li><span>7.</span><a href="#">(移动端) 加载进度条交互设计 和 实现</a></li>
                            <li><span>8.</span><a href="#">感谢大家的支持，快切助手</a></li>
                            <li><span>9.</span><a href="#">jq简单仿写2cars游戏</a></li>
                        </ul> 
                    </div>


                    <div class="section2">
                        <h3><strong>随机推荐</strong></h3>
                        <ul>
                            <li class="clearfix">
                                <div class="img-outer">
                                    <img src="/vshow/Public/images/Index/img1.jpg" alt="">
                                </div>
                                <div class="sec2-main">
                                    <h5><a href="#">模仿的百度搜索框</a></h5>
                                    <span class="sec2-time">2015-05-19</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="img-outer">
                                    <img src="/vshow/Public/images/Index/img2.jpg" alt="">
                                </div>
                                <div class="sec2-main">
                                    <h5><a href="#">模仿百度图片 拉钩网图片效果</a></h5>
                                    <span class="sec2-time">2015-05-19</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="img-outer">
                                    <img src="/vshow/Public/images/Index/img3.jpg" alt="">
                                </div>
                                <div class="sec2-main">
                                    <h5><a href="#">sublime 快捷键</a></h5>
                                    <span class="sec2-time">2015-05-19</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="img-outer">
                                    <img src="/vshow/Public/images/Index/img4.jpg" alt="">
                                </div>
                                <div class="sec2-main">
                                    <h5><a href="#">前端面试题整理……</a></h5>
                                    <span class="sec2-time">2015-05-19</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="img-outer">
                                    <img src="/vshow/Public/images/Index/img5.jpg" alt="">
                                </div>
                                <div class="sec2-main">
                                    <h5><a href="#">jquery完美判断图片是否加载完毕</a></h5>
                                    <span class="sec2-time">2015-05-19</span>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    	<div id="footer">
		<div class="footer-inner clearfix">
			<div class="friend-link fl">
				<h2>友情链接</h2>
				<a href="http://www.gdaib.edu.cn">广东农工商</a>
				<a href="http://2015.dodi.cn/">2015多迪杯</a>
				<a href="http://www.csdn.net/ ">CSDN社区</a>
				<a href="http://www.laruence.com/">风雪之隅</a>
				<a href="http://laravel-china.github.io/php-the-right-way/">PHP之道</a>
				<a href="http://www.zixue.it/">自学IT网</a>
				<a href="http://www.cnblogs.com/">博客园</a>
				<a href="http://code.ciaoca.com/">前端开发仓库</a>
			</div>
			<div class="footer-cont fl">
				<p>关于我们 | 用户服务 | 商务合作 | 联系我们</p>
				<p>Copyright VTeam </p>
				</div>			
		</div>
	</div>
	<script type="text/javascript">
		var root = "/vshow/index.php";
	</script>
	 
</body>
</html>