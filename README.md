# Novo SGA

Sistema de gerenciamento de filas


## Instalação

### Via Composer

Create project:

    composer create-project "novosga/novosga:^2.0" novosga2

Run app installation command and follow instructions:

    export APP_ENV=prod
    export LANGUAGE=pt_BR
    export DATABASE_URL="mysql://user:pass@localhost:5432/novosgadb"
    
    bin/console novosga:install


### Via Docker

Documentation in the Novo SGA official [docker repository](https://github.com/novosga/docker/tree/master/novosga-2.0).


### Via Git

Clonar o repositório:

    git clone https://github.com/novosga/novosga.git novosga2

Rodar ```composer install``` na pasta

Ajustar o arquivo .env criado com:

```bash
APP_ENV=prod
LANGUAGE=pt_BR
DATABASE_URL="mysql://usuario:senha@servidor:porta/nomebanco"
```

Rodar ```bin/console novosga:install``` para criar o banco de dados

Rodar ```unset APP_ENV```

Entrar na pasta do projeto e rodar
```bash
bin/console cache:clear --no-debug --no-warmup --env=prod
bin/console cache:warmup --env=prod
```

Sair da pasta e dar permissão de acesso aos arquivos
```bash
chown www-data:www-data -R novosga
chmod +w -R novosga/var/
```

Criar o arquivo .htaccess

```bash
# echo 'Options -MultiViews
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php [QSA,L]
SetEnv APP_ENV prod
SetEnv LANGUAGE pt_BR
SetEnv DATABASE_URL mysql://usuario:senha@servidor:porta/nomebanco
# ' > /var/www/html/sgf/novosga/public/.htaccess
```
Reestartar o apache

```bash
sudo service apache2 restart
```

### Automated installation

To automated installation you need to set up the following environment variables before run `novosga:install` command:

**Database**

- DATABASE_URL

**Default administrator user**

- NOVOSGA_ADMIN_USERNAME
- NOVOSGA_ADMIN_PASSWORD
- NOVOSGA_ADMIN_FIRSTNAME
- NOVOSGA_ADMIN_LASTNAME

**Default unity**

- NOVOSGA_UNITY_NAME
- NOVOSGA_UNITY_CODE

**Default priority 0**

- NOVOSGA_NOPRIORITY_NAME
- NOVOSGA_NOPRIORITY_DESCRIPTION

**Default priority 1**

- NOVOSGA_PRIORITY_NAME
- NOVOSGA_PRIORITY_DESCRIPTION

**Default attendance place**

- NOVOSGA_PLACE_NAME
