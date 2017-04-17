<?php
    function conexao(){
        $sql = mysqli_connect(HOST,USER,SENHA,BASE);
        if(!$sql)
            return mysqli_error();
        else
            mysqli_set_charset($sql,CHARSET);
        return $sql;
    }
    function fecha_conexao($sql){
        @mysqli_close($sql) or die(mysqli_error());
    }
    function query($tabela,$param = null,$cols='*'){
        $param = ($param) ? " {$param}" : null; 
        $cols = ($cols) ? " {$cols}" : "*";
        $sql = sprintf("select %s from %s%s",$cols,$tabela,$param);
        $res = executa($sql);
        if(!mysqli_num_rows($res))
            return false;
        else{
            while($resp = mysqli_fetch_assoc($res))
                $dados[] = $resp;
            return $dados;
        }
    }
    function executa($query){
        $sql = conexao();
        $res = @mysqli_query($sql,$query) or die(mysqli_error($sql));
        fecha_conexao($sql);
        return $res;
    }
?>