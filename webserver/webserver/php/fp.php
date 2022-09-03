<html>
    <head>
        <title>www.webserver</title>
    </head>
<body>
<h1>welcome to my first page</h1>

<form action="phpindex.php" method="post">
Enter your first name:<input type="text" name="fname"><br>
Enter your second name:<input type="text" name="lname"><br>
Enter your ninNumber:<input type="text" name="nin"><br>
Enter your date of birth:<input type="date" name="dob"><br>
Enter your tribe:<input type="text" name="tribe"><br>
Enter your place of residence:<input type="text" name="location"><br>
Enter your village birth:<input type ="text" name="village"><br>
Enter your job title:<input type="text" name="job"><br>
Enter your mother's first name:<input type="text" name="motherfname"><br>
Enter your mother's last name:<input type="text" name ="motherlname"><br>
Enter your father's first name:<input type="text" name="fatherfname"><br>
Enter your father's last name:<input type ="text" name="fatherlname"><br>
Enter your email address:<input type="email" name="mail"><br>
Enter your phone contact:<input type="number" name="phone"><br>
apple:<input type="text" name="fruit[]" value="apple"><br>
mango:<input type="text" name="fruit[]" value="mango"><br>
orange:<input type="text" name="fruit[]" value="orange"><br>
<input type="submit">
	</form>

<?php
    echo "This is the first paragraph in my page</br>";



    $num1=10;
    $num2=40;
    $answer=$num1+$num2;

    echo "the sum of two numbers is ",$answer, "</br>";

    function maxfunc($num1, $num2,$num3){
        $result=$num1+$num2+$num3;
        echo "the sum of two numbers is:$result</br>";

        if($num1>$num2 && $num1>$num3){
            echo "$num1 is greater than or equal to $num2 and $num3";
        }
        elseif($num2>$num1 && $num2>$num3){
            echo "$num2 is greater than or equal to $num1 and $num3";
        }
        elseif($num3>$num1 && $num3>$num2){
            echo "$num3 is greater than or equal to $num1 and $num2";
        }
        
        
    }
    
    
    maxfunc(10,50,1000);
?>
</body>
</html>