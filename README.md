# ESCM Shop (Demo)

#### Steps for installation of the _Database_ and _localhost Server_:
##### 1) Install [**_Wamp Server_**]();

##### 2) After install [**_Wamp Server_**](), do the following steps:

> a) Go to the _Notification Icons Area_ in your personal _taskbar_, click on the [**_Wamp Server_**]() icon and then, click on _Start All Services_;

> b) Go to the _Notification Icons Area_ in your personal _taskbar_, click on the [**_Wamp Server_**]() icon, navigate to _MySQL_ menu and then, click on _MySQL Console_;

> c) Use the following command, to run the **_MySQL_** _script_:
````
mysql> source the/path/to/your/script/script_sql.sql;
````
> i) Per example, for me, the command was the following:
````
mysql> source C:/wamp64/scripts/esmc-shop/script_sql.sql;
````
> ii) The output was the following:
````
Query OK, 5 rows affected (0.07 sec)

Query OK, 1 row affected (0.00 sec)

Database changed

Query OK, 0 rows affected (0.01 sec)

Query OK, 0 rows affected (0.01 sec)

Query OK, 0 rows affected (0.01 sec)

Query OK, 0 rows affected (0.01 sec)

Query OK, 0 rows affected (0.01 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)
````

> d) Go to the _Notification Icons Area_ in your personal _taskbar_, click on the [**_Wamp Server_**]() icon and then, click on _www directory_ to open the folder of the projects/directories contained in the _localhost_;

> e) Copy the folder _esmc-shop_ contained in the folder _application/www_ to the folder opened in _d)_;

> f) Go to your _Web Browser_, type the '_http://localhost/esmc-shop/_' in the _URL address_ bar and enjoy it;
