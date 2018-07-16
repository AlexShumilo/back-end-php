<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15.07.2018
 * Time: 13:43
 */


if (isset($_POST['answer']) && $_POST['testID'] && $_POST['questionNumber']) {
    session_start();
    $testID = $_POST['testID'];
    $questionNumber = $_POST['questionNumber'];

    $_SESSION["test_4"]["answer{$questionNumber}"] = $_POST['answer'];

}

$array = [
    'test_4' => [
        'answer1' => 4,
        'answer2' => 9,
        'answer3' => 7
    ]
]
?>