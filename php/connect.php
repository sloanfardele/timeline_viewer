<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 11/08/2016
 * Time: 18:29
 */


	function connect()
    {
        $link = mysqli_connect("localhost","root","","timeline_viewer");
        if (!$link)
        {
            die('erreur de connexion a la base de données(' .mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }

        return $link;
    }

	function deconnect($link)
    {
        mysqli_close($link);
    }

