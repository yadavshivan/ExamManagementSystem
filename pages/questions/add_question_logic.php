<?php
session_start();
include "../../config.php";

// Assuming $conn is a valid database connection



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
    $statusIdMap = array(
        "Active" => 1,
        "Inactive" => 2,
    );
    
    // Basic Info
    $quesSetName = $_POST['quesSetName'];
    $gradeName = $_POST['gradeName'];
    $subjectName = $_POST['subjectName'];
    $status = $_POST['status'];
    $SemName = $_POST['SemName'];
    $institute = $_POST['institute'];
    $rawDate = $_POST['examDate'];
    $formattedDate = date("Y-m-d", strtotime($rawDate));
   
    
    $totalMarks = $_POST['totalMarks'];
    $marksPerQuestion = $_POST['marksPerQuestion'];
    $examDuration = $_POST['examDuration'];

    // Get the numeric values from the arrays
    $gradeId = $programIdMap[$gradeName];
    $subjectId = $courseIdMap[$subjectName];
    $correctstatus = $statusIdMap[$status];

    // Questions List
    $questionIDs = isset($_POST['selectedQuestions']) ? $_POST['selectedQuestions'] : [];
    $questionIDList = implode(",", $questionIDs);

    $quesCount = $_POST['quesCount']; 

    // Insert into the database
    $insertQuery = "INSERT INTO questionset (quesSetName, gradeId, subjectId, gradeName, subjectName, status, SemName, institute, examDate, total_marks, marksQuest, examDuration, quesIdList, createdOn, questionID, questionText, complexityLevel, createdBy, quesCount) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $insertQuery);
    mysqli_stmt_bind_param($stmt, 'siisssssisssssssss', $quesSetName, $gradeId, $subjectId, $gradeName, $subjectName, $correctstatus, $SemName, $institute, $formattedDate, $totalMarks, $marksPerQuestion, $examDuration, $questionIDList, $questionID, $questionText, $complexityLevel, $addedBy, $quesCount);

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
            alert('Question set added successfully!');
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
