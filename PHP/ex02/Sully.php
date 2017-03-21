<?PHP
function main(){
$s='#include<stdio.h>%3$c#include<stdlib.h>%3$c#define G %4$c%1$s%4$c%3$cint main(){%3$cint i = %6$d;%3$cchar*n=malloc(1000);sprintf(n,%4$cSully_%7$cd.c%4$c,i);FILE*f;%3$cif ((f=fopen(n,%4$cr%4$c))){--i;fclose(f);sprintf(n,%4$cSully_%7$cd.c%4$c,i);}%3$cf=fopen(n,%4$cw+%4$c);char*s= G ;fprintf(f,s,s,9,10,34,47,i,37);fclose(f);%3$cif (i!=0){sprintf(n,%4$cgcc -Wall -Wextra -Werror -o Sully_%7$c1$d Sully_%7$c1$d.c;./Sully_%7$c1$d%4$c,i);system(n);}%3$c}';
$i = 5;
$n=sprintf('Sully_%d.PHP',$i);
if (($f=fopen($n,'r'))){--$i;fclose($f);$n=sprintf('Sully_%d.PHP',$i);}
$f=fopen($n,'w+');fprintf($f,$s,$s,9,10,34,47,$i,37);fclose($f);
if ($i!=0){sprintf($n,'PHP Sully_%1$d.PHP',$i);system($n);}
}main();?>