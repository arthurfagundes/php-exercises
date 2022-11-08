<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08 - Calculadora de combustível gasto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" method="POST">
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <h1 class="display-1">Exercício 08 - Calculadora de combustível gasto</h1>
            </header>
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Tempo gasto:</span>
                    <input type="number" class="form-control" placeholder="Insira o tempo gasto" aria-label="Username" aria-describedby="basic-addon1" name="tempo">
                </div>
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Velocidade média:</span>
                    <input type="number" class="form-control" placeholder="Insira a velocidade média durante a viagem" aria-label="Username" aria-describedby="basic-addon1" name="velocidade">
                </div>
                <div class="d-grid gap-2 d-md-block text-start">
                    <button class="btn btn-primary" type="submit" name="result">Calcular</button>
                </div>
                <div class="d-inline-flex">
                    <?php
                    if (isset($_POST['result'])) {
                        $tempo = $_POST['tempo'];
                        $velocidade = $_POST['velocidade'];
                        $distancia = $tempo * $velocidade;
                        $litrosGastos = $distancia / 12;
                        echo "<p  class='text-success fs-3'>Velocidade: $velocidade km/h<br>
                        Tempo: $tempo h<br>
                        Distância: $distancia km<br>
                        Litros gastos: $litrosGastos L</p>";
                    }
                    ?>
                </div>
            </div>

        </div>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>