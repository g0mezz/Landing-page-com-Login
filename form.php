<?php
    include "adm/topo.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        button a:hover {
            text-decoration: none;
        }

        main {
            background-color: #C6C5C7;
            display: block;
            margin: auto;
            margin-top: 50px;
            width: 900px;
            padding: 20px;
            border-radius: 20px;
        }
    </style>
</head>
<body style="background-color: #F8F9FA;" class="container-fluid">

    <main>
        <h3 class="col-md mb-4">Formulário de pagamento</h3>
        <form name="orcamento" id="orcamento" onsubmit="return aviso()">
            <div class="form-group col-md-12">
                <label for="inputNome">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Seu nome" required>
              </div>

            <div class="form-group col-md-12">
              <label for="telefone">Telefone</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(xx)xxxxx-xxxx" maxlength="14" onkeypress="mascara_tel(this)" required>
            </div>

            <div class="form-group col-md-12">
              <label for="inputEndereco">Endereço</label>
              <input type="text" class="form-control" id="inputEndereco" placeholder="Seu endereço" required>
            </div>

            <div class="form-group col-md-12">
                <label for="inputPagamento">Pagamento</label>
                <select id="inputPagamento" name="inputPagamento" class="form-control" onchange="abrir()">
                  <option>Cartão de débito</option>
                  <option>Dinheiro</option>
                </select>
            </div>
              
          <div class="form-group col-md-9 mr-auto ml-auto mb-4 mt-4 border border-dark rounded p-3" id="cartao">
            <fieldset>
              <label for="num"> Nº do Cartão </label>
              <input type="text" class="form-control" name="num" id="num" onkeydown="return somente_numero(event)" onkeypress="mascara_cartao(this)" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" onkeyup="salto(this.name,this.value)" required>

              <label for="cod"> Codigo de Segurança </label>
              <input type="text" class="form-control" name="cod" onkeydown="return somente_numero(event)" maxlength="3" placeholder="xxx" onkeyup="salto(this.name,this.value)" required>

              <label for="vencimento"> Vencimento </label>
              <input type="text" class="form-control" name="vencimento" onkeydown="return somente_numero(event)" placeholder="MM/AA" maxlength="5" onkeypress="mascara_data(this)" required>
            </fieldset>
            
          </div>
            </div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-primary">Comprar</button>
                <button type="button" class="btn btn-secondary"><a href="index.php" style="color: white;">Cancelar</a></button>
            </div>
          </form>
    </main>

    <script src="js/script1.js"></script>
</body>