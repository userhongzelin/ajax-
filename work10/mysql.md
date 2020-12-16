create table message(
    id int unsigned auto_increment,
    msg varchar(255),
    sender varchar(50),
    receiver varchar(50),
    color varchar(50),
    biaoqing varchar(50),
    add_time DATE,
    primary key(id)
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;