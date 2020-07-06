<html>

<body>
    <?php

    echo 'Hello ';

    // $nodeJsPath = "~/www/nodejs";
    // $filePath = "~/www/7950ohana.com/public_html/dev/";
    $output = -1;
    $error = -1;

    exec("export PATH=$PATH:~/www/nodejs/bin && node ~/www/7950ohana.com/public_html/dev/index.js " . $_REQUEST['text'] . " one two=three four 2>&1", $output, $error);

    // echo "<pre>$output[0]</pre>";
    // echo print_r($output);

    // echo "<pre>$error</pre>";

    echo substr($output[3], 10, -2);

    ?>
</body>

</html>