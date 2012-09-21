<?
$memebers = $event->users->find_all();
$member_count = count($member_event);
$provinces = Kohana::$config->load('timebank')->get('provices');
?>

<?php if ($mode == 2): ?>
<div id="tb_browse_detail" class="members">
<? elseif ($mode == 3): ?>    
<div id="tb_browse_detail" class="photos">
<? else: ?>
<div id="tb_browse_detail">
<? endif ?>
  <div id="main" role="main" >
  <?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ใช้บริการธนาคารจิตอาสา</li>
			<li>ดูภารกิจจิตอาสา</li>
			<li><?= $event->name ?></li>
		</div>
		

		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
					i
		<div id="detail">
			<?php if ($mode == 2 ): ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=1', 'รายละเอียดงาน'); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=2', 'ประกาศรายชื่ออาสา', array('class' => 'current')); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=3', 'ภาพกิจกรรม'); ?>
            <? elseif ($mode == 3): ?>    
                <?= HTML::anchor('event/view/'.$event->id.'?mode=1', 'รายละเอียดงาน'); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=2', 'ประกาศรายชื่ออาสา'); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=3', 'ภาพกิจกรรม', array('class' => 'current')); ?>
            <? else: ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=1', 'รายละเอียดงาน', array('class' => 'current')); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=2', 'ประกาศรายชื่ออาสา'); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=3', 'ภาพกิจกรรม'); ?>
            <? endif ?>
                
			
            <div class="a2a_kit a2a_default_style">
          	  <a id="share" class="a2a_dd" href="http://www.addtoany.com/share_save">บอกต่อ</a>
            </div>
            <script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
            <!-- Lockerz Share END -->

		</div>
		<div style="clear:both"></div>
		
	<? if ($mode == 2 ): ?>
	 	<?php include Kohana::find_file('views', 'event/forms/volunteers') ?>  
	<? elseif ($mode == 3): ?>
		<?php include Kohana::find_file('views', 'event/forms/images') ?>  
    <? else: ?>
		<?php include Kohana::find_file('views', 'event/forms/view') ?>  
    <? endif  //end normal mode?>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		
  </div>
</div>
<style>
 .a2a_img{
	background-image:none;
}

</style>