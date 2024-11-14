<?php
    include "topo.php";
?>
<link rel="stylesheet" href="../css/style3.css">

<body>
    <main class="shadow p-5 mb-5 bg-white rounded">
        <h1>Bem vindo de volta!</h1>
        <p>Apenas usuários podem comprar no site.</p>
        <form name="form" method="post" action="#">
          <div class="mb-3 info">
            <label for="login" class="form-label">Login</label>
            <input type="name" class="form-control" id="login" name="login">
          </div>
          <div class="mb-3 info">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>
          <a class="mb-3" href="../usuarios/usuarios.php">Não possuo cadastro</a>
          <div class="text-center text-danger mb-3">
                <?php include "valida.php"; ?>
            </div>
          <button type="submit" class="mb-3 btn btn-primary">Enviar</button>
        </form>
    </main>

</body>
