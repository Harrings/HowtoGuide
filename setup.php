<!DOCTYPE html>
<html lang="en">
<head>
  <title>Setup</title>
</head>
<body>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="what.php">What it is</a></li>
		<li><a href="better.php">Why its better</a></li>
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
<h2>Basic Setup</h2>
<p>There is a saying that the best workout is the one you actually do and I feel this holds true for
<br>programming tools as well. There is no point in having a great tool if the set up is so complex it
<br>becomes difficult to use. This is where Kint shines as it is very easy to set up. You can either do an
<br>install by hand or use composer. </p>
<h3>Manual Install</h3>
<p>This is the way I would recommend setting up Kint if you do not already have composer set up on your machine. </p>
<ol>
<li>Download Kint onto your machine either by clicking <a href="https://github.com/raveren/kint/archive/v0.9.zip">here</a> or you can navigate to the Kint website
<br>by clicking <a href="http://raveren.github.io/kint/">here</a>.</li>
<li>Extract/unpack the Kint folder somewhere that will be accesible by your php files. I chose to to unpack it in the same directory as my PHP files for the purpose
<br>of this guide. </li>
<li>Add the line <strong>require 'Kint.class.php';</strong> at the top of any files that will use the Kint functions. Since I unpacked my directory in same file 
<br>as my PHP files no extra path is needed but if you unpacked in a different place then you would need to add the file path to the require statement. </li>
<li>You are now set up and ready to use Kint. </li>
</ol>
<h3>Composer</h3>
<ol>
<li>If you do not already have Composer set up on your machine you can downloand and install it at the composer website <a href="https://getcomposer.org/">here</a></li>
<li>Create a new file called <strong>composer.json</strong> in the directory with your php files and copy and paste the information found <a href="composer.html">here</a> into the document. </li>
<li>Open up your command prompt and navigate to your project directory and start composer by typing in <strong>composer</strong> then once composer is running enter in the following line.
<br>
<pre>
	<code>
	php composer.phar install
	</code>
</pre>
<p>Here is a screenshot of what it should look like. <img src="composer.png" alt="Composer" height="334" width="665"> </li>
<li>Add the line <strong>require 'Kint.class.php';</strong> at the top of any files that will use the Kint functions. Since I unpacked my directory in same file 
<br>as my PHP files no extra path is needed but if you unpacked in a different place then you would need to add the file path to the require statement. </li>
<li>You are now set up and ready to use Kint. </li>
</ol>

<br>
<h3><a href="better.php"><strong>Previous</strong></a><p>            </p><a href="functions.php"><strong>Next</strong></a>
	</body>
</html>	