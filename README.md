# Academia do Cafe 
---
O projeto chamado:"academia do café" consiste em uma API RESTFULL em Laravel com Ajax, a qual possui endpoints de acesso para uma base de dados contendo informações sobre tipos de cafés.
# Requisitos
* PHP >= 7.1.3
* MySQL
# Instalação 
* Faça o download: https://github.com/DouglasFFBraga/academiadocafe/archive/master.zip
* Descompacte o arquivo zip, e envie  para o diretório raiz do seu projeto de Website.
* Importe a Base de Dados que se encontra na pasta: BD_API para seu servidor de Banco de dados MySql, como o PHPMyAdmin por exemplo.
* Acesse seu domínio e tudo já deve funcionar.

# Utilização
Acesse a página Home da sua aplicação através da url:
```sh
http://www.seudominio.com.br/
```
Essa endereço irá abrir a pagina inicial listando(paginando) os itens de 3 em 3(configuravel), para cada post ao se clicar , o levará a página de conteúdo .
Na página de conteúdo , é possivel pesquisar por ID os cafés e o contéudo aparece dinamicamente na tela ao se clicar em "pesquisar".

A paginação também é feita ao se ler os arquivos .json da requisição Ajax.
