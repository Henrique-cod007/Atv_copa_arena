create database copa_arena;
use copa_arena;

create table jogadores(
Id int primary key auto_increment,
nickname varchar(70),
nome varchar(70),
email varchar(90),
telefone_whatsApp varchar(70),
usu_discord varchar(70),
cidade varchar(70),
plataforma enum("PC","console","celular"),
jogo enum("Valorante","League of Legends","EA FC")
)default char set utf8;