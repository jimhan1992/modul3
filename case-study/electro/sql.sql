create table if not exists account (
    id int primary auto_increment,
    name varchar(100) not null unique,
    email varchar (100) not null unique,
    password varchar (100) not null,
    address varchar (255) null,
    role varchar (50) default 'customer',
    status tinyint(1) default '1' comment '1 là ok, 0 khóa',
    created_at date default current_timestamp(),
    updated_at date default now()
    ) ENGINE = InnoDB;


create table if not exists category (
    id int primary auto_increment,
    name varchar(100) not null unique,
    status tinyint(1) default '1' comment '1 là hiển thị, 0 ẩn',
    prioty tinyint default '0',
    created_at date default now(),
    updated_at date default now()
) ENGINE = InnoDB;

create table if not exists product (
    id int primary auto_increment,
    name varchar(200) not null,
    image varchar(200) not null,
    price float(9,3) not null,
    sele_price float (9,3) default '0',
    description text,
    image_list text,
    status tinyint(1) default '1' comment '1 là hiển thị, 0 ẩn',
    category_id int not null,
    created_at date default current_timestamp(),
    updated_at date default now(),
    FOREIGN KEY (category_id) REFERENCES category(id)
    )ENGINE = InnoDB;


create table if not exists `order` (
    id int primary auto_increment,
    name varchar(100) null,
    email varchar (100) null,
    phone varchar (100) null,
    address varchar (255) null,
    note text (255),
    status tinyint(1) default '1' comment '1 là hiển thị, 0 ẩn',
    account_id int not null,
    created_at date default current_timestamp(),
    updated_at date default now()
    FOREIGN (account_id) REFERENCES account(id),
    ) ENGINE = InnoDB;


create table if not exists order_detail (
    order_id int not null,
    product_id int not null,
    quantity int not null,
    price float not null,
    FOREIGN (order_id) REFERENCES `order`(id),
    FOREIGN (product_id) REFERENCES product(id),
    ) ENGINE = InnoDB;
