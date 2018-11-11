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
                <a href="mapa.php">
                    <li>Mapa</li>
                </a>
                <a href="wiki.php">
                    <li>Wiki</li>
                </a>
                <a href="entradas.php">
                    <li>Entradas</li>
                </a>
                <a href="quests.php">
                    <li>Quests</li>
                </a>
                <a href="mundo.php">
                    <li>Mundo</li>
                </a>
                <a href="conta.php">
                    <li>conta</li>
                </a>
            </ul>
        </nav>
    </header>

    <!-- meta http-equiv="refresh" content="5"-->
