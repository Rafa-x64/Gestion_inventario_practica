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
        //sanitizar tipo contrato
        $form["empleado_tipo_contrato"] = self::sanitizarTipoContrato($form["empleado_tipo_contrato"]);
        //sanitizar supervisor directo
        $form["empleado_supervisor"] = self::santizarSupervisor($form["empleado_supervisor"]);
        //sanitizar horas de entrada y salida
        $horasSanitizadas = self::sanitizarHoras($form["empleado_hora_entrada"], $form["empleado_hora_salida"]);
        $form["empleado_hora_entrada"] = $horasSanitizadas["hora_entrada"];
        $form["empleado_hora_salida"] = $horasSanitizadas["hora_salida"];
        //sanitizar estado (activo, suspendido, retirado)
        $form["empleado_estado"] = self::sanitizarEstado($form["empleado_estado"]);
        //sanitizar salario
        $form["empleado_salario"] = self::sanitizarSalario($form["empleado_salario"]);
        //sanitizar bonificaciones
        $form["empleado_bonificaciones"] = self::sanitizarBonificaciones($form["empleado_bonificaciones"]);






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

    private static function sanitizarTipoContrato($empleadoTipoContrato){
        if (!is_string($empleadoTipoContrato)) {
            throw new InvalidArgumentException("el tipo de contrato debe ser una cadena de texto");
        }
        if($empleadoTipoContrato != "tiempo completo" || $empleadoTipoContrato != "tiempo parcial" || $empleadoTipoContrato != "temporal" || $empleadoTipoContrato != "obra labor" || $empleadoTipoContrato != "prueba" || $empleadoTipoContrato != "indefinido" || $empleadoTipoContrato != "freelance" || $empleadoTipoContrato != "pasantia" || $empleadoTipoContrato != "remoto"){
            throw new InvalidArgumentException("el tipo de contrato no debe ser distinto tiempo completo, tiempo parcial, temporal, obra labor, prueba, indefinido, freelance, pasantia o remoto");
        }

        return ucwords(trim($empleadoTipoContrato));
    }

    private static function santizarSupervisor($supervisor){
        if (!is_string($supervisor)) {
            throw new InvalidArgumentException("el supervisor debe ser una cadena de texto");
        }

        if($supervisor != "empleado administrador"  $supervisor != "super administrador"){
            throw new InvalidArgumentException("el supervisor no debe ser distinto empleado administrador o super administrador");
        }

        return ucwords(trim($supervisor));
    }

    private function sanitizarHoras($horaEntrada, $horaSalida)
    {
        // Verificar que las entradas son strings
        if (!is_string($horaEntrada) || !is_string($horaSalida)) {
            throw new InvalidArgumentException("Las horas deben ser cadenas de texto");
        }

        // Validar el formato de la hora usando regex (HH:MM)
        if (!preg_match('/^([01]\d|2[0-3]):([0-5]\d$/', $horaEntrada)) {
            throw new InvalidArgumentException("La hora de entrada no es válida");
        }

        if (!preg_match('/^([01]\d|2[0-3]):([0-5]\d$/', $horaSalida)) {
            throw new InvalidArgumentException("La hora de salida no es válida");
        }

        // Opcional: verificar que la hora de salida sea mayor que la de entrada
        if ($horaSalida < $horaEntrada) {
            throw new InvalidArgumentException("La hora de salida debe ser mayor que la hora de entrada");
        }

        // Retornar los valores sanitizados
        return [
            'hora_entrada' => $horaEntrada,
            'hora_salida' => $horaSalida,
        ];
    }

    private function sanitizarEstado($estado){
        if (!is_string($estado)) {
            throw new InvalidArgumentException("el estado debe ser una cadena de texto");
        }

        if($estado != "activo" && $estado != "suspendido" && $estado != "retirado"){
            throw new InvalidArgumentException("el estado no debe ser distinto activo, suspendido o retirado");
        }

        return ucwords(trim($estado));
    }

    private function sanitizarSalario($salario){
        if (!is_string($salario)) {
            throw new InvalidArgumentException("el salario debe ser una cadena de texto");
        }

        $salario = trim($salario);

        // Reemplazar comas por puntos si hay comas como separadores de decimales
        $salario = str_replace(',', '.', $salario);

        // Validar que sea un número válido
        if (!is_numeric($salario)) {
            throw new InvalidArgumentException("El salario debe ser un número válido");
        }

        // Convertir a tipo decimal (float)
        $salarioDecimal = (float)$salario;

        // Retornar el valor como decimal, asegurando dos decimales
        return number_format($salarioDecimal, 2, '.', ''); // Asegura que siempre tenga dos decimales
    }

    private function sanitizarBonificaciones($bonificaciones)
    {
        if (!isset($bonificaciones) || $bonificaciones === '') {
            return null; // Retornar null si está vacío o no se envió
        }

        if (!is_string($bonificaciones)) {
            throw new InvalidArgumentException("Las bonificaciones deben ser una cadena de texto");
        }

        $bonificaciones = trim($bonificaciones);

        // Verificar si se ha recibido una cadena vacía después de trim
        if ($bonificaciones === '') {
            return null; // Retornar null si la cadena está vacía después de sanitizar
        }

        //Convertir a número decimal, si se espera que sea un número
        if (is_numeric($bonificaciones)) {
            return number_format((float)$bonificaciones, 2, '.', ''); // Convertir a decimal con dos decimales
        }

        return $bonificaciones; // Devolver la cadena de bonificaciones sanitizada
    }

    private function sanitizarTipoDeduccion($tipoDeduccion){
        if (!is_string($tipoDeduccion)) {
            throw new InvalidArgumentException("El tipo de deducción debe ser una cadena de texto");
        }

        $deduccionesPermitidas = [
            "ninguno",
            "seguridad social",
            "fondo salud",
            "parafiscales",
            "caja ahorro",
            "prestamos",
            "comedor",
            "servicios"
        ];

        $tipoDeduccion = strtolower(trim($tipoDeduccion));

        if (!in_array($tipoDeduccion, $deduccionesPermitidas)) {
            throw new InvalidArgumentException("El tipo de deducción debe ser uno de los siguientes: " . implode(", ", $deduccionesPermitidas));
        }

        return $tipoDeduccion;
    }
}
