<?php
$job = isset($gets['job'])? $gets['job'] : '0';
$query = isset($gets['query'])? $gets['query'] : '';
$province = isset($gets['province'])? $gets['province'] : '0';
$type = isset($gets['type'])? $gets['type'] : 'open';
$page = isset($gets['page'])? $gets['page'] : '1';
?>

<div id="tb_browse_searchResult" class="search">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			
          <?php	
		  	
			if($job != 0){
				echo '<li>ดูงานอาสา</li>';
				echo '<li>'.$jobs[$gets['job']].'</li>';
			}
			else{
				echo '<li>ค้นหางานอาสา</li>';
				}
			?>
			
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		
		<?= Form::open('event/search', array ('id' => 'search', 'method' => 'get'));  ?>
        <?= Form::input('query', $query);  ?>
        <?= Form::select('job', $jobs, $job); ?>
        <?= Form::select('province', $provices, $province); ?>
        <?= Form::submit(NULL, 'หางานอาสา', array ('class' => 'mid'));  ?>
        <img src="<?= url::base(); ?>media/img/tb_line_form.png" />
     
        <?= Form::submit('advance', 'ค้นหาแบบละเอียด', array ('class' => 'long'));  ?>
        <?= Form::close(); ?>
		
	
	   <?php if (($job != 0 ) || ($query != '' && $job == 0  && $province != 0) ): ?>
       
            <div id="detail" style="width:100%"><h2><?= ($job == 0 ) ? '': $jobs[$job] ?></h2>
                <?php if ($type == 'closed'): ?>
                    <?= HTML::anchor($link.'type=open', 'งานอาสาที่เปิดรับสมัคร'); ?>
                    <?= HTML::anchor($link.'type=closed', 'งานอาสาที่จบไปแล้ว', array('class' => 'current')); ?>
                <? else: ?>
                    <?= HTML::anchor($link.'type=open', 'งานอาสาที่เปิดรับสมัคร', array('class' => 'current')); ?>
                    <?= HTML::anchor($link.'type=closed', 'งานอาสาที่จบไปแล้ว'); ?>
                <? endif ?>
          
            </div>
		<?php endif ?>
		<div style="clear:both"></div>
        <?php if ($type != 'member') : ?>
			<?php if ($query == '' && $job == 0  && $province == 0) : ?>
                    <h3 class="title" style="float:left;">งานอาสามาใหม่</h3>
             <?php else: ?>
            <p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> 
            <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= $count ?></span></p>
            <?php endif ?>
            <table>
                <tbody><tr>
                    <th>งานอาสา</th>
                    <th>ต้องการจากอาสา</th>
                    <th>จำนวนรับสมัคร</th>
                    <th>เปิดรับสมัคร</th>
                    <th>วัน / เวลาทำงานอาสา</th>
                    <th></th>
                </tr>
                <?php foreach ($events as $event):	?>
                <tr>
                    <td><?= $event->name?></td>
                    <td><?= $event->time_cost ?></td>
                    <td><?= $event->volunteer_need_count ?> คน</td>
            
                    <? if( $type == 'open'): ?>
                        <td>สิ้นสุดวันที่ <?= $event->signup_end_date ?></td>
                        <td><?= $event->volunteer_begin_date ?><br>ถึง <?= $event->volunteer_end_date ?></td>
                        <td><?= HTML::anchor('event/view/'.$event->id, 'สมัคร') ?></td>
                    <? else : ?>
                        <td>- ปิด -</td>
                        <td>- ปิด -</td>
                        <td><?= HTML::anchor('event/view/'.$event->id, 'เปิดดู') ?></td>
                    <? endif ?>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="6">
                        <ul>
                        <?php for($i = 1; $i <= $total_page; $i++){	
                                if( $i == $page)
                                {
                                    echo '<li>Page '.$i.'</li>';
                                }
                                else
                                {
                                    if($type != '')
                                        $link .= 'type='.$type.'&';
                                        
                                        $link .= 'page='.$i.'&';
                                    echo '<li>'.HTML::anchor($link, $i) .'</li>';
                                }
                              }
                        ?>
                        </ul>
                    </td>
                </tr>
            </tbody></table>
		<?php else :?>
        	<ul id="winnerList">
			<li><img src="<?=url::base()?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?=url::base()?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
			<li><img src="<?=url::base()?>media/img/tb_sample_image.png"/>
				<div class="hours">50 ชม.</div>
				<a class="no">120<br>อาสาสมัคร</a>
				<p class="detail">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
			</li>
		</ul>
        <?php endif ?>
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>
