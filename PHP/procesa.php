<html>

<body>

  Welcome <?php echo $_POST['vNome']; ?><br>
  Your email address is: <?php echo $_POST['vEmail']; ?>
  <br>
  <a href="procesa2.php?vNome=<?php echo $_POST['vNome']; ?>&vEmail=<?php echo $_POST['vEmail']; ?>">
    Seguinte páxina
  </a>
  <form action="procesa2.php">
    <input type="hidden" name="vNome" value="<?php echo $_POST['vNome']; ?>"><br>
    <input type="hidden" name="vEmail" value="<?php echo $_POST['vEmail']; ?>"><br>
    <input type="submit">
  </form>
</body>

</html>