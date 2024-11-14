<?php
    include "../adm/topo.php";
?>
<link rel="stylesheet" href="../css/style3.css">

<body>
    <main class="shadow p-5 mb-5 bg-white rounded">
        <h1>Cadastre-se aqui!</h1>
        <p>Apenas usuários podem comprar no site.</p>
        <form name="cadastro" method="post" action="cadastrar_usuarios.php" enctype="multipart/form-data">
          <div class="mb-3 info">
            <label for="login" class="form-label">Login</label>
            <input type="name" class="form-control" id="login" name="login" required>
          </div> 

          <div class="mb-3 info">
            <label for="login" class="form-label">Nome</label>
            <input type="name" class="form-control" id="nome" name="nome" required>
          </div>

          <div class="mb-3 info">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="mb-3 info">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto" required>
          </div>

          <div class="mb-3 info">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
          </div>
          <button type="submit" class="mb-3 btn btn-primary">Cadastrar</button>
        </form>
    </main>
</body>
