<?php
function selectReviewsbyBook($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT reviews_id, review_title, rating_id FROM `reviews`c join books b on b.book_id = c.book_id where b.book_id=?");
      $stmt->bind_param(b",$bid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
