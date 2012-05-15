<div id="tb_browse_searchResult">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>ดูงานอาสา</li>
			<li>เด็กและเยาวชน</li>
		</div>
		<ul><li>สมัครสมาชิก</li><li>เข้าสู่ระบบ</li></ul>

		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		
		<form id="search">
			<input type="text" value="ใส่ชื่องานอาสา, ชื่อองค์กร, ชื่อสถานที่"/>
			<select><option>--ประเภทงานอาสา--</option></select>
			<select><option>--จังหวัด--</option></select>
			<input type="submit" class="mid" value="หางานอาสา"/>
			<img src="<?= url::base(); ?>media/img/tb_line_form.png" />
			<input type="submit" class="long" value="ค้นหาแบบละเอียด"/>
		</form>

		<div id="detail"><h2>เด็กและเยาวชน</h2>
			<?php if ($mode == 2): ?>
                <?= HTML::anchor('event/search?mode=1', 'งานอาสาที่เปิดรับสมัคร'); ?>
                <?= HTML::anchor('event/search?mode=2', 'งานอาสาที่จบไปแล้ว', array('class' => 'current')); ?>
                <?= HTML::anchor('event/search?mode=3', 'ประกาศรายชื่ออาสา'); ?>
            <? elseif ($mode == 3): ?>    
                <?= HTML::anchor('event/search?mode=1', 'งานอาสาที่เปิดรับสมัคร'); ?>
                <?= HTML::anchor('event/search?mode=2', 'งานอาสาที่จบไปแล้ว'); ?>
                <?= HTML::anchor('event/search?mode=3', 'ประกาศรายชื่ออาสา', array('class' => 'current')); ?>
            <? else: ?>
                <?= HTML::anchor('event/search?mode=1', 'งานอาสาที่เปิดรับสมัคร', array('class' => 'current')); ?>
                <?= HTML::anchor('event/search?mode=2', 'งานอาสาที่จบไปแล้ว'); ?>
                <?= HTML::anchor('event/search?mode=3', 'ประกาศรายชื่ออาสา'); ?>
            <? endif ?>
            <?= HTML::anchor('event/create', 'สร้างงานอาสาใหม่', array('class' => 'long')); ?>
		</div>

		<div style="clear:both"></div>
		
	<?php if ($mode == 2): ?>
		<h3 class="title" style="float:left;">งานอาสาที่จบไปแล้ว</h3>
		<img src="<?= url::base(); ?>media/img/tb_browse_line.png" style="position:relative;top:20px;"/>
		<table cellpadding=0 cellspacing=0>
			<tr bgcolor="#0099CC">
				<th >งานอาสา</th>
				<th>ต้องการจากอาสา</th>
				<th>จำนวนรับสมัคร</th>
				<th>เปิดรับสมัคร</th>
				<th>วัน/เวลาทำงาน</th>
				<th></th>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr class="pagination">
				<td colspan="6"><ul>
					<li>Page 1</li>
					<li>2</li>
					<li>3</li>
				</ul></td>
			<tr>
		</table>  
	<? elseif ($mode == 3): ?>
		<ul id="winnerList">
			<li><img src="<?= url::base(); ?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?= url::base(); ?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?= url::base(); ?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?= url::base(); ?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?= url::base(); ?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?= url::base(); ?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?= url::base(); ?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?= url::base(); ?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?= url::base(); ?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
		</ul>
		<img src="<?= url::base(); ?>media/img/tb_line_form.png" style="margin-left:38px;float:left;">
		<ul id="page_winnerList">
			<li>Page 1</li>
			<li>2</li>
			<li>3</li>
		</ul>  
    <? else: ?>
		<h3 class="title" style="float:left;">งานอาสามาใหม่</h3>
		<img src="<?= url::base(); ?>media/img/tb_browse_line.png" style="position:relative;top:20px;"/>
		<table cellpadding=0 cellspacing=0>
			<tr bgcolor="#0099CC">
				<th >งานอาสา</th>
				<th>ต้องการจากอาสา</th>
				<th>จำนวนรับสมัคร</th>
				<th>เปิดรับสมัคร</th>
				<th>วัน/เวลาทำงาน</th>
				<th></th>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr class="pagination">
				<td colspan="6"><ul>
					<li>Page 1</li>
					<li>2</li>
					<li>3</li>
				</ul></td>
			<tr>
		</table>    
    <? endif ?>
  </div>
</div>