<div id="home">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/useredit/'.$valunteer->id , array('enctype' => 'multipart/form-data')); ?>

<label>email</label>
<?= Form::input('email', $valunteer->email ); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'email'); ?></font>
</div>  
        

<label>displayname</label>
<?= Form::input('displayname', $valunteer->displayname ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'displayname'); ?></font>
</div>  
        
<label>noti_eventrecommended</label>
<?= Form::input('noti_eventrecommended', $valunteer->noti_eventrecommended ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_eventrecommended'); ?></font>
</div>  

<label>noti_eventapproved</label>
<?= Form::input('noti_eventapproved', $valunteer->noti_eventapproved ); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'noti_eventapproved'); ?></font>
</div>  

<label>noti_almosteventdate</label>
<?= Form::input('noti_almosteventdate', $valunteer->noti_almosteventdate ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_almosteventdate'); ?></font>
</div>  

<label>noti_eventthank</label>
<?= Form::input('noti_eventthank', $valunteer->noti_eventthank ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_eventthank'); ?></font>
</div>  

<label>noti_sms_eventapproved</label>
<?= Form::input('noti_sms_eventapproved', $valunteer->noti_sms_eventapproved ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_sms_eventapproved'); ?></font>
</div> 
        
<label>noti_sms_almosteventdate</label>
<?= Form::input('noti_sms_almosteventdate', $valunteer->noti_sms_almosteventdate ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_sms_almosteventdate'); ?></font>
</div>

<label>noti_sms_news</label>
<?= Form::input('noti_sms_news', $valunteer->noti_sms_news ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_sms_news'); ?></font>
</div>  
        
<label>nickname</label>
<?= Form::input('nickname', $valunteer->nickname ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'nickname'); ?></font>
</div>  

<label>role</label>
<?= Form::input('role', $valunteer->role ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'role'); ?></font>
</div>  

<label>first_name</label>
<?= Form::input('first_name', $valunteer->first_name ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'first_name'); ?></font>
</div>  

<label>last_name</label>
<?= Form::input('last_name', $valunteer->last_name ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'last_name'); ?></font>
</div>  

<label>birthday</label>
<?= Form::input('birthday', $valunteer->birthday ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'birthday'); ?></font>
</div>      

<label>phone</label>
<?= Form::input('phone', $valunteer->phone ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'phone'); ?></font>
</div>  

<label>address</label>
<?= Form::input('address', $valunteer->address ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'address'); ?></font>
</div>  

<label>profile_image</label>
<?= Form::input('profile_image', $valunteer->profile_image ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'profile_image'); ?></font>
</div>  

<label>quote</label>
<?= Form::input('quote', $valunteer->quote ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'quote'); ?></font>
</div> 

<label>description</label>
<?= Form::input('description', $valunteer->description ); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'description'); ?></font>
</div>  

<label>sex</label>
<?= Form::input('sex', $valunteer->sex ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'sex'); ?></font>
</div>  

<label>website</label>
<?= Form::input('topic', $valunteer->website ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'topic'); ?></font>
</div>  

<label>skills</label>
<?= Form::input('skills', $valunteer->skills, array('style' => 'width:1000px')); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'skills'); ?></font>
</div>  

<label>interest_tags</label>
<?= Form::input('interest_tags', $valunteer->interest_tags, array('style' => 'width:1000px')); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'interest_tags'); ?></font>
</div>  

<label>skills</label>
<?= Form::input('location', $valunteer->location); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'location'); ?></font>
</div>  

<label>skills</label>
<?= Form::input('province', $valunteer->province); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'province'); ?></font>
</div>  



<input type="submit" value="แก้ไข" />


<?= Form::close(); ?>

</div>

</div>
