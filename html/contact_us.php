<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>联系我们 - 喇叭传媒</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php include("cssjs.php"); ?>
	<style>
		#foot{	margin-top:0;	}
	</style>
</head>
<body class="body_contact">

<?php include("head_a.php"); ?>
	
	<div class="wmax">
		<div class="box_contact clearfix">
			
<div style="text-align:center;">
	<img src="/images/addr_map.jpg" style="border:1px solid #D1CFD0;" />
</div>
		
<div class="contact_info">
	<h3>联系我们/CONTACT US</h3>
	<p>广州安腾网络科技有限公司</p>
	<p>地址：广州市海珠区怡安路财京公馆515</p>
	<p>联系人：林经理</p>
	<p>电话：123123123</p>
	<p>传真：</p>
	<p>邮箱：123123123@163.com</p>
</div>

<div class="form_c">
	<form action="" method="post">
		<div class="item_c">
			<span>Name / 姓名 *</span>
			<input name="name" class="" value="" />
		</div>
		<div class="item_c">
			<span>Company / 公司名称 *</span>
			<input name="company" class="" value="" />
		</div>
		<div class="item_c">
			<span>Email / 邮箱 *</span>
			<input name="email" class="" value="" />
		</div>
		<div class="item_c">
			<span>Phone / 电话号码 *</span>
			<input name="phone" class="" value="" />
		</div>
		<div class="item_c" style="width:auto;">
			<span>Detail / 留言内容 *</span>
			<textarea class="detail" name=""></textarea>
		</div>
		<input type="submit" class="sub" value="提 交" />
			
	</form>
</div>		
		
		
		</div>
	</div>
	
<?php include("foot.php"); ?>

<script>
$(function(){
	
	$(".menu ul li").eq(4).addClass("cur").siblings("li").removeClass("cur");			

});
</script>
  
</body>
</html>
