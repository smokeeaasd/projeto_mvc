<?php

include 'Controller/FuncionarioController.php';
include 'Controller/ProdutoController.php';
include 'Controller/CategoriaProdutoController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "página inicial";
        break;
	
	// rotas para Funcionario:
    case '/funcionario':
        FuncionarioController::index();
        break;

    case '/funcionario/form':
        FuncionarioController::form();
        break;

    case '/funcionario/form/save':
        FuncionarioController::save();
        break;

    case '/funcionario/delete':
        FuncionarioController::delete();
        break;

	// rotas para Produto:
	case '/produto':
        ProdutoController::index();
        break;

    case '/produto/form':
        ProdutoController::form();
        break;

    case '/produto/form/save':
        ProdutoController::save();
        break;

    case '/produto/delete':
        ProdutoController::delete();
        break;

	// rotas para CategoriaProduto:
	case '/categoria_produto':
        CategoriaProdutoController::index();
        break;

    case '/categoria_produto/form':
        CategoriaProdutoController::form();
        break;

    case '/categoria_produto/form/save':
        CategoriaProdutoController::save();
        break;

    case '/categoria_produto/delete':
        CategoriaProdutoController::delete();
        break;

	// not found:
	default:
		echo "Erro 404";
	break;
}
?>