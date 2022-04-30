<?php
    $Q1A = $_POST["Q1"];
    $Q2A = $_POST["Q2"];
    $Q3A = $_POST["Q3"];
    $Q4A = $_POST["Q4"];
    $Q5A = $_POST["Q5"];
    $total = 0;

    if ($Q1A == "Jack") {
        $total++;
    }
    if ($Q2A == "Software Development") {
        $total++;
    }
    if ($Q3A == "Joji") {
        $total++;
    }
    if ($Q4A == "Elden Ring") {
        $total++;
    }
    if ($Q5A == "Mass") {
        $total++;
    }

    $percent = ($total / 5) * 100;

    echo "Question 1: What is my name?<br>";
    echo "   You Answered: " . $Q1A . "<br>";
    echo "   Correct Answer: Jack<br><br>";
    echo "Question 2: What field do I want to work in?<br>";
    echo "   You Answered: " . $Q2A . "<br>";
    echo "   Correct Answer: Software Development<br><br>";
    echo "Question 3: Who is my favorite artist?<br>";
    echo "   You Answered: " . $Q3A . "<br>";
    echo "   Correct Answer: Joji<br><br>";
    echo "Question 4: What is my favorite game?<br>";
    echo "   You Answered: " . $Q4A . "<br>";
    echo "   Correct Answer: Elden Ring<br><br>";
    echo "Question 5: What is my favorite street?<br>";
    echo "   You Answered: " . $Q5A . "<br>";
    echo "   Correct Answer: Mass<br><br>";
    
    echo "Total Correct: " .  $total . "<br>";
    echo "Score: " . $percent . "%<br>";
?>