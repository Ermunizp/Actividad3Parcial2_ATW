# 📚 Sistema de Gestión de Libros y Autores

## 📌 Descripción
Este es un sistema web desarrollado en **PHP** utilizando el modelo **MVC**. Permite gestionar una base de datos de **libros** y **autores**, aplicando integración con **Axios** para peticiones AJAX, **JavaScript Router** para navegación sin recarga y **.htaccess** para URLs amigables.

## 🚀 Características Principales
- CRUD completo (Crear, Leer, Actualizar, Eliminar) para libros y autores.
- Arquitectura basada en el patrón **Modelo-Vista-Controlador (MVC)**.
- Uso de **PDO** para la conexión segura con MySQL.
- Integración con **Axios** para realizar peticiones asincrónicas.
- Configuración de **router.js** para navegación sin recargar la página.
- Manejo de **URLs amigables** con `.htaccess`.

## 🛠️ Instalación y Configuración
### 1️⃣ Requisitos Previos
- **XAMPP** o cualquier servidor Apache con PHP 7.x o superior.
- **MySQL** como base de datos.
- Habilitar **mod_rewrite** en Apache.


### 3️⃣ Configurar la Base de Datos
- Importa el archivo `database.sql` en tu servidor MySQL.
- Configura la conexión en `config/database.php`:
```php
$host = 'localhost';
$dbname = 'gestion_libros';
$username = 'root';
$password = '';
```


## 📂 Estructura del Proyecto
```
📂 sistema-libros-autores/
 ├── 📂 app/
 │   ├── 📂 controllers/   # Controladores MVC
 │   ├── 📂 models/        # Modelos de la base de datos
 │   ├── 📂 views/         # Vistas HTML + PHP
 ├── 📂 config/            # Configuración de la base de datos
 ├── 📂 public/            # Carpeta pública (index, router, assets)
 │   ├── 📜 .htaccess      # URLs amigables
 │   ├── 📜 index.php      # Punto de entrada
 │   ├── 📂 js/            # JavaScript y router.js
 ├── 📜 database.sql       # Script de la base de datos
 ├── 📜 README.md          # Documentación
```

## 🔄 Funcionamiento del Sistema
### 📖 Gestión de Libros
- 📌 **Listar Libros:** `GET /libro/getAll`
- ➕ **Crear Libro:** `POST /libro/store`
- ✏️ **Editar Libro:** `POST /libro/update/{id}`
- 🗑️ **Eliminar Libro:** `GET /libro/delete/{id}`

### 👤 Gestión de Autores
- 📌 **Listar Autores:** `GET /autor/getAll`
- ➕ **Crear Autor:** `POST /autor/store`
- ✏️ **Editar Autor:** `POST /autor/update/{id}`
- 🗑️ **Eliminar Autor:** `GET /autor/delete/{id}`

## ⚡ Uso de Axios y Router.js
El sistema usa **Axios** para la carga dinámica de datos y **router.js** para la navegación sin recargar la página.

Ejemplo de carga de libros con Axios:
```javascript
axios.get('/libro/getAll')
    .then(response => {
        console.log(response.data);
    })
    .catch(error => console.error("Error:", error));
```

## 🎯 Mejoras Futuras
- Implementación de autenticación de usuarios.
- Agregar paginación y búsqueda dinámica.
- Uso de **SweetAlert** para notificaciones amigables.



