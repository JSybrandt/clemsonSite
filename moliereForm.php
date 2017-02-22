<head>
<title>Moliere Request</title>
<?php
include 'depends.php';
?>
</head>
<body>
<?php
include 'navbar.php';
?>
<h2>Request Moliere Query</h2>
<p>
The following form will request information from the MOLIERE Biometical Hypothesis Generation System. Please allow at least 24 hours for us to respond to your query. If you have any questions, please contact us at jsybran (at) clemson (dot) edu.
</p>
<form method="post" action="/actions/moliereFormAction.php">

Name: <input type="text" name="name">
Organization: <input type="text" name="organization">
E-Mail: <input type="text" name="email">
Keyword ID 1: <input type="text" name="keyword1">
Keyword ID 2: <input type="text" name="keyword2">
<input type="submit" name="submit" value="Submit">
</form>
</body>
