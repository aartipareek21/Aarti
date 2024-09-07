<!-- Write a PHP program to enter marks of five subjects Physics, Chemistry,Biology, Mathematics and Computer, calculate percentage and grade by if else  -->

<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
	physics:   <input type="number" name="sub1" min="1" max="80" size="20"><br><br>
	Chemistry:   <input type="number" name="sub2" min="1" max="80" size="20"><br><br>
	Biology:<input type="number" name="sub3" min="1" max="80" size="20"><br><br>
	Mathematics :   <input type="number" name="sub4" min="1" max="80" size="20"><br><br>
	Computer:   <input type="number" name="sub5" min="1" max="80" size="20"><br><br>
	submit: <input type="submit" name="submit">
</form>

	</body>
</html>
<?php
      if(isset($_POST['submit'])){
      	$sub1=$_POST['sub1'];
      	$sub2=$_POST['sub2'];
      	$sub3=$_POST['sub3'];
      	$sub4=$_POST['sub4'];
      	$sub5=$_POST['sub5'];

 $total_marks=$sub1+$sub2+$sub3+$sub4+$sub5;
 $percentage=$total_marks/5;

if ($percentage >= 90) {
            $grade = 'A+';
        } elseif ($percentage >= 80) {
            $grade = 'A';
        } elseif ($percentage >= 70) {
            $grade = 'B+';
        } elseif ($percentage >= 60) {
            $grade = 'B';
        } elseif ($percentage >= 50) {
            $grade = 'C+';
        } elseif ($percentage >= 40) {
            $grade = 'C';
        } else {
            $grade = 'F';
        }

        echo "<h2>Results:</h2>";
        echo "Total Marks: $total_marks<br>";
        echo "Percentage: " . number_format($percentage, 2) . "%<br>";
        echo "Grade: $grade";
    }

      
?>

