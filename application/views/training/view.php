<div id="training" class="news">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ฝึกอบรมอาสาสมัคร</li>
			<li>Title Name</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
        
		<div style="clear:both"></div>
		<h2><?= $training->topic ?></h2>
		<h3><?= $training->created ?></h3>
		<a id="share">Share</a>
		<div id="leftSide">
			<img src="img/tb_detail_sampel.png">
		</div>
		<div id="rightSide">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
		</div>
		
		<div style="clear:left"></div>
		<div id="content">
			<img src="img/video.png" style="float:right;">
			<?= $training->message ?>
		</div>
		
		<div style="clear:left"></div>
		<div class="line" style="width:100%;float:right"><a class="button">สมัครคลิกที่นี่</a></div>
		
		

  </div>
</div>