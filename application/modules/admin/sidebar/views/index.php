<!-- sidebar -->
<div class="span2 sidebar">
	<div class="menu">
		<ul class="nav nav-tabs nav-stacked">
			<li class="header"><a href="<?php echo base_url('manage'); ?>"><i class="icon-home"></i>管理面板</a></li>
		</ul>
		<?php if( !deny_permission( Level::$EDITOR ) ) { ?>
		<ul class="nav nav-tabs nav-stacked">
			<li class="header"><a href="javascript:void(0);"><i class="icon-file"></i>文章管理</a></li>
			<li>
				<ul class="nav nav-tabs nav-stacked nav-sub">
					<li><a href="<?php echo base_url('add_post'); ?>">發表新文章</a></li>
					<li><a href="<?php echo base_url('my_post'); ?>">我的文章 <strong><?php echo $post_total; ?></strong></a></li>
					<li><a href="<?php echo base_url('trash'); ?>">回收站 <strong><?php echo $trash_total; ?></strong></a></li>
					<li><a href="<?php echo base_url('my_category'); ?>">文章類別</a></li>
				</ul>
			</li>
		</ul>
		<?php } ?>
		<ul class="nav nav-tabs nav-stacked">
			<li class="header"><a href="javascript:void(0);"><i class="icon-inbox"></i>附件管理</a></li>
			<li>
				<ul class="nav nav-tabs nav-stacked nav-sub">
					<li><a href="<?php echo base_url('my_file'); ?>">我傳的附件</a></li>
					<?php if( !deny_permission( Level::$ADMIN ) ) { ?>
					<li><a href="<?php echo base_url('all_file'); ?>">所有附件</a></li>
					<?php } ?>
				</ul>
			</li>
		</ul>
		<?php if( !deny_permission( Level::$ADMIN ) ) { ?>
		<ul class="nav nav-tabs nav-stacked">
			<li class="header"><a href="javascript:void(0);"><i class="icon-heart"></i>友鏈管理</a></li>
			<li>
				<ul class="nav nav-tabs nav-stacked nav-sub">
					<li><a href="<?php echo base_url('link/add'); ?>">添加友鏈</a></li>
					<li><a href="<?php echo base_url('link'); ?>">友鏈列表</a></li>
				</ul>
			</li>
		</ul>
		<ul class="nav nav-tabs nav-stacked">
			<li class="header"><a href="javascript:void(0);"><i class="icon-user"></i>用戶管理</a></li>
			<li>
				<ul class="nav nav-tabs nav-stacked nav-sub">
					<li><a href="<?php echo base_url('user/add'); ?>">添加用戶</a></li>
					<li><a href="<?php echo base_url('user'); ?>">用戶列表</a></li>
				</ul>
			</li>
		</ul>
		<?php } ?>
		<ul class="nav nav-tabs nav-stacked">
			<li class="header"><a href="javascript:void(0);"><i class="icon-cog"></i>設置</a></li>
			<li>
				<ul class="nav nav-tabs nav-stacked nav-sub">
					<li><a href="<?php echo base_url('user/setting'); ?>">个人設置</a></li>
					<?php if( !deny_permission( Level::$ADMIN ) ) { ?>
					<li><a href="<?php echo base_url('config'); ?>">站点配置</a></li>
					<?php } ?>
					<li><a href="<?php echo base_url('weibo_auth'); ?>" id="sync_weibo">同步微博</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- sidebar -->