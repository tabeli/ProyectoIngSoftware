# ProyectoIngSoftware

Para poder clonar el repositorio en cualquier dispositivo (con git instalado): 'https://github.com/tabeli/ProyectoIngSoftware.git'



Para poder ver el proyecto se necesita un servidor web con PHP instalado.

Para que se pueda realizar la conexión a la base de datos se necesitan los siguientes requisitos:
    -Tener instalado el administrador de bases de datos PostgreSQL
    -Definir el puerto, el host, el usuario y la contraseña con la cual se realizará la conexión a la base de datos en el archivo "dbConection.php"
    -Tener una base de datos llamada 'distribuidores' con la siguiente tabla:
        'create table distribuidores(
            id serial not null primary key,
            nombre varchar(100) not null,
            estado varchar(100) not null,
            numero varchar(12) not null
        );'
    -Llenar con datos ficticios o reales dicha tabla.

El no cumplir estos requisitos puede resultar en que el proyecto no se vea en su totalidad.

-Tabatha Acosta Pastrana.