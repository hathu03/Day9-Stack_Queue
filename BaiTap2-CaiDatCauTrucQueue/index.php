<?php
include_once 'Node.php';
include_once 'Queue.php';

$Queue = new Queue();

$Queue->enqueue('hi friend');
$Queue->enqueue('hi friend');
$Queue->enqueue('hi friend');
$Queue->enqueue('hi friend');
$Queue->enqueue('hi con cac');

echo $Queue->dequeue().'<br>';
echo $Queue->dequeue().'<br>';
echo $Queue->dequeue().'<br>';
echo $Queue->dequeue().'<br>';
echo $Queue->dequeue().'<br>';