<?php
// echo "deleted";
$bookId1 = $_GET["message"];

require_once "../../includes/dbh-inc.php";

$sql = "DELETE FROM books WHERE bookId=$bookId1";
$result = $conn->query($sql);

header("location: ../admin-book-search01.php?error=adminBookDeleted");
exit;