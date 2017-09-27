<?php
$expire = time() + 120;
$dt = base64_decode($expire);
 
		$encrypt_method = "AES-256-CBC";
		$secret_key = 'PWaanA*()!#EGyKaaz'; //letter only
		$secret_iv = 'PWAsrqWUN*()!#RETyAAgA';
		$key = hash('sha256', $secret_key);
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
?>