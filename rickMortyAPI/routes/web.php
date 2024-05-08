<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/characters', function () {
    return view('characters');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {
    function inserirUsuario($nome, $sobrenome, $email, $senha)
{
    try {
        // Cria o banco de dados
        $db = new SQLite3('teste.db');

        // Trata exceção caso não consiga conectar ao banco
        if (!$db) {
            throw new Exception("Ocorreu um erro ao conectar ao banco de dados!");
        }

        // Cria a tabela de usuários se ainda não existir
        $sqlquery = "CREATE TABLE IF NOT EXISTS usuarios (
                id INTEGER PRIMARY KEY AUTOINCREMENT, 
                nome TEXT,
                sobrenome TEXT, 
                email TEXT UNIQUE, 
                senha TEXT)";
        $db->exec($sqlquery);

        // insere os dados
        $sqlInsert = "INSERT INTO usuarios (nome, sobrenome, email, senha)
                            VALUES ('$nome', '$sobrenome', '$email', '$senha')";

        $db->exec($sqlInsert);
    } catch (Exception $e) {
        echo "Ocorreu um erro: " . $e->getMessage();
    }
}
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['confSenha'];

    if($senha == $confSenha) {
        inserirUsuario($nome, $sobrenome, $email, $senha);
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>location.href='/login';</script>";
    }
    else {
        echo "<script>alert('As senhas não são iguais, digite novamente!');</script>";
        return view('register');
    }
});

Route::get('/characters/{id}', function ($id) {
    $url = 'https://rickandmortyapi.com/api/character/' . $id;

    $json = file_get_contents($url);

    $character = json_decode($json, true);

    if ($character !== null) {
        return view('character-details', ['character' => $character]);
    } else {
        abort(404);
    }
});