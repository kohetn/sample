<?php

$token = "2132338987:AAG_LXCdtSomXhV116Nv5cb5v9lkwdHvuxo";
$website = "https://api.telegram.org/bot".$token;
$web ="https://api.telegram.org/file/bot".$token;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatID = $update['message']['from']['id'];
$firstname = $update['message']['from']['first_name'];
$username = $update['message']['from']['username'];
$text = $update['message']['text'];

switch($text)
{
	case"/start":
		sendMessage($chatID, "hi $username");
		break;

	case"Hi":
		sendMessage($chatID, "Hi welcome to jumpstart retail. How can I help you?");
		break;

	case "I want to return my order":
		sendMessage($chatID, "Sure, please ender order ID you want to return");	
		break;

	case "1200864532":
		sendMessage($chatID, "Return request submitted successfully.");
		break;

	case "Hello":
		sendMessage($chatID, "Hello Welcome to Jumpstart Retail
		I am your virtual Assistant.
		How can I help you? ");
		break;

	case "Track order":
		sendMessage($chatID, "Okay Let me check.
		Please select the order ID to track 
		Your order:
		-1357389765317 
		-7698552397651");
		break;

	case "1":
		sendMessage($chatID, "Order tracking details:
		Status: Pending 
		Order ID – 1357389765317
		Product Name: ……");
		break;

}

function sendMessage($chatID,$text)
{
	$url = $GLOBALS[website]."/sendMessage?chat_id=$chatID&text=".urlencode($text);
	file_get_contents($url);
	
}

?>


