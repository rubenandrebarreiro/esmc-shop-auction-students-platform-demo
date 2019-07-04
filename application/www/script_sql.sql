drop database esmc_shop;

create database esmc_shop;

use esmc_shop;

create table utilizadores (nome_utilizador varchar (14) primary key, nome_proprio varchar (14), apelido varchar (14), sexo varchar (10), ano int (2), turma varchar (4),
						   morada varchar (40), cidade varchar (40), distrito varchar (40), cod_postal varchar (30), telefone int (9), 
						   email varchar (40), password varchar (30), nib varchar (21), pergunta_secreta varchar (30), resposta_secreta varchar (30), data_nasc date);
						 
create table artigos (id_artigo int (4) auto_increment primary key, nome_artigo varchar (60), foto_artigo varchar (60), descricao_artigo varchar (100), 
					  condicao_artigo varchar (12), hora_limite time, data_limite date, licitacao_base double (6,2), preco_final double (6,2), 
					  custos_envio double (6,2), forma_pagamento varchar (20), nome_utilizador varchar (14) references utilizadores (nome_utilizador), 
					  id_categoria int (4) references categorias (id_categoria));
					  
create table avaliacoes (id_avaliacao int (4) auto_increment primary key, classificacao_artigo int (1), classificacao_servico int (1),
						 nome_utilizador varchar (14) references utilizadores (nome_utilizador), id_artigo int (4) references artigos (id_artigo));

create table categorias (id_categoria int (4) auto_increment primary key, nome_categoria varchar (40));

create table licitacoes (id_licitacao int (4) auto_increment primary key, valor_licitacao double (6,2), hora_licitacao time, data_licitacao date, 
						 id_artigo int (4) references artigos (id_artigo), nome_utilizador varchar (14) references utilizadores (nome_utilizador));
						 
insert into utilizadores values ("Administrador","Administrador","12H","Masculino",12,"H","Escola Secundaria Monte de Caparica","Monte de Caparica",
								 "Setubal","2825-105 Monte de Caparica",212946120,"esmonte@mail.telepac.pt","adminescola","374561003437199203714","Programa de TV Preferido",
								 "Gosto Disto!","1992-11-19");

insert into categorias values (NULL,"Animais");

insert into categorias values (NULL,"Antiguidades");

insert into categorias values (NULL,"Calcado");

insert into categorias values (NULL,"Computadores e Materiais Informaticos");

insert into categorias values (NULL,"Consolas e Jogos");

insert into categorias values (NULL,"Fotografia e Video");

insert into categorias values (NULL,"Livros de Literatura");

insert into categorias values (NULL,"Livros Escolares");

insert into categorias values (NULL,"Musica");

insert into categorias values (NULL,"Produtos Artisticos");

insert into categorias values (NULL,"Telemoveis");

insert into categorias values (NULL,"Vestuario");