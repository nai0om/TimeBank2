<label>หัวข้อข่าว </label>
<?= Form::input('topic', $news->topic, array('rows' => 3)); ?>    
<div class="error">news
    <font color="red"><?= Arr::get($errors, 'topic'); ?></font>
</div>  
 

<label>เนื้อหา </label>
<?= Form::textarea('message', $news->message, array('rows' => 3)); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'message'); ?></font>
</div>  
<p>
<label>วิดีโอ (ใช้ embed code จาก youtube, vimeo ฯลฯ)  </label> <br />
<?= Form::input('video', $news->video, array('style' => 'height: 200px;width: 400px;')); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'video'); ?></font>
</div>  

<label>รูปหลัก</label>
<?php if ($news->pic != ''): ?>
    <img src="<?= url::base().'media/upload/news/'.$news->pic; ?>" /><br />
<? endif ?>
<?= Form::file('pic') ?>
<div class="error">
    <font color="red"><?= __(Arr::get($errors, 'pic')); ?></font>
</div>
</p>

<p><label>รูปหน้า index</label>
<?php if ($news->pic_thm != ''): ?>
    <img src="<?= url::base().'media/upload/news/'.$news->pic_thm ?>" /> <br />
<? endif ?>
<?= Form::file('pic_thm') ?>
<div class="error">
    <font color="red"><?= __(Arr::get($errors, 'pic_thm')); ?></font>
</div>
</p>

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


