Para iniciar o projeto:

1 - Ative o Apache e MySQL no painel de controle do XAMPP;

2 - Acesse o localhost/phpmyadmin e crie uma database chamada "oficina";

3 - Crie na database "oficina" uma tabela chamada "usuario" com o seguinte comando:

CREATE TABLE usuario (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(60),
    email VARCHAR(60),
    senha VARCHAR(60),
    PRIMARY KEY (id)
);

4 - Adicione os usuários no formulário e verifique na base de dados.
