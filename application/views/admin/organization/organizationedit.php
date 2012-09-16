<div id="home">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/organizationedit/'.$organization->id, array('enctype' => 'multipart/form-data')); ?>

	<label>email</label>
	<?= Form::input('email', $user_organization->email ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'email'); ?></font>
    </div>  
    <br />
    <label>verified</label>
    <?= Form::input('verified', $organization->verified ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'verified'); ?></font>
    </div> 
    <br />
    <label>noti_volunteerregister</label>
    <?= Form::input('noti_volunteerregister', $organization->noti_volunteerregister ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'noti_volunteerregister'); ?></font>
    </div> 
	<br />
	<label>noti_eventalmostend</label>
	<?= Form::input('noti_eventalmostend', $organization->noti_eventalmostend); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'noti_eventalmostend'); ?></font>
    </div> 
    <br />
	<label>noti_eventend</label>
	<?= Form::input('noti_eventend', $organization->noti_eventend ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'noti_eventend'); ?></font>
    </div> 
	<br />
	<label>name</label>
	<?= Form::input('name', $organization->name ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'name'); ?></font>
    </div>
	<br />
    <label>objective</label>
	<?= Form::input('objective', $organization->objective ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'objective'); ?></font>
    </div>
	<br />
    <label>activity</label>
	<?= Form::input('activity', $organization->activity ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'activity'); ?></font>
    </div>
	<br />
   <label>address</label>
	<?= Form::input('address', $organization->address ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'address'); ?></font>
    </div>
	<br />    
    <label>district</label>
	<?= Form::input('district', $organization->district ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'district'); ?></font>
    </div>
	<br />
 	<label>province</label>
	<?= Form::input('province', $organization->province ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'province'); ?></font>
    </div>
	<br />
     <label>district</label>
	<?= Form::input('district', $organization->district ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'district'); ?></font>
    </div>
	<br />
     <label>postcode</label>
	<?= Form::input('postcode', $organization->postcode ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'postcode'); ?></font>
    </div>
	<br />    
     <label>homephone</label>
	<?= Form::input('homephone', $organization->homephone ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'homephone'); ?></font>
    </div>
	<br />
     <label>fax</label>
	<?= Form::input('fax', $organization->fax ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'fax'); ?></font>
    </div>
	<br />
     <label>contactperson</label>
	<?= Form::input('contactperson', $organization->contactperson ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'contactperson'); ?></font>
    </div>
	<br />
     <label>facebook</label>
	<?= Form::input('facebook', $organization->facebook ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'facebook'); ?></font>
    </div>
	<br />
     <label>twitter</label>
	<?= Form::input('twitter', $organization->twitter ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'twitter'); ?></font>
    </div>
	<br />
     <label>website</label>
	<?= Form::input('website', $organization->website ); ?>    
    <div class="error">
        <font color="red"><?= Arr::get($errors, 'website'); ?></font>
    </div>
	<br />
    <label>logo</label>
	<? if ($organization->logo != ''): ?>
        <img src="<?= url::base().'media/upload/organizations/'.$organization->logo; ?>" style="max-height: 150px; max-width:150px;" /> <br />
    <? endif ?>
	<?= Form::File('logo'); ?>   
	<br />
 <br />
 <br />
 <br />
<input type="submit" value="แก้ไข" />


<?= Form::close(); ?>

</div>

</div>
