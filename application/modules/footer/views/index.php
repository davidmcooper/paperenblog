</div>

</div>
<!-- container -->

<div class="footer">
	<div class="inner">
    	<div class="container-fluid">
            <div class="row-fluid">
                <div class="span3 single">
                	<a href="<?php echo base_url(); ?>" class="logo"></a>
                </div>
                <div class="span3 single">
                    <h4>Follow Me</h4>
                    <ul class="unstyled third-party-app">
                        <li>
                        <a href="<?php echo $weibo; ?>"><i class="icon-paperen icon-weibo-16x16" rel="nofollow"></i>paperen的微博</a>
                        </li>
                    </ul>
                </div>
                <div class="span3 single">
                    <h4>Powered By</h4>
                    <ul class="unstyled">
                        <li><a href="http://twitter.github.com/bootstrap/">Bootstrap</a></li>
                        <li><a href="http://codeigniter.com/">codeigniter</a></li>
                    </ul>
                </div>
                <div class="span3 single">
                    <h4>Other</h4>
                    <ul class="unstyled">
                    	<li rel="nofollow"><a href="http://creativecommons.org/licenses/by/3.0/deed.zh_HK">姓名標示Unported (CC BY 3.0)</a></li>
                        <li><a href="<?php echo config_item('ICP'); ?>" rel="nofollow">粤ICP备09209790号</a></li>
						<li><script src="http://s24.cnzz.com/stat.php?id=4743221&web_id=4743221" language="javascript"></script></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	var base_url = '<?php echo base_url(); ?>';
	$(function(){
		$('.post-content pre').each(function(){
			$(this).addClass('prettyprint linenums');
		});
		prettyPrint();
	});
</script>
<!--[if lte IE 6]>
<script src="http://anti-ie6-plan.googlecode.com/files/anti-ie6-plan.zh_CN_utf8.js"></script>
<![endif]-->
</body>
</html>
