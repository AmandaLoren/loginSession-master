<?php
    session_start();
    
    $fez_login = isset($_SESSION['usuario_online']);
	
    if ($fez_login == false){
          header('Location: login.php');
	} 
    $nome = $_SESSION['usuario_nome']
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

	<div class="social">

		<a href="login.php" class="sair">sair</a>

		<img src="https://cdn.shopify.com/s/files/1/0725/9345/t/179/assets/EnjoyLogo_360.png?10250941477285961702" alt="" width="500" height="500">
		<h2>Você é muito bem vindo(a) <?php echo $nome?></h2>
        <h4>Segue uma lista de músicas, muitíssimamente(não sei se esta palavra existe) maravilhosas</h4>
		<h5>0. Esse sou eu - Sebastian Band </br>
            1. Ain't Talkin' 'Bout Love - Van Halen </br>
            2. All Along The Watchtower - Jimi Hendrix </br>
            3. All Day And All Of The Night - The Kinks </br>
            4. Aqualung - Jethro Tull </br>
            5. Back In Black - AC/DC </br>
            7. Beat It - Michael Jackson </br>
            8. Comfortably Numb - Pink Floyd </br>
            9. Enter Sandman - Metallica </br>
            10. Free Bird - Lynyrd Skynyrd </br>
            11. Jailhouse Rock - Elvis Presley </br>
            12. Purple Haze - Jimi Hendrix </br>
            13. Smoke On The Water - Deep Purple </br>
            14. Stairway To Heaven - Led Zeppelin </br>
            15. Sweet Child O' Mine - Guns N' Roses </br>
            16. Welcome To The Jungle - Guns N' Roses </br>
            17. Céu Azul - Charlie Brown Jr. </br>
            18. Gravity - John Mayer </br>
            19. Free Fallin - John Mayer </br>
            20. Heartbreak Warfare - John Mayer </br>
            20. Stop This Train - John Mayer </br>
            20. Neon - John Mayer </br>
            20. Yahweh - Rosa de Saron </br>
            
        </h5>
            
            
	</div>

</body>
</html>
