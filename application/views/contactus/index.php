<div id="contact_us">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ติดต่อธนาคารจิตอาสา</li>
		</div>
		<div style="clear:both"></div>
		<h2>ติดต่อธนาคารจิตอาสา</h2>
		<center><img src="<?= url::base(); ?>media/img/long_banner.png"></center>
		
		<div id="message">
			<p style="color:#FB8911">ธนาคารจิตอาสา</p>
			<p>10 ซ.3 ถ.พหลโยธิน</p>
			<p>สามเสนใน พญาไท</p>
			<p>กรุงเทพ 10400</p>
			
		</div>
		
		<div id="leftSide">
			<h3>ฝากข้อมูลการติดต่อได้ที่นี่</h3>
			<p>ธนาคารจิตอาสาจะติดต่อกลับโดยเร็วที่สุดครับ</p>
			<?= Form::open('contactus/index'); ?>
				<label>ชื่อ*</label>
				<?= Form::input('name', HTML::chars($contactus->name)); ?>
                <div class="error">
                    <font color="red"><?= __(Arr::get($errors, 'name')); ?></font>
                </div>
				<label>นามสกุล*</label>
				<?= Form::input('surname', HTML::chars($contactus->surname)); ?>
                <div class="error">
                    <font color="red"><?= __(Arr::get($errors, 'surname')); ?></font>
                </div>
				<label>อีเมล์ *</label>
				<?= Form::input('email', HTML::chars($contactus->email)); ?>
                <div class="error">
                    <font color="red"><?= __(Arr::get($errors, 'email')); ?></font>
                </div>
				<label>มือถือ</label>
				<?= Form::input('phoneno', HTML::chars($contactus->phoneno)); ?>
                <div class="error">
                    <font color="red"><?= __(Arr::get($errors, 'phoneno')); ?></font>
                </div>
				<label>หัวข้อ *</label>
				<?= Form::input('topic', HTML::chars($contactus->topic)); ?>
                <div class="error">
                    <font color="red"><?= __(Arr::get($errors, 'topic')); ?></font>
                </div>
				<label>ข้อความของคุณ *</label>
				<?= Form::textarea('message', HTML::chars($contactus->message), array('rows' => 3)); ?>     
                <div class="error">
                    <font color="red"><?= __(Arr::get($errors, 'message')); ?></font>
                </div>
				<!--label>พิมพ์ข้อความที่มองเห็น *</label>
				<img src="<?= url::base(); ?>media/img/capcha.jpg">
				<input type="text"-->
				<input type="submit" value="ส่งข้อความ">
			<?= Form::close(); ?>
		</div>
		
		<div id="rightSide">
			<p><?= HTML::anchor('contactus/map', '<img src="'.url::base().'media/img/map_small.jpg">'); ?></p>
			<p><iframe width="363" height="246" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.th/maps/ms?f=q&amp;source=s_q&amp;hl=th&amp;geocode=&amp;aq=&amp;ie=UTF8&amp;oe=UTF8&amp;msa=0&amp;msid=210435605923926270256.0004b3c548ec4058d0c5a&amp;t=m&amp;ll=13.774754,100.541543&amp;spn=0.002563,0.003884&amp;z=17&amp;output=embed"></iframe><br /><small>ดู <a href="https://maps.google.co.th/maps/ms?f=q&amp;source=embed&amp;hl=th&amp;geocode=&amp;aq=&amp;ie=UTF8&amp;oe=UTF8&amp;msa=0&amp;msid=210435605923926270256.0004b3c548ec4058d0c5a&amp;t=m&amp;ll=13.774754,100.541543&amp;spn=0.002563,0.003884&amp;z=17" style="color:#0000FF;text-align:left">ธนาคารจิตอาสา (JitArsa Bank)</a> ในแผนที่ขนาดใหญ่กว่า</small></p>
		</div>

<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>