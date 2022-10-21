# configurações iniciais

1. composer install
2. php artisan serve
3. npm install
4. npm install -g cross-env
5. npm install jquery
6. npm run dev
7. php artisan route:clear 


# criação do controller
php artisan make:controller ClienteController --resource.

# Criação do model (tabela do banco de dados)
php artisan make:model Models\\ModelClientes -m.

# Criação das tabelas de banco de dados
 php artisan migrate.
 
# Criação de validação de formulario (request)
 php artisan make:request ClienteRequest.
 
# obs: baixar pacote de linguagens do laravel (pt-BR). 

# obs: criação da pasta de public com jquery e bootstrap. atualização do bootstrap.js na pasta public/js.
