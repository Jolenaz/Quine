#include<stdio.h>
/*
    com1
*/
void a(){char*s="#include<stdio.h>%cint main(){char*a=%c%s%c;printf(a,10,34,a,34);}";printf(s,10,34,s,34);};
int main(){
/*
    com2
*/
    a();}