<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="main.css">
<title>My Webdesign Skills</title>

</head>
<body>
<?php
echo "My first PHP script!";
?>
<h1>I know HTML</h1>
<p>I know basic HTML. Although I am more on the data side of computer programming, 
I felt it was important that I know the basics of building a website. These skills 
come in handy especially when web scraping, but I can also post data or graphics online
for distribution to interested and relevant audiences.
</p>

<p><a href="https://www.debraray.net">Click here to view my actual website!</a></p>

<h2> My favorite image </h2>
<p> This is one of my favorite images. I took this picture not far from where I grew up in Arizona at an abandoned town. </p>
<img src="C:\Users\rayde\iCloudDrive\GitHub\HTML-CSS-Javascript_Project\assets\PICT0207.JPG" alt="Window Picture" style="display:block;width:252px;height:189px;margin-left:auto;margin-right:auto;">
<br>

<h2> I can also create tables </h2>
<br>
<table>
  <tr id="t01">
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  <tr>
    <td>Debra</td>
    <td>Ray</td>
  </tr>

</table>
<br>
<h2> I can also connect tables to SQL databases </h2>
<p> This uses PHP </p>
<script>
<?php

$con = mysqli_connect("127.0.0.1",'root','TESTPASSWORD1','dataschema1');
if (!$con) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;;
}

mysqli_select_db($con,"dataschema1");
$sql="SELECT * FROM census LIMIT 20";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Zipcode</th>
<th>Population</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Zip Code ZCTA'] . "</td>";
  echo "<td>" . $row['2010 Census Population'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</script>
</body>
</html>