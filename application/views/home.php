<?php include 'header.php';?>

<div class="container">
	<div class="row">
		<div class="col-md-6">

			<h2>Add User</h2>
<form action="<?=base_url('welcome/adduser')?>" method="post">

   <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" id=""  name="fname">
  </div>
   <label class="btn btn-secondary active">
    <input type="radio" name="gender" value="male" id="option1" checked> Male
  </label>
    <label class="btn btn-secondary">
    <input type="radio" name="gender" value="female" id="option1"> Female
  </label>
   <div class="form-group">
    <label for="">DOB</label>
    <input type="date" class="form-control" id=""  name="dob">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control"  rows="3" name="address"></textarea>
  </div>
   <div class="form-group">
    <label for="">Mobile</label>
    <input type="text" class="form-control" id=""  name="number">
  </div>
  <div class="form-group">
    <label for="">Email address</label>
    <input type="email" class="form-control" id=""  name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>