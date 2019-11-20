<link rel="stylesheet" type="text/css" href="style.css">
<html>
<head>

</head>

<body>

<form>
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
    <?php echo $_GET['name']; ?>
<br>
    <?php echo $_GET['email']; ?>
</body>
</html>