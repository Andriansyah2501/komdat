<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="assets/css/styles.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

<?php

echo "
    <div style='width: 70%'>
        <div style='float: right'>
        <h1>Komunikasi Data Bot Telegram</h1>
      
        <a>1. Hani Khairiyah(1922001)</a><br>
        <a>2. Farhan Ghulam  Hadi Saputra (1822014)</a><br>
        <a>3. R.M Fikri Ihsan Kurniawan (1822013)</a><br>
        <div>
    </div><br>
    <div style='margin-left: 0px'>
        <form action='' method='POST'>
            Isi Pesan   : <textarea name='pesan' style='width: 500px; padding: 5px'></textarea><br><br>
            <input type='submit' value='Kirim Pesan' style='margin-left: 100px'>
        </form>
    </div>
";

if (isset($_POST['pesan'])) {
    $url = "https://api.telegram.org/bot5366885639:AAGYjcMrhFipL4AZBpYVYGXGGUfKnKTtlrY/sendMessage?chat_id=-1001686692195&parse_mode=HTML&text=" . $_POST['pesan'];

    $curlHandle = curl_init();
    curl_setopt($curlHandle, CURLOPT_URL, $url);
    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
    curl_setopt($curlHandle, CURLOPT_POST, 1);
    $results = curl_exec($curlHandle);
    curl_close($curlHandle);

    echo "<b style='margin-left: 100px'>Pesan sudah terkirim</b>";
}
