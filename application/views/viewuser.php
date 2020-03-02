<?php include 'header.php';?>
<div class="container">
	<h2>View User</h2>
<table class="table">
  <thead class="thead-dark">
  	
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
    </tr>

  </thead>
  <tbody>
  	<?php $i=1; foreach ($userview as $key) { ?>
    <tr>
      <th scope="row"><?=$i;?></th>
      <td><?=$key->name;?></td>
      <td><?=$key->email;?></td>
      <td>@<?=$key->number;?></td>
    </tr>
    <?php $i++; }?>
 </tbody>
</table> 
</div>