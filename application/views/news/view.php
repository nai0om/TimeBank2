<div id="news">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ข่าวสารอัพเดท</li>
			<li><?= $news->topic ?></li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
        
		<div style="clear:both"></div>
		<h2><?= $news->topic ?></h2>
		<h3><?= $news->created ?></h3>
		<a id="share">Share</a>
		<div id="leftSide">
			<img src="<?= url::base(); ?>media/img/tb_detail_sampel.png">
		</div>
		<div id="rightSide">
			<img src="<?= url::base(); ?>media/img/org_sample_small.png">
			<img src="<?= url::base(); ?>media/img/org_sample_small.png">
			<img src="<?= url::base(); ?>media/img/org_sample_small.png">
			<img src="<?= url::base(); ?>media/img/org_sample_small.png">
			<img src="<?= url::base(); ?>media/img/org_sample_small.png">
			<img src="<?= url::base(); ?>media/img/org_sample_small.png">
			<img src="<?= url::base(); ?>media/img/org_sample_small.png">
			<img src="<?= url::base(); ?>media/img/org_sample_small.png">
		</div>
		
		<div style="clear:left"></div>
		<div id="content">
            <img src="<?= url::base(); ?>media/img/video.png" style="float:right;">
            <?= $news->message ?>
		</div>
		
		<div style="clear:left"></div>
        <?= HTML::anchor('news', 'Go back', array('class' => 'button')); ?><div class="line" style="width:82%;float:right"></div>
		
  </div>
</div>