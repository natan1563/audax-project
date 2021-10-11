## Instruções pós download/clone

- Rodar o comando no terminal: ``composer update``
- Criar arquivo ``.env`` com base no arquivo ``.env-example``
- Verificar credenciais de acesso a base de dados no arquivo ``.env``
- Criar a base de dados seguindo a nomenclatura pré-definida no arquivo ``.env``
- Inicializar o servidor de banco de dados.
- Rodar os comandos no terminal: ``php artisan key:generate`` | ``php artisan migrate``  ou ``php artisan migrate --seed``
- Rodar o comando no terminal: ``php artisan serve``
