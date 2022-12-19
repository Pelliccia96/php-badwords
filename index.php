<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container text-white">
        <div class="text-center text-primary my-5">
            <h1>PHP Badwords</h1>
        </div>
        <div class="row py-5">
            <div class="col-md-6">
                <form action="data.php" method="POST">
                    <div class="mb-5">
                        <label for="" class="form-label">Paragrafo</label>
                        <input type="text" class="form-control" name="message">
                    </div>
                    <div class="mb-5">
                        <label for="" class="form-label">Parola da censurare</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <button class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
