
<?php
if (empty($_POST['name'])||empty($_POST['phone'])||empty($_POST['email'])){
    header('Location:Eror.php');
} else{
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$token = "993252144:AAHuu2CCkgFNOAxv2aJVmU-22YGeV30zoa0";
$chat_id = "-300426274";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach ( $_POST as $key => $value ) {
    if ( $value != "" && $key != "" && $key != "" && $key != "" ) {
      $message .= "
      " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
    		</tr>
    		";
        $txt .= "<b>".$key."</b> ".$value."%0A";
  }
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


header('Location:Thanks.php');
    
}
?>