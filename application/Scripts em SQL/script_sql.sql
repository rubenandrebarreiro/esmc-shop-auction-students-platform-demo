drop database esmc_shop;

create database esmc_shop;

use esmc_shop;

create table utilizadores (nome_utilizador varchar (14) primary key, nome_proprio varchar (14), apelido varchar (14), sexo varchar (10), ano int (2), turma varchar (4),
						   morada varchar (40), cidade varchar (40), distrito varchar (40), cod_postal varchar (30), telefone int (9), 
						   email varchar (40), password varchar (30), pergunta_secreta varchar (30), resposta_secreta varchar (30), data_nasc date);
						 
create table artigos (id_artigo int (4) auto_increment primary key, nome_artigo varchar (25), foto_artigo varchar (20), descricao_artigo varchar (50), 
					  condicao_artigo varchar (12), estado_leilao varchar (12), hora_limite time, data_limite date, licitacao_base double (6,2), preco_final double (6,2), 
					  custo_envio double (6,2), prazo_entrega date, forma_pagamento varchar (20), nome_utilizador varchar (14) references utilizadores (nome_utilizador), 
					  id_categoria int (4) references categorias (id_categoria));
					  
create table avaliacoes (id_avaliacao int (4) auto_increment primary key, classificacao_artigo double (1,1), classificacao_servico double (1,1),
						 nome_utilizador varchar (14) references utilizadores (nome_utilizador), id_artigo int (4) references artigos (id_artigo));

create table categorias (id_categoria int (4) auto_increment primary key, nome_categoria varchar (20));

create table licitacoes (id_licitacao int (4), valor_licitacao double (6,2), hora_licitacao time, data_licitacao date, 
						 id_artigo int (4) references artigos (id_artigo), nome_utilizador varchar (14) references utilizadores (nome_utilizador));