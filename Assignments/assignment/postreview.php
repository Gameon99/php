<html>
<? php include 'fb.php'; ?>
<? php include 'feedback.php'; ?>
<form action=postreview2.php>
<link rel = "stylesheet" type="text/css" href="styler.css">
<body>
<?php 
$conn = new mysqli("localhost","root","","project");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1="SELECT * FROM student";
if ($result1=mysqli_query($conn,$sql1))
  {
  $rowcount=mysqli_num_rows($result1);
  }
$sql2 ="SELECT avg(total) as average FROM student";

if ($result2=mysqli_query($conn,$sql2))
{
    $row=$result2->fetch_assoc();
    $avg=$row["average"];
}    
$conn->close();
?>
    <h2 align="center">Review feedback</h2><br><br>
    <table border="1">
        <tr>    
            <td >Total feedback: <?php echo $rowcount;?></td>
            <td>Faculty: <?php echo $_POST["faculty"]; ?></td>
            <td>Average: <?php echo $avg;?></td>
        </tr>
    </table><br><br>
    <div align="center">
        <button>Click for details</button>
        </div>
    </body>
    </form>
</html>