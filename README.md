# Sistema de Perfil Universitario — SIS-500

Aplicación web desarrollada como proyecto final de la materia **Programación Avanzada (SIS-500)** en la **Universidad Privada San Francisco de Asís (USFA)**.

## Tecnologías utilizadas

* PHP 8.x
* Laravel 11.x
* HTML5
* CSS3 (diseño propio, sin frameworks externos)
* SQLite
* Git y GitHub

## Funcionalidades implementadas

### Página de inicio

* Presentación personal del estudiante.
* Información general del proyecto.
* Navegación entre módulos.

### Página "Sobre mí"

* Información personal y académica.
* Objetivos profesionales.
* Lista de habilidades y competencias.

### Módulo de materias

* Consulta de materias registradas.
* Visualización de notas obtenidas.
* Cálculo automático del promedio general.
* Conteo de materias aprobadas.
* Clasificación de estados académicos.

### Módulo de productos

* Listado dinámico de productos.
* Visualización de precios y categorías.
* Cálculo automático del precio promedio.

### Formulario de contacto

* Envío de información mediante método POST.
* Validación de datos con Laravel.
* Mensajes de confirmación para el usuario.

### Diseño e interfaz

* Plantilla Blade compartida.
* Navegación funcional entre páginas.
* Diseño responsivo mediante CSS propio.
* Estilos personalizados para tablas, formularios y componentes.

## Estructura del proyecto

```text
app/
├── Http/Controllers
├── Models

database/
├── migrations
├── seeders

public/
├── css
├── img

resources/
├── views
│   ├── layouts
│   ├── inicio.blade.php
│   ├── sobre-mi.blade.php
│   ├── materias.blade.php
│   ├── contacto.blade.php
│   └── productos.blade.php

routes/
└── web.php
```

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

### 7. Poblar la base de datos (opcional)

```bash
php artisan db:seed
```

### 8. Iniciar servidor local

```bash
php artisan serve
```

### 9. Abrir en el navegador

```text
http://127.0.0.1:8000
```

## Control de versiones

El proyecto fue gestionado mediante Git y GitHub utilizando:

* Rama principal: `main`
* Rama de desarrollo: `desarrollo`
* Commits descriptivos por funcionalidad
* Integración de cambios mediante merge

## Autor

**Luis Fernando Espinoza Silva**
Estudiante de Ingeniería de Sistemas
Universidad Privada San Francisco de Asís (USFA)

GitHub: https://github.com/SELF341
