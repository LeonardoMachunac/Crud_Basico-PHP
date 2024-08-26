<?php
include_once("cn.php");
class genero extends cn {
    var $id_genero;
    var $descripcion;
    var $estado;
    var $fechaactualiza;
    var $fecharegistro;
    var $id_usuarioregistro;
    var $id_usuarioactualiza;

    public function create()
    {
        $query="INSERT INTO genero VALUES(0,'$this->descripcion','$this->estado',NOW(),NOW(),1,1)";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function desactivar()
    {
        $query="UPDATE genero SET estado=0,fechaactualiza=NOW(),id_usuarioactualiza=1 WHERE id_genero='$this->id_genero'";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function activar()
    {
        $query="UPDATE genero SET estado=1,fechaactualiza=NOW(),id_usuarioactualiza=1 WHERE id_genero='$this->id_genero'";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function update()
    {
        $query="UPDATE genero SET descripcion='$this->descripcion',fechaactualiza=NOW(),id_usuarioactualiza=1 WHERE id_genero='$this->id_genero'";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function read()
    {
        $query="SELECT * FROM genero";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function consult()
    {
        $query="SELECT * FROM genero WHERE id_genero='$this->id_genero'";
        $rs=mysqli_query($this->f_cn(),$query);
        if($fila=mysqli_fetch_array($rs))
        {
            $this->id_genero=$fila['id_genero'];
            $this->descripcion=$fila['descripcion'];
            $this->estado=$fila['estado'];
            $this->fechaactualiza=$fila['fechaactualiza'];
            $this->fecharegistro=$fila['fecharegistro'];
            $this->id_usuarioregistro=$fila['id_usuarioregistro'];
            $this->id_usuarioactualiza=$fila['id_usuarioactualiza'];
        }
        mysqli_close($this->f_cn());
        return $rs;
    }
}
?>