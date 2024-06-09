<?php 

functions: to reuse the code 

==> it is a block of code which we can use as many times as we need when we call it.

Types: 
1. Simple 
function functionName()
{
    ..code;
}
functionName();// function calling 

2. Parameterized 

function functionName(p1,p2,...,pN) //parameters
{
    ..code;
}
functionName(v1,v2,...,vN);// function calling 


3. Recursive : when function calls itself 

function functionName()
{
    ..code;
    functionName();
}

functionName();


