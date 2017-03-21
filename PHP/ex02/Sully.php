<?PHP
function main(){
$s='<?PHP%3$cfunction main(){%3$c$s=%4$c%1$s%4$c;%3$c$i = %6$d;%3$c$n=sprintf(%4$cSully_%7$cd.PHP%4$c,$i);%3$cif (($f=fopen($n,%4$cr%4$c))){--$i;fclose($f);$n=sprintf(%4$cSully_%7$cd.PHP%4$c,$i);}%3$c$f=fopen($n,%4$cw+%4$c);fprintf($f,$s,$s,9,10,39,47,$i,37);fclose($f);%3$cif ($i!=0){sprintf($n,%4$cPHP Sully_%7$c1$d.PHP%4$c,$i);exec($n);}%3$c}main();?>';
$i = 5;
$n=sprintf('Sully_%d.PHP',$i);
if (($f=fopen($n,'r'))){--$i;fclose($f);$n=sprintf('Sully_%d.PHP',$i);}
$f=fopen($n,'w+');fprintf($f,$s,$s,9,10,39,47,$i,37);fclose($f);
if ($i!=0){sprintf($n,'PHP Sully_%1$d.PHP',$i);exec($n);}
}main();?>