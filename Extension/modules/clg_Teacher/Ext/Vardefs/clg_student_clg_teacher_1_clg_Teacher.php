<?php
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
