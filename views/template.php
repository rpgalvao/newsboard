<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Congregação Vila Bela</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</head>
<body>
<div class="container">
    <header>
        <h2>Congregação Vila Bela - Quadro de Anúncios Digital</h2>
    </header>
    <hr>
    <p>
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </p>
    <footer>
        <h1>Congregação Vila Bela</h1>
    </footer>
</div>
</body>
</html>