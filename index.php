<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php File</title>
</head>
<body>
    <div class="container">
       <h1> this is my first php website.</h1>
       <?php 
       # this is one line comment  

       // this is one line comment 

       /* this is multiple line comments
        */
    //    echo "THis is my sensetive info ";
    //    print "use of print";
    //    echo " \n Hello world again"; 
    //    $var1 = "raj"; 
    //    $var2 = 34 ; 
    //    echo "$var1 + $var2" ; 


    //     Operator in Php 
    //    1. Arithematic Operator 

    $var1 = 45 ; 
    $var2 = 90 ; 
    $var3 = $var1+$var2 ; 
    echo "The sum of two number is = $var3";
    echo "<br>" ; 
    $var3 = $var1*$var2 ;
    echo "The multiply of two number is = $var3"; 
    echo "<br>" ; 
    $var3 = $var1/$var2 ;
    echo "The Divide of two number is = $var3";
    echo "<br>" ; 
    $var3 = $var1-$var2 ;
    echo "The Subtraction of two number is = $var3";

    //    2. Assignment Operator 
    echo "<br>" ; 
    $newvar = $var1;
    $newvar+=1 ; 
    $newvar-=1 ; 
    $newvar*=90; 
    $newvar/=34; 
    echo "The value of newvar is = $newvar";

    //    3. Comparison Operator
    echo "<br>";
    // return boolean value 
    echo "the value of ($var1==$var2) = "; 
    echo var_dump($var1==$var2); 
    echo "<br>";
    echo "the value of ($var1>=$var2) = ";
    echo var_dump($var1>=$var2);
    echo "<br>"; 
    echo "the value of ($var1<=$var2) = ";
    echo var_dump($var1<=$var2);
    echo "<br>"; 
    echo "the value of ($var1!=$var2) = ";
    echo var_dump($var1!=$var2);
    echo "<br>"; 
    echo "the value of ($var1>$var2) = ";
    echo var_dump($var1>$var2);
    echo "<br>";
    echo "the value of ($var1<$var2) = ";
    echo var_dump($var1<$var2);  

    //    4. Logical Operator and (&&) OR(||) XOR NOT(!)
    echo "<br>";
    $newVar = (true) && (false) ; 
    echo $newVar ;
    echo "<br>";
    $newVar = (true) || (false) ; 
    echo $newVar ;
    
    echo "<br>";
    $newVar = (true) xor (true) ; 
    echo $newVar ; 



    //    5. Increment , Descrement Operator 
    echo "<br>";
    echo "Current value of var1 = 45"; 
    echo "<br>"; 
    $var1 ++ ; 
    echo "The value of var1 is = $var1";

    echo "<br>"; 
    $var1 -- ; 
    echo "The value of var1 is = $var1";

    echo "<br>"; 
    ++ $var1 ; 
    echo "The value of var1 is = $var1";

    echo "<br>"; 
    -- $var1 ; 
    echo "The value of var1 is = $var1";

       ?>
       <h1>Data Types in Php</h1>
       <?php 
       echo "There are 6 dataTypes in Php are :- Strings , FLoat , Integer , Object , Array , Boolean" ; 
    //    1. Strings 
    echo "<br>"; 
    $vars = "This is Strings" ; 
    echo $vars ; 
    echo var_dump($vars);
    //    2. Integer 
    $vars = 34 ; 
    echo $vars ;
    //    3. FLoat 
    $vars = 45.67 ; 
    echo $vars ;
    //    4. Array 
    //    5. Boolean 
    $vars = true ; 
    echo $vars ;
    //    6. Object


    // Create a constant in php 
    define("Pi",3.143) ; 
    echo Pi ; 
       ?>
    </div>
</body>
</html>