<h1>Reviews</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Rating</th>
        </tr>
    </thead>
    <tbody>
      <?php
while($review= $reviews->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $review['reviews_id']; ?></td>
    <td><?php echo $book['review_title']; ?></td>
    <td><?php echo $book['rating_id']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
