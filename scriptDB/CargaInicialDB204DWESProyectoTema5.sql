use DB204DWESProyectoTema5;

insert into T02_Departamento values('PES', 'Pescaderia', now(), 100.34, null),
('CHA', 'Charcuteria', now(), 2500.46, null),
('MAR', 'Marketing', now(), 12.56, null),
('LIM', 'Limpieza', now(), 3000.6, null),
('VER', 'Verduleria', '2024-07-19 12:00:00', 12000.56, '2024-11-02 14:00:00');

insert into T01_Usuario values('admin', SHA2('adminpaso', 256), 'usuario admin', 0, null, 'perfil', null),
('alex', SHA2('alexpaso', 256), 'usuario alex', 0, null, 'perfil', null),
('victor', SHA2('victorpaso', 256), 'usuario victor', 0, null, 'perfil', null),
('luis', SHA2('luispaso', 256), 'usuario luis', 0, null, 'perfil', null),
('jesus', SHA2('jesuspaso', 256), 'usuario jesus', 0, null, 'perfil', null),

('antonio', SHA2('antoniopaso', 256), 'usuario antonio', 0, null, 'perfil', null),
('ivan', SHA2('ivanpaso', 256), 'usuario ivan', 0, null, 'perfil', null),
('heraclio', SHA2('heracliopaso', 256), 'usuario heraclio', 0, null, 'perfil', null),
('amor', SHA2('amorpaso', 256), 'usuario amor', 0, null, 'perfil', null),
('gisela', SHA2('giselapaso', 256), 'usuario gisela', 0, null, 'perfil', null);
