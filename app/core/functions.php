<?php

//create_tables();  (Muted so no waste of time because of running)
function create_tables()
{
    // Create a PDO Object
    $string = "mysql:hostname=localhost;";
    $con = new PDO($string, DBUSER, DBPASS);

    // Check if connexion is ok:
    //print_r($con);

    // Create db
    $query = "create database if not exists ". DBNAME;
    $stm = $con->prepare($query);
    $stm->execute();

    // Select db
    $query = "use ". DBNAME;
    $stm = $con->prepare($query);
    $stm->execute();

    // Create users table
    $query = "create table if not exists users(

        id int(11) primary key auto_increment,
        username varchar(50) not null,
        email varchar(100) not null,
        password varchar(255) not null,
        image varchar(1024) null,
        date datetime default current_timestamp,
        role varchar(10) not null,

        /** Search by **/
        key username (username),
        key email (email)
    )";
    $stm = $con->prepare($query);
    $stm->execute();

    /** Create categories table **/
    $query = "create table if not exists categories(

        id int(11) primary key auto_increment,
        category varchar(50) not null,
        slug varchar(100) not null,
        disabled tinyint default 0,

        key slug (slug),
        key category (category)
    )";
    $stm = $con->prepare($query);
    $stm->execute();

    // Create posts table
    $query = "create table if not exists posts(

        id int(11) primary key auto_increment,
        user_id int(11),
        category_id int(11),
        
        title varchar(100) not null,
        content text not null,
        image varchar(1024) null,
        date datetime default current_timestamp,
        slug varchar(100) not null,

        key user_id (user_id),
        key category_id (category_id),
        key title (title),
        key slug (slug),
        key date (date)
    )";
    $stm = $con->prepare($query);
    $stm->execute();

}
