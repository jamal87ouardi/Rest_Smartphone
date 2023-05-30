drop database if exists restsmart;
create database restsmart;
use restsmart;

CREATE TABLE `Phone` (
  `id` int primary key ,
  `name` varchar(50) NOT NULL,
  `prix` Double NOT NULL,
  `image` varchar(255) NOT NULL
  );

insert into Phone values
(1,'Samsung S21',4300,'https://www.mies.ma/5793-large_default/smartphone-samsung-galaxy-s21-5g-dual-sim-sm-g991bzagmwd.jpg'),
(2,'Xioami Redmi 10',3200,'https://gsm.ma/wp-content/uploads/2021/09/002-4.jpg'),
(3,'iphone 12',5800,'https://uno.ma/pub/media/catalog/product/cache/af8d7fd2c4634f9c922fba76a4a30c04/l/d/ld0005940089_1.jpeg')

;

