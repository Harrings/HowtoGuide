<!DOCTYPE html>
<html lang="en">
<head>
  <title>What it is</title>
</head>
<body>
<nav>
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="better.html">Why its better</a></li>
		<li><a href="setup.html">Set Up</a></li>
		<li><a href="functions.html">Different Functions</a></li>
		<li><a href="when.html">When to use what</a></li>
		<li><a href="tips.html">Tips and Tricks</a></li>
	</ul>
</nav>
<h1>Guide to Basic use of Kint for PHP</h1>
<p>by Sean Harrington</p>
<br>
<br>
<div>
<h2>What is Kint</h2>
<p> Kint is a debugging tool that adds in new functionality to php to help with the debugging process.
<br>It adds extra functions to complement or replace var_dump() and debug_backtrace() that allow you to view
<br>more information in an easier to read to format. </p>
<p>All you need to do is have Kint installed (<a href="setup.html">Basic Install Guide</a>) and then you can get
<br>started with calling Kint functions.</p>
<p>Here is a basic example of how it works.
<P>Here we have a basic PHP snippet with only a simple array called <strong>$_courses</strong> filled with course numbers
<br>as the key and course name as the value</p>
<pre>
  <code>
  $courses = array(
    161 => "Program 1A",
    162 => "Program 1B",
	225 => "Discrete Math",
	290 =>"Web Development",
	);
	  </code>
</pre>

<p>To use the Kint you need to require the Kint class PHP files then call a Kint function for this example we will use
<br><strong>Kint::dump( )</strong> which shows the contents of the variable inside the function.
<pre>
  <code>
	require 'Kint.class.php';
	Kint::dump( $courses);
  </code>
</pre>
<p>Now once we load the page in question in our browser we can see the Kint output showing the contents of the variable <strong>$_courses</strong>
<?php
require 'Kint.class.php';
$courses = array(
    161 => "Program 1A",
    162 => "Program 1B",
	225 => "Discrete Math",
	290 =>"Web Development",
	);
Kint::dump( $courses);
?>

<br>
<h3><a href="home.html"><strong>Previous</strong></a><p>            </p><a href="better.html"><strong>Next</strong></a>
	</body>
</html>	