<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vshow-秀出自我</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Vshow学生发布平台,提供学生的作品发布">
    <meta name="keywords" content="Vshow,致力于发展为高校的学生作品发布平台">
    <link rel="stylesheet" type="text/css" href="/vshow/Public/style/Index/reset.css"> 
    <link rel="stylesheet" type="text/css" href="/vshow/Public/style/Plug/Validation-Engine/validationEngine.jquery.css">
    <link rel="stylesheet" type="text/css" href="/vshow/Public/script/Plug/artDialog/css/ui-dialog.css">
    <link rel="stylesheet" href="/vshow/Public/script/Plug/jcrop/css/jquery.Jcrop.css">
    <link rel="stylesheet" type="text/css" href="/vshow/Public/style/Index/comment.css">
    <link rel="stylesheet" type="text/css" href="/vshow/Public/style/StudentCenter/ucenter.css">
    <link rel="stylesheet" type="text/css" href="/vshow/Public/style/StudentCenter/dropkick.css">
    

</head>
<body>
    <script type="text/javascript">
	var active = "[active]";
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

<!--  <div id="header">
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
    <div class="ucenter">
        <div class="ucenter-top clearfix">
            <!-- <a href="../../../../Vshow/index.php" class="back fl">返回首页</a> -->
        </div>
        <div class="ucenter-wrap clearfix">
            <div class="ucenter-left">
                <div class="ucenter-l-header clearfix">
                    <img src="/vshow/Uploads/Avater/<?php echo (session('avaterPath')); ?>" alt="">
                    <div class="info">
                        <p class="name"><?php echo (session('truename')); ?></p>
                        <!-- <p class="grade">网络1班</p> -->
                    </div>
                </div>
                <ul class="ucenter-l-nav" id="ucenterNav">
                    <li><a class="column1" href="/vshow/index.php/Home/StudentCenter/index">修改资料</a></li>
                    <li><a class="column2" href="/vshow/index.php/Home/StudentCenter/upload">作品上传</a></li>
                    <li><a class="column3" href="/vshow/index.php/Home/StudentCenter/course">课程管理</a></li>
                    <li><a class="column4" href="/vshow/index.php/Home/StudentCenter/homework">作品管理</a></li>
                    <li><a class="column5" href="/vshow/index.php/Home/StudentCenter/collect">我的收藏</a></li>
                </ul>
            </div>
            <div class="ucenter-right" id="ucenterRight">
               
                
                <!-- 
                    作品名称：<input type="text" /><br/>
                    作品简介：<input type="text" name="works-about" id="works-about" class="" /><br/>
                    选择作业 <input type="radio" name="is-homework" value="0" checked="checked" />个人作品
                             <input type="radio" name="is-homework" value="1" />课程作业<br/>
                    作品标签：<input type="text" name="works-label"  id="works-label"  /><br/>
                    作品文件：<input type="file" name="works-file" id="works-file" class="validate[required]"/><br/>
                    作品截图：<input type="file" name="works-images" id="works-images" class="validate[required]"/><br/>
                    <input type="submit" value="发布作品">
                 </form> -->
    
                <div class="column-box2 r-content">
                    <form id="worksUpload">
                    <ul>
                        <li class="wrap">
                            <strong>作品名称：</strong>
                            <input type="text" name="works-name"  id="works-name"  class="validate[required,maxSize[24]] text">
                        </li>
                        <li class="wrap">
                            <strong>作品简介：</strong>
                            <textarea name="works-about" id="works-about" class="validate[maxSize[200]] textarea" cols="67" rows="6"></textarea>
                        </li>
                        <li class="wrap">
                            <strong>作品标签：</strong>
                            <input type="text" name="works-label"  id="works-label"  class="validate[maxSize[24]] text">
                        </li>
                   <!--      <li class="wrap clearfix">
                                      <strong class="fl">作业类型：</strong>
                                      <select class="default">
                                          <option value="ss">罗剑高1罗剑高1</option>
                                          <option value="AU">罗剑高2罗剑高2</option>
                                          <option value="CA">罗剑高3罗剑高3</option>
                                      </select>
                                  </li>
                                  <li class="wrap clearfix">
                                      <strong>是否共享：</strong>
                                      <div class="share fl" id="share">
                                          <span class="yes">是</span> 
                                          <span class="no">否</span> 
                                          <em class="shareMove"></em> 
                                      </div>
                                  </li> -->               
                        <li class="wrap section1 clearfix" >
                            <div class="section-l fl">
                                <a href="javascript:;" class="btn-green" style="position: absolute;">选择作品 <input type="file" name="works-file" id="works-file" class="validate[required] file-btn" accept=".zip" /></a>     
                            </div>
                            <div class="fl filename" id="works-filename">
                            </div>
                            <div class="section-r fl">
                                <p>作业上传说明：</p>
                                <p>1.请将你的作品压缩成zip后再上传&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </div>

                        </li>
                        <li class="wrap section2 clearfix">
                            <div class="section-l fl">
                               <a href="javascript:;" class="btn-green" style="position: absolute;" >选择截图 <input type="file" name="works-images" id="works-images"  class="validate[required] file-btn" accept=".jpg,.png,.jpeg,.bmp,.gif"/></a>        
                            </div>
                            <div class="fl filename" id="works-imgname">
                            </div>
                            <div class="section-r fl">
                                <p>截图上传说明:</p>
                                <p>1.请上传一张作品截图,大小不超过1M</p>
                                <p>2.允许的格式:jpg,png,jpeg,bmp,gif</p>
                            </div>
                        </li>
                        <li class="wrap section2 clearfix"><input type="submit" value="发布作品" class="btn-green" style="margin-left:300px;margin-top:20px;"></li>
                    </ul>
                    </form>
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
	 
<script type="text/javascript" src="/vshow/Public/script/Index/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/vshow/Public/script/Index/jquery-color.js"></script>
    <script type="text/javascript" src="/vshow/Public/script/StudentCenter/jquery.dropkick-min.js"></script>
    <script type="text/javascript" src="/vshow/Public/script/Plug/Validation-Engine/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="/vshow/Public/script/Plug/Validation-Engine/jquery.validationEngine-zh_CN.js"></script>
    <script type="text/javascript" src="/vshow/Public/script/Plug/artDialog/dist/dialog-min.js"></script>
    <script src="/vshow/Public/script/Plug/jcrop/js/jquery.Jcrop.js"></script> 
     <script type="text/javascript" src="/vshow/Public/script/Index/easing.1.3.js" ></script>   
    <script type="text/javascript" src="/vshow/Public/script/Index/comm.js"></script>
    <script type="text/javascript" src="/vshow/Public/script/StudentCenter/ucenter.js"></script>
    <script type="text/javascript" src="/vshow/Public/script/StudentCenter/index.js"></script>
</body>
</html>