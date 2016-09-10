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
                $nome = filter_input(0, "usu", 515);
                $senha_ini = 'd011587559c50660e07819222e94382df01ccc3ac588cc0ace18830a77a7a625c12bcf0635083791118f06f4baef9e15ce8fcbd18817d1d044e220c05a53a3d3';
                $senha = hash("sha512",filter_input(0, 'senha', 515));
                $alt = filter_input(0, 'alt', 519);
                for($i=0;$i<3;++$i)
                    {
                    $marca[$i]=  filter_input(0, 'marca'.($i+1),519);
                    }
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
                if($marca==NULL)
                    {
                    printf("</p>\n<p>Pelo menos um dos campos deve ser preenchido\n");
                    }
                else
                    {
                    printf("<p>");
                    for($i=0;$i<3;++$i)
                        {
                        printf("%u ",$marca[$i]);
                        }
                    printf("</p>");
                    }
                }
            function fila_pilha()/*Funcionando corretamente para números*/
                {
                $fila = new SplQueue();
                $pilha = new SplStack();
                for($i=0;$i<15;++$i)
                    {
                    $fila->enqueue($i+1);
                    $pilha->push($i+1);
                    }
                for($i=0;$i<15;++$i)
                    {
                    $fila->dequeue();
                    $pilha->pop();
                    }
                }
        ?>
        </p>
        <a href='index.html'>Voltar</a>
    </body>
        
</html>