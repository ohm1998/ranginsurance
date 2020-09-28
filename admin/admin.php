<?php 
session_start();

if($_SESSION['log_in']!=1)
{
	header('Location: ./index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style type="text/css">
 @import url("https://cdn.datatables.net/responsive/2.0.2/css/responsive.bootstrap.css");
 @import url("https://cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.css");
 @import url("https://cdn.datatables.net/responsive/2.0.2/css/responsive.foundation.css");
 @import url("https://cdn.datatables.net/responsive/2.0.2/css/responsive.jqueryui.css");

	*{
		margin: 2px;
	}
</style>
<script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/2.0.2/js/responsive.bootstrap.js"></script>
<script src="https://cdn.datatables.net/responsive/2.0.2/js/responsive.foundation.js"></script>
<script src="https://cdn.datatables.net/responsive/2.0.2/js/responsive.jqueryui.js"></script>
</head>
<body>
    <?php
    function mysqli_fetch_all_alt($result) 
    {
        $select = array();
    
        while( $row = mysqli_fetch_assoc($result) ) {
            $select[] = $row;
        }
    
        return $select;
    }
    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin Panel</a>
<!--<form action="./db_to_excel.php" method="POST">
  	<input type="submit"  value="Database To Excel" class="btn btn-primary">
  </form>-->
  <form action="./logout.php" method="POST">
  	<input type="submit" name="destroy" value="Log Out" class="btn btn-primary">
  </form>
</nav>	
<form action="./del.php" method="POST">
	<br>
	<input type="submit" name="submit" class="btn btn-danger"  value="Delete Selected">
	<br>
	<br>

	<div class="table-responsive" style="width: 100%;">
    <table id="info" class="table display responsive nowrap table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th></th>
      <th><input type="checkbox" id="globalCheckbox"></th>
      <th>SR</th>
      <th>NAME</th>
      <th>PHONE</th>
      <th>EMAIL</th>
      <th>NATIONALITY</th>
      <th>CITY</th>
      <th>ENQUIRY</th>
      <th>SALARY</th>
      <th>LOAN AMOUNT</th>
      <th>COMPANY NAME</th>
      <th>YEARS IN JOB</th>
      <th>LIABILITIES</th>
      <th>ENQUIRY DATE</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      require './includes/common.php';
      $res = mysqli_query($con,"SELECT * FROM `enquiry`");
      $res = mysqli_fetch_all_alt($res);
      foreach ($res as $key => $value) 
      {
        echo "<tr>";
        echo "<td></td>";
        /*echo "<td>Abcd<td>";*/
        echo "<td><input type='checkbox' class='checkBox'  name='del[".$value[0]."]'></td>";
        foreach ($value as $k2 => $v) 
        {
          echo "<td>".$v."</td>";
        }
        echo "</tr>";
      }
    ?>
  </tbody>
  <tfoot>
     <tr>
      <th></th>
      <th>SR</th>
      <th>NAME</th>
      <th>PHONE</th>
      <th>EMAIL</th>
      <th>DOB</th>
      <th>ENQUIRY ABOUT</th>
      <th>MESSAGE</th>
      <th>ENQUIRY DATE</th>
    </tr>
  </tfoot>
</table>
    
  </div>
</form>
<script type="text/javascript">
	  $('#globalCheckbox').click(function(){
            if($(this).prop("checked")) {
                $(".checkBox").prop("checked", true);
            } else {
                $(".checkBox").prop("checked", false);
            }                
        });


        $('.checkBox').click(function(){
            if($(".checkBox").length == $(".checkBox:checked").length) {
                $("#globalCheckbox").prop("checked", true);
            }else {
                $("#globalCheckbox").prop("checked", false);            
            }
        });
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#info').DataTable({
      responsive: true
    });
} );
</script>
</body>
</html>