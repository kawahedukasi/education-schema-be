<?php
  $angka = 36;
  $kalimat = "Belajar PHP sangat menyenangkan.";
  $desimal = 3.69;
      
  echo ("<b>\$angka = $angka<br><br>");
  echo ("Apakah \$angka bertipe integer??<br>");
  if (is_int($angka)==TRUE)
  echo("Ya, benar sekali<br><br>");
  else
  {
      echo("Salah, \$angka bukan bertipe integer<br>");
      echo("Melainkan bertipe : ".gettype($angka)."<br><br>");      
  } echo ("<b>\$kalimat = $kalimat<br><br>");
  echo ("Apakah \$kalimat bertipe string??<br>");
  if (is_string($kalimat)==TRUE)
  echo("Ya, benar sekali<br><br>");
  else
  {
      echo("Salah, \$kalimat bukan bertipe string<br>");
      echo("Melainkan bertipe : ".gettype($kalimat)."<br><br>"); 
  } echo ("<b>\$desimal = $desimal<br><br>");

  echo ("Apakah \$desimal bertipe boolean??<br>");
  if (is_bool($desimal)==TRUE)
  echo("Ya, benar sekali<br><br>");
  else
  {
      echo("Salah, \$desimal bukan bertipe boolean<br>");
      echo("Melainkan bertipe : ".gettype($desimal)."<br><br>");
  }
