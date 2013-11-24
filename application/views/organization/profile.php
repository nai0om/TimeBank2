<div id="org" class="profile">
  <div id="main" role="main">
		<div id="sitemap">
			<li><?= HTML::anchor('welcome/home', 'หน้าแรก') ?></li>
            <li><?= HTML::anchor('organization/', 'องค์กร') ?></li>
            <li><?= HTML::anchor('organization/profile', 'แก้ไขข้อมูลองค์กร') ?></li>
		</div>

		<div style="clear:both"></div>
		<div id="menu_left">
			<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li class="current"><?= HTML::anchor('organization/profile', 'แก้ไขข้อมูลองค์กร'); ?></li>
				<li><?= HTML::anchor('organization/event', 'งานอาสา'); ?></li>
				<li><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		</div>
		
		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">รูปโลโก้และภาพอื่นๆ</div>
			<div class="title right"></div>
		
			<div style="clear:both"></div>
			<?= Form::open('organization/profile/', array('enctype' => 'multipart/form-data')); ?>	
        
            
			<div id="photo">
            <? if ( $organization->logo == '' or  $organization->logo == NULL) : ?>
				<img src="<?= url::base() ?>media/img/org_profile_logo.png" style="float:left">
            <? else :?>
            	<img src="<?= url::base().'media/upload/organizations/'.$organization->logo; ?>" style="float:left;width:265px;height:253px;border:3px solid #FFF;margin:2px">
            <? endif ?>
            <?= Form::file('logo' , array('style' => 'float:left;width:300px;')) ?>
            <label style="color:#F00; width:300px;float:left; outline:20px none" >- ขนาดไม่เกิน 4Mb <br />- ขนาดภาพแนะนำ กว้าง 270 x สูง 260 พิกเซล<br />- ประเภทไฟล์ gif, jpg, png หรือ jpeg</label>
            <? foreach ($organization->events->limit(5)->find_all() as $event) : ?>
            	<? if($event->image != '' ) : ?>
					<img src="<?= url::base().'media/upload/events/'.$event->image  ?>" style="width:107px;height:85px;margin:2px; border:3px solid #FFF" >
                <? endif ?>
           <? endforeach ?>
			</div>
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">แก้ไขข้อมูลองค์กร</div>
			<div class="title right"></div>
			<div style="clear:both"></div>

		
				<p><label>ชื่อองค์กร</label></p>
				<p>
					<?= Form::input('name', HTML::chars($organization->name)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'name'); ?>
                    </div>
                </p>
				<p><label>วัตถุประสงค์ / เป้าหมายองค์กร</label></p>
				<p>
					<?= Form::textarea('objective', $organization->objective, array('class'=>'long')); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'objective'); ?>
                    </div>
                </p>
				<p><label>ลักษณะกิจกรรมขององค์กร</label></p>
				<p>
					<?= Form::textarea('activity', $organization->activity, array('class'=>'long')); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'activity'); ?>
                    </div>
                </p>
				<div class="one">
					<p><label>ที่อยู่</label></p>
					<p>
						<?= Form::input('address', HTML::chars($organization->address)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'address'); ?>
                        </div>
                    </p>
					<p><label>จังหวัด</label></p>
					<p>
						<?= Form::input('province', HTML::chars($organization->province)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'province'); ?>
                        </div>
                    </p>
					<p><label>โทร.สำนักงาน</label></p>
					<p>
						<?= Form::input('homephone', HTML::chars($organization->homephone)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'homephone'); ?>
                        </div>
                    </p>
                    
                    <p><label>มือถือ</label></p>
					<p>
						<?= Form::input('fax', HTML::chars($organization->mobilephone)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'mobilephone'); ?>
                        </div>
                    </p>
                    
                   <p><label>โทรสาร</label></p>
					<p>
						<?= Form::input('fax', HTML::chars($organization->fax)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'fax'); ?>
                        </div>
                    </p>
				</div>
				<div class="one">
					<p><label>เขต</label></p>
					<p>
						<?= Form::input('district', HTML::chars($organization->district)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'district'); ?>
                        </div>
                    </p>
					<p><label>รหัสไปรษณีย์</label></p>
					<p>
						<?= Form::input('postcode', HTML::chars($organization->postcode)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'postcode'); ?>
                        </div>
                    </p>
			
					<p><label>ติดต่อคุณ</label></p>
					<p>
						<?= Form::input('contactperson', HTML::chars($organization->contactperson)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'contactperson'); ?>
                        </div>
                    </p>
				</div>
				<p><label>website URL</label></p>
                <p>
                    <?= Form::input('website', HTML::chars($organization->website)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'website'); ?>
                    </div>
                </p>
				<p><label>Facebook (ใส่ Url เช่น www.facebook.com/jitarsabank)</label></p>
                <p>
                    <?= Form::input('facebook', HTML::chars($organization->facebook)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'facebook'); ?>
                    </div>
                </p>
				<p><label>Twitter (ใส่ Account name เช่น @JitArsaBank)</label></p>
                <p>
                    <?= Form::input('twitter', '@'.HTML::chars($organization->twitter)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'twitter'); ?>
                    </div>
                </p>
				<?= Form::submit('edit', 'บันทึกการเปลี่ยนแปลง'); ?>
                <div class="line"></div>
                <?= Form::close(); ?>		
		</div>
	
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>

<!-- TinyMCE -->
<script type="text/javascript" src="<?= url::base(); ?>media/js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        plugins : "emotions,spellchecker,advhr,insertdatetime", 
       
		theme_advanced_resizing_max_width: "400",
        // Theme options - button# indicated the row# only
        theme_advanced_buttons1 : "justifyleft,justifycenter,justifyright,fontselect,fontsizeselect,formatselect",
		theme_advanced_buttons2 : "bold,italic,underline,|,bullist,numlist,|,link,unlink,anchor,image",
		theme_advanced_buttons3 : "cut,copy,paste,|,outdent,indent,|,undo,redo,|,code,preview,|,forecolor,backcolor",        theme_advanced_buttons4: "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
});
</script>
<!-- /TinyMCE -->