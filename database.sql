CREATE DATABASE IF NOT EXISTS CRUD;
USE CRUD;

CREATE TABLE users(
    id          int(255) auto_increment not null,
    name        varchar(50)  NOT NULL,       
    description text,
    image       varchar(50),
    created_at  datetime DEFAULT NULL,
    updated_at  datetime DEFAULT NULL,
    remember_token  varchar(255),
    CONSTRAINT pk_users PRIMARY KEY (id)
)ENGINE = InnoDb;

CREATE TABLE productos(
    id          int(255) auto_increment not null,
    name        varchar(50)  NOT NULL,       
    description text,
    created_at  datetime DEFAULT NULL,
    updated_at  datetime DEFAULT NULL,
    CONSTRAINT pk_users PRIMARY KEY (id)
    CONSTRAINT fk_post_user FOREIGN KEY (user_id) REFERENCES users(id),
)ENGINE = InnoDb;