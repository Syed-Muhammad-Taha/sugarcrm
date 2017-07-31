<?php
// created: 2017-07-31 11:53:38
$dictionary["clg_student_clg_teacher_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'clg_student_clg_teacher_1' => 
    array (
      'lhs_module' => 'clg_Student',
      'lhs_table' => 'clg_student',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_Teacher',
      'rhs_table' => 'clg_teacher',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg_student_clg_teacher_1_c',
      'join_key_lhs' => 'clg_student_clg_teacher_1clg_student_ida',
      'join_key_rhs' => 'clg_student_clg_teacher_1clg_teacher_idb',
    ),
  ),
  'table' => 'clg_student_clg_teacher_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'clg_student_clg_teacher_1clg_student_ida' => 
    array (
      'name' => 'clg_student_clg_teacher_1clg_student_ida',
      'type' => 'id',
    ),
    'clg_student_clg_teacher_1clg_teacher_idb' => 
    array (
      'name' => 'clg_student_clg_teacher_1clg_teacher_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg_student_clg_teacher_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg_student_clg_teacher_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg_student_clg_teacher_1clg_student_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'clg_student_clg_teacher_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'clg_student_clg_teacher_1clg_teacher_idb',
      ),
    ),
  ),
);