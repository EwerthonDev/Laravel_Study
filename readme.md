## Como rodar o sistema!

Tutorial para você conseguir utilizar o sistema!

## Pre-Requisistos

PHP versão >= 7.4;

Laravel versão 5.8;

Composer;

MySQL 8;

## Instalação
1- Após baixar o projeto, rode o "Composer Install" por conta da pasta Vendor;

2- No localhost (porta 3306, username:root e senha:root), crie um banco de dados chamado "laravel";

3- Vá para o arquivo .env e coloque "DB_PASSWORD:root";

4- Importante checar se DB_PORT está 3306;

5- Vá para config/database.php, desça até 'connections', vá até 'mysql', troque a linha do password para: 'password' => env('DB_PASSWORD', 'root'),;

6- Abra o terminal, vá para raíz do projeto;

7- Digite "php artisan migrate";

8- As tabelas serão criadas, em seguida assim que terminar, digite no terminal "php artisan serve", ele vai lhe informar em qual porta você deve acessar;

9- Abra o navegador, digite na url: "localhost:porta que o artisan disponibilizou/entrar" e dê Enter;

10- Se cadastre e use o sistema!
