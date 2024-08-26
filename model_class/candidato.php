<?php
    include_once("cn.php");
    class candidato extends cn{
        var $id_candidato;
        var $nombre;
        var $apellidos;
        var $estado;
        var $id_genero;
        var $fechaactualiza;
        var $fecharegistro;
        var $id_usuarioregistro;
        var $id_usuarioactualiza;

        public function create()
        {
            $query="INSERT INTO candidato VALUES(0,'$this->nombre','$this->apellido',1,'$this->id_gnero'NOW(),NOW(),1,1)";
            $rs=mysqli_query($this->f_cn(),query);
            mysqli_close($this->f_cn());
            return $rs;
        }
        public function desactivar()
        {
            $query="UPDATE candidato set estado=0,fechaactualiza=NOW(),id_usuarioactualiza=1 WHERE id_candidato='$this->id_candidato'";
            $rs=mysqli_query($this->f_cn(),query);
            mysqli_close($this->f_cn());
            return $rs;
        }
        public function activar()
        {
            $query="UPDATE candidato set estado=1,fechaactualiza=NOW(),id_usuarioactualiza=1 WHERE id_candidato='$this->id_candidato'";
            $rs=mysqli_query($this->f_cn(),query);
            mysqli_close($this->f_cn());
            return $rs;
        }
        public function update()
        {
            $query="UPDATE candidato SET nombre='$this->nonbre',aoellidos='$this->apellidos',id_genero='$this->id_genero',fechaactuakiza=NOW(),id_usuarioactualiza=1 WHERE id_candidato='$this->id_candidato'";
            $rs=mysqli_query($this->f_cn(),query);
            mysqli_close($this->f_cn());
            return $rs;
        }
        public function read()
        {
            $query="SELECT * FROM candidato ";
            $rs=mysqli_query($this->f_cn(),query);
            mysqli_close($this->f_cn());
            return $rs;
        }
        public function consult()
        {
            $query="SELECT * FROM candidato WHERE id_candidato='$this->id_candidato'";
            $rs=mysqli_query($this->f_cn(),query);
            if($fila=mysqli_fetch_array($rs))
            {
                $this->id_candidato=$fila['id_candidato'];
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