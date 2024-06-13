<?php 
session_start();
if(!isset($_SESSION['userId']) || !isset($_SESSION['userType']))
{
header("Location: ../../login.html");
}
else
{
	include "../../config.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exam | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<style>
		.example-modal .modal {
		  position: relative;
		  top: auto;
		  bottom: auto;
		  right: auto;
		  left: auto;
		  display: block;
		  z-index: 1;
		}

		.example-modal .modal {
		  background: transparent !important;
		}
	</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <!--<span class="logo-lg"><b>Admin</b>LTE</span>-->
      <span class="logo-lg"><b><?php echo $_SESSION['userType'];?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

	<h4 style="color:white; text-align:center;" class="col-sm-10 control-label">Jhamobi Exam Management Software Developed by Shivanjali Yadav<br>
  </h4>
		
		<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		<li class="dropdown user user-menu">
		<a href="../../logout.php" class="btn btn-danger"><i class='glyphicon glyphicon-log-out'></i>Sign out</a>
		</li>
        </ul>
      </div>

      </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php include ('menu.php');?>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Questions Paper List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Questions Paper</a></li>
        <li class="active">Questions Paper List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box-body table-responsive no-padding" >
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr role="row">
                    <th>Ques Paper ID</th>
                    <th>Ques Paper Name</th>
                    <th>Program</th>
                    <th>Course</th>
                    <th>Added On</th>
                    <th>Added By</th>
                    <th>Count</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
				
<?php
$result=mysqli_query($conn,"select * from questionset");

while($row=mysqli_fetch_array($result))
{	
  
	$quesSetId=$row['quesSetId'];
	$quesSetName=$row['quesSetName'];
	$gradeName=$row['gradeName'];
	$subjectName=$row['subjectName'];
	//$chapterName=$row['chapterName'];
	$addedOn=$row['createdOn'];
	$addedBy=$row['createdBy'];
  $quesCount=$row['quesCount'];
	$status=$row['status'];	
	echo "<tr>
		 <td >$quesSetId</td>
		 <td >$quesSetName</td>		 
		 <td >$gradeName</td>
		 <td >$subjectName</td>		 
		 <td >$addedOn</td>
 		 <td >$addedBy</td>
     <td >$quesCount</td>";

		 if($status=="1")
		 {
			echo "<td>Active</td>";
		 }
		 else if($status=="2")
		 {
			echo "<td>InActive</td>";
		 }
		 else 
		 {
			 echo "<td></td>";
		 }
		 echo "</td>
		 
	     <td style='min-width:100px'><form action='' method='post'>
		 
		  <input type='hidden' name='quesSetId' value='$quesSetId'>
		  
		  <div class='btn-group'>
            <button type='submit' name='$quesSetId' class='btn btn-info' formaction='update_question_paper.php' value='Edit'>
			<i class='glyphicon glyphicon-pencil'></i>
			</button>
            <button type='submit' name='$quesSetId' class='btn btn-info' formaction='view_question_paper_details.php' value='View Details'>
			<i class='glyphicon glyphicon-info-sign'></i>
			</button>
          </div>
		
		 </form>
		 </td>";
echo "</tr>";
}
?>

		<div class='modal modal-danger fade' id='deleteModal'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do You Really want to Delete! Press delete to Continue</p>
            </div>
            <div class="modal-footer">
                <form method='POST' action=''>
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <input type="hidden" name="quesSetId" id="deleteQuesSetId" value="">
                    <button type="submit" name="delete" class="btn btn-outline">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>



                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <!--<b>Version</b> 2.4.13-->
      <!-- <b>Version</b> 1.0.0 -->
    </div>
	<strong>Copyright &copy; Jhamobi Technologies Pvt. Ltd. 2022-2023</strong> All rights reserved.
	
	
  </footer>
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
<?php
}
?>