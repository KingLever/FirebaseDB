<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Cadastrar Produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container min-vh-100 d-flex
                justify-content-center align-items-center">

        <div class="card shadow p-4"
             style="width: 100%; max-width: 400px;">

            <h3 class="text-center mb-4">
                Cadastrar Produto
            </h3>

            <form action="index.php?acao=salvar_cadastrar"
                  method="POST">

                <div class="mb-3">
                    <label for="nome" class="form-label">
                        Nome
                    </label>

                    <input type="text"
                           class="form-control"
                           id="nome"
                           name="nome"
                           placeholder="Digite o nome do Produto"
                           required>
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">
                        Preço
                    </label>

                    <input type="number"
                           class="form-control"
                           id="preco"
                           name="preco"
                           placeholder="Digite o preço"
                           required>
                </div>
                <div class="mb-3">
                    <label for="quantidade" class="form-label">
                        quantidade
                    </label>

                    <input type="number"
                           class="form-control"
                           id="quantidade"
                           name="quantidade"
                           placeholder="Digite a quantidade"
                           required>
                </div>
                
                <button type="submit"
                        class="btn btn-success w-100">
                    Cadastrar
                </button>

                <a href="index.php?acao=home"
                   class="btn btn-secondary w-100 mt-2">
                    Voltar
                </a>

            </form>

        </div>

    </div>

</body>
</html>