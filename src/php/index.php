<?php 
require __DIR__ . '/vendor/autoload.php';

use Aws\S3\S3Client;
$s3 = new Aws\S3\S3Client([
    'version' => 'latest',
    'region' => 'us-east-1'
]);

$buckets = $s3->listBuckets([]);
foreach ($buckets['Buckets'] as $bucket) {
    echo $bucket['Name'] . "\n";
}

?>

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
//var_dump(get_defined_vars());
?>
    </code>
</pre>


