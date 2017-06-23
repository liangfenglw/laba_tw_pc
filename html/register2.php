<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>公司信息登记 - 喇叭传媒</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php include("cssjs.php"); ?>
	<style>
		#foot{	margin-top:0;	}
	</style>
</head>
<body class="body_reg">

<?php include("head_a.php"); ?>
	
	<div class="wmax">
		<div class="box_reg clearfix">
			
			<div class="title_reg">
				<ul>
					<li class="cur"><i>1.</i>信息登记</li>
					<li><i>2.</i>媒体帐号申请</li>
					<li><i>3.</i>等待审核</li>
				<ul>
			</div>
			
			<div class="info_reg"><h3>用户信息登记须知：</h3>
				<p>亚媒社是面向平面、网络、电视、广播等各类媒体形式，提供免费、卓越、真实、合法的内容输出、品牌推广的开放平台。为了更好的保障您和平台用户的利益，请认真填写以下登记信息。</p>
			</div>
			
			<div class="form_reg">
				<form method="" action="" id="form_3">
					<div class="item_r clearfix">
						<span class="spl">公司名称：</span>
						<div class="divr">
							<input type="text" name="cname" class="txt1" />
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">所属领域：</span>
						<div class="divr">
							<select name="lingyu" class="sel1">
								<option value="1">领域一</option>
								<option value="2">领域二</option>
								<option value="3">领域三</option>
								<option value="4">......</option>
							</select>
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">企业法人：</span>
						<div class="divr">
							<input type="text" name="fname" class="txt1" />
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">机构所在地：</span>
						<div class="divr">
							<select name="area_p" class="sel1" style="width:auto;">
								<option value="1">广东</option>
								<option value="2">......</option>
							</select>
							<select name="area_c" class="sel1" style="width:auto;">
								<option value="1">广州</option>
								<option value="2">......</option>
							</select>
							<select name="area_a" class="sel1" style="width:auto;">
								<option value="1">海珠区</option>
								<option value="2">......</option>
							</select>
							<input type="text" name="area_s" class="txt1" style="width:235px;" />
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">营业执照号：</span>
						<div class="divr">
							<input type="text" name="yingyezhizhao_num" class="txt1" style="" />
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">营业执照：</span>
						<div class="divr">
							<input type="file" name="yingyezhizhao_img" class="" />
							<button class="btn1" >确定上传</button>
							<p class="remark">支持jpg、jpeg、png文件，最大5M，请上传企业法人营业执照/法人证书扫描件</p>
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">运营人真实姓名：</span>
						<div class="divr">
							<input type="text" name="yyr_name" class="txt1" />
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">运营人证件号码：</span>
						<div class="divr">
							<input type="text" name="yyr_num" class="txt1" />
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">联系电话：</span>
						<div class="divr">
							<input type="text" name="phone" class="txt1" />
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">联系邮箱：</span>
						<div class="divr">
							<input type="text" name="email" class="txt1" />
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">入驻资源：</span>
						<div class="divr checkbox1">
							<label><input type="checkbox" name="ruzhuziyuan" class="" value="" />网络媒体</label>
							<label><input type="checkbox" name="ruzhuziyuan" class="" value="" />户外媒体</label>
							<label><input type="checkbox" name="ruzhuziyuan" class="" value="" />平面媒体</label>
							<label><input type="checkbox" name="ruzhuziyuan" class="" value="" />电视媒体</label>
							<label><input type="checkbox" name="ruzhuziyuan" class="" value="" />广播媒体</label>
							<label><input type="checkbox" name="ruzhuziyuan" class="" value="" />记者报料</label>
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">资源优势：</span>
						<div class="divr">
							<textarea name="ziyuanyoushi" class="textarea1"></textarea>
							<p class="remark">描述请在200字以内,你还可以输入120字</p>
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">网站/微博：</span>
						<div class="divr">
							<input type="text" name="site-weibo" class="txt1" />
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">合同授权书：</span>
						<div class="divr">
							<input type="file" name="hetong_file" class="" />
							<button class="btn1" >确定上传</button>
							<p class="remark">支持jpg、jpeg、png文件，最大5M，请上传企业法人营业执照/法人证书扫描件<br/>请先下载 《<a href="" style="color:#1ab394;text-decoration:underline;">喇叭平台入驻授权书</a>》，然后将签字后的扫描件在此处上传</p>

						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">个人简介：</span>
						<div class="divr">
							<textarea name="gerenjianjie" class="textarea1"></textarea>
							<p class="remark">描述请在200字以内,你还可以输入120字</p>
						</div>
					</div>
					<div class="item_r clearfix">
						<span class="spl">服务协议：</span>
						<div class="divr">
							<div class="xieyi">

<h2>亚媒社平台服务协议</h2>

<h3>一、总则</h3>
<p>1、为使用亚媒社平台服务（下简称“本服务”），您应当阅读并遵守《亚媒社平台服务协议》（以下简称“本协议”），以及《亚媒社服务协议》、《亚媒社网站保护隐私权之声明》等内容。</p>
<p>2、本协议系您与广州安腾网络科技有限公司（以下简称“亚媒社公司”）之间就亚媒社平台注册、登录及使用等事宜所订立的权利义务规范。</p>
<p>3、请您仔细阅读以下全部内容，您点选“同意”键并完成注册、登录，即视为已完全同意并接受本协议，并愿受其约束；若不同意本协议的任何条款，请不要点选“同意”，也不要使用亚媒社平台的任何服务。如您是未成年人，您还应要求您的监护人仔细阅读本协议，并取得他/他们的同意。 </p>
<p>4、本协议视为《亚媒社服务协议》的补充协议，是其不可分割的组成部分，本协议与《亚媒社服务协议》不一致的，以本协议为准。</p>
<p>5、本协议内容同时包括亚媒社公司可能不断发布的关于亚媒社平台服务的相关协议、声明、业务规则及公告指引等内容。上述内容一经正式发布，即为本协议不可分割的组成部分，您同样应当遵守。</p>

<h3>二、定义</h3>
<p>1、您：指提交有效申请并经亚媒社公司审核同意，在亚媒社平台上传、发布内容（包括文字、图片、音频、视频等）的自然人、法人或其他组织。</p>
<p>2、亚媒社平台：是广州安腾网络科技有限公司融合亚媒社网为您提供的集媒体刊物出版、内容展现和广告服务的平台产品。</p>
<p>3、亚媒社网：指亚媒社公司所有或经营的网站：www.yameishe.com</p>
<p>4、用户：指所有直接或间接使用亚媒社网、亚媒社加盟媒体、自媒体。</p>
<p>&nbsp;</p>

							</div>
						</div>
					</div>

					<div class="item_r clearfix">
						<span class="spl"></span>
						<div class="divr checkbox1">
							<label><input type="radio" name="agree" class="radio1" />同意</label>
							<label><input type="radio" name="agree" class="radio1" checked />不同意</label>
						</div>
					</div>

					<div class="item_r clearfix">
						<span class="spl"></span>
						<div class="divr">
							<input type="submit" value="提  交" class="sub1" />
						</div>
					</div>

				</form>
			</div>

		</div>
	</div>
	
<?php include("foot.php"); ?>

<script>
$(function(){
	
//	$(".menu ul li").eq(4).addClass("cur").siblings("li").removeClass("cur");			

});
</script>
  
</body>
</html>
