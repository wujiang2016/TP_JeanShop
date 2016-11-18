<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>更新牛仔裤数据信息</title>
	<link rel="stylesheet" href="/jd/Public/Home/css/bootstrap.min.css">
	<link rel="stylesheet" href="/jd/Public/Home/css/updatejeaninfo.css">
</head>
<body>
	<form action="" method="post" id='jeaninfo' onsubmit='return updateJeanInfo();'>
		<br><br>
		<span>牛仔裤名称：</span>
		<input style="width:800px;" type="text" name='name'>
		<br><br><br>
		<span>裤子参数信息：</span><br><br>
		<span>元素：</span>
		<select name="element" id="">
			<option value="">-----</option>
			<?php if(is_array($element)): $i = 0; $__LIST__ = $element;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<span>风格：</span>
		<select name="style" id="">
			<option value="">-----</option>
			<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<span>图案：</span>
		<select name="pattern" id="">
			<option value="">-----</option>
			<?php if(is_array($pattern)): $i = 0; $__LIST__ = $pattern;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<span>厚薄：</span>
		<select name="thickness" id="">
			<option value="">-----</option>
			<?php if(is_array($thickness)): $i = 0; $__LIST__ = $thickness;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<span>材质：</span>
		<select name="material" id="">
			<option value="">-----</option>
			<?php if(is_array($material)): $i = 0; $__LIST__ = $material;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<span>裤长：</span>
		<select name="outseam" id="">
			<option value="">-----</option>
			<?php if(is_array($outseam)): $i = 0; $__LIST__ = $outseam;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<br>
		<br>
		<span>腰型：</span>
		<select name="waistform" id="">
			<option value="">-----</option>
			<?php if(is_array($waistform)): $i = 0; $__LIST__ = $waistform;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<span>裤型：</span>
		<select name="panttype" id="">
			<option value="">-----</option>
			<?php if(is_array($panttype)): $i = 0; $__LIST__ = $panttype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<span>季节：</span>
		<select name="season" id="">
			<option value="">-----</option>
			<?php if(is_array($season)): $i = 0; $__LIST__ = $season;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<span>闭合方式：</span>
		<select name="closed" id="">
			<option value="">-----</option>
			<?php if(is_array($closed)): $i = 0; $__LIST__ = $closed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<span>版型：</span>
		<select name="stereotype" id="">
			<option value="">-----</option>
			<?php if(is_array($stereotype)): $i = 0; $__LIST__ = $stereotype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		
		<br><br><br>
		<span>款式信息：</span><input class="btn btn-danger" type="button" onclick="addDom(this,'fashion');" value="添加款式"><span style="margin-left:20px;">是否促销(若是,请打钩)：</span><input type="checkbox" name="is_promotion">
		<div class="fashion">
			<span>款式名称：</span>
			<input type="text" name="fashion_name"><br>
			<span>款式图片：</span>
			<input type="file" name="fashionImg[]">
			<div class="size">
				<span>尺码：</span>
				<select name="size" id="">
					<option value="">-----</option>
					<?php if(is_array($size)): $i = 0; $__LIST__ = $size;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<span>库存：</span>
				<input name="quantity" type="number" min=1>
				<span>价格：</span>
				<input name="price" type="text">
				<span>促销价格：</span>
				<input name="promotion_price" type="text">
			</div>
			<input type="button" class="btn btn-warning" onclick="addDom(this,'size');" value="添加尺码">
			<input type="button" class="btn btn-danger" onclick="deleteDom(this);" value="删除款式">
		</div>
		<div class="fashion">
			<br>
			<span>款式名称：</span>
			<input type="text" name="fashion_name"><br>
			<span>款式图片：</span>
			<input type="file" name="fashionImg[]">
			<div class="size">
				<span>尺码：</span>
				<select name="size" id="">
					<option value="">-----</option>
					<?php if(is_array($size)): $i = 0; $__LIST__ = $size;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<span>库存：</span>
				<input name="quantity" type="number" min=1>
				<span>价格：</span>
				<input name="price" type="text">
				<span>促销价格：</span>
				<input name="promotion_price" type="text">
			</div>
			<input type="button" class="btn btn-warning" onclick="addDom(this,'size');" value="添加尺码">
			<input type="button" class="btn btn-danger" onclick="deleteDom(this);" value="删除款式">
		</div>

		<br><br>
		<span>图片展示：</span>
		<br>
		<span>穿着效果(可添加多张图片)：</span>
		<input type="file" multiple='multiple' name='wear_effect[]'>

		<span>细节做工(可添加多张图片)：</span>
		<input type="file" multiple='multiple' name='detail_work[]'>
		<br><br>
		<input class="btn btn-success" type="submit" value="提交数据">
	</form>
	<script src="/jd/Public/Home/js/jquery-2.1.3.js"></script>
	<script src="/jd/Public/Home/js/updatejeaninfo.js"></script>
</body>
</html>