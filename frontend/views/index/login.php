<!DOCTYPE HTML>
<!--[if lt IE 7]> <html dir="ltr" lang="zh-cn" id="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="zh-cn" id="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="zh-cn" id="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="zh-cn"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>登录- 客客出品专业威客系统</title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE,chrome=1">
<meta name="keywords" content="客客出品专业威客系统">
<meta name="description" content="客客出品专业威客系统">
<meta name="generator" content="客客出品 2.2" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style” content=black" /> 
<meta name="author" content="kekezu" />
<meta name="copyright" content="Copyright &#169; 2010 -2013 kekezu. All rights reserved" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="favicon.ico"/>
<script type="text/javascript">
var SITEURL= "http://www.weike.com",
    SKIN_PATH = 'tpl/default',
LANG       = 'cn',
    INDEX      = 'login',
    CHARSET    = "utf-8";
</script>
<link href="resource/css/reset.css" rel="stylesheet" charset="utf-8">
<!--公用样式-->
<link href="resource/css/base.css" rel="stylesheet" charset="utf-8">
<!--布局样式-->

<link rel="stylesheet" media="all" href="resource/css/layout/960.min.css" charset="utf-8">


<!--box样式-->
<link href="resource/css/box.css" rel="stylesheet" charset="utf-8">

<link href="resource/css/animate.css" rel="stylesheet" charset="utf-8">
<link href="tpl/default/css/common.css" rel="stylesheet" charset="utf-8">
<link href="tpl/default/theme/blue/css/blue_style.css" rel="stylesheet" charset="utf-8">
<link href="resource/js/jqplugins/tipsy/tipsy.css" rel="stylesheet">
<link href="resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" charset="utf-8">
<!--[if lt IE 9]>
<script src="resource/js/system/html5.js" type="text/javascript"></script>
<![endif]-->


<!--jQuery1.4.4库-->
<script src="resource/js/jquery.js" type="text/javascript"></script>
<script src="lang/cn/script/lang.js" type="text/javascript"></script>
<script src="resource/js/system/keke.js" type="text/javascript"></script>
<script src="resource/js/in.js" type="text/javascript"></script>
<script type="text/javascript">
 //js异步加载预定义
 	In.add('mouseDelay',{path:"resource/js/jqplugins/jQuery.mouseDelay.js",type:'js'});
In.add('waypoints',{path:"resource/js/jqplugins/waypoints/waypoints.min.js",type:'js'});
In.add('custom',{path:"resource/js/system/custom.js",type:'js',rely:['waypoints']});
 	In.add('form',{path:"resource/js/system/form_and_validation.js",type:'js'});
In.add('print',{path:"resource/js/jqplugins/jquery.print.js",type:'js'});
In.add('task',{path:"resource/js/system/task.js",type:'js'});
 	In.add('calendar',{path:"resource/js/system/script_calendar.js",type:'js'}); 
In.add('xheditor',{path:"resource/js/xheditor/xheditor.js",type:'js'});  
 	In.add('script_city',{path:"resource/js/system/script_city.js",type:'js'}); 
In.add('lavalamp',{path:"resource/js/jqplugins/lavalamp/jquery.lavalamp-1.3.5.min.js",type:'js'});
In.add('tipsy',{path:"resource/js/jqplugins/tipsy/jquery.tipsy.js",type:'js'});
In.add('autoIMG',{path:"resource/js/jqplugins/autoimg/jQuery.autoIMG.min.js",type:'js'});
 	In.add('slides',{path:"resource/js/jqplugins/slides.min.jquery.js",type:'js'});
In.add('ajaxfileupload',{path:"resource/js/system/ajaxfileupload.js",type:'js'});
In.add('header_top',{path:"resource/js/system/header_top.js",type:'js',rely:['mouseDelay']}); 
In.add('lazy',{path:"resource/js/system/lazy.js",type:'js'});
In.add('pcas',{path:"resource/js/system/PCASClass.js",type:'js'});
  		

</script>



</head>
    <body id="login">

<div class="blue_style" id="wrapper">

        <div id="append_parent">
        </div>
        <div id="ajaxwaitid">
        	<div>
        	<img src="tpl/default/theme/blue/img/system/loading.gif" alt="loading"/>
请求处理中...</div>
</div>
 
<!--无刷新临时替换层-->
        <div id="noflushwarper">
        	<div id="noflushwarper_sub"></div>
        </div>
 	
<!--body start-->


<!--顶部广告位 start-->
<div class="t_c site_messages">
</div>
<!--顶部广告位-->




    <!--头部 start-->
    <header class="header" id="pageTop">
        <div class="container_24 clearfix">
        	<!--logo start-->
            <hgroup class="grid_7 logo">
             	 <h1><a href="index.php">
             	 	<img src="tpl/default/theme/blue/img/style/logo.png"
 title="客客出品专业威客系统" alt="客客出品专业威客系统"></a></h1>
            </hgroup>
            <!--logo end-->
            
            <div id="search" class="grid_12 m_h">
            	
            	
            	<!--主搜索 start-->
                <div class="search clearfix po_re">
                    <!--搜索框和选项 start-->
                    <form action="" method="post" id="frm_search" class="clearfix fl_l">
                    <div class="search_box">
                        <div class="fl_l search_selcecter">
                        	<div id="search_select" class="search_options">
                        	                           		 <a href="javascript:void(0);" class="selected" rel="task_list"><span>任务</span>▼</a>
                               		 <a href="javascript:void(0);" class="hidden"   rel="task_list">任务</a>
                           	 	<a href="javascript:void(0);" class="hidden"   rel="shop_list">商品</a>
                             </div>
                        </div>
<input type="text" name="search_key" onkeydown="search_keydown(event);" id="search_key" class="fl_l search_input txt_input togg c999"
 value="输入任务/商品" 
   x-webkit-speech x-webkit-grammar="bUIltin:search" lang="zh-CN">
                    </div>
</form>
                    <!--搜索框和选项 end-->
                    <!--搜索提交 start-->
                    <div class="fl_l header_btn">
                    	<button class="search_btn" id="search_btn" type="button" onclick="topSearch();"><span class="icon magnifier"></span>搜索</button>
                    </div>
                    <!--搜索提交 end-->
                </div>
                <!--主搜索 end-->

            </div>
            


          
            	<!--用户登录注册 start-->
            	<div class="user_box clearfix grid_5">
                	<!--注册登录按钮 start-->
                  	<ul id="login_sub" class="user_login ">
                        <li><a href="index.php?do=register" class="m_h">免费注册</a></li>
                        <li><a href="index.php?do=login">登录</a></li>
                    </ul>
                    <!--注册登录按钮 end--> 
<div class="clear"></div>




                    <!--登录成功 start-->
                    <div id="logined" class="hidden">
                    	<!--用户登录后内容 start-->
                        <ul class="user_logined clearfix">
                            <li id="avatar">
                            	<a href="index.php?do=user" title="" rel="user_menu">
                            		<img src='http://www.weike.com/data/avatar/default/man_small.jpg' uid='' class='pic_small'>                                    <span class="user_named m_h"></span>
                            	</a>
<!--用户登录后导航菜单 start-->
                    <div id="user_menu" class="user_nav_pop grid_5 alpha omega hidden m_h">
                        <ul class="nav_list clearfix">
                                    	<li class="clearfix"><a href="index.php?do=user&view=finance&op=detail" title="金钱 | 元宝" id="money"> <div class="icon16 cur-yen reverse"></div>￥0.00元| ￥0.00元</a></li>
                                        <li class="clearfix"><a href="index.php?do=release" title="发布任务" class="selected" ><div class="icon16 doc-new reverse"></div>发布任务</a></li>
<li class="clearfix"><a href="index.php?do=shop_release" title="发布商品" class="selected"><div class="icon16 doc-new reverse"></div>发布商品</a></li>
<li class="clearfix hidden" id="manage_center"><a href="control/admin/index.php" title="管理中心" ><div class="icon16 key reverse"></div>管理中心</a></li>
<li class="clearfix"><a href="index.php?do=user&view=index" title="用户中心"><div class="icon16 cog reverse"></div>用户中心</a></li>
<li class="clearfix"><a href="http://www.weike.com/index.php?do=space&member_id=" title="我的店铺" id="space"><div class="icon16 compass reverse"></div>我的店铺</a></li>
<!--<li class="clearfix"><a href="index.php?do=user&view=message" title="站内信"><div class="icon16 mail reverse"></div>站内信</a></li>-->
<li class="clearfix"><a onclick="showWindow('out','index.php?do=logout');return false;" title="退出" href="index.php?do=logout">退出</a></li>
                         </ul>
                    </div>
                    <!--用户登录后导航菜单 end-->
</li>
                            <li class="line m_h"></li>
                            <li class="logout m_h"><a title="站内信" href="index.php?do=user&view=message">站内信</a></li>
                            <li class="clear"></li>
                        </ul>
                        <!--用户登录后内容 end-->


                    </div>
                    <!--登录成功 end-->
                    
                    
                    <div class="clear"></div>
                </div>
                <!--用户登录注册 end-->
      
            <!--移动端菜单-->
<div class="m_ctrl">
<a class="icon32 zoom reverse" href="#" rel="search"></a>
            <a class="icon32 align-just reverse" href="#" rel="nav"></a>
</div>
            <!--移动端菜单 end-->

            

        </div>
    </header>
    <!--头部 end-->
        <!--tool_E-->
 <nav id="nav" class="nav m_h">
        <div class="container_24" >
        	<div class="menu grid_24 clearfix">
                <ul class="clearfix">
                	                   		<li>
                   			<a href="index.php?do=index"  >
                   			<span>首页</span></a>
</li>
<li class="line"></li>
                   		<li>
                   			<a href="index.php?do=task_list"  >
                   			<span>任务大厅</span></a>
</li>
<li class="line"></li>
                   		<li>
                   			<a href="index.php?do=shop_list"  >
                   			<span>威客商城</span></a>
</li>
<li class="line"></li>
                   		<li>
                   			<a href="index.php?do=seller_list"  >
                   			<span>服务商</span></a>
</li>
<li class="line"></li>
                   		<li>
                   			<a href="index.php?do=case"  >
                   			<span>成功案例</span></a>
</li>
<li class="line"></li>
                   		<li>
                   			<a href="index.php?do=article"  >
                   			<span>资讯中心</span></a>
</li>
<li class="line"></li>
                   		<li>
                   			<a href="index.php?do=square"  >
                   			<span>广场</span></a>
</li>
<li class="line"></li>
                   		<li>
                   			<a href="index.php?do=prom"  >
                   			<span>推广</span></a>
</li>
<li class="line"></li>
                </ul>
                <!---->
                  <div class="operate po_ab">
                    	<a href="index.php?do=help" target="_blank" title="帮助中心">
                        	<span class="icon16 help reverse"></span>
帮助中心                        </a>
                   </div>
                <!---->
</div>
                <div class="clear"></div>
        </div>
    </nav>
    <div class="clear"></div>
<div class="wrapper">
    <div class="container_24">
        <section class="clearfix section">
        	<div class="box model blue ">
        		<div class="inner">
            <header class="box_header clearfix">
            	<div class="grid_5 alpha omega">
                	<h1 class="box_title"><span>登录</span> Login</h1>
</div>
<div class="grid_18">
<nav class="box_nav clearfix">
<ul> 
                			<li><a href="/index.php?do=register&refer=http://www.weike.com/index.php?do=login">无账号？现在去注册</a></li>
</ul>
</nav>
</div>
            </header>
 
            <div class="box_detail clearfix po_re box">
            	<div class="pad10">
            		<div class="messages m_warn clearfix">
            			<span class="icon16 ">友情提示</span>
 您所访问的页面需要登录</div>
</div>
            	<div class="clear"></div>
                <div class="grid_17">
                    <!--from表单 start-->
                    <div class="form_box clearfix border_n">
                        <form action="index.php?do=login" method="post" id="login_frm" name="login_frm">
                            <input type="hidden" name="formhash" id="formhash" value="ce9abd">
<input type="hidden" name="hdn_refer" id="hdn_refer" value="http://www.weike.com/index.php?do=login">
<input type="hidden" name="handlekey" value="login_frm1"><!--账号-->
                            <div class="rowElem clearfix po_re">
                                <label class="grid_4">
                                  账　号：                                </label>
                                <div class="grid_10">
                                	<input style="width:200px;" type="text" value="手机号/邮箱/用户名" class="txt txt_input" size="20" autocomplete="off" name="txt_account" id="txt_account" limit="required:true;len:2-20" msg="用户名输入错误" title="用户名可以为中文!" msgArea="login_account_msg" />
<span class="msg" id="login_account_msg"></span>
                                </div>

                            </div>

                            <div class="rowElem clearfix po_re">
                                <label class="grid_4">
                                    密　码：                                </label>
                                <div class="grid_10">
                                	<input type="text" style="width:200px;" id="txt_password" name="txt_password" value="密码不可以为空" style="" class="txt_input txt" original-title="">
                                    <input class="txt_input txt" style="width:200px;display:none;" type="password" name="pwd_password" id="pwd_password" maxlength="20" limit="required:true;len:6-20" msg="密码长度不能低于6位！" title="密码长度为6-20位" msgArea="login_password_msg" />
<span class="msg" id="login_password_msg"></span>
                                </div>
                                
                            </div>
                            <div>
                            
</div>
                            <div class="mt_20 prefix_4 ml_5">
                                <button type="submit" onclick="return user_login();" class="button" id="user_login_btn">
                                    <span class="key icon"></span>
                                    登录　 
                                </button> 　　&gt;&gt;<a href="index.php?do=get_password" target="_blank">找回密码</a>
                            </div>
                           
                        </form>
                    </div>
                </div>
                <div class="grid_7 omega border_l_c">
                    <div class="pad10">

                        <div class=" pl_20">
                            <span>通过合作网站直接登录</span>
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sina" alt="新浪微博" title="新浪微博">
<img src="resource/img/ico/sina_t.gif" alt="新浪微博" title="新浪微博">
</a>
<a href="index.php?do=oauth_login&type=sina" class="ml_5">新浪微博登录 </a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=ten" alt="腾讯微博" title="腾讯微博">
<img src="resource/img/ico/ten_t.gif" alt="腾讯微博" title="腾讯微博">
</a>
<a href="index.php?do=oauth_login&type=ten" class="ml_5">腾讯微博登录 </a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=qq" alt="QQ账号" title="QQ账号">
<img src="resource/img/ico/qq_t.gif" alt="QQ账号" title="QQ账号">
</a>
<a href="index.php?do=oauth_login&type=qq" class="ml_5">QQ账号登录 </a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=taobao" alt="淘宝" title="淘宝">
<img src="resource/img/ico/taobao_t.gif" alt="淘宝" title="淘宝">
</a>
<a href="index.php?do=oauth_login&type=taobao" class="ml_5">淘宝登录 </a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sohu" alt="搜狐微博" title="搜狐微博">
<img src="resource/img/ico/sohu_t.gif" alt="搜狐微博" title="搜狐微博">
</a>
<a href="index.php?do=oauth_login&type=sohu" class="ml_5">搜狐微博登录 </a>
</div>
                   			
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>
        </section>
        <div id="login_msg">
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<script type="text/javascript">
    In('form');
var inter = "1";
    $("#txt_account").focus(function(){
        var content = $("#txt_account").val();
        if (content == "手机号/邮箱/用户名"||content=="填写您的用户名") {
            $("#txt_account").val("");
        }
    });
    
    $("#txt_account").blur(function(){
        var content = $("#txt_account").val();
inter==1?val="手机号/邮箱/用户名":val="填写您的用户名";
        if (!content) {
            //$("#txt_account").val(val);
        }
    });
    
    $("#txt_password").focus(function(){
        var content = $("#pwd_password").val();
        $(this).hide();
$("#pwd_password").show();
$("#pwd_password")[0].focus();
        if (content == L.password_not_empty) {
        	$("#txt_account").val("");
        }
    });
    
    $("#pwd_password").blur(function(){
        var content = $("#pwd_password").val();
        if (!content) {
            $(this).hide();
            $('#txt_password').show();
        }
    });
    
    
    //登录
    function user_login(){ 
        if (checkForm(document.getElementById("login_frm"), false)) {
        	//login_frm.submit();
        	showWindow('login_frm1', 'login_frm', 'post',0,{cover:1},'hide()');
        	
        }
        return false;
    }
    
    function hide(){
    	//hideWindow('login_frm1');
    }
</script>

<!--页脚 satrt-->
<footer class="footer clearfix">
<!--网站链接以及语言栏 关注我们 搜索 start-->






            <!--网站版权声明 start-->
            <section class="site_copyright clearfix">
            	<div class="container_24 clearfix ">
            		
            		
                    	 	<dl>
<dt>
                    	 		公司名称:武汉客客信息技术有限公司<span class="pad10">地址:湖北省武汉市</span>联系电话:18971533922</dt>
<dd>
                    	 	KPPW2.2 Copyright &#169; 2010 -2013 kekezu. All rights reserved<a href="http://icp.valu.cn/" target="_blank"></a>
</dd>  
                    	 	</dl>
 <div class="clear"></div>


<!--语言栏 关注我们 搜索 start-->

                    <div class="site_attach clearfix">

                        	<div class="social">
                            	关注我们：                            	
                                
 
<a href="index.php?do=wb&focus=1881490142&wb_type=sina"><img src="resource/img/ico/sina_t.gif" title="1881490142"></a> 


 
<a href="index.php?do=wb&focus=shangjinglong&wb_type=ten"><img src="resource/img/ico/ten_t.gif" title="shangjinglong"></a> 


 
<a href="index.php?do=wb&focus=2746053225&wb_type=netease"><img src="resource/img/ico/netease_t.gif" title="2746053225"></a> 


 
<a href="index.php?do=wb&focus=naniso&wb_type=sohu"><img src="resource/img/ico/sohu_t.gif" title="naniso"></a> 


                            </div>
     

                        <div class="lan_box">
                            <form action="" method="post" id="lan_bottom">
                                <div class="clearfix">
                                     <label>语言：</label>
                                     <select id="lan" name="lan" style="width:100px" onchange="setLang(this)">
      <option value="cn" c="CNY" selected>简体中文</option>
                                       </select>
                                
                           
                               
                                     <label> 币种：</label>
                                     <select  style="width:100px" onchange="setCurr(this.value,1);">
      <option value="USD" id="USD" >US Dollar</option>
      <option value="CNY" id="CNY" selected>人民币</option>
      <option value="EUR" id="EUR" >Euro</option>
      <option value="GBP" id="GBP" >GB Pound</option>
      <option value="CAD" id="CAD" >Canadian Dollar</option>
      <option value="AUD" id="AUD" >Australian Dollar</option>
      <option value="HKD" id="HKD" >港币</option>
      <option value="KRW" id="KRW" >韩元</option>
      <option value="RUB" id="RUB" >卢布</option>
                                       </select>
                                 </div>
                            </form>
</div>	
                        

</div>

                  
                    <!--语言栏 关注我们 搜索 end-->


                </div>
   				<div class="clearfix"></div>
            </section>
            <!--网站版权声明 end-->
            
            <!--返回顶部 start-->

        	<a class="top animated hidden" href="javascript:void(0);" title="返回顶部"><em>&diams;</em>Top</a>
              
            <!--返回顶部 end-->
    </footer>
    <!--页脚 end-->
</div>
<script type="text/javascript">
var uid='';
var xyq = "coo859ua2a6u6c73c4d646ove6";
 //js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');




</script>

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
