<?php
 // created: 2017-07-26 11:32:34
$layout_defs["clg_Course"]["subpanel_setup"]['clg_student_clg_course_1'] = array (
  'order' => 100,
  'module' => 'clg_Student',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CLG_STUDENT_CLG_COURSE_1_FROM_CLG_STUDENT_TITLE',
  'get_subpanel_data' => 'clg_student_clg_course_1',
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
