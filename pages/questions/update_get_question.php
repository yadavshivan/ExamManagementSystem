<script>
    $(function () {
        $('#example1').DataTable();

        // Add a click event handler to the checkbox
        $('input[name="selectedQuestions[]"]').on('click', function () {
    var count = $('input[name="selectedQuestions[]"]:checked').length;
    $('#quesCount').val(count);
    console.log('Updated quesCount:', count);
});


        // Your existing DataTable initialization code
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        });
    });
</script>

<div class="tab-pane" id="questionsList">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box-body table-responsive no-padding">
                    <!-- /.box-header -->
                    <div class="box-body">
                    <input type='hidden' name='quesCount' id='quesCount' value='0'>

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th name="questionID">Ques Id</th>
                                    <th name="questionText" style="width: 520px;">Ques Text</th>
                                    <th name="complexity">Complexity</th>
                                    <th name="gradeNameinput">Program</th>
                                    <th name="subjectName">Course</th>
                                    <td name="createdOn">Added On</td>
                                    <td name="createdBy">Added By</td>
                                    <th name="selectedQuestions">Choose</th>
                                
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $conn=mysqli_connect("localhost","root","","jhamobi_intern_SSY");
                                $programNameFilter = $_POST['programNameFilter']; // get the selected program name
                                $courseNameFilter = $_POST['courseNameFilter']; // get the selected course name
                              

                                // Modify the query to include the filters
                                $result = mysqli_query($conn, "SELECT * FROM question WHERE gradeName = '$programNameFilter' AND subjectName = '$courseNameFilter'");

                               
                                $count = 0; // Initialize the count variable
                               
                                while ($row = mysqli_fetch_array($result)) {
                                    $questionID = $row['questionID'];
                                    $questionText = $row['questionText'];
                                    $complexityLevel = $row['complexityLevel'];
                                    $gradeNameinput = $row['gradeName'];
                                    $subjectName = $row['subjectName'];
                                    $addedOn = $row['addedOn'];
                                    $addedBy = $row['addedBy'];
                                    
                                    echo "<tr>
                                        <td name='questionID'>$questionID</td>
                                        <td name='questionText'>$questionText</td>
                                        <td 'complexityLevel'>$complexityLevel</td>
                                        <td 'gradeName'>$gradeNameinput</td>
                                        <td 'subjectName'>$subjectName</td>
                                        <td 'addedOn'>$addedOn</td>
                                        <td 'addedBy'>$addedBy</td>
                                        <td style='min-width:100px'>
                                            <input type='hidden' name='questionID' value='$questionID'>
                                            <input type='checkbox' name='selectedQuestions[]' style='transform: scale(1.4);' value='$questionID'>
                                        </td>";
                                    ?>
                                <?php
                                echo "</tr>";
                                }
                                ?>
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
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    
</div>
