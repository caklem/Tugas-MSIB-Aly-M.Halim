<?php
 
// buat class sepeda motor
class sepeda_motor {
 
   // buat Public property
   Public $pemilik;
 
   // buat Public method
   Public function hidupkan_sepeda_motor() {
     return " Hidupkan sepeda motor";
   }
}
  
// buat objek dari class sepeda motor (instansiasi)
$sepeda_motor_andi = new sepeda_motor();
   
// set property
$sepeda_motor_andi->pemilik="andi ";
  
// tampilkan property
echo $sepeda_motor_andi->pemilik; // andi
  
// tampilkan method
echo $sepeda_motor_andi->hidupkan_sepeda_motor(); // "Hidupkan sepeda motor"
?>