<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<header class="dis-box header-menu b-color color-whie"><a class="" href="javascript:history.go(-1)"><i class="iconfont icon-jiantou"></i></a>
	<h3 class="box-flex">服务选择</h3>
	<a class="" href="javascript:;"><i class="iconfont icon-pailie j-nav-box"></i></a>
</header>
<div class="j-nav-content">
	<ul class="dis-box new-footer-box">
		<li class="box-flex">
			<a href="<?php echo url('index/index');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/home.png"></i><span>首页</span></a>
		</li>
		<li class="box-flex">
			<a href="<?php echo url('category/top_all');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/cate.png"></i><span>分类</span></a>
			<li class="box-flex"><a href="javascript:;" class="nav-cont j-search-input"><i class="nav-box"><img src="__TPL__/statics/img/search.png"></i><span>搜索</span></a></li>
			<li class="box-flex"><a href="<?php echo url('flow/cart');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/flow.png"></i><span>购物车</span></a></li>
			<li class="box-flex"><a href="<?php echo url('user/index');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/user.png"></i><span>用户中心</span></a></li>
	</ul>
</div>
<div style="top: 0px; min-height: 567px; opacity: 1;background:#fff;" id="page">
	<div id="wrapper">
		<div id="scroller">
			<div class="panel panel-form">
				<form class="f-form" method="post" action="<?php echo url('user/aftermarket_done');?>" enctype="multipart/form-data" name="serviceform" novalidate="novalidate">
					<div class="panel-heading">
						<div id="J_ModId_2">
							<div class="service-list f-field">
								<div class="row">
									<div class="f-label"><em>*</em><?php echo $this->_var['lang']['aftermarket_apply']; ?></div>
									<div class="f-controls select-wrapper">
										<select name="service_id" onchange="changeServiceType(this.value)">
                    <?php $_from = $this->_var['service_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'service');$this->_foreach['service_type'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['service_type']['total'] > 0):
    foreach ($_from AS $this->_var['service']):
        $this->_foreach['service_type']['iteration']++;
?>
                    <option value="<?php echo $this->_var['service']['service_id']; ?>" <?php if ($this->_var['service_id'] == $this->_var['service']['service_id']): ?>selected ="true"<?php endif; ?>><?php echo $this->_var['service']['service_name']; ?></option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
									</div>
								</div>
							</div>
						</div>
					</div>
					

					<?php if ($this->_var['type'] [ 'return_gods' ]): ?>
					<div class="panel-body" id="return_type1">
						<div id="J_ModId_3">
							<div class="bidi-viewer" data-view="form">
								<div id="bidi-form-81" class="f-field">
									<div class="row">
										<label class="f-label">
                    <em>*</em>
                    <label id="bidi-form-82"><?php echo $this->_var['lang']['return_reason']; ?></label>
										</label>
										<div class="f-controls select-wrapper">
											<select id="bidi-form-83" class="select" name="reason" data-type="select">
                       <?php echo $this->_var['cause_list']; ?>
                      </select>
										</div>
									</div>
									<div style="display: none;" id="msg-warning-wrapper-reason">
										<div class="auth-msg-warning"></div>
									</div>
									<div style="display: none;" id="msg-wrapper-reason" class="msg-wrapper"></div>
								</div>
								
								<div id="bidi-form-84" class="f-field">
									<div class="row">
										<label class="f-label"> <em>*</em><?php echo $this->_var['lang']['refund_amount']; ?></label>
										<div class="f-controls money-input iconfont icon-yen">
											<input id="refundFee" class="input-l input-content-len-10 J_InputFee" name="refundFee" disabled="disabled" value="<?php echo $this->_var['goods']['goods_price']; ?>" type="text" wrapper=".f-field" required="" min="0" max="" placeholder="">
										</div>
									</div>
									<!--<div id="bidi-form-86" class="field-tips">(<?php echo $this->_var['lang']['max_num']; ?><strong><?php echo $this->_var['order']['total_fee']; ?></strong>
                  <?php echo $this->_var['lang']['include_shipping_free']; ?><strong><?php echo $this->_var['order']['shipping_fee']; ?></strong><?php echo $this->_var['lang']['yuan']; ?>)
                  </div>-->
									<div style="display: none;" id="msg-warning-wrapper-refundFee"></div>
									<div style="display: none;" id="msg-wrapper-refundFee" class="msg-wrapper"></div>
								</div>
								

								
								<div id="bidi-form-84" class="f-field">
									<div class="row">
										<label class="f-label"> <em>*</em><?php echo $this->_var['lang']['return_num']; ?> </label>
										<div class="f-controls money-input iconfont">
											<input id="back_num" class="input-l input-content-len-10 J_InputFee" name="back_num" value="1" type="text" wrapper=".f-field" min="1" max="<?php echo $this->_var['goods']['goods_number']; ?>" placeholder="">
										</div>
									</div>
								</div>
								

								<div id="bidi-form-87" class="f-field hidden">
									<div class="row">
										<label class="f-label">
                    <em>*</em>
                    <label id="bidi-form-88">需要赔付</label>
										</label>
										<div class="f-controls select-wrapper">
											<select id="bidi-form-89" class="select" name="needCompensate" wrapper=".f-field" data-type="select" data-defaultvalue="0" msg-warning-wrapper="#msg-warning-wrapper-needCompensate" msg-wrapper="#msg-wrapper-needCompensate" data-tpl="{f_unit_select this}"
												required="" aria-label="需要赔付">
                        <option value="">请选择需要赔付</option>
                        <option value="1" data-tips="">是</option>
                        <option selected="" value="0" data-tips="">否</option>
                      </select>
										</div>
									</div>
									<div style="display: none;" id="msg-warning-wrapper-needCompensate"></div>
									<div style="display: none;" id="msg-wrapper-needCompensate" class="msg-wrapper"></div>
								</div>
								

								<div id="bidi-form-90" class="f-field hidden">
									<div class="row">
										<label class="f-label"> <em>*</em>赔付金额 </label>
										<div class="f-controls money-input iconfont icon-yen">
											<input id="bidi-form-91" class="input-l input-content-len-10 J_InputFee" name="contractFee" value="" type="number" wrapper=".f-field" min="0" max="0.00" placeholder="">
										</div>
									</div>
									<div id="bidi-form-92" class="field-tips">(最多<strong>0.00</strong>元) <strong></strong></div>
									<div style="display: none;" id="msg-warning-wrapper-contractFee"></div>
									<div style="display: none;" id="msg-wrapper-contractFee" class="msg-wrapper"></div>
								</div>
								
    <div class="uploader-field">
                  <div class="J_TakephotoBox takephoto-box" id="uploader">
                    <div class="J_TakephotoTrigger takephoto-trigger btns">
                      <div class="add-text" id="picker">
                        <span>(最多三张)</span>
                        </div>
                    </div>
                     <ul id="thelist" class="uploader-list" style="margin-top:0px">

                    </ul>
                  </div>
                  <div style="display: none;" class="msg-wrapper"></div>
                </div>
               
								
								<div id="bidi-form-93" class="f-field" style="clear:both">
									<div class="row"> <span class="memo-tip"></span>
										<div class="f-label"> <?php echo $this->_var['lang']['return_explain']; ?> </div>
										<div class="f-controls  n-addr-textarea">
											<textarea id="bidi-form-94" class="textarea J_Description" name="description" msg-warning-wrapper="#msg-warning-wrapper-description" msg-wrapper="#msg-wrapper-description" aria-label="<?php echo $this->_var['lang']['return_explain']; ?>" placeholder="最多200字" max-length="200"></textarea>
										</div>
									</div>
									<div style="display: none;" id="msg-warning-wrapper-description"></div>
									<div style="display: none;" id="msg-wrapper-description" class="msg-wrapper"></div>
								</div>
								


								<input name="order_id" value="<?php echo $this->_var['order']['order_id']; ?>" type="hidden">
								<input name="rec_id" value="<?php echo $this->_var['rec_id']; ?>" type="hidden">
								<input name="goods_id" value="<?php echo $this->_var['goods_id']; ?>" type="hidden">
								<div style="display: none;" class="msg-wrapper"></div>
								<div style="display: none;" class="msg-wrapper"></div>
								<div style="display: none;" class="msg-wrapper"></div>
							</div>
						</div>
					</div>
					<?php endif; ?>
					

					
					<?php if ($this->_var['type'] [ 'exchange' ]): ?>
					<div class="panel-body" id="return_type3">
						<div id="J_ModId_3">
							<div class="bidi-viewer" data-view="form">
								<div id="bidi-form-81" class="f-field">
									<div class="row">
										<label class="f-label">
                    <em>*</em>
                    <label id="bidi-form-82"><?php echo $this->_var['lang']['exchange_reason']; ?></label>
										</label>
										<div class="f-controls select-wrapper">
											<select id="bidi-form-83" class="select" name="reason" data-type="select">
                       <?php echo $this->_var['cause_list']; ?>
                      </select>
										</div>
									</div>
								</div>
								
								
								<div id="bidi-form-84" class="f-field">
									<div class="row">
										<label class="f-label"> <em>*</em><?php echo $this->_var['lang']['return_num']; ?> </label>
										<div class="f-controls money-input iconfont">
											<input id="back_num" class="input-l input-content-len-10 J_InputFee" name="back_num" value="1" type="number" wrapper=".f-field" required="" min="1" max="<?php echo $this->_var['goods']['goods_number']; ?>" placeholder="">
										</div>
									</div>
								</div>
								
								<div id="bidi-form-93" class="f-field">
									<div class="row"> <span class="memo-tip"></span>
										<div class="f-label"> <?php echo $this->_var['lang']['return_explain']; ?> </div>
										<div class="f-controls  n-aftermark-cont">
											<textarea id="bidi-form-94" class="textarea J_Description" name="description" msg-warning-wrapper="#msg-warning-wrapper-description" msg-wrapper="#msg-wrapper-description" aria-label="<?php echo $this->_var['lang']['return_explain']; ?>" placeholder="最多200字" max-length="200"></textarea>
										</div>
									</div>
									<div style="display: none;" id="msg-warning-wrapper-description"></div>
									<div style="display: none;" id="msg-wrapper-description" class="msg-wrapper"></div>
								</div>
								
								
								<div id="bidi-form-93" class="f-field">
									<div class="row"> <span class="memo-tip"></span>
										<div class="f-label">寄回商家地址：</div>
										<div class="f-controls n-aftermark-cont">
											<div class="n-add-box">
												<?php echo $this->_var['business_address']; ?>
											</div>
										</div>
									</div>
									<div style="display: none;" id="msg-warning-wrapper-description"></div>
									<div style="display: none;" id="msg-wrapper-description" class="msg-wrapper"></div>
								</div>
								
                 <div class="uploader-field">
                  <div class="J_TakephotoBox takephoto-box" id="uploader">
                    <div class="J_TakephotoTrigger takephoto-trigger btns">
                      <div class="add-text" id="picker">
                        <span>(最多三张)</span>
                        </div>
                    </div>
                     <ul id="thelist" class="uploader-list" style="margin-top:0px">

                    </ul>
                  </div>
                  <div style="display: none;" class="msg-wrapper"></div>
                </div>

               

								<div class="ect-bg-colorf  aftermarket" style="clear:both;">

									<ul class="n-addr-box dis-box">
										<li class="n-left-cont"><?php echo $this->_var['lang']['consignee_name']; ?>：</li>
										<li class="box-flex"> <input name="consignee" placeholder="<?php echo $this->_var['lang']['consignee_name']; ?><?php echo $this->_var['lang']['require_field']; ?>" type="text" class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['consignee']); ?>" /></li>
									</ul>
									<ul class="n-addr-box dis-box">
										<li class="n-left-cont"><?php echo $this->_var['lang']['mobile']; ?>：</li>
										<li class="box-flex"> <input placeholder="<?php echo $this->_var['lang']['mobile']; ?><?php echo $this->_var['lang']['require_field']; ?>" name="phone" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['order']['mobile']); ?>" /></li>
									</ul>
									<ul class="n-addr-box dis-box" style="display:none">
										<li class="n-left-cont"><?php echo $this->_var['lang']['city_district']; ?>：</li>
										<li class="box-flex">
											<span>
                      <div class="f-controls select-wrapper">
                      <select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')">
                        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
                        <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
                        <option value="<?php echo $this->_var['country']['region_id']; ?>"<?php if ($this->_var['country']['region_id'] == '1'): ?> selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      </select>
                      </div>
                      </span>
										</li>
									</ul>
									<ul class="n-addr-box dis-box" id="selDistricts_<?php echo $this->_var['sn']; ?>_box" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="" <?php endif; ?>>
										<li class="n-left-cont">省/市：</li>
										<li class="box-flex">
											<span>    
		               	<div class="input-text f-controls select-wrapper" >               		
	                       <select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')">
	                        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
	                        <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
	                        <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['order']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
	                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	                      </select>
	                          </div>
	                      </span>

										</li>
									</ul>
									<ul class="n-addr-box dis-box" id="selDistricts_<?php echo $this->_var['sn']; ?>_box" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="" <?php endif; ?>>
										<li class="n-left-cont">城市：</li>
										<li class="box-flex">
											<span>    
		               	<div class="input-text f-controls select-wrapper" >               		
	                               <select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')" >
                        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
                        <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                        <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['order']['city'] == $this->_var['city']['region_id']): ?>
                        selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      </select>
	                          </div>
	                      </span>

										</li>
									</ul>
									<ul class="n-addr-box dis-box">
										<li class="n-left-cont">区/县：</li>
										<li class="box-flex">
											<span>    
		               	<div class="input-text f-controls select-wrapper" >               		
	                     <select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>">                    
                        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
                        <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                        <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['order']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      </select>
	                          </div>
	                      </span>

										</li>
									</ul>

									<ul class="n-addr-box dis-box">
										<li class="n-left-cont"><?php echo $this->_var['lang']['detailed_address']; ?>：</li>
										<li class="box-flex n-addr-textarea"><textarea name="address" placeholder="<?php echo $this->_var['lang']['detailed_address']; ?><?php echo $this->_var['lang']['require_field']; ?>" type="text"><?php echo $this->_var['order']['address']; ?></textarea></li>
									</ul>
								</div>
								
								<div class="padding-all n-user-after-z">
									注：如您修改地址，请您确认上方"省、市、县"是否需要修改。
								</div>

								
								
								<input name="order_id" value="<?php echo $this->_var['order']['order_id']; ?>" type="hidden">
								<input name="rec_id" value="<?php echo $this->_var['rec_id']; ?>" type="hidden">
								<input name="goods_id" value="<?php echo $this->_var['goods_id']; ?>" type="hidden">
								<div style="display: none;" class="msg-wrapper"></div>
								<div style="display: none;" class="msg-wrapper"></div>
								<div style="display: none;" class="msg-wrapper"></div>
							</div>
						</div>
					</div>
					<?php endif; ?>
					
					<div class="panel-body" id="return_type4">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="filter-btn dis-box">
		<a type="button" class="btn-submit box-flex n-iphone5-top1 j-goods-attr j-show-div" id="diyStart" >提交申请</a>
	</div>

</div>
<div id="mask"></div>
<div id="popup" class="bottom-side"></div>
<div id="load-layer">
	<div class="load-icon hidden">
		<div class="load-outer">
			<div class="load-inner"></div>
		</div>
		<div class="load-msg hidden">正在加载</div>
	</div>
</div>
<div id="error-layer">
	<div class="iconfont icon-wifi"></div>
	<p class="error-msg">资源加载失败，请稍候重试</p>
	<button class="retry-btn" onclick="javascript:location.reload();" type="button">重新加载</button>
</div>
<div style="top: 0px; width: 344px; font-size: 1.2rem; visibility: hidden; position: absolute; z-index: -1;">一</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__TPL__/js/webuploader.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/region.js"></script>
<?php echo $this->fetch('library/new_search.lbi'); ?>
<?php echo $this->fetch('library/new_page_footer.lbi'); ?>
<script>
	//服务类型切换
	function changeServiceType(service_id) {
		$.get('index.php?m=default&c=user&a=change_service', {
			id: service_id,
			order_id: <?php echo $this->_var['order_id']; ?>,
			rec_id: <?php echo $this->_var['rec_id']; ?>
		}, function(result) {
			if (result.error > 0) {
				alert(result.message);
			} else {
				window.location.href = result.url;
			}
		}, 'json');
	}
	/*控制最大退换货数量*/
	$("#back_num").change(function() {
 
		var reg = /^[0-9]*[1-9][0-9]*$/;
		var fee = <?php echo $this->_var['goods']['goods_price']; ?>;
		var val = $('#back_num').val();
		var max_num = <?php echo $this->_var['goods']['goods_number']; ?>;
		if (!reg.test(val)) {
			$('#back_num').val(1);
		}
		if (val > max_num || val < 1) {
			$('#back_num').val(max_num);
			 val = max_num;
			 $('#refundFee').val((fee * val).toFixed(2));

		}
		$('#refundFee').val((fee * val).toFixed(2));
	});

	/*提交验证*/
	function check_service() {

	}
</script>
<script type="text/javascript">
	var $ = jQuery,
		$list = $('#thelist'),
		// 优化retina, 在retina下这个值是2
		ratio = window.devicePixelRatio || 1,
		// 缩略图大小
		thumbnailWidth = 100 * ratio,
		thumbnailHeight = 100 * ratio,
		mapping = {},
		// Web Uploader实例
		uploader;
	var uploader = WebUploader.create({
		// swf文件路径
		swf: 'js/Uploader.swf',
		// 文件接收服务端。
		//$.post("{:url('user/upload_file",{'goods_id':$this->_var['goods']['goods_id'],'rec_id':$this->_var['rec_id']},function(){

		//},'json');

		server:'<?php echo url('user/upload_file',array('goods_id'=>$this->_var['goods']['goods_id'],'rec_id'=>$this->_var['rec_id']));?>',

		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#picker',
		// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
		resize: false,

		fileNumLimit: 3 //限制上传数量3
	});
	//点击上传
	$("#diyStart").click(function() {
		var html = $list.html();
		console.log(html)

		if (html != undefined || html != "") {
			uploader.upload();
			document.forms['serviceform'].submit();
		}
	});
	uploader.on('beforeFileQueued', function(file) {
		var hash = file.__hash || (file.__hash = hashString(file.name +
			file.size + file.lastModifiedDate));

		// 已经重复了
		if (mapping[hash]) {
			alert('图片不能重复');
			return false;
		}
	});
	// 当有文件添加进来的时候
	uploader.on('fileQueued', function(file) {
		var hash = file.__hash;
		hash && (mapping[hash] = true);

		var $li = $('<li id="' + file.id + '">' + '<p class="imgWrap">' + '<img class="img-thumbnail">' + '</p></li>'),
			$img = $li.find('img');
		$list.append($li);
		file.rotation = 0;
		// 创建缩略图
		uploader.makeThumb(file, function(error, src) {
			if (error) {
				$img.replaceWith('<span>不能预览</span>');
				return;
			}
			$img.attr('src', src);
		}, thumbnailWidth, thumbnailHeight);
		//添加移除按钮
		/*if($("#removeBtn").length <= 0){
		  $("div.btns").append('<a id="removeBtn" type="button" class="btn btn-default">移除文件</a>');
		}*/
	});
	//移除文件
	$("div.btns").on("click", "#removeBtn", function() {
		var id = $(".state").parent().attr("id");
		if (id != undefined || id != "") {
			$("div.btns #removeBtn").remove();
			//移除队列
			uploader.removeFile(id, true);
			$list.empty();
		}
	});

	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader.on('uploadSuccess', function(file, response) {
		console.log(file);
		console.log(response);
	});
	// 文件上传失败，显示上传出错。
	uploader.on('uploadError', function(file) {
		var $li = $('#' + file.id),
			$error = $li.find('div.error');
		// 避免重复创建
		if (!$error.length) {
			$error = $('<div class="error text-danger"></div>').appendTo($li);
		}
		$error.text('上传失败');
	});

	// 完成上传完了，成功或者失败，先删除进度条。
	uploader.on('uploadComplete', function(file) {
		$('#' + file.id).find('.progress').remove();
	});

	uploader.onFileQueued = function(file) {
		addFile(file);
	};
	// 当有文件添加进来时执行，负责view的创建
	function addFile(file) {
		var $li = $("#" + file.id),
			$btns = $('<div class="file-panel">' +
				'<span class="cancel">删除</span>' +
				'<span class="rotateRight">向右旋转</span>' +
				'<span class="rotateLeft">向左旋转</span></div>').appendTo($li),
			$prgress = $li.find('p.progress span'),
			$wrap = $li.find('p.imgWrap'),
			$info = $('<p class="error"></p>'),

			showError = function(code) {
				switch (code) {
					case 'exceed_size':
						text = '文件大小超出';
						break;

					case 'interrupt':
						text = '上传暂停';
						break;

					default:
						text = '上传失败，请重试';
						break;
				}
				$info.text(text).appendTo($li);
			};
		file.on('statuschange', function(cur, prev) {
			if (prev === 'progress') {
				$prgress.hide().width(0);
			} else if (prev === 'queued') {
				$li.off('mouseenter mouseleave');
				$btns.remove();
			}

			// 成功
			if (cur === 'error' || cur === 'invalid') {
				console.log(file.statusText);
				showError(file.statusText);
				/*percentages[ file.id ][ 1 ] = 1;*/
			} else if (cur === 'interrupt') {
				showError('interrupt');
			} else if (cur === 'queued') {
				/* percentages[ file.id ][ 1 ] = 0;*/
			} else if (cur === 'progress') {
				$info.remove();
				$prgress.css('display', 'block');
			} else if (cur === 'complete') {
				$li.append('<span class="success"></span>');
			}

			$li.removeClass('state-' + prev).addClass('state-' + cur);
		});

		$li.on('mouseenter', function() {
			$btns.stop().animate({
				height: 30
			});
		});

		$li.on('mouseleave', function() {
			$btns.stop().animate({
				height: 0
			});
		});

		$btns.on('click', 'span', function() {
			var index = $(this).index(),
				deg,
				supportTransition = (function() {
					var s = document.createElement('p').style,
						r = 'transition' in s ||
						'WebkitTransition' in s ||
						'MozTransition' in s ||
						'msTransition' in s ||
						'OTransition' in s;
					s = null;
					return r;
				})();
			switch (index) {
				case 0:
					//uploader.removeFile( file);
					removeFile(file);
					return;
				case 1:
					file.rotation += 90;
					break;

				case 2:
					file.rotation -= 90;
					break;
			}
			if (supportTransition) {
				deg = 'rotate(' + file.rotation + 'deg)';
				$wrap.css({
					'-webkit-transform': deg,
					'-mos-transform': deg,
					'-o-transform': deg,
					'transform': deg
				});
			} else {
				$wrap.css('filter', 'progid:DXImageTransform.Microsoft.BasicImage(rotation=' + (~~((file.rotation / 90) % 4 + 4) % 4) + ')');
			}
		});
		$li.appendTo($('#thelist'));
	}

	function hashString(str) {
		var hash = 0,
			i = 0,
			len = str.length,
			_char;

		for (; i < len; i++) {
			_char = str.charCodeAt(i);
			hash = _char + (hash << 6) + (hash << 16) - hash;
		}
		return hash;
	}
	// 负责view的销毁
	function removeFile(file) {
		var $li = $('#' + file.id);
		/* delete percentages[ file.id ];
		 updateTotalProgress();*/
		$li.off().find('.file-panel').off().end().remove();
	}
</script>
</body>