<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Teacher/Ext/Vardefs/clg_teacher_clg_course_1_clg_Teacher.php

// created: 2017-07-26 11:32:34
$dictionary["clg_Teacher"]["fields"]["clg_teacher_clg_course_1"] = array (
  'name' => 'clg_teacher_clg_course_1',
  'type' => 'link',
  'relationship' => 'clg_teacher_clg_course_1',
  'source' => 'non-db',
  'module' => 'clg_Course',
  'bean_name' => 'clg_Course',
  'vname' => 'LBL_CLG_TEACHER_CLG_COURSE_1_FROM_CLG_COURSE_TITLE',
  'id_name' => 'clg_teacher_clg_course_1clg_course_idb',
);

?>
<?php
// Merged from custom/Extension/modules/clg_Teacher/Ext/Vardefs/clg_student_clg_teacher_1_clg_Teacher.php

// created: 2017-07-31 11:53:38
$dictionary["clg_Teacher"]["fields"]["clg_student_clg_teacher_1"] = array (
  'name' => 'clg_student_clg_teacher_1',
  'type' => 'link',
  'relationship' => 'clg_student_clg_teacher_1',
  'source' => 'non-db',
  'module' => 'clg_Student',
  'bean_name' => 'clg_Student',
  'side' => 'right',
  'vname' => 'LBL_CLG_STUDENT_CLG_TEACHER_1_FROM_CLG_TEACHER_TITLE',
  'id_name' => 'clg_student_clg_teacher_1clg_student_ida',
  'link-type' => 'one',
);
$dictionary["clg_Teacher"]["fields"]["clg_student_clg_teacher_1_name"] = array (
  'name' => 'clg_student_clg_teacher_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_STUDENT_CLG_TEACHER_1_FROM_CLG_STUDENT_TITLE',
  'save' => true,
  'id_name' => 'clg_student_clg_teacher_1clg_student_ida',
  'link' => 'clg_student_clg_teacher_1',
  'table' => 'clg_student',
  'module' => 'clg_Student',
  'rname' => 'name',
);
$dictionary["clg_Teacher"]["fields"]["clg_student_clg_teacher_1clg_student_ida"] = array (
  'name' => 'clg_student_clg_teacher_1clg_student_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_STUDENT_CLG_TEACHER_1_FROM_CLG_TEACHER_TITLE_ID',
  'id_name' => 'clg_student_clg_teacher_1clg_student_ida',
  'link' => 'clg_student_clg_teacher_1',
  'table' => 'clg_student',
  'module' => 'clg_Student',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/clg_Teacher/Ext/Vardefs/vardef.php

$dictionary['clg_Teacher']['fields']['name']['required'] = false;
$dictionary['clg_Teacher']['fields']['description']['required'] = true;

?>
