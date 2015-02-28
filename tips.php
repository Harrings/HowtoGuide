<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tips and Tricks</title>
</head>
<body>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="what.php">What it is</a></li>
		<li><a href="better.php">Why its better</a></li>
		<li><a href="setup.php">Setup</a></li>
		<li><a href="functions.php">Functions</a></li>
		<li><a href="when.php">Modifiers</a></li>
	</ul>
</nav>
<h1>Guide to Basic use of Kint for PHP</h1>
<p>by Sean Harrington</p>
<br>
<br>
<div>
<h2>Tips for using Kint</h2>
<p>In this section of the guide we will go over some strategies I use when using Kint
<br>and what I have found to be successful. </p>
<ol>
<li><h3>Use Kint::enabled()</h3><br>
<p>Whenever I am going to use Kint functions in my code I always include <strong>Kint::enabled(true)</strong> right 
<br>below where I put my <strong>require 'Kint.class.php'</strong> so that if I ever want to view my output without
<br>the variable dumps I simply change it to <strong>Kint::enabled(false)</strong> so that no ouput is displayed. </p>
<pre>
	<code>
	require 'Kint.class.php';
	Kint::enabled(true);
	
	</code>
</pre>
</li>
<li><h3>Bug in unknown location</h3><br>
<p>When I know that I have a bug on a certain piece of data but I am unsure of where exactly the bug is I will often
<br>call <strong>d()</strong> with a <strong>Kint::trace</strong> in any place where the data is being modified so i can track
<br>the flow of the data. Often for the last dump call I will use <strong>dd()</strong>so there is no clutter after. </p>
<pre>
	<code>
	arbitrary code modifying $somevariable
	Kint::trace();
	d($somevariable);
	arbitrary code modifying $somevariable
	Kint::trace();
	dd($somevariable);
	</code>
</pre>
</li>
<li><h3>Bug in known location</h3><br>
<p>When I know that I have a bug and I have narrowed down the area to a certain location I will call <strong>-dd()</strong> 
<br>so that all that is outputted to the screen is the variable dump and nothing else so there is no clutter.
<pre>
	<code>
	-dd($somevariable)
<br>
</li>
</ol>
<h3>Closing Thoughts</h3><br>
<p>Kint combines easy setup with easy use and clear output to make a great debugging tool for PHP. </p>
<br>
<h3><a href="when.php"><strong>Previous</strong></a>
	</body>
</html>	