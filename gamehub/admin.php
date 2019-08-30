<?php 
require_once("head.php");
require_once("conn.php");

?>
<pre>
<?php print_r($GLOBALS);?>
</pre>
<?php
if(isset($_POST['name'])&&isset($_FILES['img'])&&isset($_FILES['script']))
{
	
	$name=$_POST['name'];
	// code for extracting extention
	$namee=$_FILES["img"]['name'];     
	$in=strrpos($namee, ".", 0);
	$s=substr ( $namee , $in ,strlen($namee)  );
	echo $s."got it";
	
	//to see if recorde previously exist or no
	$stmt = $conn->prepare("select * from game where name=?");
           $stmt->bind_param("s", $name);
		   $stmt->execute();
		   $stmt->store_result();

        // get variables from result.
          
           if($stmt->fetch())
		   {
		     echo "alredy exist";
		   }
		   else
		   {
			   echo "sucess new place is available";
			}
		   $stmt->close();
	
	
	//move_uploaded_file($_FILES["img"]["tmp_name"], "img/jk.png");
}
?>
  <button type="button" data-toggle="modal" data-target="#new_game" class="btn btn-info">add</button>
 <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>name</th>
        <th>img</th>
        <th>script</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
<?php
require_once("foot.php");
?>
<!-- Modal -->
  <div class="modal fade" id="new_game" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Register and uplode game here</h4>
        </div>
        <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="img">select img:</label>
      <input type="file" class="form-control" id="img" placeholder="select img" name="img">
    </div>
    <div class="form-group">
      <label for="script">select script:</label>
      <input type="file" class="form-control" id="script" placeholder="select script" name="script">
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
