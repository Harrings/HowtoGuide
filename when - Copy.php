<!DOCTYPE html>
<html lang="en">
<head>
  <title>When to use</title>
</head>
<body>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="what.php">What it is</a></li>
		<li><a href="better.php">Why its better</a></li>
		<li><a href="setup.php">Setup</a></li>
		<li><a href="functions.php">Functions</a></li>
		<li><a href="tips.php">Tips and Tricks</a></li>
	</ul>
</nav>
<h1>Guide to Basic use of Kint for PHP</h1>
<p>by Sean Harrington</p>
<br>
<br>
<div>
<h2>Function modifiers to use in Kint</h2>
<p>In this section of the guide we will cover the different functions modifiers that can be used
<br>with Kint functions. For this page of the guide we will be using the $courses array that has 
<br>been used in other sections of this guide. All the modifiers I list can be used either with the 
<br>full name function ie (<strong>Kint::dump()</strong>) or with the html free output <strong>s()</strong> instead of
<br>the <strong>d()</strong> I use for these examples. </p>
<ol>
<li><h3>+d()</h3><br>
<p><strong>+d()</strong> adding the + before a Kint dump function will make it ignore depth limits that can sometimes occur
<br>with very complex objects. Used if you ever get the error message <strong>DEPTH TOO GREAT</strong> Other then that works the same as a standard <strong>d()</strong>.
<br>Since we are only working with simple arrays here the output will be the same.
<pre>
	<code>
	d($courses);
	+d($courses);
	</code>
</pre>
<?php
	require 'Kint.class.php';
	$courses = array(
    161 => "Program 1A",
    162 => "Program 1B",
	225 => "Discrete Math",
	290 =>"Web Development",
	);
	d($courses);
	+d($courses);
?>
<li><h3>-d()</h3><br>
<p><strong>-d()</strong> removes all previous output to screen so the dump is the first thing that shows up at the top of the screen. As you can see from the trace
<br>the code is located below this sentence but the dump will appear at the top of the screen. </p>
<pre>
	<code>
	Kint::trace();
	-d($courses);
	</code>
</pre>
<?php
	-Kint::dump($courses);
	Kint::trace();
?>

<br>
<h3><a href="functions.php"><strong>Previous</strong></a><p>            </p><a href="tips.php"><strong>Next</strong></a>
	</body>
</html>	