<?php
  /* Copyright (C) 2011 by iRail vzw/asbl
   *
   * This page will return information about a specific vehicle.
   */
include_once '../vendor/autoload.php';
include_once 'requests/CompositionRequest.php';
include_once 'APICall.php';
date_default_timezone_set('Europe/Brussels');
$call = new APICall('composition');
$call->executeCall();
