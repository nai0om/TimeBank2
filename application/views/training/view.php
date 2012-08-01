<div id="training" class="news">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ฝึกอบรมอาสาสมัคร</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
        
		<div style="clear:both"></div>
		<h2><?= $training->topic ?></h2>
		<h3 style="width:40%"><?= $training->date_message ?></h3>
		<!--a id="share">Share</a-->
		<div id="leftSide">
			<a href="<?= url::base().'media/upload/training/'.$training->main_pic ?>" target="_blank"><img style="max-width:450px" src="<?= url::base().'media/upload/training/'.$training->main_pic ?>"></a>
		</div>
        
        <?php $pic_list = explode(',', $training->pic); ?>
		<div id="rightSide">
	        <?php foreach ($pic_list as $pic) : ?>
				<a href="<?= url::base().'media/upload/training/'.$pic ?>" target="_blank"><img style="max-width:107px; border:0px" src="<?= url::base().'media/upload/training/'.$pic ?>"></a>
			<? endforeach ?>
        </div>

		<div style="clear:left"></div>
		
		<div id="content">
			<br /><br />
			<?= $training->message ?>
		</div>
		
		<div style="clear:left"></div>
		<div class="line" style="width:100%;float:right"><!--a class="button">สมัครคลิกที่นี่</a--></div>

<?php include Kohana::find_file('views', 'shared/footer') ?>
	</div>
</div>