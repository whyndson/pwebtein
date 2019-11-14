create database quiz;
use quiz;

	create table usuario(
		id int auto_increment,
        idade int not null,
        peso float not null,
        altura float not null,
		curso varchar(50) not null,
		facilidade varchar(50) not null,
		frequenciaCardiaca float not null,
        primary key(id)
	);
	
    create table resultado(
		id int auto_increment,
        id_usuario int,
        quantidadeAcertos int,
        frequenciaCardiaca float,
        foreign key(id_usuario) references usuario(id), 
        primary key(id)
    );
        