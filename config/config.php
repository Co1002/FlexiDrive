<?php

/*
RouteBase wird gesetzt, falls das Projektverzeichnis nicht das Host-Verzeichnis ist.
=> normal: ""
=> sonst z.B.: "/FlexiDrive"
*/
define("ROUTE_BASE", "");

define("CONTROLLER_DIR", __DIR__."/../src/Controller");
define("MODEL_DIR", __DIR__."/../src/Model");
define("VIEW_DIR", __DIR__."/../src/View");