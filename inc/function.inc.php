<?php

// Simplification d'affichage des bug lors du développement
function vd($valeur){
	echo '<pre>';
	var_dump($valeur);
	echo '</pre>';
}

// Fonction mail avec pièce jointe
function mailpj($fileAttachment, $mailMessage , $subject, $toAddress, $fromMail) {
   
    $fileAttachment = trim($fileAttachment);
    $from           = $fromMail;
    $pathInfo       = pathinfo($fileAttachment);
    $attchmentName  = "attachment_".date("YmdHms").(
    (isset($pathInfo['extension']))? ".".$pathInfo['extension'] : ""
    );
   
    $attachment    = chunk_split(base64_encode(file_get_contents($fileAttachment)));
    $boundary      = "PHP-mixed-".md5(time());
    $boundWithPre  = "\n--".$boundary;
   
    $headers   = "From: $from";
    $headers  .= "\nReply-To: $from";
    $headers  .= "\nContent-Type: multipart/mixed; boundary=\"".$boundary."\"";
   
    $message   = $boundWithPre;
    $message  .= "\n Content-Type: text/plain; charset=UTF-8\n";
    $message  .= "\n $mailMessage";
   
    $message .= $boundWithPre;
    $message .= "\nContent-Type: application/octet-stream; name=\"".$attchmentName."\"";
    $message .= "\nContent-Transfer-Encoding: base64\n";
    $message .= "\nContent-Disposition: attachment\n";
    $message .= $attachment;
    $message .= $boundWithPre."--";
   
    return mail($toAddress, $subject, $message, $headers);
}