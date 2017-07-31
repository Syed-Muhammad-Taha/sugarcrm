<?php
 // created: 2017-07-31 11:53:38
$layout_defs["clg_Student"]["subpanel_setup"]['clg_student_clg_teacher_1'] = array (
  'order' => 100,
  'module' => 'clg_Teacher',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CLG_STUDENT_CLG_TEACHER_1_FROM_CLG_TEACHER_TITLE',
  'get_subpanel_data' => 'clg_student_clg_teacher_1',
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
