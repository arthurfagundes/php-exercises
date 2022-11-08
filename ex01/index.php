<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="calculator.php" method="POST">
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <h1 class="display-1">Calculadora PHP</h1>
            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Número 01:</span>
                    <input type="number" class="form-control" placeholder="Insira o primeiro número" aria-label="Username" aria-describedby="basic-addon1" name="number01">
                </div>
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Número 02:</span>
                    <input type="number" class="form-control" placeholder="Insira o segundo número" aria-label="Username" aria-describedby="basic-addon1" name="number02">
                </div>
                <div class="d-grid gap-2 d-md-block text-center">
                    <button class="btn btn-primary" type="submit" name="add">Somar</button>
                    <button class="btn btn-primary" type="submit" name="subtract">Subtrair</button>
                    <button class="btn btn-primary" type="submit" name="multiply">Multiplicar</button>
                    <button class="btn btn-primary" type="submit" name="divide">Dividir</button>
                </div>
            </div>

        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>