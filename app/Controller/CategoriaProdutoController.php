<?php

class CategoriaProdutoController 
{

    public static function index()
    {
        include 'Model/CategoriaProdutoModel.php';
        
        $model = new CategoriaProdutoModel();
        $model->getAllRows();

        include 'View/CategoriaProduto/Lista.php';
    }

    public static function form()
    {
        include 'Model/CategoriaProdutoModel.php';
        $model = new CategoriaProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/CategoriaProduto/Form.php';
    }

    public static function save()
    {
       include 'Model/CategoriaProdutoModel.php';

       $model = new CategoriaProdutoModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->descricao = $_POST['descricao'];

       $model->save();

       header("Location: /categoria_produto");
    }

    public static function delete()
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /categoria_produto");
    }
}