		<div style="float:left; width:100%">
             <ul id="album" style=" width:100%">
			 	<? foreach ($images as $image) :?>
                    <li>
                     <? if ( $isOwner) : ?>
                    	<div class="close" onclick="window.location = '<?= url::base().'event/removeimage/'.$event->id.'?image='.$image->image; ?>';" >ลบรูปนี้</div>
                      	<? if($image->highlight == 1) : ?>
                         	<div style="width:100px" class="close" onclick="window.location = '<?= url::base().'event/removehighlightimage/'.$event->id.'?id='.$image->id; ?>';" >ลบรูปเด่น</div>
                        <? else: ?>
                        	<div style="width:100px" class="close" onclick="window.location = '<?= url::base().'event/addhighlightimage/'.$event->id.'?id='.$image->id; ?>';" >เพิ่มรูปเด่น</div>
        				<? endif ?>
                    <? endif ?>
                        <div class='image'>
                        	<a href="<?= url::base().'event/image/'.$event->id.'?index='.$event->image  ?>" target="_blank" style="display: table-cell; vertical-align: middle">
                        		<img  style=" max-width:247px; max-height:203px;"src="<?= url::base().'media/upload/events/'.$image->image; ?>">
                            </a>
                        </div>
                        <div class="caption"><?= $image->description; ?></div>
                    </li>
                <? endforeach ?>
			<? if ( ($isOwner) && ($event->images->find_all()->count() <= 50)) : ?>
			  <li class="add">
                    
				 <?= Form::open('event/addimage/'.$event->id, array ('id' => 'search', 'enctype' => 'multipart/form-data'));  ?><br />
                <div class='image' style="height:180px;">
                    <img  style=" max-width:257px; max-height:203px;" src="<?= url::base().'media/img/tb_photos_add.png'; ?>" />    
                </div>
                <div class="caption" style="height:70px;">
               <label style="color:#F00; width:300px;float:left; outline:20px none" >- ขนาดภาพไม่เกิน 4Mb <br />- ใส่ภาพได้สูงสุด 50 รูป<br />- ประเภทไฟล์ jpg, jpeg, png หรือ gif</label>
                 <?= Form::file('image') ?><br />
                 <?= Form::input('text', 'เขียนคำบรรยายที่นี่'); ?> 
                 <?= Form::submit(NULL, 'เพิ่มรูป'); ?>
                 <?= Form::close(); ?>
                </div>
            
            </li> 
				<? endif ?>
            </ul>
		     <ul id="pagination" style="float:right">
            <? for ($i = 1; $i <= $images_pages ; $i++) : ?>
            	<? if ($i == $page) : ?>
                	<li><?= $i?>  </li>	
                <? else : ?>
           			 <li><?= HTML::anchor('event/view/'.$event->id.'?mode=3&page='.$i, $i); ?>  </li>	
                <? endif ?>
            <? endfor ?>
            </ul >   
		</div>
          
			<img src="<?= url::base(); ?>media/img/tb_line_form.png">
		<h2>หลังจากที่ไปร่วมกิจกรรมกันมาแล้ว ขอขวนอาสามาแบ่งปันประสบการณ์ การเรียนรู้ ความประทับใจ กันนะครับ</h2>
        <h4 class="title">แบ่งปันประสบการณ์</h4>
        
        <?= Form::open('event/addcomment/'.$event->id, array ('id' => 'post_comment', 'method' => 'post')); ?>
        <?= Form::textarea('comment'); ?>
        <?= Form::submit(NULL, 'ส่ง', array( 'style' => 'float:right; margin: 10px;')); ?>
        <? foreach( $event->comments->order_by('timestamp','desc')->find_all() as $comment) : ?>
            <div id= "<?= $comment->id?>">
                <? if ($comment->user->id != 0 ) : ?>
                        <a><?= $comment->user->displayname ?></a>
                        <? if ($comment->user->profile_image == '') : ?>
                     		<img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;">
                     	<? else : ?>
                        	<img src="<?= url::base().'media/upload/volunteers/'.$comment->user->profile_image; ?>" style="float:left; width:51px; ">
                    	<? endif ?>
                <? elseif ($comment->organization->id != 0)  : ?>
                        <?= HTML::anchor('organization/view/'.$comment->organization->id,  $comment->organization->name); ?> :
                        <? if($comment->organization->logo == '') : ?>
	                        <img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;">
                        <? else :?>
                        	<img src="<?= url::base().'media/upload/organizations/'.$comment->organization->logo; ?>" style="float:left; width:51px; ">
                        <? endif ?>
                <? endif ?>
            <?= $comment->comment ?>
            <a style="font-size:11px; color:#666; float:right"><?= phphelp::timestamp_to_thai( $comment->timestamp) ?></a>
            </div>
        <? endforeach ?>
        <?= Form::close(); ?>