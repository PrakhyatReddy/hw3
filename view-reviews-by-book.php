<h1>Reviews by Book</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Author</th>
      <th>Rating</th>
        </tr>
    </thead>
    <tbody>
      <?php
while($review= $reviews->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $review['reviews_id']; ?></td>
    <td><?php echo $review['book_title']; ?></td>
    <td><?php echo $review['book_author']; ?></td>
    <td><?php echo $review['rating_id']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
