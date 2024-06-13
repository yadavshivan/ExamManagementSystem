<?php
require('C:\xampp\htdocs\assessment_internStudent\pages\questions\fpdf186\fpdf.php');
include "../../config.php";

// Create instance of FPDF class
$pdf = new FPDF();
$pdf->AddPage();



// Fetch program, semester, time, marks, date, and course from questionset table
$qID = isset($_POST['quesSetId']) ? $_POST['quesSetId'] : '';
$query = "SELECT SemName, examDuration,total_marks, examDate, subjectName, gradeName FROM questionset WHERE quesSetId = '$qID'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Extract fetched values
$semester = isset($row['SemName']) ? 'Semester: ' . $row['SemName'] : '';
$duration = isset($row['examDuration']) ? 'Time: ' . $row['examDuration'] . ' hour' : '';
$marks = isset($row['total_marks']) ? 'Marks: ' . $row['total_marks'] : '';
$date = isset($row['examDate']) ? 'Date: ' . date('Y-m-d', strtotime($row['examDate'])) : '';
$topic = isset($row['subjectName']) ? 'Topic: ' . $row['subjectName'] : '';
$course = isset($row['gradeName']) ? 'Course: ' . $row['gradeName'] : '';


// Set font
$pdf->SetFont('Arial', 'B', 18);

// Add title
$pdf->Cell(0, 10, 'Examination Paper', 0, 1, 'C');

// Add space after instructions
$pdf->Ln(10); // Adjust the value (10) for desired spacing

// Set font for content
$pdf->SetFont('Arial', 'B', 12);

/// Add program and semester
$pdf->Cell(0, 10, $topic, 0, 0, 'L'); // Left-aligned cell for program
$pdf->Cell(0, 10, $semester, 0, 1, 'R'); // Right-aligned cell for semester

// Add time and marks
$pdf->Cell(0, 10, $duration, 0, 0, 'L'); // Left-aligned cell for time
$pdf->Cell(0, 10, $marks, 0, 1, 'R'); // Right-aligned cell for marks

// Add date and course
$pdf->Cell(0, 10, $date, 0, 0, 'L'); // Left-aligned cell for date
$pdf->Cell(0, 10, $course, 0, 1, 'R'); // Right-aligned cell for course


// Add instructions using MultiCell
$instructions = "Answers All Questions";
$pdf->MultiCell($rightMargin - $leftMargin, 7, $instructions);


$pdf->SetFont('Arial', '', 12);
$instructcontent= "\nInstructions to the candidate\n\n1) Figures to the right indicate full mark.\n2) Use black or blue ballpoint pens, and avoid gel pens and fountain pens for filling the sheet\n3) Darken the bubbles completely. Do not put a tick mark or a cross mark where it is specified that you fill the bubbles completely. Half filled or over filled bubbles will not be read by the software.\n4) Never use pencils to mark your answers unless specified, in which case just stick to HB or 2B pencils only.";

$pdf->MultiCell($rightMargin - $leftMargin, 7, $instructcontent);

// Add space after instructions
$pdf->Ln(10); // Adjust the value (10) for desired spacing


// Fetch questions and options from the database
$query = "
    SELECT q.questionID, q.questionText, a.answerOpt1Text, a.answerOpt2Text, a.answerOpt3Text, a.answerOpt4Text, a.answerOpt5Text 
    FROM question q
    JOIN questionset qs ON FIND_IN_SET(q.questionID, qs.quesIdList)
    JOIN answer_options a ON q.questionID = a.questionId
    WHERE qs.quesSetId = $qID
    ORDER BY q.questionID ASC";

$result = mysqli_query($conn, $query);

// Initialize question counter
$questionNumber = 1;

// Add questions and options dynamically
while ($row = mysqli_fetch_assoc($result)) {
    // Strip HTML tags from the question text and answer options
    $questionText = trim(strip_tags($row['questionText']));
    $option1 = trim(strip_tags($row['answerOpt1Text']));
    $option2 = trim(strip_tags($row['answerOpt2Text']));
    $option3 = trim(strip_tags($row['answerOpt3Text']));
    $option4 = trim(strip_tags($row['answerOpt4Text']));
    $option5 = trim(strip_tags($row['answerOpt5Text']));

    // Add question number and text
    $pdf->MultiCell(0, 10, "Q$questionNumber: $questionText", 0, 'L');
    
    // Add options
    $options = array("(A) $option1", "(B) $option2", "(C) $option3", "(D) $option4", "(E) $option5");
    foreach ($options as $option) {
        $pdf->Cell(10, 10, "", 0, 0); // Add indentation for options
        $pdf->Cell(0, 10, $option, 0, 1);
    }

    // Increment question counter
    $questionNumber++;
}

// Save PDF content to a variable
$pdfContent = $pdf->Output('', 'S');

// Embed PDF content in an iframe
echo '<iframe src="data:application/pdf;base64,'.base64_encode($pdfContent).'" style="width:100%; height:800px;"></iframe>';
?>
