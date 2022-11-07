<?php
	include ('db.php');
	include ('session.php');
	if(isset($_POST['msg'])){
		$msg = addslashes($_POST['msg']);
		$id = $_POST['id'];
		mysqli_query($con,"insert into `chat` (chat_room_id, chat_msg, user_id, chat_date) values ('$id', '$msg' , '$loggedin_id', '$date')") or die(mysqli_error());
	}
?>
<?php
	if(isset($_POST['res'])){
		$id = $_POST['id'];
	?>
	<?php
		$sql=mysqli_query($con,"select * from `chat` left join `users_info` on users_info.id=chat.user_id where chat_room_id='$id' order by chat_date asc") or die(mysqli_error());
		while($row=mysqli_fetch_array($sql)){
	?>
		<div>
			<?php echo $row['chat_date']; ?><br>
			<?php echo $row['username']; ?>: <?php echo $row['chat_msg']; ?><br>
		</div>
		<br>
	<?php
		}
	}
?>
