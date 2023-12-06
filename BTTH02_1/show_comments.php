<?php
// Include your PDO database connection file (replace db_connect.php with your actual file)
global $conn;
require_once("db_connect.php");

// Prepare the SQL query using placeholders to prevent SQL injection
$commentQuery = "SELECT id, parent_id, comment, sender, date FROM comment WHERE parent_id = :parent_id ORDER BY id DESC";
$statement = $conn->prepare($commentQuery);
$statement->bindParam(':parent_id', $parent_id); // Bind parameters to prevent SQL injection

// Set the parent_id parameter for the main comments (parent_id = 0)
$parent_id = 0;

// Execute the query
$statement->execute();

// Fetch comments
$commentsResult = $statement->fetchAll();

// Initialize comment HTML
$commentHTML = '';

// Iterate through the comments
foreach ($commentsResult as $comment) {
    $commentHTML .= '
		<div class="panel panel-primary">
		<div class="panel-heading">By <b>'.$comment["sender"].'</b> on <i>'.$comment["date"].'</i></div>
		<div class="panel-body">'.$comment["comment"].'</div>
		<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["id"].'">Reply</button></div>
		</div> ';

    // Fetch and append reply comments
    $commentHTML .= getCommentReply($conn, $comment["id"]);
}

// Output the comments HTML
echo $commentHTML;

// // Function to fetch reply comments (replace this with your actual function)
function getCommentReply($conn, $parent_id) {
    // Write your logic here to fetch and format reply comments
    // Using PDO, prepare a new query and fetch reply comments based on $parent_id
    // Construct and return HTML for reply comments
}


// // function
// function getCommentReply($conn, $parentId) {
//     $replyQuery = "SELECT id, comment, sender, date FROM comment WHERE parent_id = :parentId ORDER BY id DESC";
//     $stmt = $conn->prepare($replyQuery);
//     $stmt->bindParam(':parentId', $parentId, PDO::PARAM_INT);
//     $stmt->execute();
//     $repliesResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     $replyHTML = '';
//     foreach ($repliesResult as $reply) {
//         $replyHTML .= '
//             <div class="panel panel-info">
//             <div class="panel-heading">By <b>'.$reply["sender"].'</b> on <i>'.$reply["date"].'</i></div>
//             <div class="panel-body">'.$reply["comment"].'</div>
//             </div> ';
//     }

//     return $replyHTML;
// }
?>

