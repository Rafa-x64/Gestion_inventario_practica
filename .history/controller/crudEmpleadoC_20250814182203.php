<?php

include_once("./model/mainModel.php");

class crudEmpleadoC extends mainModel
{

    public static function obtener_formulario($form): array
    {
        if (!is_array($form)) {
            throw new InvalidArgumentException("debe pasarse un array");
        }

        //sanitizar nombre
        $form["empleado_nombre"] = self::sanitizarNombre($form["empleado_nombre"]);
        //sanitizar cedula
        $form["empleado_cedula"] = self::sanitizarCedula($form["empleado_cedula"]);
        //sanitizar fecha de nacimiento (Y-m-d)
        $form["empleado_fecha_nacimiento"] = self::sanitizarFechaNacimiento($form["empleado_fecha_nacimiento"]);
        //sanitizar sexo
        $form["empleado_sexo"] = self::sanitizarSexo($form["empleado_sexo"]);
        //sanitizar telefono
        $form["empleado_telefono"] = self::sanitizarTelefono($form["empleado_telefono"]);
        //sanitizar estado civil
        $form["empleado_estado_civil"] = self::sanitizarEstadoCivil($form["empleado_estado_civil"]);
        //sanitizar correo)
        $form["empleado_correo"] = self::sanitizarCorreo($form["empleado_correo"]);
        //sanitizar direccion
        $form["empleado_direccion"] = self::sanitizarDireccion($form["empleado_direccion"]);
        //sanitizar cargo
        $form["empleado_cargo"] = self::sanitizarCargo($form["empleado_cargo"]);
        //sanitizar fecha registro (Y-m-d)
        $form["empleado_fecha_registro"] = self::sanitizarFechaRegistro($form["empleado_fecha_registro"]);
        


        return $form;
    }

    public static function registrarEmpleado($form)
    {
        if (!is_array($form)) {
            throw new InvalidArgumentException("debe pasarse un array");
        }



        return;
    }

    public static function obtener_id()
    {
        return $_SESSION["id_empresa"];
    }

    public static function desencriptar_sesion()
    {
        return parent::desencriptar_sesion();
    }

    public static function obtener_fecha_registro()
    {
        return $_COOKIE["empleado_fecha_ingreso"];
    }

    public static function obtener_supervisor()
    {
        return self::desencriptar_dato($_SESSION["ROL"]);
    }

    public static function obtener_moneda()
    {
        switch (self::desencriptar_dato($_SESSION["moneda"])) {
            case "Dolar":
                return MONEDA["dolar"];
            case "Bolivar":
                return MONEDA["bolivar"];
            case "Euro":
                return MONEDA["euro"];
            default:
                return "error";
        }
    }

    public static function generar_id()
    {
        return strtoupper(substr(uniqid("USR_"), 0, 12));
    }

    //-----------------------sanitizar campos------------------------
    private function sanitizarNombre($nombre)
    {
        if (!is_string($nombre)) {
            throw new InvalidArgumentException("el nombre debe ser una cadena de texto");
        }

        return ucwords(trim($nombre));
    }

    private function sanitizarCedula($cedula)
    {
        if (!is_string($cedula)) {
            throw new InvalidArgumentException("el nombre debe ser una cadena de texto");
        }

        if (strlen($cedula) < 9 || strlen($cedula) > 11) {
            throw new InvalidArgumentException("la cedula debe tener entre 9 y 11 caracteres");
        }

        return trim($cedula);
    }

    private function sanitizarFechaNacimiento($fechaNacimiento)
    {
        $empleado_fecha_nacimiento = $fechaNacimiento;

        // Convertir el string a un objeto DateTime
        $date = DateTime::createFromFormat('Y-m-d', $empleado_fecha_nacimiento);

        if ($date) {
            // Guardar la fecha en el array de sesión en formato Y-m-d
            return $date->format('Y-m-d');
        } else {
            throw new InvalidArgumentException("Fecha de nacimiento no válida, debe estar en formato Año-mes-dia");
        }
    }

    private function sanitizarSexo($sexo)
    {
        if (!is_string($sexo)) {
            throw new InvalidArgumentException("el sexo debe ser una cadena de texto");
        }

        if ($sexo != "Masculino" || $sexo != "Femenino") {
            throw new InvalidArgumentException("el sexo no debe ser distinto Masculino o Femenino");
        }

        return ucwords(trim($sexo));
    }

    private function sanitizarTelefono($telefono)
    {
        if (!is_string($telefono)) {
            throw new InvalidArgumentException("El teléfono debe ser una cadena de texto");
        }

        // Eliminar caracteres no numéricos excepto '+'
        $telefono = preg_replace('/[^0-9+]/', '', $telefono);

        if (strlen($telefono) < 13 || strlen($telefono) > 16) {
            throw new InvalidArgumentException("El teléfono debe tener entre 13 y 16 caracteres");
        }

        // Formato internacional (ej: +58 4125551041)
        if (strpos($telefono, '+') === 0) {
            // Agregar guiones
            $telefono = preg_replace('/(\+\d{2})(\d{3})(\d{3})(\d{4})/', '$1 $2-$3-$4', $telefono);
        } else { // Formato nacional (ej: 04125551041)
            // Agregar guiones
            $telefono = preg_replace('/(\d{4})(\d{3})(\d{2})(\d{2})/', '$1-$2-$3-$4', $telefono);
        }

        return trim($telefono);
    }

    private static function sanitizarEstadoCivil($estadoCivil){
        if (!is_string($estadoCivil)) {
            throw new InvalidArgumentException("el estado civil debe ser una cadena de texto");
        }

        if($estadoCivil != "Soltero" || $estadoCivil != "Casado" || $estadoCivil != "Divorciado" || $estadoCivil != "Viudo" || $estadoCivil != "Union libre"){
            throw new InvalidArgumentException("el estado civil no debe ser distinto Soltero, Casado, Divorciado, Viudo o Union libre");
        }

        return ucwords(trim($estadoCivil));
    }

    private static function sanitizarCorreo($correo){
        if (!is_string($correo)) {
            throw new InvalidArgumentException("el correo debe ser una cadena de texto");
        }

        return trim($correo);
    }

    private static function sanitizarDireccion($empleadoDireccion){
        if (!is_string($empleadoDireccion)) {
            throw new InvalidArgumentException("la direccion debe ser una cadena de texto");
        }

        return ucwords(trim($empleadoDireccion));
    }

    private static function sanitizarCargo($empleadoCargo){
        if (!is_string($empleadoCargo)) {
            throw new InvalidArgumentException("el cargo debe ser una cadena de texto");
        }

        if($empleadoCargo != "super administrador" || $empleadoCargo != "empleado administrador" || $empleadoCargo != "empleado vendedor"){
            throw new InvalidArgumentException("el cargo no debe ser distinto super administrador, empleado administrador o empleado vendedor");
        }

        return (trim($empleadoCargo));
    }

    private static function sanitizarFechaRegistro($fechaRegistro){
        if (!is_string($fechaRegistro)) {
            throw new InvalidArgumentException("la fecha de registro debe ser una cadena de texto");
        }

        $empleado_fecha_registro = $fechaRegistro;

        // Convertir el string a un objeto DateTime
        $date = DateTime::createFromFormat('Y-m-d', $empleado_fecha_registro);

        if ($date) {
            // Guardar la fecha en el array de sesión en formato Y-m-d
            return $date->format('Y-m-d');
        } else {
            throw new InvalidArgumentException("Fecha de registro no válida, debe estar en formato Año-mes-dia");
        }

        return trim($empleadoFechaRegistro);
    }
}
