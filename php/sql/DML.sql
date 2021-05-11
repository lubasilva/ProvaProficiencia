create table cliente(

    nome varchar(200) not null,
    cpf char(11) not null,
    endereco varchar(500),
    email varchar(200) not null,
    telefone varchar(200),
    senha text not null

);

alter table cliente add PRIMARY KEY (cpf);
create unique index cpf_idx ON cliente (cpf);


create table categoria(
    codg_categoria char(4) not null,
    nome_categoria varchar(20) not null,
    desc_categoria varchar(200)
);

alter table categoria add primary key (codg_categoria);
create unique index codg_categoria_idx ON categoria(codg_categoria);

create table produto(

    codg_produto char(4) not null,
    nome_produto varchar(200) not null,
    desc_produto varchar(200),
    valor decimal(10,2) not null, 
    codg_categoria char(4) not null
    updated_at timestamp not null DEFAULT NOW()
)

alter table produto add primary key (codg_produto);
ALTER TABLE produto ADD CONSTRAINT codg_categoira_fk FOREIGN KEY (codg_categoria) REFERENCES categoria(codg_categoria);
create unique index codg_produto_idx ON produto(codg_produto);



-- ## QUERY Usada ## --
select * from produto
SELECT * FROM public.produto ORDER BY updated_at limit 10

select * from categoria

insert into categoria values ('CA01', 'Categoria 1', 'Descrição da categoria 1');
insert into produto values ('PO01', 'Produto 1', 'Descrição do produto 1', 28.38, 'CA01')
insert into produto values ('PO02', 'Produto 2', 'Descrição do produto 2', 28.38, 'CA01');
insert into produto values ('PO03', 'Produto 3', 'Descrição do produto 3', 28.38, 'CA01');
insert into produto values ('PO04', 'Produto 4', 'Descrição do produto 4', 28.38, 'CA01');
insert into produto values ('PO06', 'Produto 6', 'Descrição do produto 6', 28.38, 'CA01');
select * from cliente;

select 1 from cliente where cpf = '05022431122'

alter table categoria drop categoria
alter table categoria add column desc_categoria varchar(200)