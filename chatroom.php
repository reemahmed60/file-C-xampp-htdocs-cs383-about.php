<!-- Chatroom -->
<script src="jquery-3.1.1.js"></script>

<script type="text/javascript">

$(document).keypress(function(e){ //using keyboard enter key
	displayResult();
	/* Send Message	*/

		if(e.which === 13){
				if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
					}
				});
			}

		}
	}
);


$(document).ready(function(){ //using send button
	displayResult();
	/* Send Message	*/

		$('#send_msg').on('click', function(){
			if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
					}
				});
			}
		});
	/* END */
	});

	function displayResult(){
		$id = $('#id').val();
		$.ajax({
			url: 'send_message.php',
			type: 'POST',
			async: false,
			data:{
				id: $id,
				res: 1,
			},
			success: function(response){
				$('#result').html(response);
			}
		});
	}
</script>
<table id="chat_room" align="center">
	<tr>
	<th><h4>Hi, <?php echo $loggedin_session; ?> </h4></th>
	</tr>

  <tr>
    <td>
    <div id="result" style="overflow-y:scroll; height:300px; width: 500px;"></div>
    <form class="form">
      <br>
      <textarea id="msg" rows="4" cols="60"></textarea><br/>
      <input type="hidden" value="<?php echo $row['chat_room_id']; ?>" id="id">
      <button type="button" id="send_msg" class="button button2">Send</button>
    </form>
    </td>
  </tr>
  </table>
