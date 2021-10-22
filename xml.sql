-- entrada tablela/ entidade
--
-- id_entrada
-- origem
-- valor
-- dia_recebimento
-- id_mes
--
--
--
-- dividas
--
-- id_divida : int
-- origem: varchar
-- descricao: varchar
-- valor: float
-- vencimento: date
-- id_mes // relacionamento
--
-- Mes
--
-- id_mes
-- descricao

CREATE DATABASE  sistema_contas;

create table entrada(
id_entrada int  primary key AUTO_INCREMENT,
origem varchar(100),
valor double ,
dia_recebimento varchar(2),
id_mes int
)
create table mes(
id_mes int primary AUTO_INCREMENT,
descricao varchar (100)
)

create  table divida(
id_divida int primary key AUTO_INCREMENT,
origem varchar(100),
descricao varchar(120),
valor double ,
vencimento date,
id_mes int
)

AUTER TABLE entrada ADD CONSTRAINT FK_ID_MES
FOREIGN  KEY(id_mes) references  mes.id_mes

AUTER TABLE divida ADD CONSTRAINT FK_ID_MES
FOREIGN  KEY(id_mes) references  mes.id_mes