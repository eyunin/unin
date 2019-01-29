<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!empty($_POST['username']) && !empty($_POST['userphone'])){
		if (isset($_POST['username'])) {
			if (!empty($_POST['username'])){
				$name = strip_tags($_POST['username']);
				$nameFieldset = "Имя: ";
			}
		}

		if (isset($_POST['userphone'])) {
			if (!empty($_POST['userphone'])){
				$phone = strip_tags($_POST['userphone']);
				$phoneFieldset = "Телефон: ";
			}
		}
		$token = "655551635:AAFwnenSohXDgu4Jn39MJ10Vkz3I5Ibp-e4";
		$chat_id = "-366643337";
		$arr = array(
			$nameFieldset => $name,
			$phoneFieldset => $phone
		);
		foreach($arr as $key => $value) {
			$txt .= "<b>".$key."</b> ".$value."%0A";
		};
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
		if ($sendToTelegram) {

			echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
			return true;
		} else {
			echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
		}
	} else {
		echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
	}
} else {
	header ("Location: /");
}

?>