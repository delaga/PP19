<?php
    $name='Mirzus';
    $full_name="Full name: ".$name;
?>

<html>
    <head>
        <title>PHP Basics</title>
    </head>
    <body>
    
       <?php echo "Ajde da se krene";
             echo "<br>";
             echo $full_name;
             echo "<br>Full name: $name";

             $year=2019;
             $pi=3.14;
             $present=true;

             echo "<br>".$year." ".$pi." ".$present;

            // $students=array();
            // $students=[];
            echo "<br>";
             $students=array('Ivo','Pero');
            print_r($students);
            echo "<br>";
            $students[]="Jozo";
            print_r($students);
            echo "<br>";
            print_r($students[1]);
            echo "<br>";
            $ucenici=array(
                "Jozo"=>"Osijek",
                "Pero"=>"Nesto",
                "Kurac"=>"Palac"
            );
            print_r($ucenici);
            echo "<br>";
            print_r($ucenici["Kurac"]);
            echo "<br>";
            $ucenici["Tea"]="Misica";
            echo $ucenici["Tea"];
            echo "<br>";
            print_r($ucenici);
            echo "<br>";
            echo "<br>";
            echo "Multidim Arrays";
            echo "<br>";
            $it=array("Jozo","Pero");
            $medic=array("Dr.Doc","Dr.No");
            $ucenici2=array(
                'it'=>array("Jozo","Pero"),
                'medic'=>array("Dr.Doc","Dr.No")
            );

            echo "<br>";
            print_r($it);
            echo "<br>";
            print_r($medic);
            echo "<br>";
            print_r($ucenici2);
            echo "<br>";
            print_r($ucenici2['it']);
            echo "<br>";
            print_r($ucenici2['medic']);
            $ucenici2['it'][1]="Ivo";
            echo "<br>";
            print_r($ucenici2['it']);
            echo "<br>";
            echo "<br>";
            echo "Array Functions";

            $ucenici3=array("Prvi","Drugi","Treci","Cetvrti","Peti");
            echo "<br>";
            echo "Count: ".count($ucenici3);
            echo "<br>";
            echo "Implode: ".implode(',',$ucenici3);
            echo "<br>";
            shuffle($ucenici3);
            print_r($ucenici3);
            echo "<br>";
            sort($ucenici3);
            print_r($ucenici3);
            echo "<br>";
            asort($ucenici);
            print_r($ucenici);
            echo "<br>";


       ?> 
    </body>
</html>