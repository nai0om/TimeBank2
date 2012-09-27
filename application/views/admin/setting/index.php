<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<h1>weight</h1>
<input type="button" onclick="window.location.href='<?= url::base() ?>admin/settings_userupdate'" value="update user top event"> <br />การอัพเดทอาจใช้เวลาพอสมควรกรุณรอสนกว่าจะทำการเสร็จ

<?= Form::open('admin/settings_links_wight', array('enctype' => 'multipart/form-data')); ?>
<table>
    <tbody>
        <tr>
            <th>type</th>
            <th>value</th>
        </tr>
         <tr>
            <td>top_interest_1</td>
            <td><?= form::input('top_interest_1', $settings->top_interest_1) ?></td>
        </tr>
        <tr>
            <td>top_interest_2</td>
            <td><?= form::input('top_interest_2', $settings->top_interest_2) ?></td>
        </tr>
        <tr>
            <td>top_interest_3</td>
            <td><?= form::input('top_interest_3', $settings->top_interest_3) ?></td>
        </tr>
        <tr>
            <td>top_interest_4</td>
            <td><?= form::input('top_interest_4', $settings->top_interest_4) ?></td>
        </tr>
        <tr>
            <td>skill</td>
            <td><?= form::input('skill', $settings->skill) ?></td>
        </tr>
         <tr>
            <td>living</td>
            <td><?= form::input('living', $settings->living) ?></td>
        </tr>
        <tr>
            <td>location</td>
            <td><?= form::input('location', $settings->location) ?></td>
        </tr>
        <tr>
            <td>end_date(ตัวคูณของจำนวนวันก่อนปิดรับสมัคร)</td>
            <td><?= form::input('end_date', $settings->end_date) ?></td>
        </tr>
        <tr>
          <td>การอัพเดทอาจใช้เวลาพอสมควรกรุณรอสนกว่าจะทำการเสร็จ</td>
         <td><?= form::submit(NULL, 'update') ?></td>
        </tr>
        
    </tbody>
</table>
</div>
</div>