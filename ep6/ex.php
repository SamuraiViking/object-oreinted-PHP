<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$kevin = new Person("Kevin");
$staff = new Staff([$kevin]);
$prepNetwork = new Business($staff);
$prepNetwork->hire($kevin);

var_dump($prepNetwork);