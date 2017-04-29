# simple_realtime_XmlHttpRequest
A simple RealTime search using XmlHttpRequest

This repository demostrates a simple realtime search using:
<ul>
  <li>Frontend - HTML, JavaScript, CSS</li>
  <li>Backend - PHP, MySQL stored procedure</li>
</ul>

<h3>What it does?</h3>
<ol>
  <li>User enters keyword into search box</li>
  <li>JS makes an Ajax call to server based on keyword</li>
  <li>Server queries MySQL using stored procedure and returns results</li>
  <li>Browser displays a list of US cities based on keyword</li>
</ol>

<h3>Getting started</h3>
<ol>
  <li>Install MAMP, or WAMP, LAMP</li>
  <li>Enter MySQL CLI interface, copy codes from <code>sql_get_started.sql</code> and <code>america_major_cities.sql</code>to insert some data into MySQL</li>
  <li>Go to http://localhost:8888/&lt;path to the index.html&gt;</li>
</ol>
