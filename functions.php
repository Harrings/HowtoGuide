<!DOCTYPE html>
<html lang="en">
<head>
  <title>Functions</title>
</head>
<body>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="what.php">What it is</a></li>
		<li><a href="better.php">Why its better</a></li>
		<li><a href="setup.php">Setup</a></li>
		<li><a href="when.php">Modifiers</a></li>
		<li><a href="tips.php">Tips and Tricks</a></li>
	</ul>
</nav>
<h1>Guide to Basic use of Kint for PHP</h1>
<p>by Sean Harrington</p>
<br>
<br>
<div>
<h2>Functions to use in Kint</h2>
<p>In this section of the guide we will cover the different functions that can be used
<br>with Kint. For the next two pages of the guide
<br>we will be using the $courses array that has been used in other sections of this guide </p>
<ol>
<li><h3>Kint::dump()</h3><br>
<p><strong>Kint::dump()</strong> is the bread and butter function of Kint that allows you to view the contents
<br>of whatever is passed into the variable. You can also use <strong>d()</strong> as a shorthand. As you can see the
<br>output from the two functions is the exact same. </p>
<pre>
	<code>
	Kint::dump($courses);
	d($courses);
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
	Kint::dump($courses);
	d($courses);
?>
</li>
<li><h3>s()</h3><br>
<p><strong>s()</strong> is a function that works the same as <strong>Kint::dump()</strong> except the output is html free
<br>fashion. </p>
<pre>
	<code>
	s($courses);
	</code>
</pre>
<?php
	s($courses);
?>
<br>
</li>
<li><h3>Kint::trace()</h3><br>
<p><strong>Kint::trace()</strong> is a function that allows you to view the code surrounding the trace from your loaded web page.
<br>this allows you do to view snippets of your code without having to switch back to your source file. Here we added a new courses
<br>to our courses array and we can view the source code to see what was added with the trace. </p>
<?php
	array_push($courses, "Web Dev 2");
	Kint::trace();
?>
</li>
<li><h3>Kint::enabled()</h3><br>
<p><strong>Kint::enabled()</strong> is a function that disables/enables the Kint functions. By default it is set to enabled. Even though
<br>we have a <strong>d($courses)</strong> it will not show up as we have <strong>Kint::enabled(false)</strong> above it. I have included the
<br>trace so you can view the source code as well.  </p>
<pre>
	<code>
	Kint::trace();
	Kint::enabled(false);
	d($courses);
	</code>
</pre>
<?php
	Kint::trace();
	Kint::enabled(false);
	d($courses);
?>

<br>
<h3><a href="setup.php"><strong>Previous</strong></a><p>            </p><a href="when.php"><strong>Next</strong></a>
	</body>
</html>	