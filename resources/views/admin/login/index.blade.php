<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
	<body>
		<div class="login">
		<form action="#">
        <input type="text" name="ID" placeholder="Enter ID"><br></br>
          <input type="password" value="" class="form-control" name="password" id="myInput" placeholder="Password" required><br></br>
            <div class="form-group">
          <input type="checkbox" onclick="myFunction()"> Show Password
        </div>
            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-key"></i> LOGIN </button>
		</form>	
	</div>
<script>
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  </script>
	</body>
	<style>
		body {
			justify-content: center;
		}
	</style>
</html>
