	
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
 <script>
  function fn()
  {
	  var a=document.getElementsByName("dobf")[0].value="";
	  var b=document.getElementsByName("pwdf")[0].value="";
	  var b=document.getElementById("pwdl").value="";
	  var c=document.getElementsByName("cpwdf")[0].value="";
	 var hid=document.getElementById("h");
	 if(hid.style.display=="block")
	 {
		 hid.style.display="none";
	}
	else
	{
		hid.style.display="block";
	}
	  
  }
  </script>
  <!-- Bootstrap core JavaScript -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>

</html>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Register here</h4>
        </div>
        <div class="modal-body">
        <form action="reg2.php" method="post">
          <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="uname">uname:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter email" name="uname">
    </div>
    <div class="form-group">
      <label for="dob">dob:</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter email" name="dob">
    </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
     		<button type="reset" class="btn btn-info">reset</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Login</h4>
        </div>
        <div class="modal-body">
        <form action="log.php" method="post">
          <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group" id="h" style="display:block;">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwdl" placeholder="Enter password" name="pwd">
    </div>
    
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="fn()">
          forget password
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
     <div class="card-body">
        <div class="form-group">
      <label for="dob">dob:</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter date" name="dobf">
    </div>
      <div class="card-body">
        <div class="form-group">
      <label for="pwd">new Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwdf">
    </div>
    <div class="card-body">
        <div class="form-group">
      <label for="cpwd">confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter password" name="cpwdf">
    </div>
      </div>
    </div>
 
  
</div>
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
     		<button type="reset" class="btn btn-info">reset</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
 