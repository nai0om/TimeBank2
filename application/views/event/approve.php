 <?
	$all_users = $event->users->count_all();
	$approved =  $event->users->where('status', '=', '1')->count_all();
	$remain = 	$event->volunteer_need_count- $approved; 
?>
<div id="org" class="approve">
  <div id="home">
 <div id="main" role="main">

<div id="approve_title">ตอบรับอาสา</div>
<div id="approve_info">ชื่องานอาสา <span class="info_name"> <?= HTML::anchor('event/view/'.$event->id, $event->name); ?></span>
	<ul>
     <li>จำนวนรับสมัคร <span class="count"><?= $event->volunteer_need_count ?> คน</span></li>
            <li>สมัครเข้ามาทั้งหมด <span class="count"><?=  $all_users  ?> คน</span></li>
            <li>ตอบรับแล้ว <span class="count"><?= $approved ?> คน</span></li>
            <li>เหลืออีก <span class="count"><?= $remain ?> คน</span></li>
        </ul>
</div>
<div style="clear:both"></div>
	
	<?= HTML::anchor('event/export/'.$event->id, '<img src="'.url::base().'media/img/btn_download_excel_all.png" class="imgdownload">')  ?><br />
    <?= HTML::anchor('event/export/'.$event->id.'?type=1', '<img src="'.url::base().'media/img/btn_download_excel_accept.png" class="imgdownload">')  ?> 
    
<div id="approve_list">
<img src="<?= url::base() ?>media/img/tb_line.png">
<?= Form::open('event/approve/'.$event->id, array ('method' => 'post')); ?>
    <table class="totalaccept">
        <tr>
        <td colspan="7">
       <?= Form::checkbox('', '', false, array('id' => 'checkall', 'onChange' => 'check_all()')) ?><span style="font-size: 16px; color: #D97103">ทั้งหมด </span>
       <span style="font-size: 16px; color: #09C"><?=  $all_users  ?></span>
        </td>
        <td><?= Form::submit('submit', 'ตอบรับ', array('class' => 'accept','onclick' =>  'var answer = confirm ("'.__('Approve volunteer warning.').'"); if (!answer)  return false;')) ?></td>
    </tr>
    </table>
    <table>
                <tbody>
					<tr>
                        <th></th>
                        <th>รูป Profile</th>
                         <th>diplay name</th>
                        <th>ชื่อจริง / username</th>
                        <th>ชื่อเล่น</th>
                        <th>อายุ</th>
                        <th>เพศ</th>
                        <th>Email</th>
						<th>เบอร์โทร</th>
                </tr>
              <? foreach($event->users->order_by('id','desc')->find_all() as $user) : ?>
                <tr>
                    <td>
						<? if( $users[$user->id]['status'] != '1' ) : ?>     
                           <?= Form::checkbox('user'.$user->id, NULL, false, array('id' => 'user')) ?>
                        <? else :?>
                        	<div class="approve yes"></div>
                        <? endif ?>
					</td>
                    <td>
						<?php if ($user->profile_image == '') : ?>
                        <img src="<?= url::base(); ?>media/img/org_01.png">
                        <?php else :?>
                        <img src="<?= url::base().'media/upload/volunteers/'.$user->profile_image; ?>" style="max-width:62px;max-height:70px;" />
                        <?php endif?>
                    </td>
                    <td><?= HTML::anchor('user/view/'.$user->id, $user->displayname )  ?></td>
                    <td ><?= $user->first_name ?> <?= $user->last_name ?></td>
                    <td><?= $user->nickname ?></td>
                    <td><?= phphelp::getYearAge($user->birthday) ?></td>
                    <td>
						<? 
					 		$sex = Kohana::$config->load('timebank')->get('sexs');
							echo $sex[$user->sex] 
						?>
                    </td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->phone ?></td>
                </tr>
                 <? endforeach ?>
        				
						<!--tr>
						<td colspan="8">
                        <ul class="tablepage">
                        <li>หน้า 1</li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li></ul>
						</td>
						</tr -->
            </tbody></table>
  <?= Form::close(); ?>
    </div>
	
<?php include Kohana::find_file('views', 'shared/footer') ?>
 </div>
<script>
function check_all(){
	if( $('#checkall').is(':checked') )
	{	
		$("input:checkbox[id=user]").each(function()
		{
			$(this).prop("checked", true)
		});	
	}
	else
	{
		$("input:checkbox[id=event]").each(function()
		{
			$(this).prop("checked", false)
		});
	}
}
</script>