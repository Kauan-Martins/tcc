/*Alunos:
	*Gabriel Borges
	*Guilherme Borges
	*Kauan Martins
	*Thomas Barbosa
*/

-- dbname: bancolive
-- CRIAÇÃO DE TABELAS
-- dbname: bancolive
-- CRIAÇÃO DE TABELAS
CREATE TABLE cliente(
	cli_matric INTEGER NOT NULL AUTO_INCREMENT,
	cli_nome VARCHAR(20) NOT NULL,
	cli_email VARCHAR(40) NOT NULL,
	cli_senha VARCHAR(50) NOT NULL,
	cli_endereco VARCHAR(60) NOT NULL,
	cli_tel VARCHAR(25) NOT NULL,
	PRIMARY KEY (cli_matric)
);

CREATE TABLE modalidades(
	mod_cod INTEGER NOT NULL AUTO_INCREMENT,
	mod_nome VARCHAR(20) NOT NULL,
	mod_valor INTEGER NOT NULL,
	mod_caract VARCHAR(150) NOT NULL,
	PRIMARY KEY (mod_cod)
);

CREATE TABLE planos(
	tdp_cod INTEGER NOT NULL AUTO_INCREMENT,
	tdp_nome VARCHAR(20) NOT NULL,
	tdp_valor INTEGER NOT NULL,
	tdp_caract VARCHAR(150) NOT NULL,
	PRIMARY KEY (tdp_cod)
);

CREATE TABLE alocacao(
	alo_matric INTEGER NOT NULL AUTO_INCREMENT,
	alo_status VARCHAR(7) NOT NULL,
	cli_matric INTEGER NOT NULL,
	mod_cod INTEGER NOT NULL,
	tdp_cod INTEGER NOT NULL,
	PRIMARY KEY (alo_matric),
	FOREIGN KEY (cli_matric) REFERENCES cliente(cli_matric),
	FOREIGN KEY (mod_cod) REFERENCES modalidades(mod_cod),
	FOREIGN KEY (tdp_cod) REFERENCES planos(tdp_cod)
);

CREATE TABLE mensalidade(
	men_matric INTEGER NOT NULL AUTO_INCREMENT,
	men_ncart INTEGER,
	men_titularcart VARCHAR(50),
	men_vencicart DATE,
	men_valor INTEGER,
	men_dtvenc DATE,
	men_dtpagamen DATE,
	cli_matric INTEGER NOT NULL,
	mod_cod INTEGER NOT NULL,
	tdp_cod INTEGER NOT NULL,
	PRIMARY KEY (men_matric),
	FOREIGN KEY (cli_matric) REFERENCES cliente(cli_matric),
	FOREIGN KEY (mod_cod) REFERENCES modalidades(mod_cod),
	FOREIGN KEY (tdp_cod) REFERENCES planos(tdp_cod)
);


--CONSULTAR O CONTEÚDO DA TABELA
SELECT *
FROM CLIENTE;

-- INSERINDO REGISTROS NA TABELA CLIENTE
INSERT INTO CLIENTE(CLI_NOME, CLI_EMAIL, CLI_SENHA, CLI_ENDERECO, CLI_TEL)
VALUES('Gabriel Borges', 'usuario@gmail.com', 'cachorro123', 'Rua do Machadão', '24888888888');

-- INSERINDO REGISTROS NA TABELA MODALIDADES
INSERT INTO modalidades(mod_nome, mod_valor, mod_caract)
VALUES('Ballet', 70, 'dança de concerto');

INSERT INTO modalidades(mod_nome, mod_valor, mod_caract)
VALUES('Musculacao', 60, ' treinamento de força');

INSERT INTO modalidades(mod_nome, mod_valor, mod_caract)
VALUES('GAP Funcional', 50, ' atividade aeróbica e muscular');

INSERT INTO modalidades(mod_nome, mod_valor, mod_caract)
VALUES('Funcional Kids', 50, ' atividade aeróbica e muscular para crianças');

INSERT INTO modalidades(mod_nome, mod_valor, mod_caract)
VALUES('Pilates', 40, ' método de controle muscular');

INSERT INTO modalidades(mod_nome, mod_valor, mod_caract)
VALUES('Jiu Jitsu', 40, ' método de luta');





-- INSERINDO REGISTROS NA TABELA PLANOS
INSERT INTO planos(tdp_nome, tdp_valor, tdp_caract)
VALUES('Musculacao MENSAL', 75, 'Plano de Musculacão Mensal');

INSERT INTO planos(tdp_nome, tdp_valor, tdp_caract)
VALUES('Musculacao TRIMESTRAL', 85, 'Plano de Musculacão Trimestral');

INSERT INTO planos(tdp_nome, tdp_valor, tdp_caract)
VALUES('Musculacao SEMESTRAL', 115, 'Plano de Musculacão Semestral');

INSERT INTO planos(tdp_nome, tdp_valor, tdp_caract)
VALUES('Musculacao ANUAL', 50, 'Plano de Musculacão Anual');

INSERT INTO planos(tdp_nome, tdp_valor, tdp_caract)
VALUES('Familia', 50, 'Plano Família');

INSERT INTO planos(tdp_nome, tdp_valor, tdp_caract)
VALUES('Especial1', 85, 'Horário Especial 1');

INSERT INTO planos(tdp_nome, tdp_valor, tdp_caract)
VALUES('Especial2', 85, 'Horário Especial 2');

-- INSERINDO REGISTROS NA TABELA ALOCACAO
INSERT INTO alocacao(alo_status)
VALUES('Ativo');

