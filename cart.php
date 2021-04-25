<?php require 'inc/head.php';
require 'inc/data/products.php';



?>
<section class="cookies container-fluid">
<table class="table">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?=$_SESSION['id']; ?></td>
      <td><?= $catalog[$_SESSION['id']]['name']; ?></td>
      <td><?= $catalog[$_SESSION['id']]['description'] ?></td>
      <td>1</td>
    </tr>
  </tbody>
</table>
</section>
<?php require 'inc/foot.php'; ?>