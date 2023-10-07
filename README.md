# Dummy-Api

Este é o README do projeto **Dummy-Api**, uma API Laravel criada com o Laravel Sail, organizada usando o Service Pattern e desenvolvida com PHP 8.1.

## Requisitos

Para executar este projeto em seu ambiente local, você precisará ter as seguintes ferramentas instaladas:

- [Docker](https://www.docker.com/get-started)
- [Composer](https://getcomposer.org/download/)

## Instalação

Siga estas etapas para configurar e executar a API em seu ambiente local:

1. Clone o repositório:

   ```shell
   git clone https://github.com/CleisonFreitas/dummy-api.git

2. Navegue até o diretório do projeto:

    ```shell
   cd dummy-api

3. Instale as dependências do Composer:

    ```shell
   composer install

4. Inicie o Laravel Sail (um ambiente Docker local para Laravel):

    ```shell
   ./vendor/bin/sail up -d

Isso iniciará os contêineres Docker necessários para executar o Laravel e sua aplicação.

5. Crie um arquivo .env a partir do arquivo de exemplo .env.example:

    ```shell
   cp .env.example .env

6. Gere uma chave de aplicativo para a sua aplicação:

    ```shell
   ./vendor/bin/sail artisan key:generate

7. Sua API Laravel está agora configurada e em execução em http://localhost:81. Você pode acessar a API em seu navegador ou usando um cliente API, como o Postman.

## Uso

Se todos os passos foram configurados corretamente, sua aplicação funcionará na porta 81. Basta acessar utilizando seu endereço de localhost mais a porta definida no arquivo .env. Para acessar a rota basta você inserir seu endereço local + porta + api/produtos/variacoes, utilizando o verbo GET.

1. Exemplo:
 
    ```shell
   http://localhost:81/api/produtos/variacoes

## Licença

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
