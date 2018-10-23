<html>
<head>
<title>registration HTML FORM</title>
<br><br>

<?PHP
$uName = "";
$fname = "";
$email = "";
$passW = "";
$dob = "";
$gender= "";

if (isset($_POST['Submit1'])) {
	require 'configure.php';


	$uName = $_POST['user'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
	$passW = $_POST['pass'];
    $dob = $_POST['date'];
    $gender= $_POST['gender'];

	$database = 'backlogin';

	$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database);

	if ($db_found) {

		$SQL = $db_found->prepare("INSERT INTO registration(user, fname, email, pass, date, gender) VALUES (?, ?, ?, ?, ?, ?)");

		$SQL->bind_param('ssssss', $uName, $fname, $email, $passW, $dob, $gender);
		$SQL->execute();

		$SQL->close();
		$db_found->close();

		echo '<p class="bg-success"<center>New row inserted</center></p>';

	}
	else {
        echo '<p class="bg-danger"<center>Database NOT Found</center></p>';

	}
}

?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css.map">
</head>
<body>
<div class="container">
    <center><label>Registration Form</label></center>
<FORM class="form-group" NAME ="form1" METHOD ="POST" ACTION ="registration.php">

<label>Username:</label> <INPUT TYPE = 'TEXT' class="form-control" Name ='user' placeholder="Enter Uusername"> <BR><BR>

<label>Full Name:</label><INPUT TYPE = 'TEXT' class="form-control" Name ='fname' placeholder="Enter Full Name"> <BR><BR>

<label>Email Address:</label> <INPUT TYPE = 'TEXT' class="form-control" Name ='email'  placeholder="Enter your email"> <BR><BR>
<!--<?PHP print $email ; ?>"><BR><BR>-->

<label>Password:</label> <INPUT TYPE = 'password' class="form-control" Name ='pass'  placeholder="Enter Password"> <BR><BR>

<label>Date of Birth:</label> <input type="date" class="form-control" name="date" value="enter date"> <br><br>


<label>Gender:</label>
        <input type="radio" Name = "gender" value="male"> Male
        <input type="radio" Name = "gender" value="female">Female

<br><br>
<INPUT TYPE = "Submit" class="btn btn-primary" Name = "Submit1"  VALUE = "Submit">

<INPUT TYPE = "Submit" class="btn btn-warning" Name = "reset"  VALUE = "Reset">
    <div >
        <p>Already member!<a href="index.php"> Login Here</p>
    </div>
</FORM>
</div>

</body>
</html>
