
CREATE DATABASE sufgangstore
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE sufgangstore; 


CREATE TABLE usuarios (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do usuário
    cpf VARCHAR(14), -- CPF no formato 000.000.000-00
    data_nascimento DATE, -- data no formato yyyy-mm-dd
    celular VARCHAR(20), -- celular com DDD
    rua VARCHAR(255), -- nome da rua
    numero VARCHAR(10), -- número da residência
    complemento VARCHAR(50), -- complemento (ex: apto)
    bairro VARCHAR(255), -- bairro
    cidade VARCHAR(255), -- cidade
    cep VARCHAR(10), -- CEP
    genero CHAR(50), -- Genero
    estado CHAR(20), -- estado (ex: SP, RJ)
    email VARCHAR(255) NOT NULL, -- e-mail válido
    nivel_acesso VARCHAR(30), -- tipo de usuário
    senha VARCHAR(255) NOT NULL, -- senha criptografada
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);


INSERT INTO usuarios (nome, cpf, data_nascimento, celular, rua, numero, complemento, bairro,
 cidade,
    cep,
    genero,
    estado,
    email,
    nivel_acesso,
    senha,
    deleted_at
) VALUES (
    'Maria Oliveira',
    '987.654.321-99',
    '1990-03-25',
    '(21) 99876-5432',
    'Avenida Brasil',
    '456',
    'Casa',
    'Jardim América',
    'Rio de Janeiro',
    '22040-002',
    'F',
    'RJ',
    'maria.oliveira@example.com',
    'Funcionário',
    '$2y$10$OutroExemploDeHashDeSenha1234567890abc', -- senha criptografada
    NULL
);

CREATE TABLE produtos (
    id_produto BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(255) NOT NULL,
    descricao TEXT, 
    quantidade INT DEFAULT 0,
    valor DECIMAL(10,2) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
    deleted_at TIMESTAMP NULL DEFAULT NULL 
);
