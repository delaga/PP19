<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom Functions</title>
</head>
<body>
<?php
    function potvdiEmail($email) {
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            return true;
        }else {
            return false;
        }
    }

    if(potvdiEmail('mirza@ht.hr')){
        echo "Format je OK";
    }else{
        echo "Format nije OK";
    }

?>
</body>
</html>