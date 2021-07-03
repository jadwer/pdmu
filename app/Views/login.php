<?= $this->extend('templates/main',['title'=>$title]) ?>


<?= $this->section('content') ?>

    <h1>Login</h1>
    <form action="<?=base_url('/login')?>" method="post">
    <table>
        <tr>
            <th colspan="2" id="form">
                Login
            </th>
        </tr>
        <tr>
            <td>Usuario</td>
            <td><input type="text" name = "matricula"/></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Entrar"></td>
        </tr>
    </table>

    </form>
<?= $this->endSection() ?>

