## Teste Api Liverfly

Este projeto consiste em uma api de produtos

- Listagem de produtos
- Busca de produto por id

## Tecnologias Utilizadas

- PHP 8.1 ou superior
- Laravel 10
- Mysql 8 ou superior

## Começando

Clone o repositório

    git clone https://github.com/luizmedeiros00/test-liberfly.git

Acesse a pasta do projeto

    cd test-liberfly

Instale as dependências com o composer

    composer install

Copie o arquivo .env.example e faça as configurações necessárias

    cp .env.example .env 

Configure as seguintes variáveis
```dotenv
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
Gere a nova application key

    php artisan key:generate

Gere a nova secret key JWT authentication

    php artisan jwt:generate

Execute as migrations e a seeder

    php artisan migrate --seed


## Api

Inicie o servidor de desenvolvimento local

    php artisan serve

#### Login
POST http://localhost:8000/api/login
```json
{
  "email": "teste@email.com",
  "password": "teste123"
}
```
#### Listar produtos
GET http://localhost:8000/api/products

#### Recuperar produto pelo id
POST http://localhost:8000/api/products/{id}

#### Request headers

| **Required** 	| **Key**              	| **Value** |
|----------	|------------------	|------------------	|
| Yes      	| Content-Type     	| application/json 	|
| Yes 	    | Authorization    	| Bearer {JWT Token}|


## Sail

Para mais informações consulte: https://laravel.com/docs/10.x/sail

```
git clone https://github.com/luizmedeiros00/test-liberfly.git
cd test-liberfly
composer install
cp .env.example.docker .env
./vendor/bin/sail up
./vendor/bin/sail up artisan migrate:fresh --seed
./vendor/bin/sail up artisan key:generate
./vendor/bin/sail up artisan jwt:token
```
app rodando na porta 80
