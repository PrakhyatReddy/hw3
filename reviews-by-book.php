<?php
require_once("util-db.php");
require_once("model-reviews-by-book.php");

$pageTitle ="Reviews by book";
include "view-header.php";
$reviewbybook = selectReviewsbyBook($_GET['id']);
include "view-reviews-by-book.php";
include "view-footer.php";
?>
