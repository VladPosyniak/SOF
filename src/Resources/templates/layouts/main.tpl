<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{block name=title}Default{/block}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container text-center">

    {block name=content}{/block}

</div>
</body>
<script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
        crossorigin="anonymous"></script>
<script src='js/bootstrap.min.js'></script>
{block name=js}{/block}
</html>