<?php $this->load->module('admin/header/common/index'); ?>
<?php $this->load->module('admin/sidebar/common/index'); ?>
<!-- main -->
<div class="main span10">
	<?php if( isset( $err ) && $err ) { ?>
	<div class="alert alert-error">
		<h3>����΢��ʧ��</h3>
	</div>
	<?php } else { ?>
	<div class="alert alert-success">
		<h3>����΢���ɹ�</h3>
	</div>
	<?php } ?>
</div>
<!-- main -->
<?php $this->load->module('admin/footer/common/index'); ?>