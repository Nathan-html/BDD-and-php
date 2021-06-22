<?php
$sql = "CREATE TABLE category(
            idCategory INT NOT NULL,
            nom VARCHAR(255) NOT NULL,
            idParent INT(11) NOT NULL
        ENGINE=InnoDB DEFAULT CHARSET=utf8mb4-general-ci;
        
        CREATE TABLE customer(
            idCustomer INT(11) NOT NULL,
            name VARCHAR(255) NOT NULL,
            firstname VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL
        )
        ENGINE=InnoDB DEFAULT CHARSET=utf8mb4-general-ci;

        CREATE TABLE order(
            idOrder INT(11) NOT NULL,
            date VARCHAR(255) NOT NULL,
            idCustomer INT(11) NOT NULL
        )
        ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE product(
            idProduct INT(11) NOT NULL,
            idCategory INT(11) NOT NULL,
            title VARCHAR(50) NOT NULL,
            description text NOT NULL,
            price INT(11) NOT NULL COMMENT 'prix pour 100G en cts',
            pictureFront VARCHAR(255) NOT NULL,
            pictureBack VARCHAR(255) NOT NULL
        )
        ENGINE=InnoDB DEFAULT CHARSET=utf8;

        CREATE TABLE product_order(
            idProduct INT(11) NOT NULL,
            idOrder INT(11) NOT NULL,
            qty INT(11) NOT NULL
        )
        ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";