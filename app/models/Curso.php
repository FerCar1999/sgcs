<?php

class Curso extends Validator
{
    // Declaraion de propiedades
    private $codi_curs = null;
    private $codi_cate = null;
    private $codi_casa = null;
    private $nomb_curs = null;
    private $fech_inic = null;
    private $fech_fin  = null;
    private $esta_curs = null;

    // Encapsulamiento
    public function setCodiCurs($value)
    {
        if ($this->validateId($value)) {
            $this->codi_curs = $value;
            return true;

        } else {
            return false;
        }
    }
    public function getCodiCurs($value)
    {
        return $this->codi_curs;
    }
    public function setCodiCate($value)
    {
        if ($this->validateId($value)) {
            $this->codi_cate = $value;
            return true;

        } else {
            return false;
        }
    }
    public function getCodiCate($value)
    {
        return $this->codi_cate;
    }
    public function setCodiCasa($value)
    {
        if ($this->validateId($value)) {
            $this->codi_casa = $value;
            return true;
        } else {
            return false;
        }
    }
    public function getCodiCasa($value)
    {
        return $this->codi_casa;
    }
    public function setNombCurs($value)
    {
        if ($this->validateAlphanumeric($value,1,100)) {
            $this->nomb_curs = $value;
            return true;
        } else {
            return false;
        }
    }
    public function getNombCurs($value)
    {
        return $this->nomb_curs;
    }
    public function setFechInic($value)
    {
        $this->fech_inic = $value;
        return true;
    }
    public function getFechInic()
    {
        return $this->fech_inic;
    }
    public function setFechFin($value)
    {
        $this->fech_fin = $value;
        return true;
    }
    public function getFechFin()
    {
        return $this->fech_fin;
    }
    public function setEstaCurs($value)
    {
        $this->esta_curs = $value;
        return true;
    }
    public function getEstaCurs()
    {
        return $this->esta_curs;
    }
    //Funcion que crea el curso y devuelve el id para poder crear el horario de ese curso
    public function createCurso()
    {
        $sql    = "INSERT INTO curso(codi_cate, codi_casa, nomb_curs, fech_inic, fech_fin, esta_curs) VALUES (?,?,?,?,?,?)";
        $params = array($this->codi_cate, $this->codi_casa, $this->nomb_curs, $this->fech_inic, $this->fech_fin, 1);
        return Database::executeRow($sql, $params);
    }
    //Funcion para modificar la informacion basica del curso
    public function updateCurso()
    {
        $sql="UPDATE curso SET codi_cate = ?, nomb_curs = ?, fech_inic = ?, fech_fin = ? WHERE codi_curs = ?";
        $params=array($this->codi_cate, $this->nomb_curs, $this->fech_inic, $this->fech_fin, $this->codi_curs);
        return Database::executeRow($sql, $params);
    }
    //Funcion para eliminar un curso(cambiarle el estado a inactivo)
    public function deleteCurso()
    {
        $sql="UPDATE curso SET esta_curs = 0 WHERE codi_curs = ?";
        $params=array($this->codi_curs);
        return Database::executeRow($sql, $params);
    }
    //Obtener los cursos de las otras casas para la tabla
    public function getCursoCasas($inicio, $fin)
    {
        $sql="SELECT cu.codi_curs ,cu.codi_cate, cat.nomb_cate, cu.codi_casa, ca.nomb_casa, cu.nomb_curs, cu.fech_inic, cu.fech_fin FROM curso as cu INNER JOIN categoria as cat USING(codi_cate) INNER JOIN casa as ca USING(codi_casa) WHERE YEAR(cu.fech_inic) = ? AND YEAR(cu.fech_fin) = ? AND cu.esta_curs = 1";
        $params=array($inicio, $fin);
        return Database::getRowsAjax($sql, $params);
    }
    //Obtener la informacion de los cursos de la casa logeada para la tabla
    public function getCursoCasa($inicio, $fin)
    {
        $sql="SELECT cu.codi_curs, cu.codi_cate, cat.nomb_cate, cu.nomb_curs, cu.fech_inic, cu.fech_fin FROM curso as cu INNER JOIN categoria as cat USING(codi_cate) WHERE cu.codi_casa = ? AND YEAR(cu.fech_inic) = ? AND YEAR(cu.fech_fin) = ? AND cu.esta_curs = 1";
        $params=array($this->codi_casa, $inicio, $fin);
        return Database::getRowsAjax($sql, $params);
    }
    public function getCursoHorarioDia($dia, $curs)
    {
        $sql="SELECT ihd.codi_inte_hora_doce, ics.codi_inte_curs_salo ,h.hora_inic, h.hora_fin, CONCAT(d.nomb_doce, ' ',d.apel_doce,' ',s.nomb_salo) as info FROM intermedia_horario_docente as ihd INNER JOIN intermedia_curso_salon as ics USING(codi_inte_curs_salo) INNER JOIN curso as c USING(codi_curs) INNER JOIN horario as h USING(codi_hora) INNER JOIN docente as d USING(codi_doce) INNER JOIN salon as s USING(codi_salo) WHERE h.codi_dia=? AND c.codi_curs=? ";
        $params =array($dia, $curs);
        return Database::getRowsAjax($sql, $params);
    }

    public function obtenerIdUltimo()
    {
        return Database::getLastRowId();
    }
}
