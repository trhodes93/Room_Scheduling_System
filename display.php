<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h4>---------------------------------------------------------------------------------------------------------</h4>
<h1>UNA ROOM RESERVATION SYSTEM</h1>
<h4>---------------------------------------------------------------------------------------------------------</h4>
<h3>CONFIRMATION #11324</h3>
<?php
echo "First Name:  " . $_SESSION["fname"] . "<br>";
echo "Last Name:  " . $_SESSION["lname"] . "<br>";
echo "Email:   " . $_SESSION["email"] . "<br>";
echo "Phone:  " . $_SESSION["phone"] . "<br>";
?>
<p>
<form action="index.html">
    <input type="submit" value="Update 'YOUR INFORMATION'">
</form>
</p>

<br>---RESERVATION DETAILS---<br><br>
<?php
echo "Building:  " . $_SESSION["building"] . "<br>";
echo "Room Type:  " . $_SESSION["types"] . "<br>";
echo "Date:  " . $_SESSION["needroom"] . "<br>";
echo "Beginning Time: " . $_SESSION["begintime"] . "<br>";
echo "Ending Name: " . $_SESSION["endtime"] . "<br>";
?>
<p>
<form action="1.html">
    <input type="submit" value="Update 'RESERVATION DETAILS'">
</form>
</p>

</body>
</html> 