drop database if exists restapi;
create database restapi;
use restapi;
CREATE TABLE `emp` (
  `id` int primary key auto_increment,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int NOT NULL
);

select * from emp;

