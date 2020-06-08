<?php

function validate($input){
    $inputText = filter_var($input, FILTER_SANITIZE_STRING);
    $inputText = trim($inputText);
    $inputText = strtolower($inputText);
    return $inputText;
}