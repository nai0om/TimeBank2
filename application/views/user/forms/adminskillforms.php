<div class="left">
			<div class="title left"></div>
			<div class="title body" style="font-family:chula">เรื่องที่คุณใส่ใจ/สนใจ</div>
			<div class="title right"></div>
			<div style="clear:both"></div>
            		<label>(เลือก 4 อันดับความสนใจมากที่สุด)</label>
            <? $jobs = Kohana::$config->load('timebank')->get('jobs'); ?> 
            	
            <label> อันดับที่ 1</label>
          	  <?= Form::select('interest_1', $jobs, array_key_exists(0, $interest_tags) ? trim($interest_tags[0]) : '');?>
               <div class="error"><?= Arr::get($errors, 'interest_1'); ?></div>
            <label> อันดับที่ 2</label>
              <?= Form::select('interest_2', $jobs, array_key_exists(1, $interest_tags) ? trim($interest_tags[1]) : '');?>
              <div class="error"><?= Arr::get($errors, 'interest_2'); ?></div>
            <label> อันดับที่ 3</label>
              <?= Form::select('interest_3', $jobs, array_key_exists(2, $interest_tags) ? trim($interest_tags[2]) : '');?>
              <div class="error"><?= Arr::get($errors, 'interest_3'); ?></div>
            <label> อันดับที่ 4</label>
              <?= Form::select('interest_4', $jobs, array_key_exists(3, $interest_tags) ? trim($interest_tags[3]) : '');?>
              <div class="error"><?= Arr::get($errors, 'interest_4'); ?></div>
     

		</div>
		
		<div class="right">
			<div class="title left"></div>
			<div class="title body" style="font-family:chula">ความสามารถเฉพาะของคุณ</div>
			<div class="title right"></div>
			<div style="clear:both"></div>
	       		<?= timebankhelper::buildSkilsForm($skills)  ?>
		</div>
        
			
        
   
			<label>Tag บ่งบอกกลุ่ม</label>
			<?= Form::input('tag', 'xxx', array('id' => 'tags-ajax')) ?>
			<!-- p><span class="tag" >SCBStaff</span><span class="tag"></span><p -->
            
        <script type="text/javascript">
            $("#tags-ajax").tokenInput("<?= url::base(); ?>tag/get", {
                theme: "facebook",
				hintText : '',
				noResultsText :'',
				searchingText : '',
				 prePopulate: [
				 <? foreach ($valunteer->tags->find_all() as $tag) : ?>
                    {id: "<?= $tag->name ?>", name: "<?= $tag->name ?>"},
				<? endforeach ?>
                ]
            });
        </script>
      
          