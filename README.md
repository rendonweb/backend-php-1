# backend-php-1

Este es un proyecto CRUD desarrollado con PHP y Bootstrap. A continuación se detallan los pasos para la instalación y configuración después de clonar el repositorio.

## Instalación

1. **Clona el repositorio en tu máquina local:**

   ```sh
   git clone https://github.com/rendonweb/backend-php-1.git
   cd tu_repositorio
   ```

2. **Instala las dependencias de Composer:**

   ```sh
   composer install
   ```

3. **Crea el archivo `.env` basado en el archivo de ejemplo `.env.example`:**

   ```sh
   cp .env.example .env
   ```

4. **Configura tu base de datos MySQL:**

   - Crea una base de datos nueva en MySQL.
   - Importa el archivo `database.sql` en tu base de datos MySQL.

     ```sh
     mysql -u tu_usuario -p tu_base_de_datos < database.sql
     ```

5. **Actualiza las credenciales de la base de datos en el archivo `.env`:**

   ```env
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

## Uso

1. **Inicia el servidor de desarrollo de PHP:**

   ```sh
   php -S localhost:8000 -t public
   ```

2. **Abre tu navegador web y navega a `http://localhost:8000` para ver la aplicación en funcionamiento.**

## Estructura del Proyecto

- `public/` - Contiene el archivo `index.php` que sirve como punto de entrada para la aplicación.
- `src/` - Contiene el código fuente del proyecto.
  - `Controllers/` - Contiene los controladores.
  - `Models/` - Contiene los modelos.
- `views/` - Contiene las vistas.
- `.env.example` - Archivo de ejemplo para la configuración de variables de entorno.
- `database.sql` - Archivo SQL para la configuración de la base de datos.
