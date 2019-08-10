<html>
<head>
    <title>Conditional Statements</title>
</head>

<body>   
    <h1>Conditional Statements</h1>
    <br>
    <?php
        $marksObtained=80;
        $passingMarks=40;
        if($marksObtained>=$passingMarks){
            echo "You passed";
        }else{
            echo "Majmune!";
        }
        echo "<hr>";
        $user_type='Admin';
        if($user_type=='Admin'){
            echo "Welcome Admin";
        }elseif($user_type="User"){
            echo "Welcome User";
        }else{
            echo "Welcome Guest";
        }
        echo "<hr>";
        if($marksObtained>=$passingMarks && $marksObtained>=80){
            echo "Mashallah care!";
        }
    ?>
</body>
</html>