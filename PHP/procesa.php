<html>

<body>

  Welcome <?php echo $_GET['vNome']; ?><br>
  Your email address is: <?php echo $_GET['vEmail']; ?>
  <br>
  <a href="procesa2.php?vNome=<?php echo $_GET['vNome']; ?>&vEmail=<?php echo $_GET['vEmail']; ?>">
    Seguinte páxina
  </a>
  <form action="procesa2.php">
    <input type="hidden" name="vNome" value="<?php echo $_GET['vNome']; ?>"><br>
    <input type="hidden" name="vEmail" value="<?php echo $_GET['vEmail']; ?>"><br>
    <input type="submit">
  </form>
</body>

</html>