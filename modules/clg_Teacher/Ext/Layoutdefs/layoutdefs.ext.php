<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Teacher/Ext/Layoutdefs/clg_teacher_clg_course_1_clg_Teacher.php

 // created: 2017-07-26 11:32:34
$layout_defs["clg_Teacher"]["subpanel_setup"]['clg_teacher_clg_course_1'] = array (
  'order' => 100,
  'module' => 'clg_Course',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CLG_TEACHER_CLG_COURSE_1_FROM_CLG_COURSE_TITLE',
  'get_subpanel_data' => 'clg_teacher_clg_course_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>
<?php
// Merged from custom/Extension/modules/clg_Teacher/Ext/Layoutdefs/new_subpanel.php

 // created: 2017-07-26 11:32:34
$layout_defs["clg_Teacher"]["subpanel_setup"]['clg_teacher_new_subpanel'] = array (
  'order' => 100,
  'module' => 'clg_Course',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EXAMPLE_MODULE_LABEL',
  'get_subpanel_data' => 'clg_teacher_clg_course_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>
