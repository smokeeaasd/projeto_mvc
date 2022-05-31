<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Produtos</legend>

        <form method="post" action="/produto/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="descricao">Descrição</label>
            <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text" />

            <label for="preco">Preço</label>
            <input id="preco" value="<?= $model->preco ?>" name="preco" type="number" step="any" />
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>