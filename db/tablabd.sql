create table alumnos_informatica(
    alum_id serial not null,
    alum_nombre varchar(70) not null,
    alum_apellido varchar(70) not null,
    alum_fecha_de_nacimiento varchar(70) not null,
    alum_telefono integer not null,
    alum_correo varchar(70) not null,
    primary key (alumnos_id)
);