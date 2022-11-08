<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" method="POST">
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <h1 class="display-1">Exercício 06</h1>
            </header>
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Valor da hora aula:</span>
                    <input type="number" class="form-control" placeholder="Insira o valor da hora aula" aria-label="Username" aria-describedby="basic-addon1" name="timeworth">
                </div>
                <div class="input-group mb-3 text-center">
                    <span class="input-group-text" id="basic-addon1">Horas trabalhadas:</span>
                    <input type="number" class="form-control" placeholder="Insira o número de horas trabalhadas por mês" aria-label="Username" aria-describedby="basic-addon1" name="workedhours">
                </div>
                <div class="d-grid gap-2 d-md-block text-start">
                    <button class="btn btn-primary" type="submit" name="result">Calcular</button>
                </div>
                <div class="d-inline-flex">
                    <?php
                    if (isset($_POST['result'])) {
                        $timeWorth = $_POST['timeworth'];
                        $workedHours = $_POST['workedhours'];
                        $grossPay = $timeWorth * $workedHours;
                        $inss = 0;
                        if ($grossPay < 1212.00) {
                            $inss = ($grossPay * 0.075);
                        } else if ($grossPay >= 1212.01 && $grossPay <= 2427.35) {
                            $inss = ($grossPay * 0.09);
                        } else if ($grossPay >= 2457.36 && $grossPay <= 3641.03) {
                            $inss = ($grossPay * 0.12);
                        } else {
                            $inss = ($grossPay * 0.14);
                        }
                        $netPay = $grossPay - $inss;
                        echo "<p  class='text-success fs-3'>Salário bruto: R$$grossPay<br>
                        Desconto INSS: R$$inss<br>
                        Salário líquido: R$$netPay</p>";
                    }

                    ?>
                </div>
            </div>

        </div>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>