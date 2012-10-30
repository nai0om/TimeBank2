<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<h1>ระบบแนะนำงานอาสา (Matching)</h1>
<input type="button" onclick="window.location.href='<?= url::base() ?>admin/settings_userupdate'" value="ประมวลผลงานแนะนำทั้งหมด"> <p>การประมวลผลอาจใช้เวลานาน <b>***ห้ามปิดหน้านี้จนกว่าระบบจะประมวลผลเสร็จ (เมื่อประมวลผลเสร็จ ข้อความนี้หายไป)***</b></p>

<?= Form::open('admin/settings_links_wight', array('enctype' => 'multipart/form-data')); ?>
<table>
    <tbody>
        <tr>
            <th>ตัวแปร</th>
            <th>ค่าถ่วงน้ำหนัก</th>
        </tr>
         <tr>
            <td>ความสนใจอันดับ 1</td>
            <td><?= form::input('top_interest_1', $settings->top_interest_1) ?></td>
        </tr>
        <tr>
            <td>ความสนใจอันดับ 2</td>
            <td><?= form::input('top_interest_2', $settings->top_interest_2) ?></td>
        </tr>
        <tr>
            <td>ความสนใจอันดับ 3</td>
            <td><?= form::input('top_interest_3', $settings->top_interest_3) ?></td>
        </tr>
        <tr>
            <td>ความสนใจอันดับ 4</td>
            <td><?= form::input('top_interest_4', $settings->top_interest_4) ?></td>
        </tr>
        <tr>
            <td>ความสามารถ / ทักษะ</td>
            <td><?= form::input('skill', $settings->skill) ?></td>
        </tr>
         <tr>
            <td>งานอาสาที่ตรงกับพื้นที่ที่ต้องการ: ใน / นอกบริเวณจังหวัดที่พักอาศัยอยู่ (ยังไม่เปิดใช้งาน)</td>
            <td><?= form::input('living', $settings->living) ?></td>
        </tr>
        <tr>
            <td>จังหวัดที่อยู่</td>
            <td><?= form::input('location', $settings->location) ?></td>
        </tr>
        <tr>
            <td>จำนวนวันก่อนถึงวันปิดรับสมัคร (ตัวคูณของจำนวนวันก่อนปิดรับสมัคร)</td>
            <td><?= form::input('end_date', $settings->end_date) ?></td>
        </tr>
        <tr>
          <td><b>ระบบจะประมวลผลงานอาสาแนะนำเวลาตี 3 ของทุกวัน</b></td>
         <td><?= form::submit(NULL, 'บันทึกการเปลี่ยนแปลง') ?></td>
        </tr>
        
    </tbody>
</table>
</div>
</div>