<?php
function selectBooks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT book_id, book_title, book_price, book_author FROM `books`");
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
