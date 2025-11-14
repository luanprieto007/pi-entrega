<?php
namespace App\Controllers;

//Importa o model de usuario
use App\Models\Usuario;

class UsuarioController{
    //Busca o usuario e chama na tela de listar 
    public function listar (){
        //chama a model e a função que busca os dados e armazena na var 
        $listagem_usuario = Usuario::buscarTodos();

        render("listagem_usuario.php", [
            'usuarios' => $listagem_usuario
        ]);
    }
}