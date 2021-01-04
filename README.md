## Instalando a aplicação

Digite o comando, na raiz do projeto:

```
composer install
```

Em seguida, digite:


```
npm install
```

Configure o arquivo .env, ultilize o seguinte comando para criar o arquivo:

Windows:
```
copy .env.example .env
```

Unix:
```
cp .env.example .env
```

Gere a key do projeto:

```
php artisan key:generate
```

Crie um banco de dados novo e configure as seguintes várives de ambiente no arquivo .env:  DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD e digite o comando ``` php artisan migrate ``` para criar a estrutura do banco de dados

Para iniciar a aplicação digite ``` php artisan serve ```


