<html>
<? php include 'fb.php'; ?>
<? php include 'feedback.php'; ?>
    <head>
       <title>MANIT</title>
       <link rel = "stylesheet" type="text/css" href="styler.css">
    </head>
    <form action="postreview.php" method="post">
    <body>
        <h2 align="center">Feedback</h2><br><br>
        <table>
<tr>
    <td>
        <label for="department">Department </label><select id="department" name="department">
        <option value="CSE">CSE</option>
        <option value="MECH">MECH</option>
        <option value="ECE">ECE</option>
        <option value="EE">EE</option>
        <option value="CIVIL">CIVIL</option>
        <option value="CHEMICAL">CHEMICAL</option>
        <option value="METALLURGY">METALLURGY</option>
        <option value="ARCHITECTURE">ARCHITECTURE</option>
        <option value="PLANNING">PLANNING</option>
        </select>
    </td>
    <td>
        <label for="course">Course </label><select id="course" name="course">
        <option value="BTECH">BTECH</option>
        <option value="BARCH">BARCH</option>
        </select>
    </td>
    <td><label for="semester">Semester </label><select id="semester" name=semester>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
    </td>
    <td>
        <label for="subject">Subject name </label><select id="subject" name="subject">
        <option value="OPTIONAL">OPTIONAL</option>
        <option value="BRANCH">BRANCH</option>
        </select>
    </td>
    <td>
        <label for="faculty">Faculty </label><select id="subject" name="faculty">
        <option value="Prof.Yatendra Sahu sir">Prof.Yatendra Sahu sir</option>
        <option value="Other">Other</option>
        </select>
    </td>
</tr>
    </table><br><br>
        <div align="center">
        <button>Submit</button>
        </div>
    </body>
    </form>    
</html>