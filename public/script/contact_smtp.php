<?php
/*
Template Name: BeautyZone : Beauty Spa Salon HTML Template

Variable
	$recaptchaSecret : Recaptcha Secret Key
 
	$dzName : Contact Person Name
	$dzEmail : Contact Person Email
	$dzMessage : Contact Person Message
	$dzRes : response holder
	$dzOtherField : Form other additional fields
	
	
	$dzMailSubject : Mail Subject.
	$dzMailMessage : Mail Body
	$dzMailHeader : Mail Header
	$dzEmailReceiver : Contact receiver email address
	$dzEmailFrom : Mail Form title
	$dzEmailHeader : Mail headers
*/
/* require ReCaptcha class */
require('recaptcha-master/src/autoload.php');

/* ReCaptch Secret */
$recaptchaSecret = '6LdMTxYdAAAAAGts_EiIsUOnGZEFyx56PwP-HKhx';

$dzEmailTo 		= "info@sartbeauty.com";   /* Receiver Email Address */
$dzEmailFrom    = "S Art Beauty Contact";

#### Load PHP Mailer Library ####
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'php_mail/vendor/autoload.php';
#### Load PHP Mailer Library End ####

function pr($value)
{
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}

#### SMTP Mail Function ####
function smtp_mail($dzEmailTo, $dzEmailFrom, $dzEmail, $dzMailSubject, $dzMailMessage)
{
    $mail = new PHPMailer(true);
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@sartbeauty.com';                   //SMTP username
    $mail->Password   = 'Pier2324+';                        //SMTP password
    $mail->SMTPSecure = 'TLS';            						//Enable implicit TLS encryption
    $mail->Port       = 587;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($dzEmailTo, $dzEmailFrom);
    $mail->addAddress($dzEmailTo, $dzEmailFrom);     //Add a recipient
    $mail->addReplyTo($dzEmail);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $dzMailSubject;
    $mail->Body    = $dzMailMessage;

    return $mail->send();
}
#### SMTP Mail Function End ####

try {
    if (!empty($_POST)) {
	
		$dzRes = array('status' => 0, 'msg'=>'Bir sorun oluştu.');
	
		$reCaptchaEnable = isset($_POST['reCaptchaEnable']) ? $_POST['reCaptchaEnable'] : 1;
		
		
		if($reCaptchaEnable)
		{
		
			/* validate the ReCaptcha, if something is wrong, we throw an Exception,
				i.e. code stops executing and goes to catch() block */
			
			if (!isset($_POST['g-recaptcha-response'])) {
				$dzRes['status'] = 0;
				$dzRes['msg'] = 'ReCaptcha kurulu değil.';
				echo json_encode($dzRes);
				exit;
			}

			/* do not forget to enter your secret key from https://www.google.com/recaptcha/admin */
			
			$recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
			
			/* we validate the ReCaptcha field together with the user's IP address */
			
			$response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

			if (!$response->isSuccess()) {
				$dzRes['status'] = 0;
				$dzRes['msg'] = 'ReCaptcha onaylanmadı.';
				echo json_encode($dzRes);
				exit;
			}
        }
		
		#### Contact Form Script ####
		if($_POST['dzToDo'] == 'Contact')
		{
			$error 			= false;
			$dzName			= !empty($_POST['dzName'])?trim(strip_tags($_POST['dzName'])):'';
			$dzEmail		= !empty($_POST['dzEmail'])?trim(strip_tags($_POST['dzEmail'])):'';
			$dzMessage		= !empty($_POST['dzMessage'])?strip_tags($_POST['dzMessage']):'';

			if(empty($dzName)){
				
				if(isset($_POST['dzFirstName']) || isset($_POST['dzLastName'])){
					if(empty($_POST['dzFirstName']) || empty($_POST['dzLastName'])){
							$error	=	true;
							$msg	=	'Lütfen isim giriniz.';
					}else{
						$dzName = $_POST['dzFirstName'].' '.$_POST['dzLastName'];
					}
				}else{
					$error	=	true;
					$msg	=	'Lütfen isim giriniz.';	
				}
				
			}else if(!isAlphabetic($dzName)){
				$error = true;
				$msg	=	'Lütfen alfabetik karakterler kullanın.';
			}
			
			$dzPhoneMessage  = '';
			if(isset($_POST['dzPhoneNumber'])){
				
				$dzPhoneNumber = !empty($_POST['dzPhoneNumber']) ? $_POST['dzPhoneNumber']:'';
				
				if(empty($dzPhoneNumber)){
					$error = true;
					$msg   = 'Lütfen telefon numarası girin.';	
				}else if(!isValidPhonenumber($dzPhoneNumber)){
					$error = true;
					$msg   = 'Lütfen geçerli bir telefon numarası girin.';
				}
				
				if(!empty($dzPhoneNumber)){
					$dzPhoneMessage = "Telefon numarası: $dzPhoneNumber <br/>";
				}
				
			}
			
			if(empty($dzEmail)){
				$error = true;
				$msg = 'Lütfen mail adresinizi girin.';
			}else if (!filter_var($dzEmail, FILTER_VALIDATE_EMAIL)) 
			{
				$error	=	true;
				$msg	= 'Yanlış mail formatı.';
			}
			
			if(empty($dzMessage)){
				$error = true;
				$msg = 'Lütfen mesajınızı girin.';
			}
			
			if ($error) {
				$dzRes['msg'] = $msg;
				echo json_encode($dzRes);
				exit;
			}
			
			$dzMailSubject = 'S Art Beauty|Form: A Person want to contact';
			$dzMailMessage	= 	"
								A person want to contact: <br><br>
								Name: $dzName<br/>
								Email: $dzEmail<br/>".$dzPhoneMessage."
								Message: $dzMessage<br/>
								";
								
			$dzOtherField = "";
			if(!empty($_POST['dzOther']))
			{
				$dzOther = $_POST['dzOther'];
				$message = "";
				foreach($dzOther as $key => $value)
				{
					$fieldName = ucfirst(str_replace('_',' ',$key));
					$fieldValue = ucfirst(str_replace('_',' ',$value));
					$dzOtherField .= $fieldName." : ".$fieldValue."<br>";
				}
			}
			$dzMailMessage .= $dzOtherField; 
        
            #### Calling SMTP Mail Function ####
			$res = smtp_mail($dzEmailTo, $dzEmailFrom, $dzEmail, $dzMailSubject, $dzMailMessage);
            #### Calling SMTP Mail Function End ####
            
			if($res)
			{
				$dzRes['status'] = 1;
				$dzRes['msg'] = 'Mesajınızı aldık. İletişim için teşekkürler.';
			}
			else
			{
				$dzRes['status'] = 0;
				$dzRes['msg'] = 'Gönderirken bir hata oluştu, lütfen tekrar deneyin.';
			}
			echo json_encode($dzRes);
			exit;
		}
		#### Contact Form Script End ####
		
		#### Appointment Form Script ####
		if($_POST['dzToDo'] == 'Appointment')
		{
			$error 			= false;
			$dzName			= !empty($_POST['dzName'])?trim(strip_tags($_POST['dzName'])):'';
			$dzEmail		= !empty($_POST['dzEmail'])?trim(strip_tags($_POST['dzEmail'])):'';
			$dzMessage		= !empty($_POST['dzMessage'])?strip_tags($_POST['dzMessage']):'';	
			
			if(empty($dzName)){
				
				if(isset($_POST['dzFirstName']) || isset($_POST['dzLastName'])){
					if(empty($_POST['dzFirstName']) || empty($_POST['dzLastName'])){
							$error	=	true;
							$msg	=	'Lütfen isim giriniz.';
					}else{
						$dzName = $_POST['dzFirstName'].' '.$_POST['dzLastName'];
					}
				}else{
					$error	=	true;
					$msg	=	'Lütfen isim giriniz.';	
				}
				
				
			}else if(!isAlphabetic($dzName)){
				$error = true;
				$msg	=	'Lütfen alfabetik karakterler kullanın.';
			}
			
			$dzPhoneMessage  = '';
			if(isset($_POST['dzPhoneNumber'])){
				
				$dzPhoneNumber = !empty($_POST['dzPhoneNumber']) ? $_POST['dzPhoneNumber']:'';
				
				if(empty($dzPhoneNumber)){
					$error = true;
					$msg   = 'Lütfen telefon numarası girin.';	
				}else if(!isValidPhonenumber($dzPhoneNumber)){
					$error = true;
					$msg   = 'Lütfen geçerli bir telefon numarası girin.';
				}
				
				if(!empty($dzPhoneNumber)){
					$dzPhoneMessage = "Telefon Numarası: $dzPhoneNumber <br/>";
				}
			}
			
			if(empty($dzEmail)){
				$error = true;
				$msg = 'Lütfen mail adresi girin.';
			}else if(!filter_var($dzEmail, FILTER_VALIDATE_EMAIL)){
				$error = true;
				$msg = 'Yanlış mail formatı.';
			}
			
			if(empty($dzMessage)){
				$error = true;
				$msg = 'Lütfen mesajınızı girin.';
			}
			
			if ($error) {
				echo json_encode($dzRes);
				exit;
			}
			
				
			
			$dzMailSubject = 'S Art Beauty|Form: A Person want to contact';
			$dzMailMessage	= 	"
								A person want to contact: <br><br>
								Name: $dzName<br/>
								Email: $dzEmail<br/>".$dzPhoneMessage."
								Message: $dzMessage<br/>
								";
			$dzOtherField = "";
			if(!empty($_POST['dzOther']))
			{
				$dzOther = $_POST['dzOther'];
				$message = "";
				foreach($dzOther as $key => $value)
				{
					$fieldName = ucfirst(str_replace('_',' ',$key));
					$fieldValue = ucfirst(str_replace('_',' ',$value));
					$dzOtherField .= $fieldName." : ".$fieldValue."<br>";
				}
			}
			$dzMailMessage .= $dzOtherField; 
			
			#### Calling SMTP Mail Function ####
			$res = smtp_mail($dzEmailTo, $dzEmailFrom, $dzEmail, $dzMailSubject, $dzMailMessage);
			#### Calling SMTP Mail Function End ####
			
			if($res)
			{
				$dzRes['status'] = 1;
				$dzRes['msg'] = 'Mesajınızı aldık. İletişim için teşekkürler.';
			}
			else
			{
				$dzRes['status'] = 0;
				$dzRes['msg'] = 'Gönderirken bir hata oluştu, lütfen tekrar deneyin.';
			}
			echo json_encode($dzRes);
			exit;
		}	
		#### Appointment Form Script End ####
		
	}
} catch (\Exception $e) {
    $dzRes['status'] = 0;
	$dzRes['msg'] = $e->getMessage().'Gönderirken bir hata oluştu, lütfen tekrar deneyin.';
	echo json_encode($dzRes);
	exit;
}



function isAlphabetic($data){
	if (!preg_match('/[^A-Za-z0-9]/', $data)) // '/[^a-z\d]/i' should also work.
	{
		return true;
	} else{
		return false;
	}
}

function isValidPhonenumber($phone_number){
	if(preg_match('/^[0-9]{10}+$/', $phone_number)) {
		return true;
	} else{
		return false;
	}
}

