<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>@yield( ' title ')</title>
</head>
<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
          <div class="container">
                <div class="navbar-brand d-flex align-items-center">
                    <strong > Avaliação Oficial II -  Cadastro de Participantes para o  congresso de TI </strong>
                </div>
          </div>
        </div>
      </header>
    @yield('content')
</body>
</html>
