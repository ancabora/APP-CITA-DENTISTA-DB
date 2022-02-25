DROP DATABASE IF EXISTS app_citas_dentista;
CREATE DATABASE app_citas_dentista
DEFAULT CHARACTER SET ='utf8mb4';
USE app_citas_dentista;

CREATE TABLE citas(
    id INT PRIMARY KEY AUTO_INCREMENT,
    paciente VARCHAR(100) NOT NULL,
    telefono VARCHAR(11) NOT NULL,
    email VARCHAR(99),
    
    fecha_cita DATETIME NOT NULL,
    observaciones VARCHAR(300) NULL,
    fecha_solicitud DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    --la fecha se modificara cadaa vez que la cambiemos y se actualizara
);
insert  INTO citas (
    paciente,telefono,email,fecha_cita,observaciones) VALUES 
    ('Anca','600481280','ancaovisamiruben@gmail.com','2022-02-22 19:00','preferible tarde'),
    ('Mario','600481280','ancaouben@gmail.com','2022-02-22 14:00','preferible mañana'),
    ('Genario','600481280','ancaoviamiruben@gmail.com','2022-02-22 15:00','preferible mañana'),
    ('Lupe','600481280','ancamiruben@gmail.com','2022-02-22 19:00','preferible tarde'),
    ('Milagros','600481280','ancamiruben@gmail.com','2022-02-22 12:00','preferible tarde');