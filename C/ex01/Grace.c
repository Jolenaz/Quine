#include<stdio.h>
#define G "#include<stdio.h>%3$c#define G %4$c%1$s%4$c;%3$c#define H fopen (%4$cGrace_kid.c%4$c, %4$cw+%4$c)%3$c#define F int main(){char*s= G fprintf( H ,s,s,9,10,34,47);}%3$c%5$c*%3$c%2$ccom%3$c*%5$c%3$c";
#define H fopen ("Grace_kid.c", "w+")
#define F int main(){char*s= G fprintf( H ,s,s,9,10,34,47);}
/*
	com
*/