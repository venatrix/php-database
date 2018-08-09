## Openshift -connectivity test between MySql Database and PHP Application

`oc login `

create `mysql` Application from Template

select sampledb database

Add data to the database from the file sql-query or create your own table

create `php` Application from template

check the data with php
```
php applcation url/dbtest.php
eg: http:example.com/dbtest.php
```
