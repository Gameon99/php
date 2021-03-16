<html>
<? php include 'fb.php'; ?>
<? php include 'postreview.php'; ?>
<link rel = "stylesheet" type="text/css" href="styler.css">
<body>
<h2 align="center">Review Feedback (Page 2)</h2><br><br>
<?php
$conn = new mysqli("localhost","root","","project"); 
$query = "SELECT * FROM student";
$result = mysqli_query($conn,$query);
echo "<table>"; 
echo "<tr>
<td>Scholarno</td>
<td>Ques1(out of 5)</td>
<td>Ques2(out of 5)</td>
<td>Ques3(out of 5)</td>
<td>Ques4(out of 5)</td>
<td>Ques5(out of 5)</td>
<td>Ques6(out of 5)</td>
<td>Ques7(out of 5)</td>
<td>Ques8(out of 5)</td>
<td>Ques9(out of 5)</td>
<td>Ques10(out of 5)</td>
<td>Total(out of 50)</td>
</tr>";
while($row = mysqli_fetch_array($result)){ 
echo"<tr><td>" . $row['scholarno'] . "</td><td>" . $row['q1'] . "</td><td>" . $row['q2'] . "</td><td>" . $row['q3'] . "</td><td>" . $row['q4'] . "</td><td>" . $row['q5'] . "</td><td>" . $row['q6'] . "</td><td>" . $row['q7'] . "</td><td>" . $row['q8'] . "</td><td>" . $row['q9'] . "</td><td>" . $row['q10'] . "</td><td>" . $row['total'] . "</td></tr>";
}
echo "</table>";
$sql2 ="SELECT avg(total) as average FROM student";

if ($result2=mysqli_query($conn,$sql2))
{
    $row=$result2->fetch_assoc();
    $avg=$row["average"];
}    
$conn->close();
?>
    <table>
        <td>Average Feedback: <?php echo $avg;?></td>
    </table>
    </body>
</html>