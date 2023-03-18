<?php

session_start();

require_once('config/connection.php');

if (isset($_POST['enviar'])) {
    try {
        if (isset($_POST['nomeContato']) && isset($_POST['emailContato']) && isset($_POST['tipoMensagem']) && isset($_POST['mensagemContato'])) {
            $nome = $_POST['nomeContato'];
            $email = $_POST['emailContato'];
            $mensagem = $_POST['mensagemContato'];
            $tipo_mens = $_POST['tipoMensagem'];

            $stmt = $conn->prepare("INSERT INTO contatos (nome, email, tipo_mens, mensagem) VALUES (:nome, :email, :tipo_mens, :mensagem)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':tipo_mens', $tipo_mens);
            $stmt->bindParam(':mensagem', $mensagem);
            $stmt->execute();

        }
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            padding-top: 5%;
        }

        h4 {
            height: 50px;
            min-width: 90%;
            text-align: center;
            font-size: 18pt;
            padding: 10px;
        }
    </style>
    <div class="container">
        <div class='row content'>
            <div class='col-sm-12 jumbotron'>
                <h1 class='text-center'>Formulário de Contato</h1>
            </div>
        </div>
        <div class='row jumbotron'>
            <div class='col-sm'>
                <form method="post" accept-charset="utf-8">

                    <div class="col-sm-12 form-group">
                        <label for="nomeContato" class="col-form-label">Nome:</label>
                        <input type="text" id="nomeContato" name="nomeContato" placeholder="Digite seu nome" class="form-control form-control-md" required>
                    </div>

                    <div class="col-sm-12 form-group">
                        <label for="emailContato" class="col-form-label ">Email:</label>
                        <input type="text" id="emailContato" name="emailContato" placeholder="fulano@gmail.com" class="form-control form-control-md">
                    </div>

                    <div class="col-sm-12 form-group">
                        <label for="mensagemContato" class="col-form-label ">Mensagem:</label>
                        <textarea class="form-control form-control-md" id="mensagemContato" name="mensagemContato" rows="3" required></textarea>
                    </div>

                    <div class="col-sm-12 form-group">
                        <label for="tipoMensagem">Tipo:</label>
                        <select class="form-control mb-3" id="tipoMensagem" name="tipoMensagem" required>
                            <option value="">Selecione o tipo de mensagem</option>
                            <option value="elogio">Elogio</option>
                            <option value="crítica">Crítica</option>
                            <option value="sugestão">Sugestão</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>

                    <div class="form-group col-3">
                        <label for="data" class="col-form-label ">Data:</label>
                        <input type="date" name="data" id="data" class="form-control form-control-md" required>
                    </div>

                    <div class="form-group col-3">
                        <button class="btn btn-block btn-primary" name="enviar" type="submit">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2023 Leidiane Cunha de Aguiar</p>
        <p class="mb-1">® Todos os direitos reservados</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
    <script src="/js/mask.js"></script>
</body>

</html>