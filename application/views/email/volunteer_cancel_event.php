<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }

h2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }

p { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }

a{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>

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

                                    <img src="<?= $vars['urlbase'].'media/upload/email/header.jpg' ?>" style="display:block;float:none;">

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

                            <p>สวัสดีครับ <?= $vars['org_name'] ?></p>

                            <p><img src="<?= $vars['urlbase'].'media/upload/email/bullet.png' ?>">มีอาสาสมัคร ยกเลิกเข้าร่วมกิจรรม....<br>

                            <a href="<?= $vars['urlbase'].'event/approve/'.$vars['event_id'] ?>"><?= $vars['event_name'] ?></a> </br>
                            <strong>สาเหตุ</strong> <?= $vars['message']  ?>
                            </p>								 

                            <br clear="left">

                            <br clear="left">

                            <p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>

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