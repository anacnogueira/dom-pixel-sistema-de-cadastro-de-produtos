# Sistema de Cadastro de Produtos

Sistema de gerenciamento de produtos para a loja virtual “DompixelShop" para gerenciamento de catálogo de produtos.

## Como instalar

-   Faça o clone do repositório

git clone https://github.com/anacnogueira/dom-pixel-sistema-de-cadastro-de-produtos.git <nome_projeto>

-   Entre dentro da pasta do projeto

        cd <nome_projeto>

-   Faça uma copia do arquivo .env.example com o nome .env:

        cp .env.example .env

-   Execute o seguinte comando no terminal para subir as imagens do projeto

**Importante: é necessário instalar o Docker antes da executar o proje**to

[Como instalar o Docker](https://docs.docker.com/engine/install/)

    docker run --rm --interactive --tty \
    --volume $PWD:/app \
    --user $(id -u):$(id -g) \
    composer install --ignore-platform-req=ext-gd

-   Rode o seguinte comando para executar o projeto

        ./vendor/bin/sail up -d

-   Configure um alias de Shell para o Sail

O projeto vem com um container em Docker próprio do Laravel, chamado _Sail_, que facilita a instalção do projeto, rodar comandos do artisan e composer entre outros comodidades, sem a necessidade instalar o PHP, Mysql e extensões em sua máquina.

Por padrão, os comandos Sail são invocados usando o script

    vendor/bin/sail

que está incluído em todas as novas aplicações Laravel:

    ./vendor/bin/sail up

No entanto, em vez de digitar repetidamente vendor/bin/sail para executar comandos do Sail, você pode querer configurar um alias de shell que permita executar os comandos do Sail com mais facilidade:

    alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

Para garantir que isso esteja sempre disponível, você pode adicioná-lo ao arquivo de configuração do shell em seu diretório inicial, como ~/.zshrc ou ~/.bashrc, e então reiniciar o shell.

Depois que o alias do shell tiver sido configurado, você poderá executar comandos Sail simplesmente digitando **sail**. A partir de agora você pode digitar o comando baixo para subir o container:

    sail up -d

-   Dentro do arquivo .env, altere o nome da variavel DB_HOST para mysql:

    DB_HOST=mysql

-   Execute as migrações através do comando

        sail artisan migrate

-   Abra o brownser e informe a url:

http://localhost/products
