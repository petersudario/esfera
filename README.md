<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Esta aplicação Laravel foi iniciada com o starter kit "Jetstream com Livewire" e com a biblioteca "MerakiUI"
https://jetstream.laravel.com/3.x/installation.html

https://merakiui.com
## Requisitos

> Docker ou Docker desktop instalado;
> 
> PHP 8.2;
> 
> Composer;
>
> NPM;
> 
> Linux ou WSL se caso Win 10/11;

## Como iniciar a aplicação
> Navegue até o root directory da aplicação no terminal
>
> Digite o comando `composer install`
>
> Digite o comando `npm install`
>
> Clone o arquivo `.env.example` e renomeie para `.env`. Depois, configure as opções de conexão de acordo com a configuração do container do Docker (disponiveis no arquivo docker-compose.yml). DB_DATABASE, DB_USERNAME E DB_PASSWORD devem ser as configurações cconstadas no arquivo do Docker.
> 
> Inicie o container do Docker com: `docker-compose up -d`
> 
> Inicie a aplicação com o comando `php artisan serve`
> 
> Inicie o servidor do Vite com o comando `npm run dev`
>
> Execute as migrations com `php artisan migrate`
> 
> Acesse `localhost:8000` no navegador e realize login/cadastro
>
> Se quiser ter informações de teste na database para testar paginação e delete, use o comando `php artisan db:seed`
>
> Se desejar consultar o banco de dados, pode acessar `localhost:8080` depois de iniciar o projeto, e logar o usuário da database. Este container está rodando o adminer (parecido com PhpMyAdmin) para consulta-lo.
