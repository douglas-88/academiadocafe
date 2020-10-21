# Academia do Cafe
---
O projeto chamado:"academia do café" consiste em uma API RESTFULL em Laravel com Ajax, a qual possui endpoints de acesso para uma base de dados contendo informações sobre tipos de cafés.
# Requisitos
* PHP >= 7.1.3
* MySQL >= 5.7.19
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension

# Instalação
1. Faça o download do ambiente de desenvolvimento XAMPP : https://www.apachefriends.org/pt_br/index.html
2. Após baixar o XAMPP, siga esse tutorial para instala-lo corretamente: https://www.youtube.com/watch?v=R2HrwSQ6EPM
3. Faça o download da API: https://github.com/DouglasFFBraga/academiadocafe/archive/master.zip
4. Coloque os arquivos da API dentro da pasta C:\xampp\htdocs\meu-projeto(nome de sua escolha)
5. Crie um banco de dados
5. No arquivo que se encontra na pasta raíz do seu projeto , chamado :
`.env `, edite as variáveis:

    /*Tipo de Banco de dados*/
    DB_CONNECTION=mysql  

    /*Caso desejar hospedar, você deverá colocar o nome do seu dominio, por exemplo: https://www.meu-site.com.br*/
    DB_HOST=127.0.0.1

    /*Porta de comunicação com o MySQL*/
    DB_PORT=3306

    /*Caso você importe o arquivo de backup, não precisará mudar esse nome, do contrário, deverá colocar o nome do seu Banco de dados.*/
    DB_DATABASE=academiadocafe

    /*Nome do usuário do Banco de dados, o padrão de instação é : root*/
    DB_USERNAME=root

    /*Senha do usuário do Banco de dados, o padrão é vazio mesmo.*/
    DB_PASSWORD=
6. Acesse a pasta pelo terminal e execute o comando `composer install`.
7. Execute as migrations através do comando `php artisan migrate`.
8. Opcionalmente, adicione dados ao banco através do comando `php artisan db:seed`.
9.  Acesse seu domínio e tudo já deve funcionar. :smile:

# Utilização
Acesse a página Home da sua aplicação através da url:
```sh
http://localhost/nome-da-pasta-do-projeto/public/
```
Essa endereço irá abrir a pagina inicial listando(paginando) os itens de 3 em 3(configuravel), para cada post ao se clicar , o levará a página de conteúdo .
Na página de conteúdo , é possivel pesquisar por ID os cafés e o contéudo aparece dinamicamente na tela ao se clicar em "pesquisar".

A paginação também é feita ao se ler os arquivos .json da requisição Ajax.
