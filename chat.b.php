<?php require_once "engine.php"; ?>
<!doctype html>
<html>
  <head>
    <title>Chat.basic</title>
  </head>
  <body>

    <?php 
      
      //
      if(isset($_GET["q"]))$query = $_GET["q"];
        else $query = "";
      //
      if(isset($_GET["a"])) {
        echo "<pre>";
        if($_GET["a"] == "q"){
          echo "<p>[query|$query]<p>";
          echo Grimorio3::ouvir($user,$query);
        }
        if($_GET["a"]== "h"){
          ?><p>[<?php echo time() ?>]</p>
<?php echo Grimorio3::sentir($user);?>
<meta http-equiv="refresh" content="1; url=">
<?php
        }
        echo "</pre>";
      }
      else { 
        if(isset($_GET["u"]))$user = $_GET["u"];
          else $user = 0;
      ?>
        <header>
          <h1>Chat Basic</h1>
        </header>
        <form>
          <p>
            <label>Query</label> <input name="q" autofocus>
            <label>User</label> <input name="u" value="<?php echo $user;?>">
          </p>
          <p>
            <input type="submit">
          </p>
        </form>
          <iframe height="500" width="48%" src="chat.b.php?a=q&u=<?php echo $user?>&q=<?php echo $query?>"></iframe>
          <iframe height="500" width="48%" src="chat.b.php?a=h&u=<?php echo $user?>"></iframe>
    <?php }?>
  </body>
 </html>
