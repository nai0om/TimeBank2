<div id="leftSide">
    <fieldset>
        <legend></legend>
        <p><label><strong>ชื่องานอาสา</strong>  ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน</label></p>
        <p>
			<?= Form::input('name', HTML::chars($event->name)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'name'); ?></font>
            </div>
        </p>
        <p><label><strong>ในโครงการ (ถ้ามี)</strong>  ตย.โครงการอ่านสร้างชาติ</label></p>
        <p>
        	<?= Form::input('project_name', HTML::chars($event->project_name)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'project_name'); ?></font>
            </div>
        </p>
        <p><label><strong>โดยองค์กร</strong></label></p>
        <p><input type="text"></p>
        <p><strong>เปิดรับสมัคร</strong></p>
        <p><label>ตั้งแต่วันที่</label></p>
        <p>
			<?= Form::input('signup_begin_date', HTML::chars($event->signup_begin_date), array('class' => 'datepicker')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'signup_begin_date'); ?></font>
            </div>
		</p>
        <p><label>ถึงวันที่</label></p>
        <p>
			<?= Form::input('signup_end_date', HTML::chars($event->signup_end_date), array('class' => 'datepicker')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'signup_end_date'); ?></font>
            </div>        
        </p>
        <p><label>ตั้งแต่เวลา</label>
        <select><option></option></select>
        <label>ถึง</label>
        <select><option></option></select></p>
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <p><legend><strong>วันทำอาสา</strong></legend></p>
        <p><label>ตั้งแต่วันที่</label></p>
        <p>
			<?= Form::input('volunteer_begin_date', HTML::chars($event->volunteer_begin_date), array('class' => 'datepicker')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'volunteer_begin_date'); ?></font>
            </div>           
        </p>
        <p><label>ถึงวันที่</label></p>
        <p>
			<?= Form::input('volunteer_end_date', HTML::chars($event->volunteer_end_date), array('class' => 'datepicker')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'volunteer_end_date'); ?></font>
            </div>           
        </p>
        <p><label>ตั้งแต่เวลา</label>
        <select><option></option></select>
        <label>ถึง</label>
        <select><option></option></select></p>
        <p><input type="radio" name="day" >ทุกวัน (จันทร์ - อาทิตย์)</p>
        <p><input type="radio" name="day" checked>ระบุวัน (เลือกได้มากกว่า 1)</p>
        <p style="margin:3px 0 3px 78px"><input type="checkbox"><label class="day">จันทร์</label><input type="checkbox"><label class="day">อังคาร</label><input type="checkbox"><label class="day">พุธ</label></p>
        <p style="margin:3px 0 3px 78px"><input type="checkbox"><label class="day">พฤหัสบดี</label><input type="checkbox"><label class="day">ศุกร์</label><input type="checkbox"><label class="day">เสาร์</label></p>
        <p style="margin:3px 0 3px 78px"><input type="checkbox"><label class="day">อาทิตย์</label></p>
        <p>รวม <input type="text" style="width:50px;margin:0;display:inline;"> ชม.(อัตโนมัติ)</p>
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <legend></legend>
        <p><label>สถานที่</label>
			<?= Form::input('location_name', HTML::chars($event->location_name)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'location_name'); ?></font>
            </div>        
        </p>
        <p><label>จังหวัด</label>
        	<?php
				$provices = Kohana::$config->load('timebank')->get('provices'); 
				echo Form::select('location_province', $provices, $event->location_province, array ('class' => 'full'));
			?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'location_province'); ?></font>
            </div>           
        </p>
        <p><label>เขต</label>
			<?= Form::input('location_district', HTML::chars($event->location_district)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'location_district'); ?></font>
            </div>
        </p>
        <p><label>รหัสไปรษณีย์</label>
			<?= Form::input('location_postcode', HTML::chars($event->location_postcode)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'location_postcode'); ?></font>
            </div>
        </p>
        <p><label>จำนวนอาสาสมัครที่ต้องการ </label>
        	<?= Form::input('volunteer_need_count', HTML::chars($event->volunteer_need_count)
							, array('style' =>'width:50px;margin:10px 0 0;display:inline;')); ?> คน
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'volunteer_need_count'); ?></font>
            </div>
        </p>
        <p><label>รายละเอียดของงานอาสา</label></p>
        <p>
			<?= Form::textarea('detail', HTML::chars($event->detail), array('rows' => 3)); ?>      
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'detail'); ?></font>
            </div>  
        </p>
        <p><label>ลักษณะการเดินทาง</label></p>
        <p>
        	<?= Form::textarea('travel_detail', HTML::chars($event->travel_detail), array('rows' => 3)); ?>    
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'travel_detail'); ?></font>
            </div>  
        </p>
        <p><label>ติดต่อสอบถามเพิ่มเติม</label></p>
        <p>
        	<?= Form::textarea('inquiry_detail', HTML::chars($event->inquiry_detail), array('rows' => 3)); ?>    
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'inquiry_detail'); ?></font>
            </div>  
        </p>
    </fieldset>	
</div>
<div id="rightSide">
    <fieldset>
        <legend></legend>
        <p><label><strong>มีค่าใช้จ่ายหรือไม่?</strong></label></p>
        <p><?= Form::radio('is_need_expense', 0, !$event->is_need_expense); ?>ไม่มี</p>
        <p><?= Form::radio('is_need_expense', 1, $event->is_need_expense == 1 ? true : false); ?>มี (โปรดระบุรายละเอียด)</p>
        <p>
			<?= Form::textarea('expense_detail', HTML::chars($event->expense_detail), array('rows' => 3)); ?>            
        </p>
        <p><label><strong>ทักษะของอาสาสมัครที่ต้องการ</strong></label></p>
        <ol>
            <li><p>ความสามารถพิเศษ</p>
                <p><label>ทักษะทั่วไป (เลือกได้มากกว่า 1)</label></p>
                <p><input type="checkbox"> การขับขี่พาหนะ (จักรยานยนต์/รถยนต์)</p>
                <p><input type="checkbox"> ว่ายน้ำ</p>
                <p><label>การใช้ภาษา (สื่อสารได้/อ่านเขียนได้/แปลได้) (เลือกได้มากกว่า 1)</label></p>
                <p><input type="checkbox"> <label class="day">อังกฤษ</label>
                <input type="checkbox"> <label class="day">จีน</label>
                <input type="checkbox"> <label class="day">เยอรมัน</label></p>
                <p><input type="checkbox"> <label class="day">ญี่ปุ่น</label>
                <input type="checkbox"> <label>อื่นๆ (ให้ระบุ) </label><input type="text" style="width:50px;margin:0;display:inline;"></p>
            </li>
            <li><p>ทักษะวิชาชีพ (เลือกได้มากกว่า 1)</p>
                <p><label>งานช่างเทคนิค</label></p>
                <p><input type="checkbox"> <label class="job">ช่างอิเล็กทรอนิคส์</label>
                <input type="checkbox"> <label class="job">ช่างโลหะ</label></p>
                <p><input type="checkbox"> <label class="job">ช่างไฟฟ้า</label>
                <input type="checkbox"> <label class="job">ช่างประปา</label></p>
                <p><input type="checkbox"> <label class="job">ช่างไม้</label>
                <input type="checkbox"> <label class="job">ช่างสี</label></p>
                <p><input type="checkbox"> <label class="job">ช่างปูน</label></p>
            </li>
        </ol>
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <p><legend><strong>Tag ความสนใจ  (เลือกได้มากกว่า 1)</strong></legend></p>
        
			<?php  
				$jobs = Kohana::$config->load('timebank')->get('jobs'); 
				foreach ($jobs as $job):
					$checked = FALSE;
					if($event->tags != '') {
						$pos = strpos($event->tags, $job);
						if (  $pos > 0){
							$checked = TRUE;
						}
					}
					echo '<p>'.Form::checkbox($job, $job, $checked).''.$job.'</p>';
				endforeach;
            ?> 
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <legend>รูปภาพงานอาสา</legend>
        <?php if ($event->pic_1 != ''): ?>
        	<img src="<?= url::base().'media/upload/events/'.$event->pic_1; ?>" />
        <? endif ?>
		<?= Form::file('pic_1') ?>
        <div class="error">
            <font color="red"><?= Arr::get($errors, 'pic_1'); ?></font>
        </div>
    </fieldset>
<script>
	$(function() {
		$( ".datepicker" ).datepicker({
			dateFormat: 'yy-mm-dd'
		});	
		
		
	});
 
</script>