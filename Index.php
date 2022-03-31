<?php
    require_once("pessoa.class.php");

    $pessoa = new Pessoa();
    $pessoa -> setNome("Lucas Pereira Carvalho");
    $pessoa -> setEndereco("Avenida Águia de Haia");
    $pessoa -> setCep("08542-231");
    $pessoa -> setBairro("Jd São Nicolau");
    $pessoa -> setCidade("São Paulo ");
    $pessoa -> setEstado("SP");
?>

    <html>
        <head>
            <title>PHP</title>
        </head>

        <body>
            <table style="border: 1px solid;">
                <tr>
                    <td  style="border: 1px solid; background-color: #cccccc"> <?php echo $pessoa -> getNome();  ?> </td>
                </tr>

                <tr>
                    <td style="border: 1px solid; background-color: #f3f3f3">  <?php echo $pessoa -> getEndereco();  ?> </td>
                </tr>
            </table>
        </body>
    </html>