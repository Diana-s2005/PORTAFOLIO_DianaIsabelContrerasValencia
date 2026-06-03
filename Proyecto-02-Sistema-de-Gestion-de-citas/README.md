# Proyecto 02 – Sistema Web de Gestión de Citas

## Objetivo del Proyecto

Desarrollar una aplicación web que permita a los usuarios registrarse, iniciar sesión y administrar sus citas de manera segura y eficiente, utilizando una arquitectura organizada basada en el patrón MVC y una base de datos relacional.

## Problema que Resuelve

El proyecto facilita la organización y administración de citas personales mediante una plataforma web que permite almacenar, consultar, editar y eliminar registros de forma estructurada, evitando el manejo manual de la información y mejorando el acceso a los datos.

## Tecnologías Utilizadas

* HTML5
* CSS3
* PHP
* MySQL
* phpMyAdmin
* PDO (PHP Data Objects)
* XAMPP
* GitHub

## Conceptos Aplicados

* Patrón MVC (Modelo-Vista-Controlador)
* Programación orientada a la web con PHP
* Manejo de sesiones
* Autenticación de usuarios
* Cifrado de contraseñas
* Consultas preparadas con PDO
* Bases de datos relacionales
* CRUD (Crear, Leer, Actualizar y Eliminar)
* Diseño de interfaces con CSS
* Seguridad básica en aplicaciones web
* Control de versiones con GitHub

## Descripción del Funcionamiento

La aplicación inicia mostrando una pantalla principal desde donde los usuarios pueden registrarse o iniciar sesión.

Una vez autenticados, los usuarios acceden a un panel principal (Dashboard) donde pueden gestionar sus citas mediante las siguientes funciones:

1. Registrar nuevas citas.
2. Consultar las citas almacenadas.
3. Editar citas existentes.
4. Eliminar citas.
5. Actualizar información de usuario.

El sistema utiliza una base de datos MySQL compuesta por las tablas usuarios y citas, relacionadas mediante una clave foránea. La autenticación se realiza mediante contraseñas cifradas y sesiones seguras para proteger la información de los usuarios.

## Instrucciones de Ejecución

1. Instalar XAMPP en el equipo.

2. Activar los servicios Apache y MySQL.

3. Importar la base de datos desde el archivo database.sql utilizando phpMyAdmin.

4. Colocar la carpeta del proyecto dentro del directorio htdocs de XAMPP.

5. Verificar la configuración de conexión a la base de datos.

6. Abrir el navegador web.

7. Acceder a la dirección:

   http://localhost/sistema_citas/

8. Registrarse o iniciar sesión para comenzar a utilizar el sistema.

## Reflexión Personal

### ¿Qué aprendí?

Aprendí a desarrollar una aplicación web más completa utilizando PHP y MySQL bajo una arquitectura MVC, implementando autenticación de usuarios, manejo de sesiones y operaciones CRUD. También comprendí la importancia de aplicar medidas básicas de seguridad y mantener una estructura organizada del proyecto.

### ¿Qué fue difícil?

Uno de los principales desafíos fue implementar correctamente la conexión con la base de datos mediante PDO, gestionar las sesiones de usuario y asegurar que cada operación CRUD funcionara correctamente sin comprometer la integridad de los datos.

### ¿Qué mejoraría?

Mejoraría la interfaz gráfica para hacerla más moderna y responsiva, incorporaría validaciones tanto del lado del cliente como del servidor, agregaría recuperación de contraseñas y ampliaría las funcionalidades del sistema con recordatorios automáticos y filtros avanzados para la gestión de citas.

