<?php
 $eng = 'ภาษาอังกฤษ ';
 $ch = 'ภาษาจีน ';
 $gen = 'ภาษาเยอรมัน ';
 $jap = 'ภาษาญี่ปุ่น ';
 
 $listen = 'ฟัง/พูด';
 $read = 'อ่าน';
 $write = 'เขียน';
 
 $fair = 'พอใช้';
 $good = 'ดี';
 $best = 'ดีมาก';
return array(
	'S12005TT11' => $listen.$fair,
	'S12005TT12' => $listen.$good ,
	'S12005TT13' => $listen.$best ,
	'S12005TT21' => $read.$fair ,
	'S12005TT22' => $read.$good ,
	'S12005TT23' => $read.$best ,
	'S12005TT31' => $write.$fair ,
	'S12005TT32' => $write.$good ,
	'S12005TT33' => $write.$best ,
	'S1200111' => $eng.$listen.$fair ,
	'S1200112' => $eng.$listen.$good ,
	'S1200113' => $eng.$listen.$best ,
	'S1200121' => $eng.$read.$fair ,
	'S1200122' => $eng.$read.$good ,
	'S1200123' => $eng.$read.$best ,
	'S1200131' => $eng.$write.$fair ,
	'S1200132' => $eng.$write.$good ,
	'S1200133' => $eng.$write.$best ,
	
	'S1200211' => $ch.$listen.$fair ,
	'S1200212' => $ch.$listen.$good ,
	'S1200213' => $ch.$listen.$best ,
	'S1200221' => $ch.$read.$fair ,
	'S1200222' => $ch.$read.$good ,
	'S1200223' => $ch.$read.$best ,
	'S1200231' => $ch.$write.$fair ,
	'S1200232' => $ch.$write.$good ,
	'S1200233' => $ch.$write.$best ,
	
	'S1200311' => $gen.$listen.$fair ,
	'S1200312' => $gen.$listen.$good ,
	'S1200313' => $gen.$listen.$best ,
	'S1200321' => $gen.$read.$fair ,
	'S1200322' => $gen.$read.$good ,
	'S1200323' => $gen.$read.$best ,
	'S1200331' => $gen.$write.$fair ,
	'S1200332' => $gen.$write.$good ,
	'S1200333' => $gen.$write.$best ,
	
	'S1200411' => $jap.$listen.$fair ,
	'S1200412' => $jap.$listen.$good ,
	'S1200413' => $jap.$listen.$best ,
	'S1200421' => $jap.$read.$fair ,
	'S1200422' => $jap.$read.$good ,
	'S1200423' => $jap.$read.$best ,
	'S1200431' => $jap.$write.$fair ,
	'S1200432' => $jap.$write.$good ,
	'S1200433' => $jap.$write.$best ,

    'You must provide a username.' => 'กรุณาใส่ชื่อ',
	'You must provide a website.' => 'กรุณาใส่เว็บไซต์ด้วยครับ',
	'There were errors, please see form below.' => 'กรอกข้อมูลด้านล่างให้ครบด้วยครับ',
	'open' => 'เปิด',
	'Sample first page' => 'หน้าแรก',
	'time is maximum at 2000' =>  '"ขอบคุณที่ตั้งใจให้เวลาทำอาสาจำนวนมากนะครับ แต่ระบบสามารถฝากเวลาได้สูงสุดไม่เกิน 2000 ชั่วโมงเท่านั้น"',
	'hours must more than 0' => 'จำนวณชั่วโมงต้องมากกว่า 0',
	'Please insert hours number.' => 'กรุณาใส่ตัวเลขจำนวนชั่วโมง',
	'models/user.email.unique' => 'อีเมลนี้มีการใช้งานแล้ว',
	'Please accept term&condition.' => 'กรุณายอมรับเงื่อนไขและข้อตกลง',
	'The password fields did not match.' => 'ยืนยันรหัสผ่าน ไม่ถูกต้อง',
	'There were errors, please see form below.' => 'กรุณาตรวจสอบข้อมูล',
	'Password can\'t be empty.' => 'กรุณาใส่รหัสผ่าน',
	'You must enter an email address' => 'กรุณาใส่อีเมล',
	'displayname cannot be empty.' => 'กรุณาใส่ชื่อที่ใช้แสดง (Display Name)',
	'name must not be empty' => 'กรุณาใส่ชื่องานอาสา',
	'location_name must not be empty' => 'กรุณาใส่ชื่อสถานที่',
	'location_district must not be empty' => 'กรุณาใส่ชื่อเขต / อำเภอ',
	'location_postcode must not be empty' => 'กรุณาใส่รหัสไปรษณีย์',
	'volunteer_need_count must not be empty' => 'กรุณาใส่จำนวนอาสาสมัคร',
	'detail must not be empty' => 'กรุณาใส่รายละเอียดงานอาสา',
	'email must not be empty' => 'กรุณาใส่อีเมล',
	'topic must not be empty' => 'กรุณาใส่ชื่อหัวข้อ',
	'message must not be empty' => 'กรุณาใส่ข้อความของคุณ',
	'inquiry_detail must not be empty' => 'กรุณาใส่ข้อมูลการติดต่อ',
	'image must not be empty' => 'กรุณาใส่รูปกิจกรรมงานอาสา',
	'models/event.image.check_upload' => 'กรุณาใส่รูปกิจกรรมงานอาสา',
	'Password can&rsquo;t be empty.' =>  'กรุณาใส่รหัสผ่าน',
	'The password fields did not match.' => 'รหัสผ่านที่ยืนยันไม่ตรงกัน',
	'name must not be empty' => 'กรุณาใส่ชื่อองค์กร / หน่วยงาน',
	'objective must not be empty' => 'กรุณาใส่วัตถุประสงค์ / เป้าหมายองค์กร',
	'activity must not be empty' => 'กรุณาใส่ลักษณะกิจกรรมขององค์กร',
	'address must not be empty' => 'กรุณาใส่ที่อยู่',
	'district must not be empty' => 'กรุณาใส่เขต / อำเภอ',
	'province must not be empty' => 'กรุณาใส่จังหวัด',
	'postcode must not be empty' => 'กรุณาใส่รหัสไปรษณีย์',
	'homephone must not be empty' => 'กรุณาใส่หมายเลขโทรศัพท์บ้าน',
	'fax must not be empty' => 'กรุณาใส่หมายเลขโทรสาร',
	'contactperson must not be empty' => 'กรุณาใส่ชื่อผู้ติดต่อ',
	'Email or password is incorrect.' => 'อีเมล หรือ รหัสผ่าน ไม่ถูกต้อง',
	'Please enter email address' => 'กรุณาใส่อีเมล ',
	'Approve volunteer warning.' => 'การตอบรับอาสาสมัครจะไม่สามารถแก้ไขได้ในภายหลัง ',
	'end date/time much be after begin date/time.' => 'วันจบกิจกรรมอาสาต้องเป็นวันหลังจากวันเริ่มกิจกรรมครับ',
	'Thank you, your mission is complete.' => 'ดีใจด้วยนะครับ คุณได้ทำอาสาตามเวลาที่ได้ตั้งใจไว้แล้ว ขอเชิญชวนฝากเวลาตามที่ตั้งใจจะไปทำอาสาเพิ่มนะครับ ขอบคุณครับ',
	'have to select' => 'กรุณาเลือก',
	'do not duplicate' => 'ห้ามเลือกซ้ำ',
	'password must be at least 6 characters long' => 'รหัสผ่านอย่างน้อย 6 ตัว',
	'The password fields did not match.' => 'รหัสผ่านไม่ตรงกัน',
	'Incorrect Password' => 'รหัสผ่านไม่ถูกต้อง',
	'email is exist.' => 'อีเมลนี้มีการใช้งานแล้ว',
	'email is incorrect.' => 'อีเมลไม่ถูกต้อง',
	'Please enter valid email address' => 'กรุณาใส่อีเมลให้ถูกต้อง',
	'Account is not verified by JitArsa Bank team yet. Please wait.' => 'ยังไม่ได้รับการตรวจสอบจากทางทีมงาน ธนาคารจิตอาสา กรุณารอซักครู่..',
	'Update complete' => 'ข้อมูลใหม่ถูกบันทึกเรียบร้อยครับ',
	'newemail can\'t be empty.' => 'กรุณาใส่อีเมล ให้ถูกต้อง',
	'man' => 'ชาย',
	'woman' => 'หญิง',
	'N/A' => 'ไม่ระบุ',
	'volunteer end date much more than start date.' => 'วันจบกิจกรรมอาสาต้องเป็นวันหลังจากวันเริ่มกิจกรรมครับ',
	'limit 365 days per event.' => 'จำกัดช่วงวันงานอาสาไม่เกิน 365 วัน',
	'limit at 2000 hours.'  => 'จำนวนชั่วโมงสูงสุดไม่เกิน 2000 ชั่วโมง',
	'must select province.' => 'กรุณาเลือกจังหวัด',
	'much not empty.' => 'กรุณาใส่ข้อความ',
	'name must not be empty' => 'กรุณาใส่ชื่องานอาสา',
	'surname must not be empty' => 'กรุณาใส่นามสกุล',
	'email must be a email address' => 'กรุณาใส่ อีเมลให้ถูกต้อง',
	'nickname much not empty' => 'กรุณาใส่ชื่อเล่น',
	'first_name much not empty.' => 'กรุณาใส่ชื่อจริง',
	'last_name much not empty.' => 'กรุณาใส่นามสกุล',
	'phone much not empty.' => 'กรุณาใส่หมายเลขโทรศัพท์',
	'must select signup_end_date.' => 'กรุณาเลือกวันสิ้นสุดการรับสมัตร',
	'must select volunteer_begin_date.' => 'กรุณาเลือกวันเริ่มทำงานอาสา',
	'must select volunteer_end_date.' => 'กรุณาเลือกวันสิ้นสุดการทำงาน',
	'much select event type at least 1 .' => 'กรุณาเลือกประเภทงานอาสา อย่างน้อย 1 อย่าง',
	'a day' => 'ทุกวัน (วันละ 1 ครั้ง)',
	'a week' => 'ทุกสัปดาห์ ',
	'location_postcode must be a digit' => 'กรุณาใส่รหัสไปรษณีย์เป็นเลข 5 หลัก หากไม่ทราบให่ใส่ 00000',
	'location_postcode must be at least 5 characters long' => 'กรุณาใส่รหัสไปรษณีย์เป็นเลข 5 หลัก หากไม่ทราบให่ใส่ 00000',
	'location_postcode must not exceed 5 characters long' => 'กรุณาใส่รหัสไปรษณีย์เป็นเลข 5 หลัก หากไม่ทราบให่ใส่ 00000',
	'volunteer_need_count must be within the range of 1 to 1000' => 'กรุณาใส่จำนวนอาสาที่เปิดรับสมัคร (อย่างน้อย 1 คน แต่ไม่เกิน 1000 คน)',
	'Please logout' => 'กรุณาออกจากระบบก่อน',
	'volunteer_need_count must be a digit' => 'กรุณาใส่จำนวนอาสาที่เปิดรับสมัคร (อย่างน้อย 1 คน แต่ไม่เกิน 1000 คน)',
 );
