<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="quiztemplate.css">
    <title>QuizTemplate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="nav">
    <a href="home.php"><i class="fa fa-home" style="font-size:27px"></i></a>
    
    <a href="home.php"><i class="fa fa-power-off" style="font-size:25px"></i></a>
</div>




<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once('connection.php');
// Attempt select query execution
$n=rand(1,5);
$sql = "SELECT * FROM tblquiz WHERE _id='$n'";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
           /* echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Question</th>";
                echo "<th>answer1</th>";
                echo "<th>answer2</th>";
                echo "<th>answer3</th>";
            echo "</tr>";*/
        while($row = mysqli_fetch_array($result)){
           // print_r($row);
            
            $answers=array();
            $answers[0]=$row['answer1'];
            $answers[1]=$row['answer2'];
            $answers[2]=$row['answer3'];
            $answers[3]=$row['correctanswer'];
            shuffle($answers);


            echo "<div class='quiz'>";
            echo "<h3>Welcome to the MINI QUIZ</h3>";
            echo "<h4>Question</h4>";
            echo $row['question'];
            echo "<br>";
            for ($i=0; $i < 4; $i++) { 
                $j=$i+1;
                echo "<br>".$j.").".$answers[$i];

            }

             echo "<br><br>";

            echo "<br><form method='post' action='quiztemplate.php'><center><input type='text' name='enter' placeholder='Enter your answer'>
			<input type='hidden' name='corans' value ='" .array_search($row['correctanswer'],$answers)."' placeholder='Enter your answer'></center><br>";
            echo "<center><b><input type='submit' name = 'submit' value='Enter'></b></center></form>";
            echo "</div>";

			if(isset($_POST['submit']))
{

$x = $_POST['enter']-1;
$y = $_POST['corans'];	
	
if ($x < 4 ){
if (($y == $x) && (!is_null($x)) ){
	 echo "<script type='text/javascript'> 
                            alert('Answer is correct');
                            </script>";
	/* echo sweetAlert("Sucesso!", "As informações foram atualizadas.", "success");*/
}
else{
	 echo "<script type='text/javascript'> 
                            alert('Answer is incorrect');
                            </script>";
}
}else{
		 echo "<script type='text/javascript'> 
                            alert('Please Enter Correct Choice');
                            </script>";
}	
}





			
			
			
            //validate answer
            /*if (isset($_POST['submit'])) {
                $entered_answer=$_POST['enter'];
                $check=$answers[$entered_answer-1];
                if($row['correctanswer']==$check){
                    echo "<script type='text/javascript'> 
                            prompt('Answer is correct');
                            </script>";
                }else{
                    echo "<script type='text/javascript'> 
                            alert('Answer isn't correct');
                            </script>";
                }
            }*/
            
            /*echo "<tr>";
                echo "<td>" . $row['ques']. "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ans1'] . "</td>";
                echo "<td>" . $row['ans2'] . "</td>";
                echo "<td>" . $row['ans3'] . "</td>";
            echo "</tr>";*/
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
// Close connection
mysqli_close($connection);
?>






</body>
</html>