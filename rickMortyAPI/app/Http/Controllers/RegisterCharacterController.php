<?php

namespace App\Http\Controllers;

use App\Models\Character;

class RegisterCharacterController extends Controller
{
    public function register($id)
    {
        // Pega os dados do personagem
        $url = 'https://rickandmortyapi.com/api/character/' . $id;
        $json = file_get_contents($url);
        $character = json_decode($json, true);

        // Pega os dados do episódio
        $url = $character['episode'][0];
        $json = file_get_contents($url);
        $episode = json_decode($json, true);

        $nome = $character['name'];
        $especie = $character['species'];
        $imagem = $character['image'];
        $url = $character['url'];
        $status = $character['status'];
        $genero = $character['gender'];
        $localizacao = $character['location']['name'];
        $episodio = $episode['episode'] . " - " . $episode['name'];

        $personagemCadastrado = Character::where('id', $id)->first();

        if ($personagemCadastrado) {
            return back()->with('error', 'Este personagem já está cadastrado no banco de dados!'); //inserir mensagem para o usuario
        }

        Character::create([
            'id' => $id,
            'nome' => $nome,
            'especie' => $especie,
            'imagem' => $imagem,
            'url' => $url,
            'status' => $status,
            'genero' => $genero,
            'localizacao' => $localizacao,
            'episodio' => $episodio
        ]);

        return back()->with('success', 'Personagem cadastrado com sucesso!'); //inserir mensagem para o usuario
    }
}
