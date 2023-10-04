<?php
function selectReviews() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT reviews_id, review_title, rating_id FROM `reviews`");
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
