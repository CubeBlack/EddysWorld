<?php 
	if(!isset($pageTitle)) $pageTitle = "Eddy's";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?php echo $pageTitle ?>
    </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!--  -->
    <link rel="stylesheet" type="text/css" href="css/page.css">
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    <!--  -->
    <script src="js/terminal_v2.1.class.js" charset="utf-8"></script>
    <script src="js/page.js" charset="utf-8"></script>

</head>

<body onload="page.loaded()">
    <header>
        <hgroup>
            <h1>
                <?php echo $pageTitle ?>
            </h1>
        </hgroup>
        <div id="btn-nav" onclick="page.menu()">≡</div>
        <nav id="page.menu">
            <ul>
                <a href="index.php">
                    <li class="menu-item-opened">Inicio</li>
                </a>
                <a href="mapa">
                    <li>Mapa</li>
                </a>
                <a href="wiki">
                    <li>Wiki</li>
                </a>
                <a href="entradas">
                    <li>Entradas</li>
                </a>
                <a href="quests">
                    <li>Quests</li>
                </a>
                <a href="mundo">
                    <li>Mundo</li>
                </a>
                <a href="conta">
                    <li>conta</li>
                </a>
                <a href="terminal">
                    <li>Terminal</li>
                </a>
            </ul>
        </nav>
    </header>

    <!-- meta http-equiv="refresh" content="5"-->
