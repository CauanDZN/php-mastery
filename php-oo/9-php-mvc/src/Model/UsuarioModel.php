<?php

namespace MVC\Model;

class UsuarioModel
{
    public function verificarUsuario($dados): bool
    {
        return $dados['email'] == 'cauan@gmail.com'
            && $dados['senha'] == '12345678';
    }
}
