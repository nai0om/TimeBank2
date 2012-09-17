<label>ชื่อเรื่อง </label>
<?= Form::input('topic', $help->topic, array('rows' => 3)); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'topic'); ?></font>
</div>  
 

<label>รายละเอียด </label>
<?= Form::textarea('message', $help->message, array('rows' => 3)); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'message'); ?></font>
</div>  
<p>



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


