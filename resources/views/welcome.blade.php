<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste Bootstrap + Sass</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container py-4">
    <h1 class="text-primary">Bootstrap + Sass funcionando!</h1>
    <p class="lead">Cor primária customizada: <span class="badge bg-primary">#6f42c1</span></p>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Teste de Card</h5>
                    <p class="card-text">Border radius customizado.</p>
                    <a href="#" class="btn btn-primary">Botão Primário</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
