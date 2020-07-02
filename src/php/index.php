Hello World! You've reached <?php print($_SERVER['REQUEST_URI']); ?>

<br />
<h3>Environment Variables</h3>
<pre>
    <code>
<?php
while (list($var,$value) = each ($_ENV)) {
    echo "$var => $value <br />";
}
?>
    </code>
</pre>

<br />
<h3>var_dump(get_defined_vars());</h3>
<pre>
    <code>
<?php
var_dump(get_defined_vars());
?>
    </code>
</pre>


