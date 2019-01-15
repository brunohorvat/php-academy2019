<?php

var_dump($_GET);

// Add to web address:  ?key=value&key=value....

echo  "<pre>",print_r($_GET),"</pre>";


echo $_GET["key"];