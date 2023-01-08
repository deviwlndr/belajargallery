CREATE TABLE IF NOT EXISTS 'siswa' (
    'id' int(11) NOT NULL AUTO_INCREMENT,
    'nama' varchar(255) collate utf8mb4_general_ci NOT NULL,
    'foto' text COLLATE utf8mb4_general_ci NOT NULL,
    
)ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=100001 ;

INSERT INTO 'siswa' ('id', 'nama', 'foto')