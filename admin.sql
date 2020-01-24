

create table adminLogin(

    user_id int(11) not null Auto_increment,
    admin_first varchar(256) not null,
    admin_last varchar(256) not null,
    admin_email varchar(256) not null,
    admin_uid varchar(256) not null, 
    admin_pwd varchar(256) not null,
    primary key (user_id)
);


insert into adminLogin( 'Samir', 'Mahamed', '887poptart@gmail.com', 'Mod', 'mod123');



create table users (

    user_id int(11) not null Auto_increment,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_uid varchar(256) not null, 
    user_pwd varchar(256) not null,
    primary key (user_id)
);


create table Movie (
    movieID INT(11) not null Auto_increment,
    movieName varchar(256) not null,
    rating int(2) not null,
    ticketsSold int(20) not null,
    movieDescription varchar(256),
    primary key (movieID)
)