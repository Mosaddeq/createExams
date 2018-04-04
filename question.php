<!DOCTYPE html>

<html>
<head>
<meta charset ="utf-8" />
 <title>quizzer </title>
 <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
<header>
<div class="container">
<h1>php quiz</h1>
</div>
</header>
<main>
<div class = "container">
 <div class="current">Question 1 of 5</div>
 <p class="question">
    what runs on server?
</p>
<form method="post" action="process.php">
    <ul class="choices">
        <li><input name="choice" type="radio" value="1" />php</li>
        <li><input name="choice" type="radio" value="1" />jva</li>
        <li><input name="choice" type="radio" value="1" />c</li>
        <li><input name="choice" type="radio" value="1" />py</li>
</ul>
<input type="submit" value="Submit" />

</form>
</div>
</main>



</div>
</body>
</html>