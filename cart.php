<?php require 'inc/head.php';
require 'inc/data/products.php';



?>
<section class="cookies container-fluid">
<table class="table">
  <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($catalog as $id => $cookie) : ?>
      <?php if (!empty($_SESSION['box'][$id])): ?>
        <tr>
          <td><?= $cookie['name']; ?></td>
          <td><?= $cookie['description'] ?></td>
          <td><?= $_SESSION['box'][$id] ?></td>
        </tr>  
        <?php endif; ?>
      <?php endforeach; ?>
  </tbody>
</table>
</section>
<?php require 'inc/foot.php'; ?>