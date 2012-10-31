<div id="help">
<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>ช่วยเหลือ</li>
		</div>

		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('help', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>

		<div style="clear:both"></div>
		<h2>ช่วยเหลือ</h2>
            <!-- Put the following javascript before the closing </head> tag. -->
      
		<script>
          (function() {
            var cx = '001108975738905188510:_-yhbvyjmj0';
            var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                '//www.google.com/cse/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
          })();
        </script>
       
        
        <!-- Place this tag where you want the search box to render -->
        <div style="width:300px; float:right;" >
       	 <gcse:searchbox-only ></gcse:searchbox-only>
		</div>
		<div style="clear:both"></div>
            <div id="leftSide">
            <? foreach($helps as $help): ?>
			    <div class="title" id="<?= $help->id ?>"><?= $help->topic ?></div>
                <div style="float:left; width:100%"></div>
                <script>
							
				  $("#<?= $help->id ?>").click(function () {
							$(".rightcontent").hide();
						$("#contentshow<?= $help->id ?>").slideDown("slow");
					}
					);
				

				</script>
            <? endforeach ?>
         </div>     
		<div id="rightSide">
        	<? foreach($helps as $help): ?>
                <div style="float:left; width:100%; display:none;" class="rightcontent" id="contentshow<?= $help->id ?>">
                	<?= $help->message ?>
                </div>
			<? endforeach ?>
         
		</div>

<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>

