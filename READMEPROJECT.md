# Catálogo de Productos — Laravel

Aplicación web desarrollada en **Laravel** para la gestión de un catálogo de productos mediante operaciones CRUD.
El proyecto implementa el patrón **MVC**, migraciones con Eloquent ORM y vistas con Blade.

---

## 📋 Requisitos previos

Antes de ejecutar el proyecto se debe tener instalado:

* WampServer (Apache, MySQL y PHP 7.4)
* Composer
* Git
* Visual Studio Code (opcional)

---

## 🧰 Instalación del entorno

### 1️⃣ Instalación de WampServer

1. Descargar WampServer.
2. Instalar normalmente.
3. Verificar que el icono esté en **verde**.
4. Confirmar versión de PHP:

```bash
php -v
```

---

### 2️⃣ Instalación de Composer

1. Descargar Composer.
2. Durante la instalación seleccionar el **php.exe de WAMP**.
3. Verificar instalación:

```bash
composer -V
```

---

## 🚀 Creación del proyecto Laravel

### 3️⃣ Ubicarse en la carpeta www de WAMP

```bash
cd C:\wamp64\www
```

---

### 4️⃣ Crear proyecto Laravel compatible con PHP 7.4

```bash
composer create-project laravel/laravel:^8.0 catalogo
```

---

### 5️⃣ Ingresar al proyecto

```bash
cd catalogo
```

---

### 6️⃣ Ejecutar servidor de desarrollo

```bash
php artisan serve
```

Abrir en navegador:

```
http://127.0.0.1:8000
```

---

## 🗄️ Configuración de la base de datos

### 7️⃣ Crear base de datos en phpMyAdmin

Nombre de la base de datos:

```
catalogo_db
```

---

### 8️⃣ Configurar archivo .env

Editar:

```
catalogo/.env
```

Configuración utilizada:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=catalogo_db
DB_USERNAME=root
DB_PASSWORD=
```

Limpiar caché de configuración:

```bash
php artisan config:clear
```

---

### 9️⃣ Ejecutar migraciones base

```bash
php artisan migrate
```

---

## 🧱 Creación del módulo Productos

### 🔹 Generar modelo, migración y controlador

```bash
php artisan make:model Producto -mcr
```

Esto crea:

* Modelo Producto
* Migración productos
* Controlador resource

---

### 🔹 Ejecutar migración de productos

```bash
php artisan migrate
```

---

### 🔹 Configurar rutas

Archivo:

```
routes/web.php
```

```php
use App\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);
```

---

## 🎨 Vistas Blade creadas

Ubicación:

```
resources/views/productos/
```

Vistas implementadas:

* index.blade.php
* create.blade.php
* edit.blade.php
* show.blade.php

---

## 🔁 Funcionalidades implementadas

✅ Listar productos
✅ Crear productos
✅ Editar productos
✅ Eliminar productos
✅ Ver detalle de producto
✅ Migraciones con Eloquent
✅ Arquitectura MVC
✅ Control de versiones con Git

---

## 🗂️ Control de versiones

### Inicializar repositorio

```bash
git init
git add .
git commit -m "Inicializar proyecto Laravel catalogo"
```

### Conectar con GitHub

```bash
git remote add origin <URL_DEL_REPOSITORIO>
git branch -M main
git push -u origin main
```

---

## 👨‍💻 Autor

Desarrollado por: **Brando Andrade**
Asignatura: Desarrollo Web PHP con Laravel
Año: 2026

---

## 📌 Notas

* Proyecto desarrollado con PHP 7.4 y Laravel 8.
* Uso académico.