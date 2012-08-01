<div id="org" class="approve">
 <div id="main" role="main">
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="warn">
			<h2>Check hour(s)</h2>
				    <?= Form::open('event/approve/'.$event->id, array ('method' => 'post')); ?>
				<div id="leftSide">
					<p><?= $event->name ?></p>
                    <?
					$all_users = $event->users->count_all();
					$approved =  $event->users->where('status', '=', '1')->count_all();
					$remain = 	$event->volunteer_need_count- $approved; 
					?>
					<p class="blue">จำนวนรับสมัคร <?= $event->volunteer_need_count ?> คน</p>
					<p class="blue">สมัครเข้ามาทั้งหมด <?= $all_users  ?> คน</p>
					<p class="blue">อนุมัติแล้ว <?= $approved ?> คน</p>
					<p class="blue">เหลืออีก <?= $remain ?> คน</p>
				</div>
				<div id="rightSide">
             
				 <?= Form::checkbox('all'); ?> Select All
                 <?= Form::submit('submit', 'approve') ?>
                 <?= Form::submit('submit', 'delete'); ?>
						<div id="details">
                       <? foreach($event->users->order_by('timestamp','desc')->find_all() as $user) : ?>
							<div class="person">
								<?= Form::checkbox('user'.$user->id); ?>
								<?php if ($user->profile_image == '') : ?>
                                    <img src="<?= url::base(); ?>media/img/org_01.png">
                                <?php else :?>
                                    <img src="<?= url::base().'media/upload/volunteers/'.$user->profile_image; ?>" style="max-width:62px;max-height:70px;" />
                                <?php endif?>
								<div class="user"><?= HTML::anchor('user/view/'.$user->id, $user->displayname )  ?></div>
								<div class="name"><?= $user->first_name ?> <?= $user->last_name ?></div>
                          
                                <? if( $users[$user->id]['status'] == '1' ) : ?>                                
									<div class="approve yes"></div>
                                <? endif ?>
							</div>
                       <? endforeach ?>
						</div>
                 <?= Form::close(); ?>
				</div>
				</form>
		</div>
	
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>