<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" method="POST">
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <h1 class="display-1">Exercício 07</h1>
            </header>
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Valor da prestação:</span>
                    <input type="number" class="form-control" placeholder="Insira o valor da prestação" aria-label="Username" aria-describedby="basic-addon1" name="valor">
                </div>
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Tempo em atraso:</span>
                    <input type="number" class="form-control" placeholder="Insira o tempo em atraso em dias" aria-label="Username" aria-describedby="basic-addon1" name="tempo">
                </div>
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Taxa:</span>
                    <input type="number" class="form-control" placeholder="Insira o percentual da taxa" aria-label="Username" aria-describedby="basic-addon1" name="taxa">
                </div>
                <div class="d-grid gap-2 d-md-block text-start">
                    <button class="btn btn-primary" type="submit" name="result">Calcular</button>
                </div>
                <div class="d-inline-flex">
                    <?php
                    if (isset($_POST['result'])) {
                        $valor = $_POST['valor'];
                        $tempo = $_POST['tempo'];
                        $taxa = $_POST['taxa'];
                        $prestacao = $valor + ($valor * ($taxa / 100) * $tempo);
                        echo "<p  class='text-danger fs-3'>Valor da prestação atual: R$$prestacao</p>";
                    }
                    ?>
                </div>
            </div>

        </div>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>