<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.7.1.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'clg',
  'author' => 'Taha',
  'description' => 'This is College package, created on 26-07-2017 10:31am',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'College',
  'published_date' => '2017-07-26 05:33:25',
  'type' => 'module',
  'version' => 1501047205,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'College',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'clg_Student',
      'class' => 'clg_Student',
      'path' => 'modules/clg_Student/clg_Student.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'clg_Course',
      'class' => 'clg_Course',
      'path' => 'modules/clg_Course/clg_Course.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'clg_Teacher',
      'class' => 'clg_Teacher',
      'path' => 'modules/clg_Teacher/clg_Teacher.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Student',
      'to' => 'modules/clg_Student',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Course',
      'to' => 'modules/clg_Course',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Teacher',
      'to' => 'modules/clg_Teacher',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'action_file_map' => array(
     array(
        'from' => '../../../modules/clg_Teacher/test.php',
	'to_module' => 'clg_Teacher'
     ),
  ),
);
