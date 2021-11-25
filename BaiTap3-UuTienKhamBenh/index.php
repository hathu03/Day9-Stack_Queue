<?php
include_once 'LinkedList.php';
include_once 'Patient.php';
$List=new Linkedlist();
$Patient=new Patient('Ha Thu',8);
$List->addPatient($Patient);
$Patient=new Patient('Ha Thu xinh dep',2);
$List->addPatient($Patient);
$Patient=new Patient('Ha Thu xinh dep tuyet voi',3);
$List->addPatient($Patient);
$Patient=new Patient('Cong chua',2);
$List->addPatient($Patient);
print_r($List->readList());
