<?php 

    class sql{

        private $bd;

        public function __construct() {
            $this->bd = new mysqli(SERVIDOR, USUARIO, CLAVE, BDD);
            $this-> bd-> set_charset('utf8');
        }

          #Consultar pacientes
          public function ConsultarParalelo(){
            $resultado = $this->bd->query("SELECT * FROM snp_para");
            return $resultado;
        }

        #Add pacientes
        public function AddParalelo($paralelo_nombre){
            $resultado = $this->bd->query("INSERT INTO snp_para(PAR_CODIGO, PAR_NOMBRE) VALUES (0, '$paralelo_nombre')");
            return true;
        }

        #Eliminar pacientes
        public function DeleteParalelo($id){
            $resultado = $this->bd->query("DELETE FROM snp_para WHERE PAR_CODIGO = '$id'");
            return true;
        }

        #Update pacientes
        public function UpdateParalelo($paralelo_codigo, $paralelo_nombre){
            $resultado = $this->bd->query("UPDATE snp_para SET PAR_CODIGO='$paralelo_codigo', PAR_NOMBRE='$paralelo_nombre'
            WHERE PAR_CODIGO = '$paralelo_codigo'");
            return $resultado;
        }

        #Paciente ID
        public function ConsultarPacienteID($paralelo_codigo){
            $resultado = $this->bd->query("SELECT * FROM snp_para 
                                            WHERE PAR_CODIGO = '$paralelo_codigo'");
            return $resultado;
        }
    }

?>