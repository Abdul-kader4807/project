create table if not exists core_transaction_type(
    id int primary key auto_increment,
    name varchar (50),
    factor float,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);
