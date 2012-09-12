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
		<h3><?= $news->timestamp ?></h3>
		<a id="share">Share</a>
		<div id="leftSide">
			<img src="<?= url::base()."media/upload/news/".$news->pic ?>" />
		</div>
			<div id="rightSide">
	        <?php foreach ($news->images->find_all() as $pic) : ?>
				<a href="<?= url::base().'media/upload/training/'.$pic->image ?>" target="_blank"><img style="max-width:107px; border:0px" src="<?= url::base().'media/upload/training/'.$pic->image  ?>"></a>
			<? endforeach ?>
        </div>
		
		<div style="clear:left"></div>
		<div id="content">
            <div style="float:right;">
           		<?= $news->video ?>
            </div>
            <?= $news->message ?>
		</div>
		
		<div style="clear:left"></div>
        <?= HTML::anchor('news', 'Go back', array('class' => 'button')); ?><div class="line" style="width:82%;float:right"></div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>