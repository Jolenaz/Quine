#include<stdio.h>
#include<stdlib.h>
#define G "#include<stdio.h>%3$c#include<stdlib.h>%3$c#define G %4$c%1$s%4$c%3$cint main(){%3$cint i = %6$d;%3$cchar*n=malloc(1000);sprintf(n,%4$cSully_%7$cd.c%4$c,i);FILE*f;%3$cif ((f=fopen(n,%4$cr%4$c))){--i;fclose(f);sprintf(n,%4$cSully_%7$cd.c%4$c,i);}%3$cf=fopen(n,%4$cw+%4$c);char*s= G ;fprintf(f,s,s,9,10,34,47,i,37);fclose(f);%3$cif (i!=0){sprintf(n,%4$cgcc -Wall -Wextra -Werror -o Sully_%7$c1$d Sully_%7$c1$d.c;./Sully_%7$c1$d%4$c,i);system(n);}%3$c}"
int main(){
int i = 5;
char*n=malloc(1000);sprintf(n,"Sully_%d.c",i);FILE*f;
if ((f=fopen(n,"r"))){--i;fclose(f);sprintf(n,"Sully_%d.c",i);}
f=fopen(n,"w+");char*s= G ;fprintf(f,s,s,9,10,34,47,i,37);fclose(f);
if (i!=0){sprintf(n,"gcc -Wall -Wextra -Werror -o Sully_%1$d Sully_%1$d.c;./Sully_%1$d",i);system(n);}
}