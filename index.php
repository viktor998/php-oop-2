<?php
    require_once  './modules/user.php';
    require_once  './modules/card_info.php';

    $user = new User('Viktor', 'Casubolo', '08/10/1998', 'Italy', 'palermo', '90143', 'Via Fasulla 123');
    

    $holder = $user->getName() . ' ' . $user->getSurname();
    
    $card = new CreditCard($holder, '123 456 789', '08/12/24', '432');

    var_dump($user);
    var_dump($card);
?>