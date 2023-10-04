<?php
require_once("util-db.php");
require_once("model-reviews.php");

$pageTitle ="Reviews";
include "view-header.php";
$books = selectReviews();
include "view-reviews.php";
include "view-footer.php";
?>
