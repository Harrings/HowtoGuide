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
<h3>Content</h3>
<p>The <strong>Kint :: dump()</strong> function provides added information over the standard <strong>var_dump()</strong> function.
<br>such as the line of code where the dump was called and the calling function or method. </p>
<p>Here we have a basic function that we will call a function to push a new class onto our <strong>$courses</strong> array from the previous page
<br>then call <strong>var_dump()</strong> then <strong>Kint :: dump()</strong> on <strong>$courses</strong> to show the difference.
<pre>
  <code>
	function addcourse(&$array) {
	array_push($array, "Web Dev 2");
	var_dump($array);
	Kint::dump( $array);
	}
	
	addcourse($courses);
	</code>
</pre>
<p>The results of the <strong>var_dump($array)</strong> is shown below. </p>
<?php
	require 'Kint.class.php';
	$courses = array(
    161 => "Program 1A",
    162 => "Program 1B",
	225 => "Discrete Math",
	290 =>"Web Development",
	);
	function addcourse(&$array) {
	array_push($array, "Web Dev 2");

	var_dump($array);
?>
<p>While the contents of the array are shown it does not display on what line the <strong>var_dump()</strong> was called or where the last value came from
<br>however when we call <strong>Kint :: dump()</strong> we can see that the dump was called on line 60 in the function addcourse(). </p>
<?php
	Kint :: dump($array);
	}
	
	addcourse($courses);
?>
<p>While this information may seem painfully obvious in this context when working with more complex php projects with many functions/method across different
pages being able to immediatly identify where the information came from can be very helpful </p>
<h3>Presentation</h3>
<p>The Kint functions display information in a much more user friendly format and allow for easier debugging and better understanding
<br>of what is being displayed. There a myriad of situations in which the display format of <strong>Kint :: dump()</strong> is helpful
<br>but here will cover two. First its ability organize and display data and second its ability to classify what type of data it is dealing with. </p>
<p>Here we have a multidemsional array of cars with how many are in stock and how many have been sold. We will call <strong>var_dump($cars)</strong> then
<br><strong>Kint :: dump($cars)</strong> to show the difference.
<pre>
  <code>
  $cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  </code>
</pre>
<?php
	$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  var_dump($cars);
  Kint::dump($cars);
 ?>
 <p>With <strong>var_dump()</strong> we are forced to view the entire array printed out in order however with <strong>Kint :: dump()</strong> we get a 
<br>chart that shows the array in a format that is much easier to understand and interpret </p>
 <p>Kint also has the ability to automatically classify what the data in array means. Here we have a string holding the number of a color
 <br>and an intiger with a timestamp. When we call <strong>Kint :: dump()</strong> it will recognize what the data is and display it in a user
 <br>friendly format. </p>
 <pre>
  <code>
	$color="#730";
	$info=1424827818;
  </code>
</pre>
<?php
	$color="#730";
	$info=1424827818;
	Kint::dump($color);
	Kint::dump($info);
?>
 
 
<br>
<h3><a href="what.php"><strong>Previous</strong></a><p>            </p><a href="setup.php"><strong>Next</strong></a>
	</body>
</html>	