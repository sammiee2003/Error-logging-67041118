<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function countDown()
{
    $number = 12; 
    try {
        throw new Exception('');
    } catch (Exception $e) {
        if ($number >= 0 && $number <= 10) {
            return 'Er is iets goed gegaan';  
        } else {
            $log_file = "./errors.log"; 
            ini_set("log_errors", TRUE);  
            ini_set('error_log', $log_file); 
            error_log("er is iets fout gegaan", 3, $log_file); 
        }
    } 
}

echo countDown();
?>
</body>
</html>