<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>
        <?php
            if(filter_has_var(0, "envio"))
                {
                $nome = filter_input(0, "usu", 516);
                $senha = hash("sha512",filter_input(0, 'senha', 516));
                if($nome==NULL)
                    {
                    printf("Campo obrigatório\n");
                    }
                else
                    {
                    printf("Olá %s de senha %s",$nome,$senha);
                    }
                }
        ?>
        </p>
        <a href='index.html'>Voltar</a>
    </body>
        
</html>
