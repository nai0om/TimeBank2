<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }

h2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }

p { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }

a{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc;text-decoration:underline; }</style></head>

<body style="margin:0; padding:0;">

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">

    <tr>

        <td valign="top" align="center">

            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">

                <tr>

                    <td align="center" valign="top" style="padding-top:10px;">

                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tr>

                                <td valign="top" height="121" class="header">

                                    <img src="<?= url::base().'media/upload/email/header.jpg' ?>" style="display:block;float:none;">

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

                <tr>

                    <td align="center" valign="top" bgcolor="#e7daca">

						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">

                            <tr>

                                <td valign="top" class="header">

                                    <p>สวัสดี, <?= $vars['displayname'] ?></p>

									<p>ขอบคุณที่ร่วมลงทะเบียนสมัครสมาชิกองค์กรอาสากับเรา: </p>

									 <table class="top" width="505" border="0" cellspacing="0" cellpadding="0">

										<tr>

											<td valign="top" height="13">

												<img src="<?= url::base().'media/upload/email/843_box_header.png' ?>" style="display:block;float:none;">

											</td>

										</tr>

										<tr>

											<td align="center" valign="top" bgcolor="#ffffff">

												 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">

													<tr>

														<td valign="center" rowspan="3">

															<img src="<?= url::base().'media/upload/email/73_icon.jpg' ?>">

														</td>

														<td valign="top">

															<p style="margin:0;padding:0;color:#da7101">ชื่อองค์กร :</p>

														</td>

														<td valign="top">

															<p style="margin:0;padding:0;"><?= $vars['name'] ?></p>

														</td>

													</tr>

													<tr>

														<td valign="top">

															<p style="margin:0;padding:0;color:#da7101">ชื่อผู้ใช้ (อีเมล์): </p>		

														</td>

														<td valign="top">

															<p style="margin:0;padding:0;"><?= $vars['email'] ?></p>

														</td>

													</tr>

													<tr>

														<td valign="top">

															<p style="margin:0;padding:0;color:#da7101">รหัสผ่าน: </p>		

														</td>

														<td valign="top">

															<p style="margin:0;padding:0;"><?= $vars['password'] ?></p>

														</td>

													</tr>

												 </table>

											</td>

										</tr>

										<tr>

											<td valign="top" height="15">

												<img src="<?= url::base().'media/upload/email/843_box_footer.png' ?>" style="display:block;float:none;">

											</td>

										</tr>

										<tr>

											<td valign="top">

												<br clear="left">

												<!--p>กรุณาคลิกลิงค์ด้านล่าง เพื่อยืนยันการเป็นสมาชิกของคุณที่นี่ก่อนเข้าสู่ระบบ: <br>

												<a>http://www.hostname.com/confirm.php</a></p-->
                                                <p>ท่านสามารถเริ่มใช้งานระบบได้ทันที</p>
                                                <a href="<?= url::base() ?>">เริ่มใช้งานระบบได้ที่นี่</a>
											</td>

										</tr>

									</table>

									<br clear="left">

									<p>ขอบคุณ</p>

									<p><a href="<?= url::base() ?>">Jitarsabank.com</a></p>

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

				<tr>

                    <td align="center" valign="top">

                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tr>

                                <td valign="top" height="121" class="footer">

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>

</body>