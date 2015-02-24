<!DOCTYPE html>
<html lang="en">
<head>
  <title>Why its better</title>
</head>
<body>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="what.php">What it is</a></li>
		<li><a href="setup.php">Set Up</a></li>
		<li><a href="functions.php">Different Functions</a></li>
		<li><a href="when.php">When to use what</a></li>
		<li><a href="tips.php">Tips and Tricks</a></li>
	</ul>
</nav>
<h1>Guide to Basic use of Kint for PHP</h1>
<p>by Sean Harrington</p>
<br>
<br>
<div>
<h2>Why you should use Kint</h2>
<p>There are two major upsides to using Kint over you standard <strong>var_dump()</strong> function.
<br>The first is the extra information it conveys to the user to help in the debugging process and the 
<br>second is the presentation it gives to the information which makes it more accessible. </p>
<br>
<h3>Content</h3>
<p>The <strong>Kint :: dump()</strong> function provides added information over the standard <strong>var_dump()</strong> function.
<br>such as the line of code where the dump was called and where each piece of information came from. </p>
<p>Here we have a basic function that we will call a function to push a new class onto our <strong>$courses</strong> array from the previous page
<br>then call <strong>var_dump()</strong> then <strong>Kint :: dump()</strong> on <strong>$courses</strong> to show the difference.
<pre>
  <code>
	function addcourse($array) {
	array_push($array, "Web Dev 2");
	}
	
	addcourse($courses);
	var_dump($courses);
	Kint::dump( $courses);
	</code>
</pre>
<p>The results of the <strong>var_dump($courses)</strong> is shown below. </p>
<?php
	function addcourse($array) {
	array_push($array, "Web Dev 2");
	}
	
	addcourse($courses);
	var_dump($courses);
?>
<br>
<p>While the contents of the array are shown it does not display on what line the <strong>var_dump()</strong> was called or where the last value came from
<br>however when we call <strong>Kint :: dump()</strong> we can see this information.
<?php
	Kint::dump( $courses);
?>
 
<br>
<h3><a href="what.php"><strong>Previous</strong></a><p>            </p><a href="setup.php"><strong>Next</strong></a>
	</body>
</html>	