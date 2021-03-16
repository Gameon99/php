<html>
<head>
       <title>Feedback</title>
       <link rel = "stylesheet" type="text/css" href="style.css">
</head> 
<body>
    <h2 style="color:Yellow" align="center" >Your feedback</h2>
    <table border="1">
<tr>
    <td>
        Department:&nbsp;<?php echo $_POST["department"]; ?>
    </td>
    <td>
        Course:&nbsp;<?php echo $_POST["course"]; ?>
    </td>
    <td>
        Semester:&nbsp;<?php echo $_POST["semester"]; ?>
    </td>
    <td>
        Subject:&nbsp;<?php echo $_POST["subject"]; ?>
    </td>
    <td>
        Faculty:&nbsp;<?php echo $_POST["faculty"]; ?>
    </td>
</tr>
    </table>
<table border="1">    
<tr>
    <td align="center">Sr.no</td>
    <td align="center">Parameter</td>
    <td align="center">Feedback</td>
</tr>
<tr>
<td>1</td>
<td align="left">Ability to explain the concept and principle of subject.</td>
<td><?php echo $_POST["radio1"]; ?></td>
</tr>
<tr>
<td>2</td>
<td align="left">Knowledge expertise and confidence of teacher in teaching .</td>
<td><?php echo $_POST["radio2"]; ?></td>
</tr>
<tr>
<td>3</td>
<td align="left">Ability to clear doubt in and outside the classroom.</td>
<td><?php echo $_POST["radio3"]; ?></td>
</tr>
<tr>
<td>4</td>
<td align="left">Ability to conclude concepts with example.</td>
<td><?php echo $_POST["radio4"]; ?></td>
</tr>
<tr>
<td>5</td>
<td align="left">Communication skills and clarity.</td>
<td><?php echo $_POST["radio5"]; ?></td>
</tr>
<tr>
<td>6</td>
<td align="left">Punctuality and regularity in classes.</td>
<td><?php echo $_POST["radio6"]; ?></td>
</tr>
<tr>
<td>7</td>
<td align="left">Interaction and discussion with students.</td>
<td><?php echo $_POST["radio7"]; ?></td>
</tr>
<tr>
<td>8</td>
<td align="left">Attitude towards students.</td>
<td><?php echo $_POST["radio8"]; ?></td>
</tr>
<tr>
<td>9</td>
<td align="left">Monitoring students and creating interests on subject.</td>
<td><?php echo $_POST["radio9"]; ?></td>
</tr>
<tr>
<td>10</td>
<td align="left">Timely evaluation of internal assignments.</td>
<td><?php echo $_POST["radio10"]; ?></td>
</tr>
</table>
<table border="1">
  <tr>
    <td align="center">
  <br><strong>Review and comments for overall development</strong>
    </td>
  </tr>
  <tr>
 <td>
    <?php echo $_POST["textarea"]; ?>
 </td>
  </tr>
  </table>
</body>
</html>