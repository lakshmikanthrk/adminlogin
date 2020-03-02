<?php include 'header.php';?>

<div class="container">
	<div class="row">
		<div class="offset-md-3 col-md-6">

			<h2>Admin Login</h2>
<form action="<?=base_url('welcome/adminlogin')?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>