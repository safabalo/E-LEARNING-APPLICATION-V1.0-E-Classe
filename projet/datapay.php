<?php
    $payments = [
        ['name' => 'nouamae', 'payment scheduel' => 'First' , 'bill number' => 00012223 , 'paid amount' => 'DHS 100,000' , 'balance amount' => 'DHS 500,000' , 'date' => '05-Jan, 2022'],
        ['name' => 'karthi' , 'payment scheduel' => 'First' , 'bill number' => 00012223 , 'paid amount' => 'DHS 100,000' , 'balance amount' => 'DHS 500,000' , 'date' => '05-Jan, 2022'],
        ['name' => 'karthi' , 'payment scheduel' => 'First' , 'bill number' => 00012223 , 'paid amount' => 'DHS 100,000' , 'balance amount' => 'DHS 500,000' , 'date' => '05-Jan, 2022'],   
        ['name' => 'karthi' , 'payment scheduel' => 'First' , 'bill number' => 00012223 , 'paid amount' => 'DHS 100,000' , 'balance amount' => 'DHS 500,000' , 'date' => '05-Jan, 2022'],   
        ['name' => 'karthi' , 'payment scheduel' => 'First' , 'bill number' => 00012223 , 'paid amount' => 'DHS 100,000' , 'balance amount' => 'DHS 500,000' , 'date' => '05-Jan, 2022'],   
        ['name' => 'karthi' , 'payment scheduel' => 'First' , 'bill number' => 00012223 , 'paid amount' => 'DHS 100,000' , 'balance amount' => 'DHS 500,000' , 'date' => '05-Jan, 2022'],   
        ['name' => 'karthi' , 'payment scheduel' => 'First' , 'bill number' => 00012223 , 'paid amount' => 'DHS 100,000' , 'balance amount' => 'DHS 500,000' , 'date' => '05-Jan, 2022'],   
        ['name' => 'karthi' , 'payment scheduel' => 'First' , 'bill number' => 00012223 , 'paid amount' => 'DHS 100,000' , 'balance amount' => 'DHS 500,000' , 'date' => '05-Jan, 2022'],   
   ];
   
   if(fopen("datapay.json", "r")){
       fopen("datapay.json","r");
   }
   else{
       fopen("datapay.json", "w");
   }

   $payment= json_encode($payments);
   file_put_contents("datapay.json",$payment);
?>
