<?php

/*
...
*/

  wyszukajWierszeZagrozoneZbednymUsunieciem($pliki_do_obfuskacji);
  usunKomentarze($pliki_do_obfuskacji);
  usunBialeZnaki($pliki_do_obfuskacji);
  dodajWinietePrawAutorskich($pliki_do_obfuskacji);
  
/*
...
*/

  przypiszKryptonimyZmiennym($lista_zmiennych,$SNZ_roboczy);
  zapiszSN($SNZ_roboczy,$plik_SNZ,$odwrotny_SNZ);
  zastosujSNZ($pliki_do_obfuskacji,$SNZ_roboczy);
  
/*
...
*/

pokazStatystyki();

/*
...
*/
