<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<div class="con m-b7">
	<header class="dis-box header-menu b-color color-whie"><a class="" href="javascript:history.go(-1)"><i class="iconfont icon-jiantou"></i></a>
		<h3 class="box-flex">协商退货退款</h3>
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
	<div id="page">
		<div class="pullup"><span class="icon">
</span><span class="label"></span></div>
		<div id="wrapper">
			<div id="scroller">
				<div class="panel panel-detail">
					<div class="panel-body" id="panel-body">
						<?php echo $this->fetch('library/aftermarket_item.lbi'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-actionbar J_Actionbar">
			<div id="J_ModId_7">
				<div class="btn-box bar-main">

					<!--<div class="bar-item">
          <button class="J_Btn " type="button" onClick="editapplication()" data-param=''>修改申请</button>
        </div>-->
					<div class="filter-btn dis-box">
						<?php if ($this->_var['return']['is_cancel']): ?>
						<a href="<?php echo url('user/cancel_service', array('ret_id'=>$this->_var['return']['ret_id']));?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_cancel']; ?>？'))" return false; onClick="cancellations()" data-param='' type="button" class="btn-cart n-but-ls box-flex n-iphone5-top1 j-goods-attr j-show-div"><?php echo $this->_var['lang']['cancel_service']; ?></a>
						<?php endif; ?>
						<a href="<?php echo url('user/aftermarket_detail', array('ret_id'=>$this->_var['return']['ret_id']));?>" type="button" onClick="message()" data-param='' class="btn-submit box-flex n-iphone5-top1 j-goods-attr j-show-div"><?php echo $this->_var['lang']['aftermarket_detail']; ?></a>
					</div>
				</div>
			</div>
		</div>
		<div style="left: 0px; bottom: 0px; position: fixed;" class="pulldown"><span class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
      <path fill="none" stroke="#ddd" stroke-width="5" />
      <path fill="none" stroke="#f40" stroke-width="5"/>
    </svg>
    </span></div>
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
</div>
<?php echo $this->fetch('library/new_search.lbi'); ?>
<?php echo $this->fetch('library/new_page_footer.lbi'); ?>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.json.js"></script>
<script>
	/**
			 撤销申请
			*/
	function cancellations() {
		var rec_id = {
			$return.rec_id
		};
		var ret_id = {
			$return.ret_id
		};
		$.get('<?php echo url("user/cancel_service");?>', {
			rec_id: rec_id,
			ret_id: ret_id
		}, function(result) {
			if (result.error) {
				alert(result.error);
				location.href = './';
			}
			if (result.error == '') {
				var panel_body = document.getElementById("panel-body");
				panel_body.innerHTML = (typeof result == "object") ? result.content : result;
			}
		}, 'json');
	}
</script>
</body>