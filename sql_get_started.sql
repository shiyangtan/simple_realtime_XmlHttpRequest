CREATE DATABASE america_major_cities;

USE america_major_cities;

CREATE TABLE cities (
city_name VARCHAR(255)
);

/* assign a new user to the new database */
CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON america_major_cities.* TO 'newuser'@'localhost';
FLUSH PRIVILEGES;

DELIMITER //
 CREATE PROCEDURE get_cities_by_keyword(IN keyword VARCHAR(255))
   BEGIN
   SELECT * FROM cities WHERE city_name LIKE CONCAT('%', keyword, '%');
   END //
 DELIMITER ;
