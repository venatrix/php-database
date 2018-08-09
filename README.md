## Openshift -connectivity test between MySql Database and PHP Application

`oc login `

create `mysql` Application from Template

login to mysql pod

select sampledb from database

`select sampledb`

create Table

`create table users (user_id int not null auto_increment, username varchar(200),PRIMARY KEY(user_id));`

Insert values in the table "users"
```
insert into users values (null, 'Jay Gatsby');
insert into users values (null, 'Ignatius Reilly');
insert into users values (null, 'Alex Portnoy');
insert into users values (null, 'Sherlock Holmes');
insert into users values (null, 'Sam Spade');
insert into users values (null, 'Mary Katherine Blackwood');
```
#To check 

`select * from users`



create `php` Application from template

check the data with php Application
```
php applcation url/dbtest.php
eg: http:example.com/dbtest.php
```
