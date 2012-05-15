<div id="tb_browse">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>ดูงานอาสา</li>
		</div>
		<ul><li>สมัครสมาชิก</li><li>เข้าสู่ระบบ</li></ul>
		
		<h2>หางานอาสา</h2>
		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		
		<form id="search" method="post" action="main_timeBank_2_1.html">
			<input type="text" value="ใส่ชื่องานอาสา, ชื่อองค์กร, ชื่อสถานที่"/>
			<select><option>--ประเภทงานอาสา--</option></select>
			<select><option>--จังหวัด--</option></select>
			<input type="submit" class="mid" value="หางานอาสา"/><input type="submit" class="long" value="ค้นหาแบบละเอียด"/>
		</form>
		
		<blockquote>
			<h2>สนใจเป็นอาสาสมัคร</h2>
			<h3><span style="text-decoration:underline">ดูงานอาสา</span>   <span style="font-size:20px;">หรือ</span>   <span style="text-decoration:underline">สร้างโอกาสในการใช้เวลา</span></h3>
		</blockquote>
		
		<h3 class="title">ประเภทงานอาสา</h3>
		<ul class="type">
			<li>งานอาสาทั่วไป <span>[394]</span></li>
			<li>กู้ภัยและฟื้นฟูจากภัยพิบัติ <span>[394]</span></li>
			<li>หัตถกรรมและงานฝีมือ <span>[394]</span></li>
			<li>ศาสนาและปฏิบัติธรรม <span>[394]</span></li>
			<li>ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ <span>[394]</span></li>
			<li>อาหารและโภชนาการ <span>[394]</span></li>
			<li>สิ่งแวดล้อมและการเกษตร <span>[394]</span></li>
			<li>ก่อสร้างและงานช่างเทคนิค <span>[394]</span></li>
			<li>ประสานงานและบริหารจัดการ <span>[394]</span></li>
			<li>เด็กและเยาวชน <span>[394]</span></li>
			<li>สตรี <span>[394]</span></li>
			<li>ผู้สูงอายุและครอบครัว <span>[394]</span></li>
			<li>ผู้พิการ <span>[394]</span></li>
			<li>ไอที และคอมพิวเตอร์กราฟฟิค <span>[394]</span></li>
			<li>สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด <span>[394]</span></li>
			<li>สุนัข แมว และสัตว์เลี้ยง <span>[394]</span></li>
			<li>กฎหมาย <span>[394]</span></li>
			<li>สุขภาพและสาธารณสุข <span>[394]</span></li>
			<li>การศึกษาและฝึกอบรม <span>[394]</span></li>
		</ul>

		<h3 class="title" style="float:left;">งานอาสามาใหม่</h3>
		<img src="<?= url::base(); ?>media/img/tb_browse_line.png" style="position:relative;top:20px;"/><a class="read_more">แสดงเพิ่มเติม</a>
		<table cellpadding=0 cellspacing=0>
			<tr bgcolor="#0099CC">
				<th>งานอาสา</th>
				<th>ต้องการจากอาสา</th>
				<th>จำนวนรับสมัคร</th>
				<th>เปิดรับสมัคร</th>
				<th>วัน/เวลาทำงาน</th>
				<th></th>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr>
				<td>Loremip  sumons  ectetueradip</td>
				<td>8 ชม.</td>
				<td>132 คน</td>
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><a>สมัคร</a></td>
			</tr>
			<tr class="pagination">
				<td colspan="6"><ul>
					<li>Page 1</li>
					<li>2</li>
					<li>3</li>
				</ul></td>
			<tr>
		</table>
  </div>
</div>