/* table site E2C */
CREATE TABLE IF NOT EXISTS sites (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    city VARCHAR(50) NOT NULL UNIQUE
)ENGINE=InnoDB;

/*table des roles*/
CREATE TABLE IF NOT EXISTS roles (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name_role VARCHAR(50) NOT NULL UNIQUE
)ENGINE=InnoDB;


/* table users */
CREATE TABLE IF NOT EXISTS Users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    date_of_birth DATETIME NOT NULL,
    site_id SMALLINT UNSIGNED NOT NULL,
    role_id SMALLINT UNSIGNED NOT NULL,
    referent_id INT UNSIGNED,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    CONSTRAINT fk_role
        FOREIGN KEY (role_id)
        REFERENCES roles(id),
    CONSTRAINT fk_site
        FOREIGN KEY (site_id)
        REFERENCES sites(id),
    CONSTRAINT fk_referent
        FOREIGN KEY (referent_id)
        REFERENCES Users(id)
)ENGINE=InnoDB;

/*table annonce */
CREATE TABLE IF NOT EXISTS annonce (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    picture VARCHAR(255),
    title VARCHAR(50) NOT NULL,
    descritption TEXT NOT NULL,
    user_id INT UNSIGNED NOT NULL, 
    CONSTRAINT fk_user_annonce
        FOREIGN KEY (user_id)
        REFERENCES Users(id)
)ENGINE=InnoDB;

/*table event*/
CREATE TABLE IF NOT EXISTS evenement (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    picture VARCHAR(255),
    title VARCHAR(50) NOT NULL,
    descritption TEXT NOT NULL,
    date DATETIME NOT NULL,
    user_id INT UNSIGNED NOT NULL, 
    CONSTRAINT fk_user_evenement
        FOREIGN KEY (user_id)
        REFERENCES Users(id)
)ENGINE=InnoDB;

/*table des canaux de discussion*/
CREATE TABLE IF NOT EXISTS discussion(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    is_general BOOLEAN NOT NULL DEFAULT false,
    site_id SMALLINT UNSIGNED,
    user1_id INT UNSIGNED,
    user2_id INT UNSIGNED,
    CONSTRAINT fk_site_discussion
        FOREIGN KEY (site_id)
        REFERENCES sites(id),
    CONSTRAINT fk_user1
        FOREIGN KEY (user1_id)
        REFERENCES Users(id),
    CONSTRAINT fk_user2
        FOREIGN KEY (user2_id)
        REFERENCES Users(id)
)ENGINE=InnoDB;

/* table message */ 
CREATE TABLE IF NOT EXISTS chat (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    message TEXT NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    discussion_id INT UNSIGNED NOT NULL,
    CONSTRAINT fk_user_message
        FOREIGN KEY (user_id)
        REFERENCES Users(id),
    CONSTRAINT fk_discussion_message
        FOREIGN KEY (discussion_id)
        REFERENCES discussion(id)
)ENGINE=InnoDB;