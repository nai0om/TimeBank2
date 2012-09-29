<div id="member" class="job">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>งานอาสาของฉัน</li>
		</div>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
            
		</div>
		
		
		<div id="main_right">
			<?
			$isOpen = '';
			$isClose = 'past';
			if($mode == 1)
			{
				//close
				$isOpen = 'past';
				$isClose = '';
			}
		?>
		<div class="title left"></div>
		<div class="title body <?= $isOpen ?>"><?= HTML::anchor('user/myevent/', 'งานอาสาที่สมัครไป') ?></div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body <?= $isClose ?>"><?= HTML::anchor('user/myevent?mode=1', 'งานอาสาที่เคยร่วม') ?></div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= count($records) ?></span></p>
		<!-- div id="selection">ระบุเดือนที่ต้องการดู <select></select></div -->
		<? if (count($records) > 0) :?>
                <table>
                    <tr>
                    	<th style="width:130px;">สถานะ</th>
                        <th>ชื่อภารกิจ</th>
                        <th>ต้องการเวลา (ชม./คน)</th>
                        <th>รับจำนวน</th>
                        <th>รับสมัครภายใน</th>
                        <th>ช่วงวันทำงาน</th>
                        <th>ตัวเลือก</th>
                    </tr>
        <?php foreach ($records as $record):?>
        		<? if($mode != 1) : ?>
                    <tr>
                    	<td style="font-weight:bold; color:#F00; text-align:center">
                        <? if ($statuses[$record->id]['status'] == '2') : ?>
                       	 	<?= HTML::anchor('user/checkhours/'.$record->id, 'ยืนยันการใช้เวลา') ?> 
                        <? elseif( $statuses[$record->id]['status'] == '1' ) : ?>    
                        	ได้รับการตอบรับแล้ว
                        <? elseif( $statuses[$record->id]['status'] == '0' ) : ?>
                        	รอการตอบรับ
                        <? else : ?>
                        	งานนี้ไม่ได้รับการตอบรับ
                        <? endif ?>
                        </td>
                        <td style="text-align:center"><?= $record->name ?></td>
                        <td style="text-align:center"><?= $record->time_cost ?></td>
                        <td style="text-align:center"><?= $record->volunteer_need_count ?>
                      คน</td>
                        <td style="text-align:center"><?=  phphelp::str_to_thai_date($record->signup_end_date) ?></td>
                        <td style="text-align:center"><?=  phphelp::str_to_thai_date($record->volunteer_begin_date) ?>
                          <br />
                          ถึง
                      <?= $record->volunteer_end_date ?></td>
                        <td style="text-align:center">
							<ul class="list-circle">
								<li>
									<a href="<?= url::base(); ?>event/view/<?= $record->id ?>"><img alt="ดูรายละเอียด" title="ดูรายละเอียด" src="<?= url::base(); ?>media/img/icon_info.png"></a>
								</li>
								<li>
									<a  id="popupButton<? echo $record->id?>"><img style="width: 20px; margin-left: 3px; cursor: pointer;" alt="ขอยกเลิก" title="ขอยกเลิก" src="<?= url::base(); ?>media/img/icon_cancel.png"></a>
								</li> 
                                <div id="popupDialog<?= $record->id ?>" title="ยกเลิกงานอาสา <?= $record->name ?>">
                                  <p>
                                     <label for="widgetName">ใส่ข้อความเพื่อฝากถึงองค์กร ก่อนที่จะสามารถกดยกเลิกได้</label>
                                     <input type="textarea" style="width:400px; height:50px" id="message<?= $record->id ?>" />
                                  </p>
                                </div>
                                 <script>
								$('#popupDialog<?= $record->id ?>').dialog({
									 modal: true,
									 autoOpen: false,
									 width : 500,
									 buttons: {
									  'Cancel': function() {
												   $(this).dialog('close');
												},
									  'Accept': function() {
												   var message = $('#message<?= $record->id ?>').val( );
												   if(message == '')
												   {
													   alert('กรุณาใส่ข้อความ')
												   }
												   else
												   {
													   window.location = "<?= url::base()."user/removeevent/".$record->id."?message="?>" + message;
													    $(this).dialog('close');
													}
												   
												  
												   
												}
									}
								});
								
								$('#popupButton<?= $record->id ?>').click( function() {
									
								   $('#popupDialog<?= $record->id ?>').dialog('open');
							
								});
								
								 </script>

							</ul>
						</td>
                    </tr>
                 <? else : ?>
                    <tr>
                    	<td style="font-weight:bold; color:#F00; text-align:center">
                        	ยืนยันการใช้เวลาแล้ว
                        </td>
                        <td style="text-align:center;"><?= $record->name ?></td>
                        <td style="text-align:center;"><?= $record->time_cost ?></td>
                        <td style="text-align:center;"><?= $record->volunteer_need_count ?>
                      คน</td>
                        <td style="text-align:center;">- ปิด -</td>
                   		<td style="text-align:center;">- ปิด -</td>
                        <td style="text-align:center;"><?= HTML::anchor('event/view/'.$record->id, 'เปิดดู') ?></td>
                    </tr>
                 <? endif ?>
            
        <? endforeach ?>
                <tr>
	
			</tr>
		</table>
<? endif ?>
		
		<!--div id="update">
		  <form><a href="#">ยกเลิก</a> <input type="text"><input type="submit" value="บันทึก"><a class="cross"></a></form>
		</div -->
		
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		</div>
	
  </div>
  

 