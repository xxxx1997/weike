
<link rel="stylesheet" href="tpl/default/css/task.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="tpl/default/theme/blue/css/task.css" rel="stylesheet" type="text/css">

<div class="wrapper">	
<!--页面头部-->
<header class="clearfix page_header">
    	<div class="container_24">

<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>
        <!--页面导航-->
        	<div class="breadcrumbs clearfix ">
            	<a href="index.php">首页</a> &gt; <span>任务大厅</span>
        	</div>
        <!--end 页面导航-->
    	</div>
</header>
<!--end 页面标题--><!--主内容-->
<section class="clearfix content">
<div class="container_24"> 
<div class="clear"></div>
  <!--大厅列表_头部二栏广告 start-->
 		   <!--大厅列表_头部二栏广告 end-->
<div class=" mb_10 clearfix">
            <div class="grid_24">
                <!--筛选条件-->
                <div class="filter box normal po_re">
                	<div class="inner">
                    <!--条件列表-->
                    <div class="condition_list pad10">
                        <!--分类-->
                        <dl class="condition clearfix">
                            <dt class="grid_2 omega">
                                任务分类                            </dt>
                            <dd class="grid_21">
                                <a href="index.php?do=task_list&path=B3"    class='selected' >全部 </a>
                                <a href="index.php?do=task_list&path=A441B3" >品牌设计</a>
                                <a href="index.php?do=task_list&path=A2B3" >网站开发</a>
                                <a href="index.php?do=task_list&path=A201B3" >创意祝福</a>
                                <a href="index.php?do=task_list&path=A249B3" >网游服务</a>
                                <a href="index.php?do=task_list&path=A3B3" >文案写作</a>
                                <a href="index.php?do=task_list&path=A335B3" >建筑/装修</a>
                                <a href="index.php?do=task_list&path=A211B3" >头脑风暴</a>
                                <a href="index.php?do=task_list&path=A350B3" >照片美化/编辑</a>
                                <a href="index.php?do=task_list&path=A234B3" >法律服务</a>
                                <a href="index.php?do=task_list&path=A160B3" >起名取名</a>
                                <a href="index.php?do=task_list&path=A357B3" >影视/配音/歌词</a>
                                <a href="index.php?do=task_list&path=A192B3" >生活服务</a>
                                <a href="index.php?do=task_list&path=A218B3" >移动应用</a>
                                <a href="index.php?do=task_list&path=A240B3" >招聘找人</a>
                                <a href="index.php?do=task_list&path=A121B3" >软件开发</a>
                                 
                            </dd>
                        </dl>
                        
                        <!--end 分类--><!--条件1-->
                        <dl class="condition clearfix">
                            <dt class="grid_2 omega">
                                任务模式                            </dt>
                            <dd class="grid_21">
                                <span id="single_choice_span" >
<a href="index.php?do=task_list&path=" >全部 </a>

  
<a href="index.php?do=task_list&path=B1"   >单人悬赏 </a>
  
<a href="index.php?do=task_list&path=B2"   >多人悬赏 </a>
  
<a href="index.php?do=task_list&path=B3"     class="selected"  >计件悬赏 </a>
  
<a href="index.php?do=task_list&path=B4"   >普通招标 </a>
  
<a href="index.php?do=task_list&path=B5"   >订金招标 </a>
</span>

                                <!--搜索模式切换--><span id="much_choice_span"   style="display:none" >
                                <a href="javascript:model_all();" id="model_all">全部</a> 
                                                              		<a href="javascript:void(0);"    id="model_a_1" onclick="select_model_a('1')">
<input class="model_class"   type="checkbox" id="test_1" ext="1" > 单人悬赏</a>
                              		<a href="javascript:void(0);"    id="model_a_2" onclick="select_model_a('2')">
<input class="model_class"   type="checkbox" id="test_2" ext="2" > 多人悬赏</a>
                              		<a href="javascript:void(0);"    id="model_a_3" onclick="select_model_a('3')">
<input class="model_class"   type="checkbox" id="test_3" ext="3" > 计件悬赏</a>
                              		<a href="javascript:void(0);"    id="model_a_4" onclick="select_model_a('4')">
<input class="model_class"   type="checkbox" id="test_4" ext="4" > 普通招标</a>
                              		<a href="javascript:void(0);"    id="model_a_5" onclick="select_model_a('5')">
<input class="model_class"   type="checkbox" id="test_5" ext="5" > 订金招标</a>

</span>
<a class="button" id="show_much_choice" onclick="much_choice();" >
<span class="icon check"></span>多选模式</a>
                                <span id="much_choice_sreach"   style="display:none" >
                                	<a class="button" onclick="model_search();"><span class="magnifier icon"></span>搜  索</a>
<a class="button" onclick="model_reset();"><span class="icon reload"></span>重 置</a>
</span>
                                <!--end -->
</dd>
                          </dl>
                          <!--end 条件1--><!--条件2-->
                          <dl class="condition clearfix">
                          		<dt class="grid_2 omega">
                                   任务赏金                                </dt>
                                    <dd class="grid_21">
                                        <span id="general_search" >
                                        	<a href="index.php?do=task_list&path=B3"   class="selected" >全部 </a>
 
<a href="index.php?do=task_list&path=C1B3"  >100元以下 </a>
 
<a href="index.php?do=task_list&path=C2B3"  >100-500 </a>
 
<a href="index.php?do=task_list&path=C3B3"  >500-1000 </a>
 
<a href="index.php?do=task_list&path=C4B3"  >1000-5000 </a>
 
<a href="index.php?do=task_list&path=C5B3"  >5000-20000 </a>
 
<a href="index.php?do=task_list&path=C6B3"  >2万以上 </a>

<a class="button" style="" onclick="custom_search_cash('task_list_search_cash')">
                                        	<span class="icon cog"></span>自定义</a></span>
                                        <div id="cool_search"   style="display:none;" >
                                            <div class="grid_12">
                                            	<div class="pr_30">
                                                <div id="slider-range" class="mr_5"></div>
<div class="clear"></div>
<ul class="range-num">
<li >0</li>
                                                	<li >1000</li>
<li >2000</li>
<li >3000</li>
<li class="lasts">4000</li>
<li class="last">5000</li>
</ul>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="pt_10">
                                                <label for="amount1">
                                                    价格:
                                                </label>

                                                <input type="text" id="amount1" class="txt_input" size="5"/> -
<input type="text" id="amount2" class="txt_input" size="5"/> 元<a class="button" style="" onclick="search_task_cash()"><span class="magnifier icon"></span>搜  索　</a>
                                            		
</div>
</div>
<div class="grid_8"><a class="button" style="" onclick="task_cash_reset('task_list_search_cash')"><span class="icon reload"></span>返回　</a></div>

                                        </div>
                                    </dd>
                                </dl>
                                <form id="cash_frm" name="cash_frm" action="" method="get">
                                    <input type="hidden" name="do" value="task_list">
<input type="hidden" name="path" value="B3" id="cash_frm_path">
<input type="hidden" name="min" id="min">
<input type="hidden" name="max" id="max">
<input type="hidden" name="model_ids" id="task_model_ids" value="">
<input type="hidden" name="page_size" id="page_size" value="20">
                                </form>
                                <form id="cash_frm_fh" name="cash_frm_fh" action="" method="get">
                                    <input type="hidden" name="do" value="task_list"><input type="hidden" name="path" value="B3"><input type="hidden" name="page_size" id="page_size" value="20">
                                </form><!--end 条件2--><!--隐藏层-->
                                <div id="condition_list" style="display:none">
                                    <!--条件3-->
                                    <dl class="condition clearfix">
                                        <dt class="grid_2 omega">
                                            赏金托管                                        </dt>
                                        <dd class="grid_21">
                                                                                        	<a href="index.php?do=task_list&path=B3"   class="selected" >全部 </a>
                                                                                         
                                            <a href="index.php?do=task_list&path=D1B3"  >未托管 </a>
                                                                                         
                                            <a href="index.php?do=task_list&path=D2B3"  >已托管 </a>
                                                                                    </dd>
                                    </dl>
                                    <!--end 条件3--><!--条件4-->
                                    <dl class="condition clearfix">
                                        <dt class="grid_2 omega">
                                            发布时间                                        </dt>
                                        <dd class="grid_21">
                                            <a href="index.php?do=task_list&path=B3"   class="selected" >全部 </a>
                                                                                         	<a href="index.php?do=task_list&path=E1B3" >一周内结束 </a>
                                                                                         	<a href="index.php?do=task_list&path=E2B3" >三天内结束 </a>
                                                                                         	<a href="index.php?do=task_list&path=E3B3" >一个月结束 </a>
                                                                                         	<a href="index.php?do=task_list&path=E4B3" >快到期 </a>
                                                                                    </dd>
                                    </dl>
                                    <!--end 条件4--><!--条件4-->
                                    <dl class="condition clearfix">
                                        <dt class="grid_2 omega">
                                            任务状态                                        </dt>
                                        <dd class="grid_21">
                                            <a href="index.php?do=task_list&path=B3"   class="selected" >全部 </a>
                                                                                        <a href="index.php?do=task_list&path=F2B3"  >交稿中 </a>
                                                                                        <a href="index.php?do=task_list&path=F3B3"  >选稿中 </a>
                                                                                        <a href="index.php?do=task_list&path=F6B3"  >交付中 </a>
                                                                                        <a href="index.php?do=task_list&path=F8B3"  >已结束 </a>
                                             
                                        </dd>
                                    </dl>
                                    <!--end 条件4--><!--条件5-->
                                    <dl class="condition clearfix border_n">
                                        <dt class="grid_2 omega">
                                            其他选项                                        </dt>
                                        <dd class="grid_21">
                                            <a href="index.php?do=task_list&path=B3"   class="selected" >全部 </a>
                                             
<a href="index.php?do=task_list&path=G2B3" >置顶的 </a>
                                             
<a href="index.php?do=task_list&path=G4B3" >延期加价 </a>
                                             
<a href="index.php?do=task_list&path=G3B3" >加急任务 </a>
                                             
                                        </dd>
                                    </dl>
                                    <!--end 条件5--><!--条件6-->
                                    <dl class="condition clearfix border_n">
                                        <dt class="grid_2 omega">
                                         地区搜索
                                        </dt>
                                        <dd class="grid_21">
                                        	<a href="index.php?do=task_list&path=B3&max=&min="   class="selected" >全部 </a>
                                           <select name="province" id="province"></select><select name="city" id="city"></select><select name="area" id="area"></select>
   <a class="button" style="" onclick="search_address()"><span class="magnifier icon"></span>搜  索　</a>
                                        </dd>
                                    </dl>
                                    <!--end 条件6-->
                                </div>
                                <!--end 隐藏层-->


                            </div>
                    <!--end 条件列表-->

<!--已选条件-->
                            <div class="select_condition clearfix pad10">
                            	
                                <div class="grid_2 omega">
                                    <h3 class="title">已选条件</h3>
                                </div>
                                <div class="grid_21">
                                    <!--当无选择条件时显示span标记-->
<a href="index.php?do=task_list&path=" class="selected">计件悬赏 <span class="close">&times;</span></a>
                                                                        <a href="index.php?do=task_list" class="button"><span class="icon reload"></span>重 置　</a>
                                    <a href="javascript:save_cookie()" class="button"><span class="icon check"></span>保存搜索条件</a>
                                    <div class="success" style="color:#2f55a0;display:none" id="success">
                                        保存成功                                    </div>
                                                                    </div>
                            
</div> 
<!--end 已选条件--> 
                     </div>
 <!--工具栏-->
                            <div class="operate po_ab">
                                <a href="javascript:show_hide()" id="tool_show" title="展开"><span class="icon16 sq-plus"></span></a>
                   				<a href="javascript:show_hide()" id="tool_hide" style="display:none" title="收起"><span class="icon16 sq-minus"></span></a>
                            </div>
                <!--end 工具栏-->
    </div>
                <!--end 筛选条件-->
            </div>
          </div>
                    
<form action="" method="post" id="frm1">
                        <input type="hidden" name="hid_save_cookie" id="hid_save_cookie"><input type="hidden" name="hid_del_cookie" id="hid_del_cookie">
                    </form>
                    <section class="clearfix section">
                        <div class="second_menu container_24 po_ab">
                            <div class="suffix_23 pull_1">
                                <nav class="minor_nav box">
                                    <ul class="nav_group clearfix">
                                        <li>
                                            <a href="index.php?do=help&fpid=290" title="帮助中心"><span class="icon16 help"></span></a>

                                        </li>
<li>
<a href="index.php?do=task_map" title="任务地图"><span class="icon16 globe-2"></span></a>
</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="show_panel container_24 po_re">
                            <div class="po_re clearfix box">
                                <!--左边内容-->
                                <div class="grid_20">
                                    <div class="box normal clearfix">
                                        <!--左内容头-->
                                        <div class="border_b_c clearfix hidden">
                                            <div class="grid_5 omega">                  
                                                    
                                                        共<span class="cc00"> 6 </span>条                                                                                               
                                            </div>
                                            <div class="grid_15 alpha omega po_re">
                                              
    <!--end 小翻页--><!--列表项数量-->
                                                <div class="page_count fl_r">
                                                    <a href="index.php?do=task_list&path=B3&min=&max=&page_size=20"   class="selected" >20 </a>
                                                    <a href="index.php?do=task_list&path=B3&min=&max=&page_size=40" >40 </a>
                                                    <a href="index.php?do=task_list&path=B3&min=&max=&page_size=60" >60 </a>
                                                    <a href="index.php?do=task_list&path=B3&min=&max=&page_size=80" >80 </a>
                                                </div>
                                                <!--end 列表项数量-->
<!--小翻页-->
                                                <div class="min_page  fl_l">
                                                    <p class="clearfix">
                                                                                                            </p>
                                                    <div class="clear">
                                                    </div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                        <!--end 左内容头--><!--列表主内容-->
                                        <div class="list clearfix">
                                            <dl>
                                                <dt>
                                                    悬赏任务                                                </dt>
                                                <dd class="tags">
                                                    <ul>
                                                    	<li class="w2 bounty">
                                                            	<a href="index.php?do=task_list&path=B3&min=&max=&page_size=20&ord=3" ord=3  class="hidden"  id="pub_time_3" title="低金额任务在前">任务赏金▲</a>
<a href="index.php?do=task_list&path=B3&min=&max=&page_size=20&ord=4"  ord=4   class="hidden"  id="pub_time_4" title="高金额任务在前">任务赏金▼</a>
                                                     			<a  href="index.php?do=task_list&path=B3&min=&max=&page_size=20&ord=4" title="点击高金额任务在前排序">任务赏金</a>
    </li>
                                                        <li class="w4 info">
                                                            任务信息 <!-- 共 6 条 -->
                                                        </li>
                                                     
                                                        

                                                        <li class="mode">
                                                            任务模式                                                        </li>
                                                        <li class="count">
                                                            统计 
                                                        </li>
                                                        <li class="w2 status">
                                                            状态                                                        </li>
                                                    </ul>
                                                </dd>
                                                
                                    <?php
                                        foreach($list as $v):
                                    ?>              
                                                <dd class="po_re clearfix 
      "
>
                                                    <ul>
                                                    	<li class="w2 cf60 bounty font14b">
                                                          	<?php echo $v['danjia']?>元                                                         </li>
                                                        <li class="w4 info">
                                                            <a href="index.php?do=task&task_id=57" title="进驻商场&企业生活馆餐饮店的竞标报告" class="font14 task_title">进驻商场&企业生活馆餐饮店的竞标报告</a>
                                                            <!-- <span class="block m_h">[#57]</span> -->
                                                                                                                                                                               	                                                                   
    </li>
                                                   
                                                        
                                                        <li class="mode"> 
                                                            <span class="block">计件悬赏<br/></span>
                                                        </li>
                                                        <li class="count">
                                                            <span title="关注 / 交稿">5 / 3</span>
                                                        </li>
                                                        <li class="status w2">
                                                        已结束</span>
                                                    </li>
                                                    </ul>
                                                    <div class="clear">
                                                    </div>
                                                    <!-- <div class="operate">
                                                  
<a href="index.php?do=release&t_id=57&pub_mode=onekey&model_id=3" title="一键发布"><div class="icon16 hand-2">一键发布</div></a>
                                                    <a href="javascript:favor('task_id','task','preward','6','57','进驻商场&企业生活馆餐饮店的竞标报告','57')" title="收藏"><div class="icon16 star-fav-empty">收藏</div></a>
                                                    <a href="index.php?do=task&task_id=57" target="_blank" title="新窗口打开"><div class="icon16 expand">新窗口打开</div></a>
                                                    <a class="" href="index.php?do=ajax&view=share&oid=0&title=进驻商场&企业生活馆餐饮店的竞标报告" id="share0" onclick="return false;" onmouseover="share(this);return false;" title="分享"><div class="icon16 share">分享</div></a>
                                                
                                                </div> -->
                                             <?php endforeach;?>
                                            </dl>
                                        </div>
                                        <!--end 列表主内容--><!--右下角的返回顶部--
                                        <div class="operate mt_10 fl_r">
                                            <a href="index.php" class="" title="返回首页"><div class="icon16 home">返回首页</div></a>
                                            <a href="#pageTop" class="" title="返回顶部"><div class="icon16 arrow-top">返回顶部</div></a>
                                        </div>
                                        <!--end右下角的返回顶部-->
                                    </div>
                                    <!--page 翻页 start-->
                                    <div class="page">
                                        <p class="clearfix">
                                            <span class="stats">统计 6 条 </span>
                                                                                    </p>
                                    </div>
                                    <!--page 翻页 end-->
                                    <div class="clear">
                                    </div>
                                </div>
                                <!--end 左边部分--><!--右边部分-->
                                <div class="grid_4 m_h">
                                   
   <div class="mb_10">
   	<a href="index.php?r=task/release" class="submit block">发布任务</a>
   </div>
   
   
                                    <div class="box normal2 ws_break">
                                        <!--搜索历史-->
                                        <div class="inner">
<div class="box_header">
                                            <h3 class="title">任务动态</h3>
                                        </div>
                                            <div class=" pl_10 pr_10 pb_10">
                                                <ul id="history_collect">
                                                                                                        	
                                                    <li>
                                                        <p>
                                                        	<strong class="">admin</strong>
                                                        	在1天1小时前 </p>
                                                        <p>
发布了 
<a href="index.php?do=task&task_id=71"> 22222222</a></p>
                                                    </li>
                                                                                                    </ul>
                                            </div>
                                        </div>
                                        <!--end搜索历史-->
                                    </div>

<div style="margin:0 -5px">
<!--任务大厅_右侧广告 start-->
<div class='adv'><a href='http://www.kppw.com' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div><!--任务大厅_右侧广告 end-->
</div>


                                </div>


                                <!--end 右边部分-->
                            </div>
                        </div>
                    </section>

<div class="clear"></div>

<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>
<div class="clear"></div>
                </div>
                </section>

                <!--end 主内容-->


</div>
                <script type="text/javascript">
                    /** 检查用户是否登陆 */
                    var uid = parseInt('12') + 0;
                       var is_rewrite = '0';
                    function check_user_login(){
                        if (isNaN(uid) || uid == 0) { 
                            showDialog("你还没有登录，是否现在登录？", 'confirm', "登录消息提示", 'user_login()', 0);
                            return false;
                        }
                        else {
                            return true;
                        }
                    }
                    
                    
                    /** 用户登陆 */
                    
                    function user_login(){
                        showWindow('user_login', 'index.php?do=login', 'get');
                        return false;
                    }
                    
                    //页面加载，判断搜索条件是现实还是隐藏
                    $(function(){
                        var show_cookie = getcookie('show_cookie');
                        
                        if (show_cookie == 1) {
                            $("#condition_list").show();
                            $("#tool_hide").show();
                            $("#tool_show").hide();
                        }
                    }); 
                    //搜索条件现实 /隐藏
                    function show_hide(){
                        $("#condition_list").toggle(0, function(){
                            if ($("#tool_show").is(":hidden")) {
                                setcookie('show_cookie', '');
                                $("#tool_show").show();
                                $("#tool_hide").hide();
                            }
                            else {
                                setcookie('show_cookie', 1,3600);
                                $("#tool_hide").show();
                                $("#tool_show").hide();
                            }
                        });
                    }
                    
                    
                    //多选模式切换
                    function much_choice(){
                        $("#single_choice_span").hide();
                        $("#much_choice_span").show();
                        $("#show_much_choice").hide();
                        $("#much_choice_sreach").show();
                    }
                    
                    //重置
                    function model_reset(){
var model_ids = '';
                        $("#much_choice_span").hide();
                        $("#single_choice_span").show();
                        $("#much_choice_sreach").hide();
                        $("#show_much_choice").show();
                        var url = window.location.href;
                        
                          if(is_rewrite>0){
 var new_url = url.replace('-model_ids-'+model_ids, '');

}else{

   var new_url = url.replace('&model_ids='+model_ids, '');
}
         
                        location.href = new_url;
                        
                    }
                    
          

                    //分享
                    var share = function(obj, title){
var id = obj.id;
CHARSET.toLowerCase()=='utf-8'?obj.href = encodeURI(obj.href):'';
if(id&&obj.tagName=='A'){
if($(obj).find('div').length){
var div = $(obj).find("div:first");
div.attr("href",obj.href);
div.attr("id","div_"+id);
}else{
var div = $("<div id='div_"+id+"' href='"+obj.href+"'></div>");
div.prependTo($(obj));
}
}
obj = $(obj).find("div:first").get(0);
                        ajaxmenu(obj, 250, '1', '2', '43');
                        return false;
                    }
                    //进度条
                    function task_bar(){
                        var min = Number();
                        var max = Number();
                        
                        $("#slider-range").slider({
                            range: true,
                            min: 0,
                            max: 5000,
                            values: [min, max],
                            slide: function(event, ui){
                                $("#amount1").val(ui.values['0']);
$("#amount2").val(ui.values['1']);
                            }
                        });
                    
$("#amount1").val($("#slider-range").slider("values", 0));
$("#amount2").val($("#slider-range").slider("values", 1));
                   }
                    
                    
                    //赏金搜索 
                    function search_task_cash(){
                        var url = window.location.href;
                        var min = $("#amount1").val();
                        var max =  $("#amount2").val();
               			var model_ids =  ""; 
var path="B3";
 		path = path.replace(/C\d{0,3}/,""); 
$("#cash_frm_path").val(path);
            $("#min").val(min);
                        $("#max").val(max);
$("#task_model_ids").val(model_ids);
                        $("#cash_frm").submit();
                    }
                    
                   //地区搜索
   function search_address(){
     	var province = $("#province").val();
        var city = $("#city").val();
var area = $("#area").val();
if(province&&city&&area){
window.location.href = "index.php?do=task_list&path=B3&province="+province+"&city="+city+"&area="+area;
}
   }
                    
          
                    
                    //多任务模型搜索
                    function model_search(){ 
var model_ids_val = '';
                        var url = window.location.href;//获取本页面的url连接
                        var model_ids = '';
var new_url = '';
var is_rewrite = '0';
 $(".model_class").each(function(){//生成model_ids数据 
                            if ($(this).is(":checked")) { 
                              model_ids  += 'M'+$(this).attr("ext");
                            }
                        });


if(is_rewrite>0){
//判断是否存在model_ids  
if(url.indexOf('model_ids') ==-1){//不存在拼接
new_url = url; 
}else{//替换 
 new_url = url.replace("-model_ids-"+model_ids_val,"");     
}  

 new_url = new_url.replace(".html","-model_ids-"+model_ids+".html");

}else{
//判断是否存在model_ids  
if(url.indexOf('model_ids') ==-1){//不存在拼接
new_url = url; 
}else{//替换 
 new_url = url.replace("&model_ids="+model_ids_val,"");     
} 
 new_url = new_url+'&model_ids='+model_ids; //新地址

}

location.href=new_url;//跳转 
                    }
                    


                    //任务模型多选						
                    function model_all(){
                    
                        $(".model_class").each(function(){
                            $(this).attr("checked", "checked");
                            $(this).parent().attr("class", "selected");
                        });
                    } 


                    function select_model_a(model_id){
  			var  model_ids = $("#task_model_ids").val(); 
                        var model_id = model_id;
                        var classes = $("#model_a_" + model_id).attr("class"); 
                        if (classes == 'selected') {
                            $("#model_a_" + model_id).attr("class", " ");
                            $("#model_a_" + model_id + " input").attr("checked", ""); 
                        }
                        else {
                            $("#model_a_" + model_id + " input").attr("checked", "checked");
                            $("#model_a_" + model_id).attr("class", "selected");
 
                        } 
                    } 
                </script>

<script type="text/javascript"> 
      In('form','pcas',function(){
  			  new PCAS("province","city","area","","","");
}); 
    In.config('serial',true);
In.add('ui_core',{path:"resource/js/others/ui.core.js",type:'js'});
In.add('ui_slider',{path:"resource/js/others/ui.slider.js",type:'js',rely:['ui_core']});
In.add('search',{path:"tpl/default/js/search.js",type:'js'}); 
In('search','ui_slider',function(){task_bar()});

</script>
