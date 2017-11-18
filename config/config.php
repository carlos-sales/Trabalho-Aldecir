<?php

    // incluir biblioteca do PDO

    require_once 'lib/base_db_pdo.php';
    
    // Define as constantes para conexão com a base de dados
    
    define( "db_dbtype"     , "mysql" );
    define( "db_host"       , "localhost" );
    define( "db_port"       , "3306" );
    define( "db_user"       , "root" );
    define( "db_password"   , "" );
    define( "db_bdados"     , "fasm2017" );

    // Conecta com a base de dados
    
    $conDb = new database( db_dbtype, db_host, db_port, db_user, db_password, db_bdados );

    // Configura diretórios padrão
    
    $path_css   = (str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME'])). "css/";
    $path_js    = (str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME'])). "js/";
    $path_img   = (str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME'])). "img/";
    
    $path_lib   = (str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME'])). "lib/";    