<?php 

OOPs: Object Oriented Programming 

1. Class and Object

Object : Real world entity (Physical Entity)
Class : blueprint of an object  (Logical Entity)

class : collection of data-members(variables) and member-functions(functions)

Syntax :

class className 
{
    public/private/protected var
    public/protected functions
}

$obj = new className ;
$obj1 = new className;

$obj->var 
$obj1->var

$obj->functionName();
$obj1->functionName();


constructor / destructor 

2. Encapsulation : hiding data from outside world
3. Abstraction : only access those properties which are necessary and all others are hidden
4. Inheritance
5. Polymorphism


Access-modifiers :

    1. public  : accessible outside the class 
    2. private : within a class
    3. protected : within a class and into the children