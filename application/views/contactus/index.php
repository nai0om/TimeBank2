<div id="contact_us">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ติดต่อทีมงานอาสา</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		<div style="clear:both"></div>
		<h2>ติดต่อทีมงานอาสา</h2>
		<center><img src="<?= url::base(); ?>media/img/long_banner.png"></center>
		
		<div id="message">
			<p style="color:#FB8911">Address</p>
			<p>Lorem Ipsum is simply dummy</p> 
			<p>text of the printing and typesetting industry.</p>
			<p>Lorem Ipsum has been the industry's standard</p>
			<p>dummy text ever since the 1500s,</p>
		</div>
		
		<div id="leftSide">
			<h3>Contact us</h3>
			<p>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem </p>
			<?= Form::open('contactus/index'); ?>
				<label>ชื่อ</label>
				<?= Form::input('name', HTML::chars($contactus->name)); ?>
                <div class="error">
                    <font color="red"><?= Arr::get($errors, 'name'); ?></font>
                </div>
				<label>นามสกุล</label>
				<?= Form::input('surname', HTML::chars($contactus->surname)); ?>
                <div class="error">
                    <font color="red"><?= Arr::get($errors, 'surname'); ?></font>
                </div>
				<label>อีเมล์ *</label>
				<?= Form::input('email', HTML::chars($contactus->email)); ?>
                <div class="error">
                    <font color="red"><?= Arr::get($errors, 'email'); ?></font>
                </div>
				<label>มือถือ</label>
				<?= Form::input('phoneno', HTML::chars($contactus->phoneno)); ?>
                <div class="error">
                    <font color="red"><?= Arr::get($errors, 'phoneno'); ?></font>
                </div>
				<label>หัวข้อ *</label>
				<?= Form::input('topic', HTML::chars($contactus->topic)); ?>
                <div class="error">
                    <font color="red"><?= Arr::get($errors, 'topic'); ?></font>
                </div>
				<label>ข้อความของคุณ *</label>
				<?= Form::textarea('message', HTML::chars($contactus->message), array('rows' => 3)); ?>     
                <div class="error">
                    <font color="red"><?= Arr::get($errors, 'message'); ?></font>
                </div>
				<!--label>พิมพ์ข้อความที่มองเห็น *</label>
				<img src="<?= url::base(); ?>media/img/capcha.jpg">
				<input type="text"-->
				<input type="submit" value="Submit">
			<?= Form::close(); ?>
		</div>
		
		<div id="rightSide">
			<p><?= HTML::anchor('contactus/map', '<img src="'.url::base().'media/img/map_01.png">'); ?></p>
			<p><img src="<?= url::base(); ?>media/img/map_02.png"></p>
		</div>

  </div>
</div>