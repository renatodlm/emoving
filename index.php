<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-moving</title>
    <!-- Boostrap 5.1.3 -->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <?php
            for ($i = 0; $i < 12; ++$i) {
            ?>
                <div class="col-md-3">
                    <h4>ESCOLHA A MELHOR SOLUÇÃO</h4>
                    <p>Oferecemos três soluções corporativas para encaixar na realidade da sua empresa.</p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
<!-- jQuery 3.6.0 -->
<script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
<!-- Boostrap JS Bundle -->
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Main JavaScript -->
<script src="./js/main.js"></script>

</html>