<?php 

Inheritance : to access properties of one class to another 
==> code reusability
==> extends keywords
==> create obj of child class always 

1. single 
class A ==> Class B 

B==A

class B extends A 

2. multiple

class A, class B ,class C
class c ==> A,B,c

class C extends A,B,C (not supported)

 (NOT supported) (trait,interface : concepts are used to achieve multiple inheritance)
 
3. multilevel 

a==> b ==> c 

class b extedns a 
class c extends b

class D 

class P extends D

class S extends P

4. hierarchical 

GrandFather : s:ch1,ch2 => d:ch1,ch2


5. hybrid

multiple+single 
multiple+hierarchical 
multiple+single+multilevel