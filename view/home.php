<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Mercado - Painel de Controle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <header class="bg-primary text-white py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <span class="fw-bold">Sistema Mercado</span>
            <a href="index.php?acao=sair" class="btn btn-outline-light btn-sm">Sair</a>
        </div>
    </header>

    <main class="container py-4">
        <h1 class="h4 text-center mb-4">Painel de Controle</h1>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h2 class="h6 text-success">Cadastrar</h2>
                        <button class="btn btn-success w-100" type="button" disabled>Ir para Cadastro</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h2 class="h6 text-primary">Consultar</h2>
                        <button class="btn btn-primary w-100" type="button" disabled>Ir para Consulta</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h2 class="h6 text-warning">Atualizar</h2>
                        <button class="btn btn-warning w-100" type="button" disabled>Ir para Atualização</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h2 class="h6 text-danger">Excluir</h2>
                        <button class="btn btn-danger w-100" type="button" disabled>Ir para Exclusão</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
