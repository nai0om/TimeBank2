

<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>


<table style="table-layout: fixed; width: 100%"  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000">
<tr>
    <th> event id </th>
    <th>user id</th>
    <th>organiztion id</th>
    <th style="width:600px" >คอมเมนต์</th>
    <th style="width:100px" >ตัวเลือก</th>
</tr>
<? foreach ($comments as $comment ) :?>
    <tr>
        <td ><?= HTML::anchor('event/view/'.$comment->event_id, $comment->event_id) ?></td>
        <td ><?= ($comment->user_id == 0)? '-' : HTML::anchor('user/view/'.$comment->user_id, $comment->user_id) ?></td>
        <td ><?= ($comment->organization_id == 0) ? '-' : HTML::anchor('organization/view/'.$comment->organization_id, $comment->organization_id) ?> </td>
        <td style="word-wrap: break-word" ><?= HTML::anchor('event/view/'.$comment->event_id.'#'.$comment->id, $comment->comment)?></td>
        <td ><a style="cursor:pointer" id="popupButton<? echo $comment->id?>">แก้ไข </a> |
     			<a style="cursor:pointer" onclick="OnDelete('<?= url::base().'admin/commentremove/'.$comment->id ?>')">ลบ </a>

         						<div id="popupDialog<?= $comment->id ?>" title="แก้ไข">
                                  <p>

                                     <input type="textarea" style="width:400px; height:50px" id="message<?= $comment->id ?>"  value="<?= $comment->comment ?>"/>
                                  </p>
                                </div>
                                 <script>
								$('#popupDialog<?= $comment->id ?>').dialog({
									 modal: true,
									 autoOpen: false,
									 width : 500,
									 buttons: {
									  'ตกลง': function() {
												   var message = $('#message<?= $comment->id ?>').val( );
												   if(message == '')
												   {
													   alert('กรุณาใส่ข้อมูล')
												   }
												   else
												   {
													   window.location = "<?= url::base()."admin/commentedit/".$comment->id."?message="?>" + message;
													    $(this).dialog('close');
													}



									  },

									  'ยกเลิก': function() {
												   $(this).dialog('close');
												}
									}
								});

								$('#popupButton<?= $comment->id ?>').click( function() {

								   $('#popupDialog<?= $comment->id ?>').dialog('open');

								});

								 </script>
         </td>

	</tr>
<? endforeach ?>
</table>
</div>

<tr>
    <td colspan="6">
        <div class="fix">

      <br />
      <br />
        <?php
                for($i = 1; $i <= $total_page; $i++){
                    if( $i == $page)
                    {
                        echo '<span class="current-page">'.$i.'</span>';
                    }
                    else
                    {
                        echo ''.HTML::anchor('/admin/comment?page='.$i, $i) .'';
                    }
                }
            ?>

        </div>

    </td>
</tr>
</div>

<script>
function Ontextchange()
{
	$('#count').text($('#message').val().length);
}
</script>
