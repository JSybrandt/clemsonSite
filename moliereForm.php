<head>
<title>Moliere Request</title>
<?php
include 'depends.php';
?>
</head>
<body>
<?php
include 'header.php';
?>
<div class="w3-card-4 card">
  <header class="w3-container purple">
    <h1>Request Moliere Query</h1>
  </header>
  <div class="w3-container">

<p>The following form will request information from the MOLIERE Biometical Hypothesis Generation System. Please allow at least 24 hours for us to respond to your query. If you have any questions, please contact us at jsybran (at) clemson (dot) edu.</p>

    <form class="moliereForm" method="post">
    <table>
    <tr><td>Name:</td>
        <td><input type="text" name="name"></td></tr>
    <tr><td>Organization:</td>
        <td> <input type="text" name="organization"></td></tr>
    <tr><td>E-Mail:</td>
        <td> <input type="text" name="email"></td></tr>
    <tr><td>Keyword ID 1:</td>
        <td> <input type="text" name="keyword1"></td></tr>
    <tr><td>Keyword ID 2:</td>
        <td> <input type="text" name="keyword2"></td></tr>
    </table>
    <input type="submit" name="submit" value="Submit">
    </form>
  </div>
</div>

<script src="js/ajaxForm.js"></script>

</body>
