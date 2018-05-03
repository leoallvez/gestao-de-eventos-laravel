## Sumário

> * [Objetivo](#objetivo)
> * [Requisitos Técnicos](#requisitos-técnicos)
> * [Executando o Projeto](#executando-o-projeto)
> * [Usuarios de exemplo](#usuarios-de-exemplo)
> * [Executando o Projeto](#executando-o-projeto)

## Visão Geral

Sistema para a gestão de eventos, permite que cada usuário crie e edite os seus eventos em uma área protegida por login e senha. Os eventos que que tiverem marcados como postados e forem de data posterior ao dia atual são exibidos na tela inicial do sistema da qual não necessita de autenticação para ser acessados.
O projeto tem como principal finalidade de ser o produto final do futuro curso de Laravel da [Codeprestige](https://codeprestige.com.br/).


## Requisitos Técnicos

<table style="width:100%">
  <tr>
    <th>Tecnologias</th>
    <th>Descrição</th>
    <th>Versão</th>
  </tr>
  <tr>
    <td>PHP</td>
    <td>Linguagem de Programação Server Side</td>
    <td> 7.1.14</td>
  </tr>
  <tr>
    <td>Laravel</td>
    <td>Framework Server Side</td>
    <td>5.6.19</td>
  </tr>
  <tr>
    <td>MariaDB</td>
    <td>Sistema de Gerenciamento de Banco de Dados (SGBD)</td>
    <td>10.1.25</td>
  </tr>
</table>

## Executando o projeto

- Clone este repositório no seu computador
- Baixe as dependências do projeto com os comandos:

  `composer install --no-scripts`

  `npm install`

- Copie o arquivo `.env.example` e renomeie a cópia para `.env`
- Crie uma nova chave para a aplicação:

  `php artisan key:generate`

- Em seguida você deve configurar o arquivo .env colocando informaçõs sobre o nome do Banco, Usuário e Senha.

  ```
  DB_CONNECTION=<MEU_SGBD>
  DB_HOST=<IP_AONDE_O_BANCO_SE_ENCONTRA>
  DB_PORT=<PORTA_DO_BANCO>
  DB_DATABASE=<NOME_DO_BANCO>
  DB_USERNAME=<USERNAME>
  DB_PASSWORD=<SENHA>
  ```

- Depois, rode as migrations com:

  `php artisan migrate --seed`

- Feito isso basta executar o projeto com:

  `php artisan serve`

## Usuarios de exemplo

Usuários de teste cadastrados no sistema.

<table style="width:100%">
  <tr>
    <th>E-mail</th>
    <th>Senha</th>
  </tr>
  <tr>
    <td>user1@gmail.com.br</td>
    <td>123456</td>
  </tr>
  <tr>
    <td>user2@gmail.com.br</td>
    <td>123456</td>
  </tr>
</table>
