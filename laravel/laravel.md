# Documentação Laravel
## Ana Luiza Marques e Felipe Alexandre 2°DB
### Introdução
O Laravel é um framework PHP moderno, criado para facilitar o desenvolvimento de aplicações web.
Ele fornece uma estrutura organizada e ferramentas prontas, permitindo que o desenvolvedor foque na lógica do sistema, em vez de reescrever recursos básicos do zero.
<p align="center">
    <img src="https://media.tenor.com/TM4I12LoOhwAAAAi/hello-kitty.gif" width="300">
</p>

### Pré-requisitos

Antes de instalar o Laravel, é necessário ter:
	•	PHP (versão compatível com o Laravel utilizado)
	•	Composer (gerenciador de dependências do PHP)
	•	Banco de dados (como MySQL ou MariaDB)


### Instalação

Para criar um novo projeto Laravel, utilize o Composer:
```Bash
composer create-project laravel/laravel nome-do-projeto
```
Esse comando baixa e configura o Laravel em uma pasta com o nome escolhido.

Para rodar o servidor local:
``` Bash
php artisan serve
```
O comando acima inicia o servidor integrado do Laravel, geralmente disponível no endereço http://localhost:8000.


### Estruturas de Pastas

Algumas pastas importantes:
	•	routes/ → onde são definidas as rotas da aplicação.
	•	app/Models → contém as classes que representam tabelas do banco de dados.
	•	resources/views → armazena as páginas HTML, normalmente utilizando Blade.
	•	app/Http/Controllers → armazena os controladores que processam as requisições.


### Fluxo de Funcionamento

O Laravel segue um fluxo básico:
	1.	O usuário acessa uma rota.
	2.	Essa rota chama um controlador.
	3.	O controlador utiliza models para buscar ou salvar dados.
	4.	Os dados são enviados para uma view, que exibe o conteúdo para o usuário.

### Exemplo de Rota Simples
```  php
// Rota básica que retorna um texto
Route::get('/hello', function () {
    return 'Olá, mundo!';
});
``` 
### Dicas Úteis

•	Utilize php artisan route:list para visualizar todas as rotas registradas.
	•	Organize seu código separando regras de negócio nos models e regras de fluxo nos controllers.
	•	Sempre utilize migrations para manter o banco de dados sincronizado com o código.


### Conclusão


O Laravel é um framework poderoso, com recursos para criação de CRUDs, autenticação, APIs e muito mais.
Este guia serve como ponto de partida para entender sua estrutura e funcionamento básico.
Para aprofundar-se, recomenda-se a leitura da documentação oficial do Laravel.

### Agradecimentos

Obrigada por ler nossa documentação!! Esperamos que tenha sido útil e que te ajude a se guiar com o Laravel!

<p align="center">
    <img src="https://media.tenor.com/bkPvmBTPjC8AAAAi/kitty.gif" width="300">
</p>