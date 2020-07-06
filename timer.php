<?php

require __DIR__ . '/vendor/autoload.php';

// $nodeJsPath = "~/www/nodejs";
// $filePath = "~/www/7950ohana.com/public_html/dev/";
$output = -1;
$error = -1;

exec("export PATH=$PATH:~/www/nodejs/bin && node ~/www/7950ohana.com/public_html/dev/index.js " . $_REQUEST['text'] . " one two=three four 2>&1", $output, $error);

// echo "<pre>$output[0]</pre>";
// echo print_r($output);

// echo "<pre>$error</pre>";

echo substr($output[3], 10, -2);


$loop = React\EventLoop\Factory::create();

$loop->addTimer(4, function () {
    echo ", hello.\n\n";
});

$loop->run();
echo "<br />Finished.\n";



/*  ASYNCHRONOUS PHP   */
//https://docs.hhvm.com/hack/asynchronous-operations/some-basics
//https://www.zend.com/blog/why-you-should-use-asynchronous-php
//https://reactphp.org/
//https://github.com/reactphp/reactphp
//https://sergeyzhuk.me/2017/06/06/phpreact-event-loop/