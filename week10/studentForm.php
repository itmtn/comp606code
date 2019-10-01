<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enter New Student</title>
</head>
<body>

<h1>Enter New Student</h1>

<form method="post" action="addNewStudent.php" enctype="application/x-www-form-urlencoded">
<p><label>Student Id</label><input name="studentId" type="text"></p>
<p><label>Name</label><input name="name" type="text"></p>
<p><label>Email</label><input name="email" type="email"></p>
<p><label>Date Of Birth</label><input name="dateOfBirth" type="date"></p>
<p><input type="submit" value="Add New Student"></p>
</form>

</body>
</html>