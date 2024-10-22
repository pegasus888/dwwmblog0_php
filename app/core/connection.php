<?php

if($_SERVER['SERVER_NAME'] == "localhost")
{
        // Locally
        define ('DBUSER',"root");
        define ('DBPASS',"");
        define ('DBNAME',"dwwmblog_db");
        define ('DBHOST',"localhost");
}else
{
        // Online
        define ('DBUSER',"root");
        define ('DBPASS',"");
        define ('DBNAME',"dwwmblog_db");
        define ('DBHOST',"localhost");
}