<div id="help">
<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>ช่วยเหลือ</li>
		</div>

		<div id="icon_set">
            <?= HTML::anchor('welcome/donation', '<img src="'.url::base().'media/img/icon_donation.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('help', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>

		<div style="clear:both"></div>
		<h2>ช่วยเหลือ</h2>
		<form>
			<input type="text">
			<img src="<?= url::base(); ?>media/img/icon_google.png" style="position:relative;top:-2px;"/>
			<input type="submit" value="google search" id="google">
			<div style="clear:both"></div>
			<input type="radio" name="type" ><label>Web</label>
			<input type="radio" name="type" ><label>Jitarsabank.org website</label>
		</form>

		<div style="clear:both"></div>
        <div id="leftSide">
			<? foreach($helps_left as $help) : ?>
                <div class="title" id="<?= $help->id?>"><?= $help->topic ?></div>
                <div style="float:left; width:100%">
                <?= $help->message ?>
                </div>
            <? endforeach ?>       
         </div>     
		<div id="rightSide">
			<? foreach($helps_right as $help) : ?>
                <div class="title"  id="<?= $help->id?>"><?= $help->topic ?></div>
                <div style="float:left; width:100%">
                <?= $help->message ?>
                </div>
            <? endforeach ?>    
		</div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>