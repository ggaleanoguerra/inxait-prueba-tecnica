
# 🎉 Sistema de Sorteos - Proyecto Laravel

Este es un sistema web para gestionar sorteos de una compañía de autos. Permite a usuarios participar y a administradores gestionar sorteos, participantes y ganadores.

---

## 🛠️ Requisitos del sistema

Para ejecutar el proyecto localmente en **Windows**, necesitas tener instalados:

- **PHP >= 8.2**
- **Composer**
- **Node.js LTS**

---

## ⚙️ Instalación y configuración

### 1. Clona el repositorio (si aplica)

```bash
git clone https://github.com/ggaleanoguerra/inxait-prueba-tecnica.git
cd inxait-prueba-tecnica
```

### 2. Instala las dependencias

```bash
composer install
npm install
```

### 3. Configura la base de datos PostgreSQL

Edita el archivo `.env` con los datos de conexión:

```env
DB_CONNECTION=pgsql
DB_HOST=host
DB_PORT=5432
DB_DATABASE=my_db
DB_USERNAME=postgres
DB_PASSWORD=pass
```

### 4. Ejecuta migraciones y seeders

```bash
php artisan migrate:fresh --seed
```

Esto creará las tablas e insertará datos como:

- País (Colombia)
- Departamentos
- Municipios (desde CSV)
- Sorteo de prueba
- Usuario administrador
- Participantes de prueba

### 5. Levanta el servidor de desarrollo

```bash
npm run dev
php artisan serve
```

---

## 🧠 Funcionamiento del sistema

### 🔹 Landing Page (Público)

- Muestra información de la compañía.
- Contiene un **formulario de participación** visible solo si hay un **sorteo activo**.
- Cada usuario puede registrarse una sola vez por número de documento.
- Si el usuario ya ha participado antes y hay un nuevo sorteo, se usan sus datos previos automáticamente.
- Si no hay sorteo activo o ganadores previos, se mostrará un mensaje informativo.

### 🔸 Panel de Administración

El **usuario admin** se crea automáticamente con:

- **Email:** `admin@example.com`
- **Contraseña:** `password123`

El administrador puede:

- Crear y editar sorteos.
- Ver participantes de todos los sorteos.
- Ver y gestionar ganadores.
- Exportar todos los participantes o solo los de un sorteo a Excel.

### 🧩 Lógica de sorteos

- **Solo puede haber un sorteo activo a la vez.**
  - Al **crear un sorteo como activo** o **editar uno y marcarlo como activo**, cualquier otro sorteo activo pasa automáticamente a **inactivo**.
- Un sorteo **no puede eliminarse**, pero su visibilidad depende de su estado (activo/inactivo).
- Solo se puede efectuar un sorteo si:
  - Hay al menos **5 participantes**.
  - Está marcado como **activo**.
- El ganador es seleccionado **aleatoriamente**.
  - Se muestra su nombre y número de documento con los **últimos 4 dígitos cifrados** en la landing page.
  
---

## 📦 Seeders incluidos

Los seeders ejecutados con `php artisan migrate:fresh --seed` son:

```php
$this->call([
    PaisesSeeder::class,
    DepartamentosSeeder::class,
    MunicipiosSeeder::class,
    LotterySeeder::class,
    UserSeeder::class,
    ParticipantLotterySeeder::class,
]);
```

---

## 📄 Licencia

Este proyecto es una prueba técnica para [https://www.inxaitcorp.com/](https://www.inxaitcorp.com/). El proyecto desplegado online puede ser visitado en [https://sorteos.ggaleanoguerra.tech/](https://sorteos.ggaleanoguerra.tech/)
