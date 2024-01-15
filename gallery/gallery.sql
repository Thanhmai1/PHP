CREATE TABLE gallery (
                         idGallery INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
                         titleGallery VARCHAR(255) NOT NULL,
                         descGallery VARCHAR(255) NOT NULL,
                         imgFullNameGallery VARCHAR(255) NOT NULL,
                         orderGallery INT(11) NOT NULL
);

DROP TABLE gallery;