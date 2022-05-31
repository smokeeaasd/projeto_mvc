<?php

class ProdutoController 
{

    public static function index()
    {
        include 'Model/ProdutoModel.php';
        
        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View/Produto/Lista.php';
    }

    public static function form()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/Produto/Form.php';
    }

    public static function save()
    {
       include 'Model/ProdutoModel.php';

       $model = new ProdutoModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->descricao = $_POST['descricao'];
       $model->preco = $_POST['preco'];

       $model->save();

       header("Location: /produto");
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /produto");
    }
}