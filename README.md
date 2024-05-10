# RickAndMortySearcher

<img src="images\banner.png" alt="banner-RickAndMortySearcher">

O **RickAndMortySearcher** é uma plataforma desenvolvida com o framework *Laravel*, integrando a [API do Rick and Morty](https://rickandmortyapi.com/) para fornecer aos usuários uma maneira fácil e intuitiva de buscar informações sobre qualquer personagem da série. Utilizando *SQLite3* como banco de dados local e um frontend desenvolvido em *HTML*, *CSS* (utilizando Bootstrap) e *JavaScript*, o projeto oferece aos usuários a capacidade de realizar operações CRUD, como cadastro, edição e deleção de dados, desde que estejam logados. Com esta aplicação, os fãs de Rick and Morty podem explorar e gerenciar dados dos seus personagens favoritos de forma personalizada.

<img src="images\icons\laravel-icon.png" alt="laravel">
<img src="images\icons\sqlite-icon.png" alt="sqlite">
<img src="images\icons\html-icon.png" alt="html">
<img src="images\icons\bootstrap-icon.png" alt="bootstrap">
<img src="images\icons\javascript-icon.png" alt="javascript">

## Instalação

Para instalar e configurar o projeto "RickAndMortySearcher", siga estas instruções:

### Pré-requisitos

-   Servidor Web e PHP: Você precisará de um servidor web com PHP instalado. Uma opção popular é usar o XAMPP, que fornece uma combinação do Apache (servidor web) e PHP.
-   Composer: O Composer é uma ferramenta para gerenciar as dependências do PHP. Ele automatiza o processo de inclusão de bibliotecas e frameworks no seu projeto PHP.

### Instalação

1.  Baixe e instale o **XAMPP**: Visite o site oficial do [XAMPP](https://www.apachefriends.org/) e siga as instruções de instalação para o seu sistema operacional.
    
2.  Baixe e instale o **Composer**: Visite o site oficial do [Composer](https://getcomposer.org/) e siga as instruções de instalação para o seu sistema operacional.
    
3.  Clone o repositório do projeto: Use o Git para clonar o repositório do projeto em sua máquina local. Para fazer isso, execute o comando abaixo::
  ```bash
git clone https://github.com/Andreas-Santos/RickAndMortySearcher.git
```
    
4.  Instale as dependências do **Laravel**: Navegue até o diretório do projeto e execute o seguinte comando no terminal para instalar as dependências do Laravel utilizando o Composer.
```terminal
composer install
```    

5.  Inicie o servidor Laravel: Após instalar as dependências, você pode iniciar o servidor Laravel usando o seguinte comando:
```terminal
php artisan serve
```        
Isso iniciará um servidor de desenvolvimento local. Você pode acessar o seu projeto no seu navegador através do link gerado.

## Características

Na página inicial, você encontrará uma lista de personagens com dados obtidos diretamente da [API do Rick and Morty](https://rickandmortyapi.com/).

<img src="images\home.png" alt="Tela Inicial">
    
Ao clicar em **"Saiba mais"**, você será redirecionado para uma página com informações adicionais sobre o personagem, juntamente com um botão para cadastrá-lo em nosso banco de dados local. Porém, este recurso só está disponível para usuários autenticados. Caso você não esteja logado, será redirecionado para a tela de login.
   
<img src="images\detalhesPersonagem.png" alt="Detalhes do Personagem">
   
A página **"Personagens"** exibe todos os personagens cadastrados em nosso banco de dados local. Ao clicar em "Saiba mais", você será levado a uma tela com informações detalhadas do personagem no banco de dados, onde poderá deletar ou editar suas informações. Novamente, essas ações só estão disponíveis para usuários autenticados.
    
A página **"Sobre"** apresenta um breve perfil do criador do projeto.
  
<img src="images\sobre.png" alt="Sobre">

A página **"Entrar"** leva você à tela de login. Quando você já está autenticado, o botão muda para **"Sair"**, permitindo que você faça logout.
Na tela de login, há um link direto para a página de cadastro caso você ainda não tenha uma conta.

<img src="images\login.png" alt="Tela de Login">

## Autor

<img src="images\foto.jpg" alt="Foto Autor" style="max-height: 150px"><br>
Andreas Santos

## Licença

O código deste projeto está sob a [Licença MIT](https://opensource.org/license/mit).