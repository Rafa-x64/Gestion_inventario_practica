<?php

include_once("./model/mainModel.php");
include_once("./model/empleadoM.php");

class crudEmpleadoC extends mainModel
{

    //-------metodo para sanitizar, validar y formatear campos-------
    public static function obtener_formulario($form)
    {
        if (!is_array($form)) {
            throw new InvalidArgumentException("debe pasarse un array");
        }

        //sanitizar nombre
        $id = self::sanitizarNombre($form["empleado_nombre"]);
        //sanitizar cedula
        $nombre = self::sanitizarCedula($form["empleado_cedula"]);
        //sanitizar fecha de nacimiento (Y-m-d)
        $fechaNacimiento = self::sanitizarFechaNacimiento($form["empleado_fecha_nacimiento"]);
        //sanitizar sexo
        $sexo = self::sanitizarSexo($form["empleado_sexo"]);
        //sanitizar telefono
        $telefono = self::sanitizarTelefono($form["empleado_telefono"]);
        //sanitizar estado civil
        $estadoCivil = self::sanitizarEstadoCivil($form["empleado_estado_civil"]);
        //sanitizar correo)
        $correo = self::sanitizarCorreo($form["empleado_correo"]);
        //sanitizar direccion
        $direccion = self::sanitizarDireccion($form["empleado_direccion"]);
        //sanitizar cargo
        $ROL = self::sanitizarCargo($form["empleado_cargo"]);
        //sanitizar fecha registro (Y-m-d)
        $fechaRegistro = self::sanitizarFechaRegistro($form["empleado_fecha_registro"]);
        //sanitizar tipo contrato
        $tipoContrato = self::sanitizarTipoContrato($form["empleado_tipo_contrato"]);
        //sanitizar supervisor directo
        $supervisor = self::santizarSupervisor($form["empleado_supervisor"]);
        //sanitizar horas de entrada y salida
        $horasSanitizadas = self::sanitizarHoras($form["empleado_hora_entrada"], $form["empleado_hora_salida"]);
        $horaEntrada = $horasSanitizadas["hora_entrada"];
        $horaSalida = $horasSanitizadas["hora_salida"];
        //sanitizar estado (activo, suspendido, retirado)
        $estado = self::sanitizarEstado($form["empleado_estado"]);
        //sanitizar salario
        $salario = self::sanitizarSalario($form["empleado_salario"]);
        //sanitizar bonificaciones
        $bonificaciones = self::sanitizarBonificaciones($form["empleado_bonificaciones"]);
        //sanitizar tipo de la deduccion
        $tipoDeduccion = self::sanitizarTipoDeduccion($form["empleado_tipo_deduccion"]);
        //sanitizar tipo de pago
        $form["empleado_tipo_pago"] = self::sanitizarTipoPago($form["empleado_tipo_pago"]);
        //sanitizar banco
        $form["empleado_banco"] = self::sanitizarBanco($form["empleado_banco"]);
        //sanitizar numero de cuenta
        $form["empleado_numero_cuenta"] = self::sanitizarNumeroCuenta($form["empleado_numero_cuenta"]);
        //sanitizar usuario
        $form["empleado_usuario"] = self::sanitizarUsuario($form["empleado_usuario"]);
        //sanitizar contraseñas
        $form["empleado_contraseña"] = self::sanitizarContraseña($form["empleado_contraseña"]);
        $form["empleado_contraseña2"] = self::sanitizarContraseña($form["empleado_contraseña2"]);
        //sanitizar id_usuario
        $form["empleado_id"] = self::sanitizarIDEmpleado($form["empleado_id"]);

        $empleado = new empleadoM($id, $nombre, $fechaNacimiento);

        //return $form;//no retornar formulario, hacer metodo de registro en el modelo del empleado y ejecutarlo desde aqui (en caso de dar error acomodar los campos de la base de datos DATE, TIME a VARCHAR(255))
    }

    public static function registrarEmpleado($form)//mmmm no lo se
    {
        if (!is_array($form)) {
            throw new InvalidArgumentException("debe pasarse un array");
        }



        return;
    }

    //-----------obtener cosas de la sesion o de cookies del servidor--------------
    public static function obtener_id()
    {
        return $_SESSION["id_empresa"];
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

    //-----------------otros metodos necesarios para el sistema---------------
    public static function generar_id()
    {
        return strtoupper(substr(uniqid("USR_"), 0, 12));
    }

    public static function desencriptar_sesion()
    {
        return parent::desencriptar_sesion();
    }

    public static function validarLuhn($numero)
    {
        $suma = 0;
        $invertido = strrev($numero);

        for ($i = 0; $i < strlen($invertido); $i++) {
            $digito = intval($invertido[$i]);

            if ($i % 2 == 1) {
                $digito *= 2;
                if ($digito > 9) {
                    $digito -= 9;
                }
            }

            $suma += $digito;
        }

        return ($suma % 10) === 0;
    }

    //-----------------------sanitizar campos------------------------
    //eliminar el throw y hacer un trait para mostrar notificaciones 
    public static function sanitizarNombre($nombre)
    {
        if (!is_string($nombre)) {
            throw new InvalidArgumentException("el nombre debe ser una cadena de texto");
        }

        return ucwords(trim($nombre));
    }

    public static function sanitizarCedula($cedula)
    {
        if (!is_string($cedula)) {
            throw new InvalidArgumentException("el nombre debe ser una cadena de texto");
        }

        if (strlen($cedula) < 9 || strlen($cedula) > 11) {
            throw new InvalidArgumentException("la cedula debe tener entre 9 y 11 caracteres");
        }

        return trim($cedula);
    }

    public static function sanitizarFechaNacimiento($fechaNacimiento)
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

    public static function sanitizarSexo($sexo)
    {
        if (!is_string($sexo)) {
            throw new InvalidArgumentException("el sexo debe ser una cadena de texto");
        }

        if ($sexo != "Masculino" && $sexo != "Femenino") {
            throw new InvalidArgumentException("el sexo no debe ser distinto Masculino o Femenino");
        }

        return ucwords(trim($sexo));
    }

    public static function sanitizarTelefono($telefono)
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

    public static function sanitizarEstadoCivil($estadoCivil)
    {
        if (!is_string($estadoCivil)) {
            throw new InvalidArgumentException("el estado civil debe ser una cadena de texto");
        }

        if ($estadoCivil != "Soltero" && $estadoCivil != "Casado" && $estadoCivil != "Divorciado" && $estadoCivil != "Viudo" && $estadoCivil != "Union libre") {
            throw new InvalidArgumentException("el estado civil no debe ser distinto Soltero, Casado, Divorciado, Viudo o Union libre");
        }

        return ucwords(trim($estadoCivil));
    }

    public static function sanitizarCorreo($correo)
    {
        if (!is_string($correo)) {
            throw new InvalidArgumentException("el correo debe ser una cadena de texto");
        }

        return trim($correo);
    }

    public static function sanitizarDireccion($empleadoDireccion)
    {
        if (!is_string($empleadoDireccion)) {
            throw new InvalidArgumentException("la direccion debe ser una cadena de texto");
        }

        return ucwords(trim($empleadoDireccion));
    }

    public static function sanitizarCargo($empleadoCargo)
    {
        if (!is_string($empleadoCargo)) {
            throw new InvalidArgumentException("el cargo debe ser una cadena de texto");
        }

        if ($empleadoCargo != "super administrador" && $empleadoCargo != "empleado administrador" && $empleadoCargo != "empleado vendedor") {
            throw new InvalidArgumentException("el cargo no debe ser distinto super administrador, empleado administrador o empleado vendedor");
        }

        return (trim($empleadoCargo));
    }

    public static function sanitizarFechaRegistro($fechaRegistro)
    {
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

    public static function sanitizarTipoContrato($empleadoTipoContrato)
    {
        if (!is_string($empleadoTipoContrato)) {
            throw new InvalidArgumentException("el tipo de contrato debe ser una cadena de texto");
        }
        if ($empleadoTipoContrato != "tiempo completo" && $empleadoTipoContrato != "tiempo parcial" && $empleadoTipoContrato != "temporal" && $empleadoTipoContrato != "obra labor" && $empleadoTipoContrato != "prueba" && $empleadoTipoContrato != "indefinido" && $empleadoTipoContrato != "freelance" && $empleadoTipoContrato != "pasantia" && $empleadoTipoContrato != "remoto") {
            throw new InvalidArgumentException("el tipo de contrato no debe ser distinto tiempo completo, tiempo parcial, temporal, obra labor, prueba, indefinido, freelance, pasantia o remoto");
        }

        return ucwords(trim($empleadoTipoContrato));
    }

    public static function santizarSupervisor($supervisor)
    {
        if (!is_string($supervisor)) {
            throw new InvalidArgumentException("el supervisor debe ser una cadena de texto");
        }

        if ($supervisor != "empleado administrador" && $supervisor != "super administrador") {
            throw new InvalidArgumentException("el supervisor no debe ser distinto empleado administrador o super administrador");
        }

        return ucwords(trim($supervisor));
    }

    public static function sanitizarHoras($horaEntrada, $horaSalida)
    {
        if (!is_string($horaEntrada) || !is_string($horaSalida)) {
            throw new InvalidArgumentException("Las horas deben ser cadenas de texto");
        }

        // Validar formato HH:MM (24 horas)
        $regexHora = '/^([01]\d|2[0-3]):([0-5]\d)$/';

        if (!preg_match($regexHora, $horaEntrada)) {
            throw new InvalidArgumentException("La hora de entrada no es válida");
        }

        if (!preg_match($regexHora, $horaSalida)) {
            throw new InvalidArgumentException("La hora de salida no es válida");
        }

        // Comparar como objetos DateTime para mayor precisión
        $entrada = DateTime::createFromFormat('H:i', $horaEntrada);
        $salida = DateTime::createFromFormat('H:i', $horaSalida);

        if ($entrada === false || $salida === false) {
            throw new InvalidArgumentException("Las horas no pudieron ser interpretadas correctamente");
        }

        if ($salida <= $entrada) {
            throw new InvalidArgumentException("La hora de salida debe ser mayor que la hora de entrada");
        }

        return [
            'hora_entrada' => $horaEntrada,
            'hora_salida' => $horaSalida,
        ];
    }


    public static function sanitizarEstado($estado)
    {
        if (!is_string($estado)) {
            throw new InvalidArgumentException("el estado debe ser una cadena de texto");
        }

        if ($estado != "activo" && $estado != "suspendido" && $estado != "retirado") {
            throw new InvalidArgumentException("el estado no debe ser distinto activo, suspendido o retirado");
        }

        return ucwords(trim($estado));
    }

    public static function sanitizarSalario($salario)
    {
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

    public static function sanitizarBonificaciones($bonificaciones)
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

    public static function sanitizarTipoDeduccion($tipoDeduccion)
    {
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

    public static function sanitizarTipoPago($tipoPago)
    {
        if (!is_string($tipoPago)) {
            throw new InvalidArgumentException("El tipo de pago debe ser una cadena de texto");
        }

        $tiposPermitidos = ["semanal", "quincenal", "mensual"];
        $tipoPago = strtolower(trim($tipoPago));

        if (!in_array($tipoPago, $tiposPermitidos)) {
            throw new InvalidArgumentException("El tipo de pago debe ser semanal, quincenal o mensual");
        }

        return ucfirst($tipoPago);
    }

    public static function sanitizarBanco($banco)
    {
        if (!is_string($banco)) {
            throw new InvalidArgumentException("El nombre del banco debe ser una cadena de texto");
        }

        $banco = trim($banco);

        // Validar que solo contenga letras, espacios y caracteres acentuados
        if (!preg_match('/^[A-Za-zÀ-ÿ\s]+$/u', $banco)) {
            throw new InvalidArgumentException("El nombre del banco solo debe contener letras y espacios");
        }

        // Normalizar formato: primera letra de cada palabra en mayúscula
        return ucwords(mb_strtolower($banco, 'UTF-8'));
    }

    public static function sanitizarNumeroCuenta($numeroCuenta)
    {
        if (!is_string($numeroCuenta)) {
            throw new InvalidArgumentException("El número de cuenta debe ser una cadena de texto");
        }

        // Eliminar espacios y convertir a mayúsculas
        $numeroCuenta = strtoupper(trim($numeroCuenta));

        // Validar longitud
        $longitud = strlen($numeroCuenta);
        if ($longitud < 10 || $longitud > 34) {
            throw new InvalidArgumentException("El número de cuenta debe tener entre 10 y 34 caracteres");
        }

        // Validar que sea alfanumérico
        if (!preg_match('/^[A-Za-z0-9]+$/', $numeroCuenta)) {
            throw new InvalidArgumentException("El número de cuenta solo debe contener letras y números");
        }

        // Si es completamente numérico, aplicar Luhn
        if (ctype_digit($numeroCuenta) && !self::validarLuhn($numeroCuenta)) {
            throw new InvalidArgumentException("El número de cuenta no es válido según el algoritmo de Luhn");
        }

        return $numeroCuenta;
    }

    public static function sanitizarUsuario($usuario)
    {
        if (!is_string($usuario)) {
            throw new InvalidArgumentException("El nombre de usuario debe ser una cadena de texto");
        }

        $usuario = trim($usuario);

        if (!preg_match('/^[a-zA-Z0-9_]+$/', $usuario)) {
            throw new InvalidArgumentException("El nombre de usuario solo puede contener letras, números y guiones bajos");
        }

        return strtolower($usuario); // Normalizado en minúsculas
    }

    public static function sanitizarContraseña($contraseña)
    {
        if (!is_string($contraseña)) {
            throw new InvalidArgumentException("La contraseña debe ser una cadena de texto");
        }

        $contraseña = trim($contraseña);

        if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $contraseña)) {
            throw new InvalidArgumentException("La contraseña debe tener al menos 8 caracteres, incluyendo letras y números");
        }

        return $contraseña;
    }

    public static function validarCoincidenciaContraseñas($contraseña1, $contraseña2)
    {
        if ($contraseña1 !== $contraseña2) {
            throw new InvalidArgumentException("Las contraseñas no coinciden");
        }

        return true;
    }

    public static function sanitizarIDEmpleado($id)
    {
        if (!is_string($id)) {
            throw new InvalidArgumentException("El ID de empleado debe ser una cadena de texto");
        }

        $id = trim($id);

        if (!preg_match('/^USR_[A-Z0-9]{8}$/', $id)) {
            throw new InvalidArgumentException("El ID de empleado debe tener el formato USR_ seguido de 8 caracteres alfanuméricos en mayúscula");
        }

        return $id;
    }
}
