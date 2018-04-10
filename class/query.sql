create table users(
    id int not null PRIMARY key AUTO_INCREMENT,
    email varchar(100),
    password varchar(255),
    role int
);

create table paitent(
    pid int not null PRIMARY key AUTO_INCREMENT,
    name varchar(255),
    address varchar(255),
    number varchar(20),
    email varchar(255),
    sample varchar(7000),
    status int
);


create table report( 
	rid int not null PRIMARY key AUTO_INCREMENT, 
	adds varchar(255), 
	address varchar(255), 
	money float(12,2), 
	pid int, 
	status int, 
	FOREIGN key(pid) REFERENCES paitent(pid) 
);

create table compiler( 
	cid int not null PRIMARY key AUTO_INCREMENT, 
	pid int, 
	rid int, 
    rpid int,
	FOREIGN key(pid) REFERENCES paitent(pid),
    FOREIGN key(rid) REFERENCES report(rid)    
);