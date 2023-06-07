<?php
$titulo = "Esta é minha Home";
include_once __DIR__ . '/head.php';

?>
<style>
    .login{
        padding-top: 10px;
        background-color: #1d1d1d;
        color:#fff;
        width: 300px;
        height: 300px;
        margin: 200px auto;
        text-align: center;
        border-radius: 2%;
    }
    input{
        margin: 10px auto;
    }
</style>
<?php
$titulo = "Esta é minha Home";
include_once __DIR__ . '/nav.php';

?>
Eu sou o Index
<div class="login">
      <form>
        <h2>Login</h2>

        <input type="text" placeholder="Login" id="login" />
        <input type="password" placeholder="Senha" id="senha" />
        <input type="submit" onclick="logar(); return false" />
      </form>
    </div>
<?php

include_once __DIR__ . '/footer.php';

?>