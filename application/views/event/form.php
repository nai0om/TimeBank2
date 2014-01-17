<?
//build array of times.
$times = array();
$time = strtotime("00:00");
$times["00:00:00"] = date("H:i",$time);
for($i = 1;$i < 48;$i++) {
	$time = strtotime("+ 30 minutes",$time);
	$key = date("H:i",$time);
	$times[$key.':00'] = date("H:i",$time);
}
$times['23:59:59'] = '23:59';
?>
<div id="leftSide">
    <fieldset>
        <legend></legend>
        <p><label><strong>ชื่องานอาสา *</strong>  ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน</label></p>
        <p>
			<?= Form::input('name', HTML::chars($event->name)); ?>
            <div class="error">
                <font color="red"><?= __(Arr::get($errors, 'name')); ?></font>
            </div>
        </p>
        <p><label><strong>ในโครงการ (ถ้ามี)</strong>  ตย.โครงการอ่านสร้างชาติ</label></p>
        <p>
        	<?= Form::input('project_name', HTML::chars($event->project_name)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'project_name'); ?></font>
            </div>
        </p>

        <p><strong>เปิดรับสมัคร</strong></p>

        <p><label>ถึงวันที่ *</label></p>
        <p>
			<?= Form::input('signup_end_date', $event->signup_end_date == '' ? '' : date("d-m-Y", phphelp::DC_to_BE($event->signup_end_date)), array('class' => 'datepicker', 'id' => 'signup_end_date')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'signup_end_date'); ?></font>
            </div>
        </p>
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <p><legend><strong>ช่วงวันทำอาสา</strong></legend></p>
        <p><label>ตั้งแต่วันที่ *</label></p>
        <p>
			<?= Form::input('volunteer_begin_date', $event->volunteer_begin_date == '' ? '' : date("d-m-Y", phphelp::DC_to_BE($event->volunteer_begin_date)), array('class' => 'datepicker', 'id' => 'volunteer_begin_date', 'onChange' => 'difDateTIme()')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'volunteer_begin_date'); ?></font>
            </div>
        </p>
		<p><label>ตั้งแต่เวลา *</label>
        	<?= Form::select('volunteer_begin_time', $times, $event->volunteer_begin_time, array('id' => 'volunteer_begin_time', 'onChange' => 'difDateTIme()')); ?>
        	<label>ถึง</label>
        	<?= Form::select('volunteer_end_time', $times, ($event->volunteer_end_time == '')? '23:59:59': $event->volunteer_end_time, array('id' => 'volunteer_end_time', 'onChange' => 'difDateTIme()')); ?>
        </p>
        <p><label>ถึงวันที่ *</label>
        </p>
        <p>
			<?= Form::input('volunteer_end_date', $event->volunteer_end_date == '' ? '' : date("d-m-Y", phphelp::DC_to_BE($event->volunteer_end_date)), array('class' => 'datepicker', 'id' => 'volunteer_end_date', 'onChange' => 'difDateTIme()')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'volunteer_end_date'); ?></font>
            </div>
        </p>
        <p><?= Form::radio('day', 'every_day',($event->days == '')? true : false, array('id' => 'every_day', 'onChange' => 'everyDayChecked()')); ?>ทุกวัน (ไป-กลับ)</p>
        <p><?= Form::radio('day', 'day', ($event->days != '')? true : false, array('id' => 'day')); ?>ระบุวัน (ไป-กลับ) (เลือกได้มากกว่า1)</p>

        <p style="margin:3px 0 3px 78px; width:250px;" >
        	<?php
				$days = Kohana::$config->load('timebank')->get('days');
				for($i = 0 ; $i < sizeof($days) ; $i++){
					$checked = FALSE;
					if($event->days != '') {
						$pos = strpos($event->days, $days[$i]);
						if (  $pos >= 0 && $pos !== false){
							$checked = TRUE;
						}
					}
					echo Form::checkbox($days[$i], $days[$i], $checked, array('id' => 'day'.$i, 'onChange' => 'eachDayChecked()')).''. Form::label($days[$i], $days[$i], array('class'=>'day'));
				}
            ?>
        </p>
         <p><?= Form::radio('day', 'night_live',($event->days == 'ค้างคืน')? true : false, array('id' => 'night_live', 'onChange' => 'everyDayChecked()')); ?>ค้างคืน</p>
        <p>รวม (อัตโนมัติ) <input name='time_cost' id='time_cost'  value= "<?= $event->time_cost ?>" type="text" style="width:50px;margin:0;display:inline;"> ชม.(สามารถแก้ไขได้) </p>
         <div class="error">
                <font color="red"><?= Arr::get($errors, 'time_cost'); ?></font>
            </div>
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <legend></legend>
        <p><label>สถานที่ *</label>
			<?= Form::input('location_name', HTML::chars($event->location_name)); ?>
            <div class="error">
                <font color="red"><?= __(Arr::get($errors, 'location_name')); ?></font>
            </div>
        </p>
        <p><label>จังหวัด *</label>
        	<?php
				$provices = Kohana::$config->load('timebank')->get('provices');
				echo Form::select('location_province', $provices, $event->location_province, array ('class' => 'full'));
			?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'location_province'); ?></font>
            </div>
        </p>
        <p><label>เขต / อำเภอ *</label>
			<?= Form::input('location_district', HTML::chars($event->location_district)); ?>
            <div class="error">
                <font color="red"><?= __(Arr::get($errors, 'location_district')); ?></font>
            </div>
        </p>
        <p><label>รหัสไปรษณีย์ *</label>
			<?= Form::input('location_postcode', HTML::chars($event->location_postcode)); ?>
            <div class="error">
                <font color="red"><?= __(Arr::get($errors, 'location_postcode')); ?></font>
            </div>
        </p>
        <p><label>เปิดรับอาสาจำนวน *</label>
        	<?= Form::input('volunteer_need_count', HTML::chars($event->volunteer_need_count)
							, array('style' =>'width:50px;margin:10px 0 0;display:inline;')); ?> คน
            <div class="error">
                <font color="red"><?= __(Arr::get($errors, 'volunteer_need_count')); ?></font>
            </div>
        </p>
        <p><label>รายละเอียดของงานอาสา *</label></p>
        <p>
			<?= Form::textarea('detail', $event->detail, array('rows' => 3 )); ?>
            <div class="error">
                <font color="red"><?= __(Arr::get($errors, 'detail')); ?></font>
            </div>
        </p>
        <p><label>รายละเอียดการเดินทาง *</label></p>
        <p>
        	<?= Form::textarea('travel_detail', $event->travel_detail, array('rows' => 3)); ?>
            <div class="error">
                <font color="red"><?= __(Arr::get($errors, 'travel_detail')); ?></font>
            </div>
        </p>
        <p><label>ติดต่อสอบถามเพิ่มเติมที่ *</label></p>
        <p>
        	<?= Form::textarea('inquiry_detail', $event->inquiry_detail, array('rows' => 3)); ?>
            <div class="error">
                <font color="red"><?= __(Arr::get($errors, 'inquiry_detail')); ?></font>
            </div>
        </p>
    </fieldset>
        <fieldset>
        <p><legend><strong>ประเภทงานอาสา *  (เลือกได้มากกว่า 1)</strong></legend></p>
        <div class="error">
                <font color="red"><?= Arr::get($errors, 'tags'); ?></font>
            </div>
			<?php
				$jobs = Kohana::$config->load('timebank')->get('jobs');
				for($i = 1 ; $i < sizeof($jobs) ; $i++){
					$checked = FALSE;
					if($event->tags != '') {
						$pos = strpos($event->tags, $jobs[$i]);
						if (  $pos >= 0 && $pos !== false){
							$checked = TRUE;
						}
					}
					echo '<p>'.Form::checkbox(str_replace(' ','_',$jobs[$i]), $jobs[$i], $checked).''.$jobs[$i].'</p>';
				}
            ?>
        <div class="line"></div>
    </fieldset>
</div>
<div id="rightSide">
    <fieldset>
        <legend></legend>
        <p><label><strong>รายละเอียดค่าใช้จ่าย *</strong></label></p>
        <p><?= Form::radio('is_need_expense', 0, !$event->is_need_expense); ?>ไม่มี</p>
        <p><?= Form::radio('is_need_expense', 1, $event->is_need_expense == 1 ? true : false); ?>มี (โปรดระบุรายละเอียด)</p>
        <p>
         	<div class="error">
                <font color="red"><?= __(Arr::get($errors, 'expense_detail')); ?></font>
            </div>
			<?= Form::textarea('expense_detail', $event->expense_detail, array('rows' => 3)); ?>

        </p>
        <p><label><strong>ทักษะของอาสาสมัครที่ต้องการ</strong></label></p>
        <ol>
           <?php

			$skill_list = explode ('|', $event->skills);
			$skills = array();
			for($i = 0 ; $i < count($skill_list) ; $i++)
			{

				$cut =  explode('=', $skill_list[$i]);
				if($cut[0] != ''){

					if(count($cut) >= 2)
					{
						$skills[trim($cut[0])] = $cut[1];
					}
					else
					{
						$skills[trim($cut[0])] = 'true';
					}
				}
			}
		 timebankhelper::buildSkilsForm($skills, true);
	   ?>
        </ol>
        <div class="line"></div>
    </fieldset>

    <fieldset>
        <legend>รูปงานอาสา * (ขนาดไม่เกิน 4 MB)</legend>
        <input type="hidden" name="image_path" value="<?= $image_path ?>" />
        <?php if ($event->image != ''): ?>
        	<img src="<?= url::base().'media/upload/events/'.$event->image; ?>" />
        <? endif ?>
		<?= Form::file('image', array('value' => 'xxx')) ?>
        <div class="error">
            <font color="red"><?= __(Arr::get($errors, 'image')); ?></font>
        </div>
    </fieldset>

<script>
	function eachDayChecked()
	{
		checkDaySelect();
		 dayChecked();

	}
	function checkDaySelect()
	{
		var date_start  = $('#volunteer_begin_date').val();
		var date_end = $('#volunteer_end_date').val();

		if (date_start != '' && date_end != '')
		{
			 var volunteer_date_start = parseDate(date_start);
			 var volunteer_date_end = parseDate(date_end);

			 for( var i = 0 ; i < 7 ; i++)
			 {
				   if ( $('#day' + i).is(':checked') )
				   {

					 if (CountDays(i, volunteer_date_start, volunteer_date_end) <=0 ){
						  $('#day' + i).prop("checked", false);
						 }
				   }
			 }
		 }
	}

	function dayChecked()
	{
		$("#day").prop("checked", true);
		difDateTIme();
	}

	function everyDayChecked()
	{
		 for( var i = 0 ; i < 7 ; i++)
		 {
			  $('#day' + i).prop("checked", false);
		 }

		difDateTIme();
	}
	function difDateTIme()
	{
		checkDaySelect()

		var date_start  = $('#volunteer_begin_date').val();
		var date_end = $('#volunteer_end_date').val();
		var time_start  = $('#volunteer_begin_time').val();
		var time_end = $('#volunteer_end_time').val();

		if (date_start != '' && date_end != '')
		{
			 var day = 0;
			 var diff = 0;

			if($('#night_live').is(':checked'))
			{
				day = 1;
				var volunteer_start = collectedDateTime(date_start + ' ' + time_start);
				var volunteer_end = collectedDateTime(date_end + ' ' + time_end);

				diff = volunteer_end -  volunteer_start;

			}

			else
			{
				 var volunteer_date_start = parseDate(date_start);
				 var volunteer_date_end = parseDate(date_end);
				 var volunteer_time_start = parseTime(time_start);
				 var volunteer_time_end = parseTime((time_end == '23:59:59') ? '24:00:00' : time_end);
				 diff = volunteer_time_end.getTime() - volunteer_time_start.getTime();

				 // in case of setting end date/time to before start date/time




				 for( var i = 0 ; i < 7 ; i++)
				 {
						if( ( $('#day' + i).is(':checked') && $('#day').is(':checked')) ||
																				 ($('#every_day').is(':checked')))
						{
							day +=  CountDays(i, volunteer_date_start, volunteer_date_end);
						}
				}
			}
console.log (diff)
			var time_cost = Math.ceil( diff/1000/60/60*10 )/10 * day ;

			if( time_cost < 0 )
			{
				time_cost = 0;
				alert ( '<?= __('end date/time much be after begin date/time.') ?> ');
			}

			$('#time_cost').val(time_cost);

		}
	}
</script>

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
