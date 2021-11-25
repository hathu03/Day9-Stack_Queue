<?php
include_once 'Stack.php';
$myStack = new Stack();
$myStack->push('Tom');
$myStack->push('Jerry');
$myStack->push('Oggy');
$myStack->push('Jack');
$myStack->push('Doremon');
echo $myStack->pop();