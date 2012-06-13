<div id="org">
 <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกองค์กร</li>
			<li>หน้าหลัก</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>

		<div class="title left"></div>
		<div class="title body">โปรไฟล์ <?= $organization->name ?></div>
		<div class="title right"></div>
		
		<div style="clear:both"></div>
		<h2><?= $organization->name ?></h2>
		
		<div id="columnLeft">
			<img src="img/org_sample.png" style="float:left;">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
			<img src="img/org_sample_small.png">
		</div>
		<div id="columnRight">
			<div class="sum"><div class="sum_hours">2,360 ชั่วโมง</div>
			<div class="sub_title">เวลาจากอาสาสมัครที่เคยทำงานกับมูลนิธิ</div></div>
			<div class="sum"><div class="sum_hours">250 อาสาสมัคร</div>
			<div class="sub_title">ที่เคยร่วมงานกับมูลนิธิ</div></div>
		</div>
		
		<div style="clear:both"></div>
		<div class="column one">
			<h3>วัตถุประสงค์/ เป้าหมายองค์กร:</h3>
			<p><?= $organization->objective ?></p>
			<h3>ลักษณะกิจกรรมขององค์กร:</h3>
			<p><?= $organization->activity ?></p>
		</div>
		<div class="column two">
			<h4>สถานที่ตั้ง</h4>
			<p><?= $organization->address ?></p>
			<h4>เบอร์โทรศัพท์ </h4>
			<p><?= $organization->homephone ?></p>
			<h4>เบอร์โทรสาร</h4>
			<p><?= $organization->fax ?></p>
		</div>
		<div class="column three wrap">
			<h4>อีเมล์</h4><span><?= $org_user->email ?></span>
			<h4>ติดต่อ </h4><span><?= $organization->contactperson ?></span>
			<h4>website URL</h4><span><?= $organization->website ?></span>
			<h4>Facebook</h4><span><?= $organization->facebook ?></span>
			<h4>twitter</h4><span><?= $organization->twitter ?></span>
		</div>

		<div style="clear:both"></div>
		<div class="title left"></div>
		<div class="title body">งานอาสาที่เปิดรับสมัคร</div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body past">งานอาสาที่จบไปแล้ว</div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;">120</span></p>
		
		<table>
			<tbody><tr>
				<th>งานอาสา</th>
				<th>ต้องการจากอาสา</th>
				<th>จำนวนรับสมัคร</th>
				<th>เปิดรับสมัคร</th>
				<th>วัน / เวลาทำงานอาสา</th>
				<th></th>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555 <br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา) <br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a href="#">สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555 <br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา) <br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a href="#">สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555 <br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา) <br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a href="#">สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555 <br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา) <br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a href="#">สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555 <br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา) <br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a href="#">สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555 <br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา) <br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a href="#">สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555 <br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา) <br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a href="#">สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555 <br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา) <br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a href="#">สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555 <br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา) <br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a href="#">สมัคร</a></td>
			</tr>
			<tr>
				<td colspan="6">
					<ul>
						<li>Page 1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
					</ul>
				</td>
			</tr>
		</tbody></table>
		
		</div>
	
  </div>
</div>