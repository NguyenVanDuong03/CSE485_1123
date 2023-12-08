<?php
include_once("db_connect.php");
global $conn;
$commentQuery = "SELECT id, parent_id, comment, sender, date FROM comment WHERE parent_id = '0' ORDER BY id DESC";
$commentsResult = mysqli_query($conn, $commentQuery) or die("database error:". mysqli_error($conn));
$commentHTML = '';
while($comment = mysqli_fetch_assoc($commentsResult)){
	$commentHTML .= '
		<div class="panel panel-primary">
		<div class="panel-heading">By <b>'.$comment["sender"].'</b> on <i>'.$comment["date"].'</i></div>
		<div class="panel-body">'.$comment["comment"].'</div>
		<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["id"].'">Reply</button></div>
		</div> ';
	$commentHTML .= getCommentReply($conn, $comment["id"]);
}
// 
function getCommentReply($conn, $parent_id) {
  $replyQuery = "SELECT * FROM comment WHERE parent_id = '$parent_id' ORDER BY id DESC";
  $replyResult = mysqli_query($conn, $replyQuery) or die("database error:". mysqli_error($conn));
  $replyHTML = '';
  while($reply = mysqli_fetch_assoc($replyResult)){
      $replyHTML .= '
          <div class="panel panel-info">
          <div class="panel-heading">By <b>'.$reply["sender"].'</b> on <i>'.$reply["date"].'</i></div>
          <div class="panel-body">'.$reply["comment"].'</div>
          </div> ';
  }
  return $replyHTML;
}
// 
echo $commentHTML;
?>
