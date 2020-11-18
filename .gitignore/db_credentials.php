<?php

//keeping these db credentials in this separate file
//WHY?
//1.it's easy to exclude this file from source code managers
//2.allows us to have unique credentials on development & production server
//3.if working with multiple developers, it allows us to have unique credentials for each of those developers
define("DB_SERVER", "localhost");
define("DB_USER", "web250user");
define("DB_PASS", "8N=YwFDn4]");
define("DB_NAME", "wnc-birds");