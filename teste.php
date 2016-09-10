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
                $senha_ini = 'd011587559c50660e07819222e94382df01ccc3ac588cc0ace18830a77a7a625c12bcf0635083791118f06f4baef9e15ce8fcbd18817d1d044e220c05a53a3d3';
                $senha = hash("sha512",filter_input(0, 'senha', 516));
                $alt = filter_input(0, 'alt', FILTER_SANITIZE_NUMBER_INT);
                if($nome==NULL)
                    {
                    printf("Campo obrigatório\n");
                    }
                else
                    {
                    printf("Olá %s",$nome,$senha);
                    }
                if($senha_ini==$senha)
                    {
                    printf("</p>\n<p>Senha aceita");
                    }
                else
                    {
                    printf("</p>\n<p>Senha incorreta");
                    }
                if($alt==NULL)
                    {
                    printf("</p>\n<p>Campo obrigatório\n");
                    }
                else
                    {
                    printf("</p>\n<p>Alternativa marcada: %u",$alt);
                    }
                }
        ?>
        </p>
        <a href='index.html'>Voltar</a>
    </body>
        
</html>