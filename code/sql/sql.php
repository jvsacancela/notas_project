<?php 

    class sql{

        private $bd;

        public function __construct() {
            $this->bd = new mysqli(SERVIDOR, USUARIO, CLAVE, BDD);
            $this-> bd-> set_charset('utf8');
        }

        ## FUNCIONES PARALELO

          #Consultar todos los paralelo
          public function ConsultarParalelo(){
            $resultado = $this->bd->query("SELECT * FROM snp_para");
            return $resultado;
        }

        #Consulta nombre paralelos
        public function ConsultarParaleloName($paralelo_nombre){
            $resultado = $this->bd->query("SELECT * FROM snp_para
                                            WHERE PAR_NOMBRE = '$paralelo_nombre'");
            return $resultado;
        }

         #Consulta Paralelo ID
         public function ConsultarParaleloID($paralelo_codigo){
            $resultado = $this->bd->query("SELECT * FROM snp_para 
                                            WHERE PAR_CODIGO = '$paralelo_codigo'");
            return $resultado;
        }

        #Add paralelos
        public function AddParalelo($paralelo_nombre){
            $resultado = $this->bd->query("INSERT INTO snp_para(PAR_CODIGO, PAR_NOMBRE) VALUES (0, '$paralelo_nombre')");
            return true;
        }

        #Eliminar paralelos
        public function DeleteParalelo($id){
            $resultado = $this->bd->query("DELETE FROM snp_para WHERE PAR_CODIGO = '$id'");
            return true;
        }

        #Update paralelos
        public function UpdateParalelo($paralelo_codigo, $paralelo_nombre){
            $resultado = $this->bd->query("UPDATE snp_para SET PAR_CODIGO='$paralelo_codigo', PAR_NOMBRE='$paralelo_nombre'
            WHERE PAR_CODIGO = '$paralelo_codigo'");
            return $resultado;
        }


        ## FUNCIONES MATERIA
       
        #Consultar todas las materias
        public function ConsultarMateria(){
            $resultado = $this->bd->query("SELECT * FROM snp_mate");
            return $resultado;
        }

         #Consulta nombre materia
         public function ConsultarMateriaName($materia_nombre){
            $resultado = $this->bd->query("SELECT * FROM snp_mate
                                            WHERE MAT_NOMBRE = '$materia_nombre'");
            return $resultado;
        }

         #Add materia
         public function AddMateria($codigo_curso, $materia_nombre, $codigo_persona, $grado, $tipo, $orden, $resalt, $obprma, $cocoma, $numaco, $oculta, $areid, $areac, $ambito){
            $resultado = $this->bd->query("INSERT INTO snp_mate(MAT_CODIGO, MAT_CODCUR, MAT_NOMBRE, MAT_CODPER, MAT_GRADO, MAT_TIPO, MAT_ORDEN, MAT_RESALT, MAT_OBPRMA, MAT_COCOMA, MAT_NUMACO, MAT_OCULTA, MAT_AREID, MAT_AREAC, MAT_AMBITO) VALUES (0, '$codigo_curso', '$materia_nombre', '$codigo_persona', '$grado', '$tipo', '$orden', '$resalt', '$obprma', '$cocoma', '$numaco', '$oculta', '$areid', '$areac', '$ambito')");
            return true;
        }

        #Update materia
        public function UpdateMateria($codigo_materia, $codigo_curso, $materia_nombre, $codigo_persona, $grado, $tipo, $orden, $resalt, $obprma, $cocoma, $numaco, $oculta, $areid, $areac, $ambito){
            $resultado = $this->bd->query("UPDATE snp_mate SET MAT_CODIGO ='$codigo_materia', MAT_CODCUR ='$codigo_curso', MAT_NOMBRE ='$materia_nombre', MAT_CODPER ='$codigo_persona', MAT_GRADO ='$grado', MAT_TIPO ='$tipo', MAT_ORDEN ='$orden', MAT_RESALT ='$resalt', MAT_OBPRMA ='$obprma', MAT_COCOMA ='$cocoma', MAT_NUMACO ='$numaco', MAT_OCULTA ='$oculta', MAT_AREID ='$areid', MAT_AREAC ='$areac', MAT_AMBITO ='$ambito'
            WHERE MAT_CODIGO = '$codigo_materia'");
            return $resultado;
        }

        #Eliminar materia
        public function DeleteMateria($id){
            $resultado = $this->bd->query("DELETE FROM snp_mate WHERE MAT_CODIGO = '$id'");
            return true;
        }

    }

?>