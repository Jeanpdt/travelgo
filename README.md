## Instalando a aplicação

Observação: Executar a aplicação em um sistema Linux e ultilizar  o navegador Google Chrome.

Configure o arquivo .env, ultilize o seguinte comando para criar o arquivo:

Windows:
```
copy .env.example .env
```

Unix:
```
cp .env.example .env
```

Crie um banco de dados novo e configure as seguintes várives de ambiente no arquivo .env:  DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD.

Digite os seguintes comandos, na raiz do projeto:

```
composer require tymon/jwt-auth:dev-develop
```

```
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```

```
php artisan jwt:secret
```

```
php artisan storage:link
```

```
composer install
```

Em seguida, digite:


```
npm install
```

Gere a key do projeto:

```
php artisan key:generate
```

``` php artisan migrate ```

``` php artisan serve ```



