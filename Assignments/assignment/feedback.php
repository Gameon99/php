<html>
<link rel = "stylesheet" type="text/css" href="stylef.css">
    
<form action="fb.php"method="post">
<h2 align="center">Student Feedback Form</h2>
<h3 align="right" style="color:white;font-family:cursive">Scholar number&nbsp;&nbsp;<input type="number" name="scholarno" value="scholarno"/>
</h3>
<table border="1">
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
    </table>
<table border="1">    
<tr>
    <td>Sr.no</td>
    <td>Parameter</td>
    <td>5</td>
    <td>4</td>
    <td>3</td>
    <td>2</td>
    <td>1</td>
</tr>
<tr>
<td>1</td>
<td align="left">Ability to explain the concept and principle of subject.</td>
<td><input type="radio" name="radio1" value="5"/></td>
<td><input type="radio" name="radio1" value="4"/></td>
<td><input type="radio" name="radio1" value="3"/></td>
<td><input type="radio" name="radio1" value="2"/></td>
<td><input type="radio" name="radio1" value="1"/></td>
</tr>
<tr>
<td>2</td>
<td align="left">Knowledge expertise and confidence of teacher in teaching .</td>
<td><input type="radio" name="radio2" value="5"/></td>
<td><input type="radio" name="radio2" value="4"/></td>
<td><input type="radio" name="radio2" value="3"/></td>
<td><input type="radio" name="radio2" value="2"/></td>
<td><input type="radio" name="radio2" value="1"/></td>
</tr>
<tr>
<td>3</td>
<td align="left">Ability to clear doubt in and outside the classroom.</td>
<td><input type="radio" name="radio3" value="5"/></td>
<td><input type="radio" name="radio3" value="4"/></td>
<td><input type="radio" name="radio3" value="3"/></td>
<td><input type="radio" name="radio3" value="2"/></td>
<td><input type="radio" name="radio3" value="1"/></td>
</tr>
<tr>
<td>4</td>
<td align="left">Ability to conclude concepts with example.</td>
<td><input type="radio" name="radio4" value="5"/></td>
<td><input type="radio" name="radio4" value="4"/></td>
<td><input type="radio" name="radio4" value="3"/></td>
<td><input type="radio" name="radio4" value="2"/></td>
<td><input type="radio" name="radio4" value="1"/></td>
</tr>
<tr>
<td>5</td>
<td align="left">Communication skills and clarity.</td>
<td><input type="radio" name="radio5" value="5"/></td>
<td><input type="radio" name="radio5" value="4"/></td>
<td><input type="radio" name="radio5" value="3"/></td>
<td><input type="radio" name="radio5" value="2"/></td>
<td><input type="radio" name="radio5" value="1"/></td>
</tr>
<tr>
<td>6</td>
<td align="left">Punctuality and regularity in classes.</td>
<td><input type="radio" name="radio6" value="5"/></td>
<td><input type="radio" name="radio6" value="4"/></td>
<td><input type="radio" name="radio6" value="3"/></td>
<td><input type="radio" name="radio6" value="2"/></td>
<td><input type="radio" name="radio6" value="1"/></td>
</tr>
<tr>
<td>7</td>
<td align="left">Interaction and discussion with students.</td>
<td><input type="radio" name="radio7" value="5"/></td>
<td><input type="radio" name="radio7" value="4"/></td>
<td><input type="radio" name="radio7" value="3"/></td>
<td><input type="radio" name="radio7" value="2"/></td>
<td><input type="radio" name="radio7" value="1"/></td>
</tr>
<tr>
<td>8</td>
<td align="left">Attitude towards students.</td>
<td><input type="radio" name="radio8"value="5"/></td>
<td><input type="radio" name="radio8"value="4"/></td>
<td><input type="radio" name="radio8"value="3"/></td>
<td><input type="radio" name="radio8"value="2"/></td>
<td><input type="radio" name="radio8"value="1"/></td>
</tr>
<tr>
<td>9</td>
<td align="left">Monitoring students and creating interests on subject.</td>
<td><input type="radio" name="radio9"value="5"/></td>
<td><input type="radio" name="radio9"value="4"/></td>
<td><input type="radio" name="radio9"value="3"/></td>
<td><input type="radio" name="radio9"value="2"/></td>
<td><input type="radio" name="radio9"value="1"/></td>
</tr>
<tr>
<td>10</td>
<td align="left">Timely evaluation of internal assignments.</td>
<td><input type="radio" name="radio10"value="5"/></td>
<td><input type="radio" name="radio10"value="4"/></td>
<td><input type="radio" name="radio10"value="3"/></td>
<td><input type="radio" name="radio10"value="2"/></td>
<td><input type="radio" name="radio10"value="1"/></td>
</tr>
</table>
<table border="2">
  <tr>
    <td align="center">
  <br><strong>Review and comments for overall development</strong>
    </td>
  </tr>
  <tr>
 <td>
    <textarea name="textarea"></textarea>
 </td>
  </tr>
  </table>
<div align="right">
      <button type="submit" class="btn btn-primary">Next</button>
</div>
    </form>
</html>
