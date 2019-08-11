<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Try Catch</title>
</head>
<body>
<?php
    function testNumber($number) {
        if($number > 10 ) {
            throw new Exception('Value must be under 10');
        }
        return true;
    }

    try{
        testNumber(10);
        echo 'If you see this number is 10 or below';
    }catch (Exception $e){
        echo 'Message: '.$e->getMessage();
    }
?>
</body>
</html>