<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header','admin');?>
<div class="bk10"></div>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>jquery.treeview.css" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.treeview.js"></script>
<?php if($ajax_show) {?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.treeview.async.js"></script>
<?php }?>
<SCRIPT LANGUAGE="JavaScript">
<!--
	<?php if($ajax_show) {?>
	$(document).ready(function(){
		$("#category_tree").treeview({
			control: "#treecontrol",
				url: "index.php?m=content&c=content&a=public_sub_categorys&menuid=<?php echo $_GET['menuid']?>",
				ajax: {
					data: {
						"additional": function() {
							return "time: " + new Date;
						},
							"modelid": function() {
								return "<?php echo $modelid?>";
							}
					},
						type: "post"
				}
		});
	});
<?php } else {?>
$(document).ready(function(){
	$("#category_tree").treeview({
		control: "#treecontrol",
			persist: "cookie",
			cookieId: "treeview-black"
	});
});
<?php }?>
function open_list(obj) {

	window.top.$("#current_pos_attr").html($(obj).html());
}

//-->
</SCRIPT>
 <style type="text/css">
.filetree *{white-space:nowrap;}
.filetree span.folder, .filetree span.file{display:auto;padding:1px 0 1px 16px;}
 </style>
 <div id="treecontrol">
 <span style="display:none">
		<a href="#"></a>
		<a href="#"></a>
		</span>
		<a href="#"><img src="<?php echo IMG_PATH;?>minus.gif" /> <img src="<?php echo IMG_PATH;?>application_side_expand.png" /> 展开/收缩</a>
</div>
<?php
if($_GET['from']=='block') {
?>
<ul class="filetree  treeview"><li class="collapsable"><div class="hitarea collapsable-hitarea"></div><span><img src="<?php echo IMG_PATH.'icon/home.png';?>" width="15" height="14">&nbsp;<a href='?m=block&c=block_admin&a=public_visualization&type=index' target='right'><?php echo L('block_site_index');?></a></span></li></ul>
<?php } else { ?>
<ul class="filetree  treeview"><li class="collapsable"><div class="hitarea collapsable-hitarea"></div><span><img src="<?php echo IMG_PATH.'icon/box-exclaim.gif';?>" width="15" height="14">&nbsp;<a href='?m=content&c=content&a=public_checkall&menuid=822' target='right'><?php echo L('checkall_content');?></a></span></li></ul>
<?php } echo $categorys; ?>
<ul id="menu" style="float:left;position:relative;background-color:rgb(66, 184, 255)">
    <li><a style="cursor:pointer" id="gen_html" catid="0">生成栏目首页</a></li>
    <li><a style="cursor:pointer" id="show_html" catid="0" href="">预览栏目首页</a></li>
</ul>
	<script>
	var oMenu = document.getElementById("menu");
	var aLi = oMenu.getElementsByTagName("li");
	var isClick=false;
	//加载后隐藏自定义右键菜单
	oMenu.style.display = "none";
	//菜单鼠标移入/移出样式
	for (i = 0; i < aLi.length; i++)
	{
		//鼠标移入样式
		aLi[i].onmouseover = function ()
		{
			this.className = "active"	
		};
		//鼠标移出样式
		aLi[i].onmouseout = function ()
		{
			this.className = ""	
		}
	}
	//自定义菜单
	document.oncontextmenu = function (event)
	{

		if(isClick){
			isClick=false;
			var event = event || window.event;
			var style = oMenu.style;
			style.display = "block";
			style.top = event.clientY  - 300 + "px";
			style.left = event.clientX -20 + "px";
			return false;
		}
		else {
			isClick=false;
			return true;
		}
	};
	//页面点击后自定义菜单消失
	document.onclick = function ()
		{
			oMenu.style.display = "none"	
		}
	$("a").mousedown(function(e){
		var catid="";
		isClick=true;
		var e= e || window.event;
		if( e.button == "2"){
			catid=$(this).attr("catid");
			$("#gen_html").attr("catid",catid);
			$("#show_html").attr("catid",catid);
		}
	});
	$("#gen_html").click(function(){
		isClick=false;
		var catid=$(this).attr("catid");
		window.open("http://phpcms/index.php?m=content&c=create_html&a=category_index&catid="+catid+"&dosubmit=1&pc_hash=<?php echo $pc_hash;?>");
	});
	$("#show_html").click(function(){
		isClick=false;
		var catid=$(this).attr("catid");
		window.open("http://phpcms/index.php?m=content&c=content&a=public_category&catid="+catid);
	});


	</script>

