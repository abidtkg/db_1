<!DOCTYPE html>
<html>
<?php include 'component/head.php'; ?>
<body>
<?php include 'component/navbar.php'; ?>
	<!-- main body -->

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Invoices</h1>
  <p class="lead">All invoices are appared here</p>
  <a href="ask.php" class="btn btn-lg btn-outline-success">
    <i class="fas fa-plus"></i> invoice</a>
</div>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Question</th>
      <th scope="col">Answer</th>
      <th scope="col">Tags</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../../inc/db.php';
    $sql = "SELECT * FROM `study_post`";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($res)):
    ?>
    <tr>
      <th scope="row"><?php echo($row['id']); ?></th>
      <td><?php echo($row['question']); ?></td>
      <td><?php echo($row['answer']); ?></td>
      <td><?php echo($row['tags']); ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<?php include 'component/footer.php'; ?>
<?php include 'component/footer_link.php'; ?>
</body>
</html>