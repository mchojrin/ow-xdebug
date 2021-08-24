<?php
session_start();

if (array_key_exists('uid', $_SESSION)) {
    header('Location: home.php');

    die;
}
$title = 'Login example';

?>
<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <form action="do_login.php" method="post">
            <table>
                <tr>
                    <th>Username:</th>
                    <td><input type="text" name="username"/></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="password" name="password"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="LogIn"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>