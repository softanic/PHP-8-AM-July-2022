 <?php
 session_start();
 if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
			$user_id = $_SESSION['user'];

			include 'db.php';
           
            $q2 = "select * from msgs where (from_id=$user_id and to_id=$id) or (from_id=$id and to_id=$user_id)";
            $chat_res = mysqli_query($conn, $q2);
		   while ($chat = mysqli_fetch_array($chat_res)) {
			  if ($chat['from_id'] == $user_id) {
			  echo "<div class='text-right text-danger'>" . $chat['msg'] . "</div>";
			  } else {

				echo "<div class=' text-success'>" . $chat['msg'] . "</div>";
			  }
		}
 }
 ?>