<?php

require_once dirname(__FILE__).'/../config.php';

//załaduj kontroler
require_once $conf->root_path.'/app/OtherCtrl.class.php';

//utwórz obiekt i użyj
$ctrl = new OtherCtrl();
$ctrl->generateView();