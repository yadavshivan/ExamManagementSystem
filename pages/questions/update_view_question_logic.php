<?php
session_start();
echo "POST Data: " . print_r($_POST, true) . "\n";
include "../../config.php";

    

error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    // Associative array for mapping program names to numeric values
    $programIdMap = array(
        "BCA" => 1,
        "B.cs" => 2,
        "M.SC" => 3,
        "MCA" => 4,
        "B.TECH" => 5,
        "M.TECH" => 6,
    );

    // Associative array for mapping course names to numeric values
    $courseIdMap = array(
        "Mathematics" => 1,
        "Technical" => 2,
    );
   
    
    // Extracting quesSetId
    $quesSetId = intval(substr($_POST['quesSetId'], strpos($_POST['quesSetId'], ':') + 1));

    // Basic Info
    $quesSetName = $_POST['quesSetName'];
    $gradeName = $_POST['disabledGradeName'];
    $subjectName = $_POST['subjectName'];
    $status = $_POST['status'];
    $SemName = $_POST['SemName'];
    $institute = $_POST['institute'];
    $rawDate = $_POST['examDate'];
    $formattedDate = date("Y-m-d", strtotime($rawDate));
   
    
    $totalMarks = $_POST['total_marks'];
    $marksPerQuestion = $_POST['marksQuest'];
    $examDuration = $_POST['examDuration'];

    // Get the numeric values from the arrays
    $gradeId = $programIdMap[$gradeName];
    $subjectId = $courseIdMap[$subjectName];
   
    // Questions List
    $questionIDs = isset($_POST['selectedQuestions']) ? $_POST['selectedQuestions'] : [];
    $questionIDList = implode(",", $questionIDs);

    $quesCount = $_POST['quesCount']; 

    // Insert into the database
    $updateQuery = "UPDATE questionset 
                SET quesSetName = ?, 
                    gradeId = ?, 
                    subjectId = ?, 
                    gradeName = ?, 
                    subjectName = ?, 
                    status = ?, 
                    SemName = ?, 
                    institute = ?, 
                    examDate = ?, 
                    total_marks = ?, 
                    marksQuest = ?, 
                    examDuration = ?, 
                    quesIdList = ?, 
                    createdOn = NOW(), 
                    questionText = ?, 
                    complexityLevel = ?, 
                    createdBy = ?, 
                    quesCount = ?
                WHERE quesSetId = ?";

$stmt = mysqli_prepare($conn, $updateQuery);
mysqli_stmt_bind_param($stmt, 'siisssssissssssssi', $quesSetName, $gradeId, $subjectId, $gradeName, $subjectName, $status, $SemName, $institute, $formattedDate, $totalMarks, $marksPerQuestion, $examDuration, $questionIDList, $questionText, $complexityLevel, $addedBy, $quesCount, $quesSetId);

    // Initialize parameters outside the loop
    $questionID = $questionText = $complexityLevel = $addedBy = null;

    // Loop through selected questions and set parameters
    foreach ($questionIDs as $questionID) {
        // Retrieve data for the selected question
        $result = mysqli_query($conn, "SELECT * FROM question WHERE questionID = $questionID");
        $row = mysqli_fetch_assoc($result);

        // Set parameters for the prepared statement
        $questionID = $row['questionID'];
        $questionText = $row['questionText'];
        $complexityLevel = $row['complexityLevel'];
        $addedBy = $row['addedBy']; 
    }

    // Execute the prepared statement after the loop
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_error($stmt)) {
        echo "Error: " . mysqli_stmt_error($stmt);
    } else {
        // Display a prompt box and redirect to view_question_paper.php
        echo "<script>
            alert('Question set Updated successfully!');
            window.location.href = 'view_question_paper.php';
        </script>";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    // Form not submitted, handle accordingly
    echo "Form not submitted!";
}

// Close the database connection
mysqli_close($conn);
?>
