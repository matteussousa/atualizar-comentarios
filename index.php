<?php
$conn = new PDO('mysql:host=localhost;dbname=exemplo', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->exec('SET NAMES UTF8');
$selecionTudo = $conn->prepare("SELECT * FROM `comentarios` ORDER BY status ASC");
$selecionTudo->execute();
$listar = $selecionTudo->fetchAll(PDO::FETCH_OBJ);
?>
<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Exemplo</title>
        <meta charset="utf-8">
        <meta name="author" content="Matteus Sousa">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    </head>

    <body>
        <div class="container">
            <br/>
            <br/>
            <br/>
            
            <div class="mensagens"></div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>POST</th>
                        <th>NOME</th>
                        <th>COMENTÁRIO</th>
                        <th>STATUS</th>
                        <th>OPÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listar as $list) {
                        ?>
                        <tr>
                            <td><?php echo $list->id; ?></td>
                            <td><?php echo $list->post; ?></td>
                            <td><?php echo $list->nome; ?></td>
                            <td><?php echo $list->comentario; ?></td>
                            <td>
                                <?php
                                    if($list->status == '0'):
                                        echo '<span class="label label-warning">À Aprovar</span>';
                                    elseif($list->status == '1'):
                                        echo '<span class="label label-success">Aprovado</span>';
                                    else:
                                        echo '<span class="label label-danger">Reprovado</span>';
                                    endif;
                                ?>
                            </td>
                            <td>
                                <select class="form-control ocultar-exibir">
                                    <option value="0">Selecione</option>
                                    <option value="1" data-id="<?php echo $list->id;?>">Aprovar</option>
                                    <option value="2" data-id="<?php echo $list->id;?>">Reprovar</option>
                                </select>
                            </td>
                        <?php } ?>
                    </tr>

                </tbody>

            </table>
        </div>
        <!-- JavaScripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/comentarios.js"></script>

    </body>
</html>