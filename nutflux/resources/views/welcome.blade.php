<?php
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=dev", "dev", "dev");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Abel|Allerta+Stencil" rel="stylesheet">
    </head>



    <body>


            <div id="app">

              <example-component>  </example-component>



            </div>




        <script src="js/app.js"></script>

    </body>
</html>
