include_once createtable.php
<html>
<head>
<Title>Registration Form</Title>
<style type="text/css">
    body { background-color:
 #fff; border-top: solid 10px #000;
 color: #333; font-size: .85em;
 margin: 20; padding: 20;
 font-family: "Segoe UI",
 Verdana, Helvetica, Sans-Serif;
    }
    h1, h2, h3,{ color: #000; 
margin-bottom: 0; padding-bottom: 0; }
    h1 { font-size: 2em; }
    h2 { font-size: 1.75em; }
    h3 { font-size: 1.2em; }
    table { margin-top: 0.75em; }
    th { font-size: 1.2em;
 text-align: left; border: none; padding-left: 0; }
    td { padding: 0.25em 2em 0.25em 0em; 
border: 0 none; }
</style>
</head>
<body>
<h1>Register here!</h1>
<p>Fill in your name and 
email address, then click <strong>Submit</strong> 
to register.</p>
<form method="post" action="index.php" 
enctype="multipart/form-data" >
      Name  <input type="text" 
name="name" id="name"/></br>
      Email <input type="text" 
name="email" id="email"/></br>
      <input type="submit" 
name="submit" value="Submit" />
</form>
<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "user name";
$pwd = "password";
$db = "registration";
// Connect to database.
try {
    $conn = new PDO("sqlsrv:server = tcp:registration1.database.windows.net,1433; Database = registration", "admon", "{Parfenov25}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


?>
</body>
</html>
Внутри тегов PHP добавьте код PHP для подключения к базе данных.

// DB connection info
$host = "localhost\sqlexpress";
$user = "user name";
$pwd = "password";
$db = "registration";
// Connect to database.
try {
    $conn = new PDO
( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute
( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
    die(var_dump($e));
}
