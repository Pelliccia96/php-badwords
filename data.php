<?php

$message = $_POST["message"];
$password = $_POST["password"];

?>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container text-white">
        <div class="text-center my-5">
            <h1>PHP Badwords</h1>
        </div>
        <div class="my-5">
            <h2 class="pb-3">Paragrafo: <?php echo $message ?></h2>
            <p>Parola da censurare: <?php echo $password ?></p>
        </div>
    </div>
</body>
