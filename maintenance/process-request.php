<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method not allowed");
}

//incoming data from the form
$request_id = trim($_POST["request_id"] ?? "");
$unit = trim($_POST["unit"] ?? "");
$issue = $_POST["issue"] ?? "";
$status = $_POST["status"] ?? "";
$description = $_POST["description"] ?? [];
$submitdate = $_POST["submitdate"] ?? "";
$assigned_to = $_POST["assigned_to"] ?? "";

if (!is_array($topics)) {
    $topics = [];
}

/*
echo "Course: $course\n <br>";
echo "Topic: $topic\n <br>";
echo "Preferred Time: $preferredTime\n <br>";
echo "Preferred Date: $preferredDate\n <br>";
echo "Topics selected: " . implode(", ", $topics) . "<br>";
echo "Form name: $formName\n <br>";
*/

//Validation
$errors = [];
$allowedStatuses = ["In Progress", "Pending", "Completed"];

if (!in_array($status, $allowedStatuses, true)) {
    $errors["status"] = "Select a valid status.";
}

if (mb_strlen($description) < 10 || mb_strlen($description) > 500) {
    $errors["description"] = "Describe your request using 10 to 500 characters.";
}

$today = new DateTimeImmutable("today");
$allowedsubmitdate = DateTimeImmutable::createFromFormat("!Y-m-d", $submitdate);
$validDate = $allowedsubmitdate !== false && $allowedsubmitdate->format("Y-m-d") === $submitdate;

if (!$validDate) {
    $errors["submitdate"] = "Enter a valid submit date.";
} elseif ($allowedsubmitdate > $today) {
    $errors["submitdate"] = "Submit date cannot be in the future.";
}


if ($formName !== "maintenance_request") {
    $errors["form_name"] = "This form submission is not valid.";
}

//if there are no errors, display the request details
if ($errors === []) {

    echo "<h1>Request received</h1>";
    echo "<p>Issue: " . htmlspecialchars($issue, ENT_QUOTES, "UTF-8") . "</p>";
    echo "<p>Request details: " . htmlspecialchars($description, ENT_QUOTES, "UTF-8") . "</p>";
    echo "<p>Status: Pending review</p>";
} else {
    http_response_code(400);

    echo "<h1>Request could not be submitted</h1>";
    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error, ENT_QUOTES, "UTF-8") . "</li>";
    }

    echo "</ul>";
}

?>