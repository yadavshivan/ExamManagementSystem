<?php
session_start();
if (!isset($_SESSION["userId"]) || !isset($_SESSION["userType"])) {
    header("Location: ../../login.html");
} else {

    include "../../config.php";
    $qID = isset($_POST['quesSetId']) ? $_POST['quesSetId'] : '';

    

    $result = mysqli_query($conn, "SELECT * FROM questionset WHERE questionset.quesSetId='$qID'");
    while ($row = mysqli_fetch_array($result)) {    
        $quesSetId = $row['quesSetId'];
        $quesSetName = $row['quesSetName'];
        $quesCount = $row['quesCount'];
        $gradeId = $row['gradeId'];
        $gradeName = $row['gradeName'];
        $subjectName = $row['subjectName'];
        $status = $row['status'];
        $createdOn = $row['createdOn'];
        $createdBy = $row['createdBy'];
        $quesIdList = $row['quesIdList'];
        $SemName = $row['SemName'];
        $institute = $row['institute'];
        $marksQuest = $row['marksQuest'];
        $total_marks = $row['total_marks'];
        $examDuration = $row['examDuration'];
        $questionID = $row['questionID'];
        $questionText = $row['questionText'];
        $complexityLevel = $row['complexityLevel'];
        $selectedQuestions = $row['selectedQuestions'];
        $examDate = $row['examDate'];
    }
 
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
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
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
          .response {
          padding: 10px;
          margin-top: 10px;
          border-radius: 2px;
      }

      .error {
          background: #fdcdcd;
          border: #ecc0c1 1px solid;
      }

      .success {
          background: #c5f3c3;
          border: #bbe6ba 1px solid;
      }
    </style>
    
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>

  
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>admin</b></span>
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

  <h4 style="color:white; text-align:center;" class="col-sm-10 control-label">Jhamobi Exam Management Software Developed by Shivanjali Yadav</h4>
  
  <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
    <li class="dropdown user user-menu">
    <a href="../../logout.php" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i>Sign out</a>
    </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
 <?php include "menu.php"; ?>
 </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 462px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Question Papers
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Question Papers</a></li>
        <li class="active">Add New Question Paper</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Question Paper</h3>
            </div>
      
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#basicInfo" data-toggle="tab" aria-expanded="true">Basic Info</a></li>
          <li class=""><a href="#questionsList" data-toggle="tab" aria-expanded="false">Questions List</a></li>
        </ul>
    
      <form role="form" class="form-horizontal" action="update_view_question_logic.php" method="POST" autocomplete="off" enctype="multipart/form-data">
    
        <div class="tab-content" style="padding: 40px;">
          <!-- Basic Info -->
          <div class="tab-pane active" id="basicInfo">

          <div class="form-group">
    <label for="quesSetName" class="col-sm-2 control-label">Question Paper Name:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="quesSetName" id="quesSetName" placeholder="Question set name" value="<?= $quesSetName; ?>" required readonly>
    </div>
</div>

          
          <div class="form-group">
    <label for="gradeName" class="col-sm-2 control-label">Program name:</label>
    <div class="col-sm-10">
       <!-- Hidden input field to store the disabled gradeName -->
       <input type="hidden" name="disabledGradeName" id="disabledGradeName" value="<?php echo $gradeName; ?>">
         
        <select class="form-control select2" name="gradeName" id="gradeName" style="width: 100%;" required>
            <option selected="selected" disabled>--Select--</option>
            <?php 
                $programNames = array(
                    "BCA" => "BCA",
                    "B.cs" => "B.cs",
                    "M.SC" => "M.SC",
                    "MCA" => "MCA",
                    "B.TECH" => "B.TECH",
                    "M.TECH" => "M.TECH"
                );

                foreach ($programNames as $value => $label) {
                    echo '<option value="' . $value . '" ' . (($value == $gradeName) ? 'selected="selected"' : '') . '>' . $label . '</option>';
                } 
            ?>
        </select>
    </div>
</div>
<script>
    document.getElementById("gradeName").disabled = true;
</script>



<div class="form-group">
    <label for="subjectName" class="col-sm-2 control-label">Course name:</label>
    <div class="col-sm-10">
        <select class="form-control select2" name="subjectName" id="subjectName" style="width: 100%;" required>
            <option selected="selected" disabled>--Select--</option>
            <option value="Mathematics" <?php echo ($subjectName == 'Mathematics') ? 'selected="selected"' : ''; ?>>Mathematics</option>
            <option value="Technical" <?php echo ($subjectName == 'Technical') ? 'selected="selected"' : ''; ?>>Technical</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="SemName" class="col-sm-2 control-label">Semester</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="SemName" id="SemName" value="<?= htmlspecialchars($SemName); ?>" placeholder="">
    </div>
</div>

          <div class="form-group">
            <label for="quesSetName" class="col-sm-2 control-label">Institute Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="institute" id="institute" value="<?= $institute; ?>" placeholder="">
            </div>
          </div>

          <div class="form-group">
    <label for="quesSetName" class="col-sm-2 control-label">Exam Date</label>
    <div class="col-sm-10">
      
        <input type="date" class="form-control" name="examDate" id="examDate" value="<?= $formattedDat; ?>" placeholder="" >
    </div>
</div>

          
          <div class="form-group">
    <label for="totalMarks" class="col-sm-2 control-label">Total Marks:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="total_marks" id="total_marks" value="<?= $total_marks; ?>" placeholder="Total marks">
    </div>
</div>

<div class="form-group">
    <label for="marksPerQuestion" class="col-sm-2 control-label">Marks per Question:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="marksQuest" id="marksQuest" value="<?= htmlspecialchars($marksQuest); ?>" placeholder="Marks per question">
    </div>
</div>

          <div class="form-group">
            <label for="quesSetName" class="col-sm-2 control-label">Exam Duration (In Hours)</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="examDuration" id="examDuration" value="<?= $examDuration; ?>" >
            </div>
          </div>

          <!-- <div class="form-group">
            <label for="chapterName" class="col-sm-2 control-label">Chapter Name:</label>
            <div class="col-sm-10">
            <select class="form-control select2" name="chapterName" id="chapterName" style="width: 100%;" required>
            <option selected="selected" disabled>--Select--</option>
            <option value='1'>Relations and Functions</option><option value='2'>Inverse Trigonometric Functions</option><option value='3'>Matrices</option><option value='4'>Determinants</option><option value='5'>Continuity and Differentiability</option><option value='6'>Application of Derivatives</option><option value='7'>Integrals</option><option value='8'>Application of Integrals</option><option value='9'>Differential Equations</option><option value='10'>Vector Algebra</option><option value='11'>Three Dimensional Geometry</option><option value='12'>Linear Programming</option><option value='13'>Probability</option>           </select>
            </div>
          </div> 
          
          <div class="form-group">
            <label for="unitsName" class="col-sm-2 control-label">Units Name:</label>
            <div class="col-sm-10">
            <select class="form-control select2" name="unitsName" id="unitsName" style="width: 100%;" required>
            <option selected="selected" disabled>--Select--</option>
            <option value='1'>Unit I: Relations and Functions</option><option value='2'>Unit II: Algebra</option><option value='3'>Unit III: Calculus </option><option value='4'>Unit IV: Vectors and Three-Dimensional Geometry</option><option value='5'>Unit V: Linear Programming </option><option value='6'>Unit VI: Probability </option>           </select>
            </div>
          </div>-->
          
          <div class="form-group">
            <label for="status" class="col-sm-2 control-label">Status:</label>
            <div class="col-sm-10" required="">
            <select class="form-control select2" name="status" id="status" style="width: 100%;" data-select2-id="status" tabindex="-1" aria-hidden="true">
                     <option selected="selected" disabled>--Select--</option>
            <option value="1" <?php echo (($status=="1")?'selected="selected"':"");?>>Active</option>
            <option value="2" <?php echo (($status=="2")?'selected="selected"':"");?>>Inactive</option>
            </select> </div>

          </div>
             <a id="buttonView" class="btn btn-primary">Next</a>
          </div>
          <!-- Question List  -->
          <input type="hidden" name="quesSetId" value="<?php echo "quesSetId :$quesSetId;"  ?>">
          <div class="tab-pane" id="questionsList">
             <div id="txtTable"><b>Questions will be listed here...</b></div>
             
             <a class="btn btn-primary btnPrevious">Previous</a>
             <div class="box-footer" align="middle">
            
            <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Update Question Set">
            </div>
          </div>

        </div>
    
      <!-- /.box-body -->
      </form>
      
      </div>
      </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div></section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!--<div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div> -->
    <strong>Copyright © Jhamobi Technologies Pvt. Ltd. 2022-2023 </strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<!-- Page script -->



<!-- question list displayed using ajax -->
<script>
$(document).ready(function () {
  $('#buttonView').click(function (e) {
    var focusSet = false;

    // Validation for Question Paper Name
    if (!$('#quesSetName').val()) {
      if ($("#quesSetName").parent().next(".validation").length == 0) {
        $("#quesSetName").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter the question set name!</div>");
      }
      e.preventDefault();
      $('#quesSetName').focus();
      focusSet = true;
    } else {
      $("#quesSetName").parent().next(".validation").remove();
    }

    // Validation for Grade
    if (!$('#gradeName').val()) {
      if ($("#gradeName").parent().next(".validation").length == 0) {
        $("#gradeName").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please select Grade!</div>");
      }
      e.preventDefault();
      $('#gradeName').focus();
      focusSet = true;
    } else {
      $("#gradeName").parent().next(".validation").remove();
    }

    // Validation for Subject
    if (!$('#subjectName').val()) {
      if ($("#subjectName").parent().next(".validation").length == 0) {
        $("#subjectName").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please select Subject!</div>");
      }
      e.preventDefault();
      $('#subjectName').focus();
      focusSet = true;
    } else {
      $("#subjectName").parent().next(".validation").remove();
    }

    // Validation for Status
    if (!$('#status').val()) {
      if ($("#status").parent().next(".validation").length == 0) {
        $("#status").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please select Status!</div>");
      }
      if (!focusSet) {
        $("#status").focus();
      }
      e.preventDefault();
    } else {
      $("#status").parent().next(".validation").remove();

      // If all validations pass, proceed to the next tab or display the questions table
      var val1 = $('#quesSetName').val();
  var val2 = $('#gradeName').val();
  var val3 = $('#subjectName').val();
  var val6 = $('#status').val();
  var val7 = $('#NumQuest').val();

  // Add the following lines to get the selected program and course names
  var programNameFilter = $('#gradeName option:selected').text();
  var courseNameFilter = $('#subjectName option:selected').text();

  

  // If not the last tab, proceed to the next tab
  if ($('.nav-tabs > .active').next('li').length > 0) {
    // Make an AJAX request to a PHP script that generates the HTML for the Question list
    $.ajax({
      url: 'update_get_question.php',
      type: 'POST',
      data: {
        val1: val1,
        val2: val2,
        val3: val3,
        val6: val6,
        val7: val7,
        programNameFilter: programNameFilter, // Pass the selected program name
        courseNameFilter: courseNameFilter // Pass the selected course name
      },
      success: function (response) {
        // Append the HTML code to the #txtTable element
        $('#txtTable').html(response);

        // Trigger the click event to go to the next tab
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
      },
      error: function () {
        console.log('Error in AJAX request');
      }
    });
  }
    }
  });
});
</script>


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
<script>
//for tabs next and previous
$('.btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
  $('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

<?php
}
?>



</body>

</html>


