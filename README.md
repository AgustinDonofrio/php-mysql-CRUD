# Personal Task CRUD proyect [🇪🇸]

## Descripción del Proyecto

Este proyecto es una aplicación simple para gestionar tareas personales. Permite a los usuarios crear, editar y eliminar tareas de una lista.

## Requisitos del Entorno

Antes de ejecutar la aplicación, asegúrate de tener instalados los siguientes requisitos:

- [XAMPP](https://www.apachefriends.org/index.html): Un paquete que incluye Apache, MySQL, PHP y Perl.

## Instrucciones de Configuración

1. **Configuración del Entorno:**
   - Instala XAMPP desde [su sitio web oficial](https://www.apachefriends.org/index.html).
   - Inicia XAMPP Control Panel y asegúrate de que Apache y MySQL estén ejecutándose.

2. **Configuración de la Base de Datos:**
   - Accede a `http://localhost/phpmyadmin/`.
   - Crea una nueva base de datos llamada `nombre_de_tu_base_de_datos`.
   - Selecciona la nueva base de datos y ejecuta las consultas SQL presentes en tu aplicación para crear las tablas necesarias.

3. **Descarga del Proyecto:**
   - Clona este repositorio en tu máquina local:

     ```bash
     git clone https://github.com/tu-usuario/tu-proyecto.git
     ```

4. **Configuración de la Conexión a la Base de Datos:**
   - Abre el archivo `db.php` y asegúrate de que los detalles de conexión coincidan con tu configuración de MySQL.

     ```php
     <?php
     session_start();

     $conn = mysqli_connect(
         'localhost',   // Host
         'tu_usuario',  // Nombre de usuario
         'tu_contraseña',// Contraseña
         'nombre_de_tu_base_de_datos' // Nombre de la base de datos
     );

     if (!$conn) {
         die("Error de conexión: " . mysqli_connect_error());
     }
     ```

## Ejecutar la Aplicación

1. Coloca el proyecto en la carpeta `htdocs` de tu instalación de XAMPP (por defecto es: `C:\xampp\htdocs`).
2. Abre tu navegador y accede a `http://localhost/tu-proyecto`.

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el texto completo de la licencia en el archivo [LICENSE](./LICENSE).

# Personal Task CRUD proyect [🇺🇸]

## Project Description

This project is a simple application for managing personal tasks. It allows users to create, edit, and delete tasks from a list.

## Environment Requirements 

Before running the application, make sure you have the following requirements installed:

- [XAMPP](https://www.apachefriends.org/index.html): A package that includes Apache, MySQL, PHP and Perl.

## Setup Instructions

1. **Environment Setup:**
   - Install XAMPP from [its official website](https://www.apachefriends.org/index.html).
   - Start XAMPP Control Panel and ensure that Apache and MySQL are running.

2. **Database Setup:**
   - Access `http://localhost/phpmyadmin/`.
   - Create a new database named `your_database_name`.
   - Select the new database and run the SQL queries present in your application to create the necessary tables.

3. **Project Download:**
   - Clone this repository on your local machine:

     ```bash
     git clone https://github.com/your-username/your-project.git
     ```

4. **Database Connection Configuration:**
   - Open the `db.php` file and ensure that the connection details match your MySQL configuration.

     ```php
     <?php
     session_start();

     $conn = mysqli_connect(
         'localhost',   // Host
         'your_username',  // Username
         'your_password', // Password
         'your_database_name' // Database name
     );

     if (!$conn) {
         die("Connection error: " . mysqli_connect_error());
     }
     ```
 
## Run the Application

1. Place the project in the `htdocs` folder of your XAMPP installation (by default: `C:\xampp\htdocs`).
2. Open your browser and go to `http://localhost/your-project`.


## License

This project is under the MIT License. Check the full text of the license in the [LICENSE](./LICENSE) file.
