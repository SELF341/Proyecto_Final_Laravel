# Sistema de Perfil Universitario — SIS-500

Aplicación web desarrollada como proyecto final del curso de **Programación Avanzada (SIS-500)** en la **Universidad Privada San Francisco de Asís (USFA)**.

## Tecnologías utilizadas

* PHP 8.x
* Laravel 11.x
* CSS3 (diseño personalizado)
* SQLite
* Git
* GitHub

## Funcionalidades

* Página de inicio con presentación personal.
* Sección "Sobre mí" con información académica y profesional.
* Listado de materias registradas con notas y estados académicos.
* Cálculo automático de promedio de notas.
* Identificación de materias aprobadas y reprobadas.
* Formulario de contacto con validaciones del lado del servidor.
* Módulo de productos con listado y cálculo de precio promedio.
* Diseño responsivo utilizando CSS personalizado.
* Implementación de rutas, controladores y vistas bajo el patrón MVC de Laravel.

## Instalación local

### 1. Clonar el repositorio

```bash
git clone https://github.com/SELF341/Proyecto_Final_Laravel.git
```

### 2. Ingresar al proyecto

```bash
cd Proyecto_Final_Laravel
```

### 3. Instalar dependencias

```bash
composer install
```

### 4. Configurar variables de entorno

```bash
cp .env.example .env
```

### 5. Generar clave de aplicación

```bash
php artisan key:generate
```

### 6. Ejecutar migraciones

```bash
php artisan migrate
```

### 7. Poblar la base de datos

```bash
php artisan db:seed
```

### 8. Iniciar el servidor

```bash
php artisan serve
```

### 9. Abrir en el navegador

```text
http://127.0.0.1:8000
```

## Estructura general del proyecto

* Rutas: `routes/web.php`
* Controladores: `app/Http/Controllers`
* Modelos: `app/Models`
* Vistas: `resources/views`
* Estilos: `public/css`
* Migraciones: `database/migrations`
* Seeders: `database/seeders`

## Control de versiones

El proyecto utiliza Git y GitHub con:

* 8 commits documentados.
* Rama principal: `master`.
* Rama de desarrollo: `desarrollo`.
* Integración de cambios mediante merge.

## Autor

**Luis Fernando Espinoza Silva**
Estudiante de Ingeniería de Sistemas
Universidad Privada San Francisco de Asís (USFA)

GitHub: https://github.com/SELF341
