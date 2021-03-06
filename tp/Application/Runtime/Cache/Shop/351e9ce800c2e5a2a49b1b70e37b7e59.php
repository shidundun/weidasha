<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="author" content="m.ehaier.com">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport"  />
	<meta name="format-detection" content="telephone=no" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta content="telephone=no" name="format-detection" />
	<meta content="false" id="twcClient" name="twcClient" />
	<meta property="qc:admins" content="24524700661454534650115263757" />
	<link type="text/css" rel="stylesheet" href="/tp/Public/Css/style.css">
	<link rel="apple-touch-icon-precomposed" href="/tp/Public//images/ehaier-icon.png"/>	
	<link rel="shortcut icon" type="image/x-icon" href="/tp/Public//images/ehaier-icon.png"/>  
	<script type="text/javascript" src="/tp/Public/Scripts/zepto.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/gs.js"></script>
	<script type="text/javascript" src="/tp/Public//tp/PublicScripts/mediav.js"></script>
	<script type="text/javascript" name="baidu-tc-cerfication" data-appid="4746793" src="/tp/Public/Scripts/lightapp.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/criteo.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/ld.js" async="true"></script>
		<meta name="keywords" content="冰箱,海尔冰箱,手机网购" />
	<meta name="description" content="买冰箱，到海尔商城。海尔商城为您提供冰箱的最新报价、促销、评价、导购、图片等相关信息 。" />
    <title>冰箱 - 海尔商城触屏版</title>
	<link type="text/css" rel="stylesheet" href="/tp/Public/Css/list.css">
	<link rel="stylesheet" type="text/css" href="/tp/Public/Css/panel.css" />
	<link rel="stylesheet" type="text/css" href="/tp/Public/Css/panel.default.css" />
	<link rel="stylesheet" type="text/css" href="/tp/Public/Css/loading.default.css" />
	<link rel="stylesheet" type="text/css" href="/tp/Public/Css/refresh.default.css" />
	<link type="text/css" rel="stylesheet" href="/tp/Public/Css/member.css">
	<script type="text/javascript" src="/tp/Public/Scripts/touch.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/throttle.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/event.scrollstop.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/event.ortchange.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/matchmedia.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/gmu.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/event.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/widget.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/panel.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/refresh.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/util.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/pz.js"></script>
	<script type="text/javascript">
		var provinceId = '16';
    	var provinceName = '山东';
    	var cityId = '173';
    	var cityName = '青岛';
    	
    	//criteo广告投放是
		//遍历商品列表前三条数据数据转成js对象	
		var pl = [];
        pl[1-1]= 6038
        pl[2-1]= 12161
        pl[3-1]= 10607
																																										criteo_productList(pl);
	</script>
</head>
<body >
	<header class="header">
		<span class="fh left"><a href="/tp/Public//">&nbsp;</a></span>
		冰箱（精品）
	 	<span class="hd_right right">
		<a class="gwc" href="/tp/Public//mobile/cart/myCart.html"><span id="count">0 </span>&nbsp;</a>
		<a class="right_but" href="/tp/Public//mobile/common/navigate.html">&nbsp;</a>
</span>
	</header>
<div id="page">
  <div id="cont">   
    <!--======main=====-->
    <div class="main">
      <link rel="stylesheet" type="text/css" href="/tp/Public/Css/suggestion.css" />
<div class="search">
	<div class="search-input">
		<input type="text" id="sousuo_index" name="searchKey" value="" placeholder="商品分类导购">
		<ul id="sou_default">
		  <li><a href="/tp/Public//mobile/itemlist/2743.html">电视</a </li>
		  <li><a href="/tp/Public//mobile/itemlist/2725.html">洗衣机</a></li>
		  <li><a href="/tp/Public//mobile/itemlist/2723.html">冰箱</a></li>
		  <li><a href="/tp/Public//mobile/itemlist/2729.html">空调</a></li>
		  <li><a href="/tp/Public//mobile/itemlist/2737.html">生活家电</a></li>
		  <li class="ui-suggestion-button"><a href="/tp/Public/#" class="fanhui_bt">关闭</a></li>
		</ul>
	</div>
	<a id="search_button" href="/tp/Public/#" class="micon icon_search">&nbsp;</a>
</div>
<script type="text/javascript" src="/tp/Public/Scripts/highlight.js"></script>
<script type="text/javascript" src="/tp/Public/Scripts/suggestion.js"></script>

<script type="text/javascript">
	(function () {
		$('#sousuo_index').suggestion({
			autoClose: true,
			sendrequest: function (e, query, render, cacheData) {
				var listArr = [];
				$.getJSON("/mobile/search/smart_json.html?searchKey="+query,function(result,status){
					if (result.success && result.data.length) {
						$.each(result.data, function(i, item) {
							if(i>4){return;}//取前5个搜索词
							listArr.push(item.mobileWord);
							// 渲染数据列表，render(query, data), query为用户输入的query， data为Array类型，为渲染的数据数组
							render( query, listArr );
						});
					}
				});
			},
			renderlist: function (e, data, query, callback) {
				// renderList的回调函数callback(listHtml), listHtml为sug列表内容
				callback.call( this, data.map(function (item) { 
					var html = '';
					html += '<a href="/tp/Public//mobile/search/templist.html?searchKey='+item+'">'+item+'</a>';
					return html;
				}).join( ' ' ) );
			}
		});	
		
		//搜索跳转			
		$(document).on('click',"#search_button", function (event) {
			var searchKey = $("#sousuo_index").val();
			location.href = "/mobile/search/templist.html?searchKey="+encodeURI(searchKey);
		});
			        
		//打开搜索
//		$("#sousuo_index").focus(function(){
//			$("#sou_default").show();
//		});
		//关闭搜索
//		$(".fanhui_bt").click(function(){
//			$("#sou_default").hide();
//		});
//		$("#sousuo_index").change(function(){
//			if($(this).val() == ''){
//				$("#sou_default").show();
//			}else{
//				$("#sou_default").hide();
//			}
//		})
		
	})();
</script>              <div id="list_pic" class="list_pic">
        <ul id="sortColumn">
          <li><a href="/tp/Public/javascript:void(0);" value="saleDesc" class="on">热销</a></li>
          <li><a href="/tp/Public/javascript:void(0);" value="priceDesc" id="jiage"><span>价格</span><b class=""></b></a></li>
          <li><a href="/tp/Public/javascript:void(0);" value="commentDesc">热评</a></li>
          <li><a href="/tp/Public/javascript:void(0);" value="newDesc">新品</a></li>
          <li><a href="/tp/Public/javascript:void(0);" id="filterBtn" value="filterBtn">筛选</a></li>
        </ul>
      </div>
      <!--======加载商品中=====-->
      <div class="list_jiazai" style="display:none"> <span><img src="/tp/Public/Picture/loading.gif"></span>
        <p>亲，稍等一下下</p>
      </div>
      <!--======加载商品结束=====-->
      <div id="list_div">
      	<!-- 列表页 商品列表 -->
         <?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="lists_items">
                <p class="pic">
                    <a href="<?php echo U('Index/detail',array('id'=>$vo['id']));?>">
                                                <img src="/tp/Public/Uploads/<?php echo ($vo['img']); ?>">
                                        </a>
                </p>
                            <p class="list_tex">
                    <a href="<?php echo U('Index/detail',array('id'=>$vo['id']));?>">
                        <span><font>￥<?php echo ($vo["price"]); ?></font></span>
                        <strong><?php echo ($vo["name"]); ?></strong></br>
                        <?php echo ($vo["guige"]); ?>
                    </a>
                </p>

                <p class="list_tex">
                    <a class="activemsg" href="/tp/Public/"></a>
                </p>

                <p class="list_tex">
                                        <span class="txt_blue">青岛有货</span>
                                    5738人评价，99%好评
                </p>
            </div><?php endforeach; endif; ?>
        <script src="/tp/Public/Scripts/jquery.lazyload.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("img.lazyimg").lazyload();
        });
    </script>
      </div>
    </div>
    <div class="ui-refresh">
        <input id="pageIndex" type="hidden" value="1">
    	<input id="pageSize" type="hidden" value="10">
   		<div class="ui-refresh-down"></div>
    </div>
   <footer class="footer">
	<div id="footer" class="ft_top">
				<a href="/tp/Public//mobile/member/toMemberLogin.html">登录</a>|<a href="/tp/Public//mobile/member/toMemberRegist.html">注册</a>
			</div>
  	<p><a href="/tp/Public/javascript:scroll(0,0)">返回顶部</a>|<a href="/tp/Public//">返回首页</a>|<a href="/tp/Public//mobile/common/suggestInfos.html">意见反馈</a> </p>
  	<p>Copyright©2000-2015 m.ehaier.com<br />鲁ICP备09096283号 </p>
</footer>
<script id="_trs_ta_js" src="/tp/Public/Scripts/ta.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/tp/Public/Scripts/ehaier.js"></script>
<script type="text/javascript" src="/tp/Public/Scripts/baidu.js"></script>
<script type="text/javascript" src="/tp/Public/Scripts/ga.js"></script>

<!--联系客服-->
<div class="tc2" style="display:none;">
	<div class="kf_top">
		<p style="font-size:18px;color:#4c4c4c;height:40px;padding-left:60px;line-height:40px;overflow:hidden;">工作时间</p>
		<p class="tc_cg">早8:30 - 晚24:00</p>
	</div>
	<div class="tc_button">
		<ul>
			<li><span onclick="javascript:NTKF.im_openInPageChat('kf_9949_1358748431343');" title="在线客服"><a href="/tp/Public/javascript:void(0)">在线客服</a></span></li>
			<li><a href="/tp/Public/javascript:void(0)" class="lxkf_close">取消</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
	
	//ntalk
	NTKF_PARAM = {
				siteid:"kf_9949",
  		settingid: "kf_9949_1358748431343"
    			    				} 
	
	//联系客服打开
	$(".lxkf").click(function(){
		if ($('#load_mask').length) {}
		else{
			var h = $(document.body).height()+"px";
			$("<div id='load_mask' class='tc_zz' style='height:"+h+"' />").appendTo("body");
		}
		$("#load_mask").show();
		var t = $(window).scrollTop(), h = $(window).height(), iTop = 0;
		iTop = ((h - $(".tc2").height()) / 2 + t) + "px";
		$(".tc2").css("top", iTop).show();	
	 
	})
	//联系客服关闭
	$(".lxkf_close").click(function(){
		$(".tc2").hide(); 
		$("#load_mask").hide();
	})
</script>
<script type="text/javascript" src="/tp/Public/Scripts/ntkfstat.js" charset="utf-8"></script>  </div>
  <!-- 列表页 筛选 -->
<div id="panel">
    <!--======筛选弹窗=====-->
    <div class="sxtc">
      <div class="sxtc_title">
        <ul>
          <li class="cur"><a href="/tp/Public/javascript:void(0)">筛选</a></li>
          <li><a href="/tp/Public/javascript:void(0)">配送至</a></li>
        </ul>
      </div>
      <div class="sxtc_content">
        <div class="sxtc_bottom xx_tab" >
          <div class="sxtc_list" id="zong_num">
            <ul>
              <li> 
              	<a href="/tp/Public/javascript:void(0);" class="bgtu categ">库存状态</a>
                <ul class="lb_nr" style="display:block" id="pro_stock">
                	<li><a href="/tp/Public/javascript:void(0);" class="xz" value="-1">显示全部</a></li>
                	<li><a href="/tp/Public/javascript:void(0);" class="" value="true">仅显示有货</a></li>
                </ul>
              </li>	
              <li> 
              	<a href="/tp/Public/javascript:void(0);" class="categ" >商品类型</a>
                <ul class="lb_nr" style="display:none" id="pro_lei">
                 <li><a href="/tp/Public/javascript:void(0);" class="xz" value="-1">全部品牌</a></li>                	
				 	             <li><a href="/tp/Public/javascript:void(0);" value="297">海尔</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="298">卡萨帝</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="299">统帅</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="301">海尔施特劳斯</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="302">Zettom</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="303">新宝</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="305">MOOKA</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="307">小超人</a></li>
				                 </ul>
              </li>
              <li> 
              	<a href="/tp/Public/javascript:void(0);" class="categ">价格区间</a>
                <ul class="lb_nr" id="pro_pre">
                 <li><a href="/tp/Public/javascript:void(0);" class="xz" value="-1">全部</a></li>                	
                 <li><a href="/tp/Public/#" value="0 ~ 1000">0 ~ 1000</a></li>
	             <li><a href="/tp/Public/#" value="1001 ~ 2000">1001 ~ 2000</a></li>
	             <li><a href="/tp/Public/#" value="2001 ~ 3000">2001 ~ 3000</a></li>
	             <li><a href="/tp/Public/#" value="3001 ~ 4000">3001 ~ 4000</a></li>
	             <li><a href="/tp/Public/#" value="4001 ~ 5000">4001 ~ 5000</a></li>
	             <li><a href="/tp/Public/#" value="5001 ~ 1000000">5001以上</a></li>
                </ul>
              </li>
              			  <li> 
	           <a href="/tp/Public/javascript:void(0);" class="categ">耗电量（kwh/24h）</a>
	           <ul class="lb_nr" id="pro_76" value="76">
	             <li><a href="/tp/Public/javascript:void(0);" class="xz" value="-1">全部</a></li>                	
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1553">0.5以下</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1554">0.51-1</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1555">1以上</a></li>
				 	           </ul>
	          </li>              	
	          			  <li> 
	           <a href="/tp/Public/javascript:void(0);" class="categ">总容积（升）</a>
	           <ul class="lb_nr" id="pro_66" value="66">
	             <li><a href="/tp/Public/javascript:void(0);" class="xz" value="-1">全部</a></li>                	
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1546">600以上</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1547">501-600</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1548">401-500</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1549">301-400</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1550">201-300</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1551">101-200</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1552">100以下</a></li>
				 	           </ul>
	          </li>              	
	          			  <li> 
	           <a href="/tp/Public/javascript:void(0);" class="categ">类别</a>
	           <ul class="lb_nr" id="pro_64" value="64">
	             <li><a href="/tp/Public/javascript:void(0);" class="xz" value="-1">全部</a></li>                	
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1698">BM风冷</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1683">意式三门</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1682">法式对开门</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="1681">法式六门</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="44">两门</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="43">三门</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="46">嵌入式</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="42">对开</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="41">多门</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="45">单门</a></li>
				 	           </ul>
	          </li>              	
	          			  <li> 
	           <a href="/tp/Public/javascript:void(0);" class="categ">能耗等级</a>
	           <ul class="lb_nr" id="pro_69" value="69">
	             <li><a href="/tp/Public/javascript:void(0);" class="xz" value="-1">全部</a></li>                	
				 	             <li><a href="/tp/Public/javascript:void(0);" value="50">一级</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="51">二级</a></li>
				 	             <li><a href="/tp/Public/javascript:void(0);" value="52">三级</a></li>
				 	           </ul>
	          </li>              	
	                      </ul>	         
          </div>
        </div>
        <div class="xzdq xx_tab">
          <div class="xzdq_title"> 请选择地区 </div>
          <div class="xzdq_bottom">
            <ul id="dizhi_xz">
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
  	$.ajax({
		type : 'get',
		dataType : 'jsonp',
		url : 'http://www.ehaier.com/region.php?a=outRegionJson&pid=5949&acid=0&m=1',
		success : function (data) {
			parsePrcJson(data);
		}
	});	
	//解析prcJson
	function parsePrcJson(data){
		var province_da = [];
		var city_da = [];
  		for( var i=0;i<data.length;i++ ){
			var cur_province = data[i];
			$("#dizhi_xz").append("<li id='li_province_"+cur_province.id+"'></li>");
			$("#li_province_"+cur_province.id).append("<a href='javascript:void(0);' class='area' value='"+cur_province.id+"'>"+cur_province.name+"</a>");	
			$("#li_province_"+cur_province.id).append("<ul class='lb_nr' id='ul_province_"+cur_province.id+"'></ul>");
			for( var j=0;j<cur_province.childs.length;j++ ){
				var cur_city = cur_province.childs[j];		
				$("#ul_province_"+cur_province.id).append("<li ><a href='javascript:void(0);' id='li_city_"+cur_city.id+"'"+ " value='"+cur_city.id+"'>"+cur_city.name+"</a></li>")
			}		
		}
		
	    //省市回显或设置默认值
		$("#li_province_"+provinceId).children("a").attr("class","bgtu area");
		$("#ul_province_"+provinceId).attr("style","display: block");		
		$("#li_city_"+cityId).addClass("xz");
	}	
  </script></div>
	<script type="text/javascript" src="/tp/Public/Scripts/prduct_list.js"></script>

    <script type="text/javascript">
    	
    	$(document).ready(function(){
			//TAB 标题点击
			$(".list_pic ul li").on("click",function(){
				if( $(this).find('a span').html() == '价格'){
					if($(this).find('a b').hasClass('ticon') ){
						$("#jiage b").removeClass('ticon').addClass('micon bicon');
						$("#jiage").attr('value','priceAsc');
					}else{
						$("#jiage b").removeClass('bicon').addClass('micon ticon');
						$("#jiage").attr('value','priceDesc');
					}
				}else{
					$("#jiage b").removeClass('micon ticon');
					$("#jiage").attr('value','priceAsc');
				}
				if($(this).find('a').attr("value") != 'filterBtn'){
					if(!$(this).find('a').hasClass('on') || $(this).find('a span').html() == '价格'){
						$(".list_pic ul li a").removeClass('on');
						$(this).find('a').addClass("on");
						LoadProduct();
					}					
				}
			}); 
			
			//详细选项
			$(".sxtc_bottom .lb_nr li").on(DOEVENT, function (event) {
				event.preventDefault();
				$(this).parent().find("a").removeClass("xz");
				$(this).children("a").addClass("xz");
				//关闭面板
				LoadProduct();
				setTimeout(function(){
					$('#panel').panel('close');
				},500);
			});
			
			//省选择
			$(document).on('click',"#dizhi_xz .area", function (event) {
				event.preventDefault();
				provinceId = $(this).attr("value");
				provinceName = $(this).text();
			});
			
			//市选择
			$(document).on('click',"#dizhi_xz .lb_nr li", function (event) {
				event.preventDefault();
				$("#dizhi_xz").find("a").removeClass("xz");
				$(this).children("a").addClass("xz");
				cityId = $(this).children("a").attr("value");
				cityName = $(this).children("a").text();
				LoadProduct();
				//关闭面板
				setTimeout(function(){
					$('#panel').panel('close');
				},500);
			});
			
			$(document).on('click',"#search_button", function (event) {
				var searchKey = $("#sousuo_index").val();
				location.href = "/mobile/search/templist.html?searchKey="+encodeURI(searchKey);//跳到错误页面
			});

			$('.ui-refresh').refresh({
	            load: function (dir, type) {
	            	var me = this;
	                //LoadProduct();
	                var sortColumn = getSortColumn();
					var stockState = getStockState();
					var brandId = getBrandId();
					var price = getPrice();
					var otherFilter = getOtherFilter();
					var pageIndex=parseInt($("#pageIndex").val())+1;
					var pageSize=$("#pageSize").val();
					$.ajax({
						url: "/mobile/itemlist/2723_item.html",
						data: {
								sortColumn : sortColumn,
								provinceName : provinceName,
								provinceId : provinceId,
								cityName : cityName,
								cityId : cityId,
								stockState: stockState,
								brandId : brandId,
								price : price,
								otherFilter : otherFilter,
								pageIndex : pageIndex,
								pageSize : pageSize
							  },
						type: "POST",
						success: function(data) {
							$("#list_div").append(data);
							$("#pageIndex").val(pageIndex);
							me.afterDataLoading();    //数据加载完成后改变状态
						}
					});
	            }
       		});
		})
		
		//获取当前选中的排序方式
		function getSortColumn(){
			for(var i = 1; i<=$("#sortColumn li").length; i++){
				if($("#sortColumn li:nth-child( " + i + ")").children("a").hasClass("on")){
					return value = $("#sortColumn li:nth-child( " + i + ")").children("a").attr("value");	
				}
			}
		}
		
		//获取当前选中的库存状态
		function getStockState(){
			for(var i = 1; i<=$("#pro_stock li").length; i++){
				if($("#pro_stock li:nth-child(" + i + ")").children("a").hasClass("xz")){
					return value = $("#pro_stock li:nth-child(" + i + ")").children("a").attr("value");	
				}
			}
		}
		
		//获取当前选中的品牌
		function getBrandId(){
			for(var i = 1; i<=$("#pro_lei li").length; i++){
				if($("#pro_lei li:nth-child(" + i + ")").children("a").hasClass("xz")){
					return value = $("#pro_lei li:nth-child(" + i + ")").children("a").attr("value");	
				}
			}
		}
		
		//获取当前选中的价格区间
		function getPrice(){
			for(var i = 1; i<=$("#pro_pre li").length; i++){
				if($("#pro_pre li:nth-child(" + i + ")").children("a").hasClass("xz")){
					return value = $("#pro_pre li:nth-child(" + i + ")").children("a").attr("value");	
				}
			}
		}
		
		//获取品牌其它筛选项
		function getOtherFilter(){
			var id = [];
			var otherFilter = "";
							id.push("76");
							id.push("66");
							id.push("64");
							id.push("69");
						for(var i = 0; i<id.length; i++){
				var tempId = "pro_" + id[i];
				for(var j = 1; j<=$("#" + tempId +" li").length; j++){
					if($("#"+tempId+" li:nth-child("+j+")").children("a").hasClass("xz")){
						otherFilter += id[i] + ":" +$("#"+tempId+" li:nth-child("+j+")").children("a").attr("value") + ";";	
					}
				}
			}
			return otherFilter;
		}
		
		//加载商品
		function LoadProduct(){
			var sortColumn = getSortColumn();
			var stockState = getStockState();
			var brandId = getBrandId();
			var price = getPrice();
			var otherFilter = getOtherFilter();
			var pageIndex = 1;
			var pageSize = 10;
			$("#pageIndex").val(1);//页码初始化
			$.ajax({
				url: "/mobile/itemlist/2723_item.html",
				data: {
						sortColumn : sortColumn,
						provinceName : provinceName,
						provinceId : provinceId,						
						cityName : cityName,
						cityId : cityId,
						stockState: stockState,
						brandId : brandId,
						price : price,
						otherFilter : otherFilter,
						pageIndex : pageIndex,
						pageSize : pageSize
					  },
				type: "POST",
				success: function(data) {
					$("#list_div").html(data);
					$('.ui-refresh').show();
				}
			});			
			return false;
		}
		
		//设置content高度
		function setHeight() {
			var headerH = document.getElementById('list_pic').offsetHeight;
			var footerH = document.getElementById('footer').offsetHeight;
			var contentH = 0;
			var tUserAgent = navigator.userAgent;
			//由於Windows Phone不支援windows.innerHeight語法，改用screen代替
			if (tUserAgent.indexOf("Windows Phone") != -1) {
				contentH = screen.availHeight - headerH - footerH-footerH+20;
			}
			else {
				contentH = window.innerHeight - headerH - footerH-footerH+20;
			}
			document.getElementById("product_no").style.height = contentH + "px";
		}
	</script>

</body>
</html>