<?php 
function isValidName($name) {
    return preg_match("/^[a-zA-Z\s]+$/", $name);
}

function isValidEmail($email) {
    
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>