<div id="news">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ข่าวแวดวง</li>
			<li><?= $news->topic ?></li>
		</div>
        
		<div style="clear:both"></div>
		<h2><?= $news->topic ?></h2>
		<h3><?= phphelp::timestamp_to_thai($news->timestamp) ?></h3>
        
		<a id="share" class="a2a_dd" href="http://www.addtoany.com/share_save">บอกต่อ</a>
        <script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
            <!-- Lockerz Share END -->
        
        
		<div id="leftSide">
			<img src="<?= url::base()."media/upload/news/".$news->pic ?>" />
		</div>
			<div id="rightSide">
	        <?php foreach ($news->images->find_all() as $pic) : ?>
				<a href="<?= url::base().'media/upload/news/'.$pic->image ?>" target="_blank">
                	<a href="<?= url::base().'news/image/'.$news->id.'?index='.$pic->image ?>" target="_blank">
                <img style="max-width:107px; border:0px" src="<?= url::base().'media/upload/news/'.$pic->image  ?>">
                </a>
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
        <?= HTML::anchor('news', 'ย้อนกลับ', array('class' => 'button')); ?><div class="line" style="width:82%;float:right"></div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>