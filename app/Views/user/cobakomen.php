<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0&appId=424111672365062&autoLogAppEvents=1" nonce="avYHCDft"></script>
</head>
<body>
    <h1>hello world</h1>

    <?php
    $uri = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    ?>

    <div class="fb-comments" data-href="<?= $uri ?>" data-width="" data-numposts="5"></div>
</body>
</html>