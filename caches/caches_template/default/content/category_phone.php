<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<?php


?>

<html>
<head>
	<title>测试</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" href="<?php echo $__CSS__;?>phone/base.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $__CSS__;?>phone/common.css" type="text/css"/>
    <link rel="apple-touch-icon-precomposed" href="http://image.bitautoimg.com/wap/ios/images/57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://image.bitautoimg.com/wap/ios/images/72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://image.bitautoimg.com/wap/ios/images/114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://image.bitautoimg.com/wap/ios/images/144x144.png" />
</head>
<body class="bg-gray">
	<section id="container" class="container">
		<header id="header" class="cf">
			<section class="top-defalt cf">
				<h1 id="logo" class="logo">
					北京大秦汇通商贸有限公司
				</h1>
				<div id="top-menu" class="top-menu">
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
				</div>
			</section>
			<nav id="top-menu-content" class="top-menu-content h0">
				<ul>
					<li><a href="index.html">首页</a></li>
					<li><a href="more.html">酒品人生</a></li>
					<li><a href="gift_more.html">礼品定制</a></li>
					<li><a href="news_list.html">资讯中心</a></li>
					<li><a href="about_us.html">关于我们</a></li>
					<li><a href="contact_us.html">联系我们</a></li>
				</ul>
			</nav>
		</header>
		<!-- 轮播start-->
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
			<ul class="list lh24 f14">
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><span class="rt"><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>·<a href="<?php echo $r['url'];?>" target="_blank"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
				<?php if($n%5==0) { ?><li class="bk20 hr"></li><?php } ?>
				<?php $n++;}unset($n); ?>
			</ul>
			<div id="pages" class="text-c"><?php echo $pages;?></div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<section id="slider" class="swipe" style="visibility: visible;">
			<section class="swipe-wrap">
				<figure>
					<div class="wrap">
						<a href="product-detail.html">
							<img alt="this is pic1" src="http://img1.bitautoimg.com/ycmall/mweb/img/jiaodiantu01.jpg" />
						</a>
					</div>
				</figure>
				<figure>
					<div class="wrap">
						<a href="product-detail.html">
							<img alt="this is pic1" src="http://img1.bitautoimg.com/ycmall/mweb/img/jiaodiantu01.jpg" />
						</a>
					</div>
				</figure>
				<figure>
					<div class="wrap">
						<a href="product-detail.html">
							<img alt="this is pic1" src="http://img1.bitautoimg.com/ycmall/mweb/img/jiaodiantu01.jpg" />
						</a>
					</div>
				</figure>
			</section>
		</section>
		<!-- 轮播end-->

		<nav class="nav wraper">
			<ul>
				<li><a href="more.html"><i class="drinks-icon"></i><strong>酒品人生</strong></a></li>
				<li><a href="gift_more.html"><i class="gift-icon"></i><strong>礼品定制</strong></a></li>
				<li><a href="news_list.html"><i class="news-icon"></i><strong>资讯中心</strong></a></li>
				<li><a href="contact_us.html"><i class="contact-icon"></i><strong>联系我们</strong></a></li>
			</ul>
		</nav>
		
		<section class="module-list wraper">
			<section class="hd cf">
				<h2 class="fl">礼品定制</h2>
				<a href="more.html" class="fr">更多案例</a>
			</section>
			<section class="bd">
				<ul class="cf data-list1">
					<li>
						<a href="gift-detail.html">
							<strong>礼品名称</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/gift-tem.jpg"  alt="" />
						</a>
					</li>
					<li>
					<a href="gift-detail.html">
							<strong>礼品名称</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/gift-tem.jpg"  alt="" />
						</a>
					</li>
				</ul>
				<ul class="cf data-list2">
					<li>
						<a href="gift-detail.html">
							<strong>礼品名称</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/gift-tem.jpg"  alt="" />
						</a>
					</li>
					<li>
						<a href="gift-detail.html">
							<strong>礼品名称</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/gift-tem.jpg"  alt="" />
						</a>
					</li>
					<li>
						<a href="gift-detail.html">
							<strong>礼品名称</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/gift-tem.jpg"  alt="" />
						</a>
					</li>
				</ul>
			</section>
		</section>
		
		<section class="module-list wraper">
			<section class="hd cf">
				<h2 class="fl">酒品人生</h2>
				<a href="more.html" class="fr">更多案例</a>
			</section>
			<section class="bd">
				<ul class="cf data-list1">
					<li>
						<a href="product-detail.html">
							<strong>40度法国轩尼诗</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/tem1-1.jpg"  alt="" />
						</a>
					</li>
					<li>
						<a href="product-detail.html">
							<strong>甘肃皇台95至尊</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/tem1-2.jpg"  alt="" />
						</a>
					</li>
				</ul>
				<ul class="cf data-list2">
					<li>
						<a href="product-detail.html">
							<strong>拉菲红酒原装进口</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/tem1-3.jpg"  alt="" />
						</a>
					</li>
					<li>
						<a href="product-detail.html">
							<strong>拉菲红酒原装进口</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/tem1-3.jpg"  alt="" />
						</a>
					</li>
					<li>
						<a href="product-detail.html">
							<strong>拉菲红酒原装进口</strong>
							<img src="<?php echo $__IMG__;?>/phone/tem/tem1-3.jpg"  alt="" />
						</a>
					</li>
				</ul>
			</section>
		</section>
		
		<footer id="footer" class="wraper">
			<a href="//13999999999">13999999999</a>
			<p>Copyright © 北京大秦汇通商贸有限公司 </br>Powered by: 大秦汇通</p>
		</footer>
	</section>
	
	
	<script src="<?php echo $__JS__;?>phone/zepto.min.js"></script>
	<script src="<?php echo $__JS__;?>phone/swipe.js"></script>
	<script>
	
		$(function(){
			
			var touchSlider = {
				touchSwipe: function(id){
					 var slider = Swipe(document.getElementById(id), {
						auto: 3000,
						continuous: true
					 });
					 this.createTx(id);
				},
				createTx: function(id){
					var picFigure = $('#'+id).find('figure');
					var imgs = $('#'+id).find('img');
					picFigure.each(function(){
						$('<h3 />', {
							text: imgs.eq($(this).index()).attr('alt'),
							class: 'slider-des'
						}).appendTo($(this));
					});
				}
			 };
			 touchSlider.touchSwipe('slider');

			
			$("#top-menu").tap(function(){
				$("#top-menu-content").toggleClass("h0");
				//$("#top-menu-content").height("300px");
			});
			
		});
	
		 

	</script>
</body>
</html>
