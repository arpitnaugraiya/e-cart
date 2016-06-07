<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 6/5/2016
 * Time: 3:00 PM
 */
session_start();

if(session_destroy()){
    header("Location: home.html");
}