<head>
<title>Moliere Request</title>
<?php
include 'depends.php';
?>
<script src="js/ajaxForm.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
<div class="w3-card-4 card">
  <header class="w3-container purple">
    <h1>Request MOLIERE Query</h1>
  </header>
  <div class="w3-container">

<p class="red">WARNING: DUE TO SYSTEM LIMITATIONS, MOLIERE QUERIES HAVE NOT YET BEEN AUTOMATED. WE WILL RESPOND TO REQUESTS AS WE ARE ABLE.</p>
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
    <div class="g-recaptcha" data-sitekey="6LcpmBYUAAAAALGw7BKUGe6dGC0qEr7hBMYSi9ha"></div>
    <input type="submit" name="submit" value="Submit">
    </form>
  <p class="resultText"></p>
  </div>
</div>


</body>
