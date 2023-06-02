DROP DATABASE IF EXISTS arca;
CREATE DATABASE arca CHARACTER SET utf8mb4;

USE arca;

CREATE TABLE clasificacion (
    id_clasificacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_clasificacion VARCHAR(50) NOT NULL
);

INSERT INTO clasificacion
VALUES (1, 'Mamíferos'),
       (2, 'Aves'),
       (3, 'Reptiles'),
       (4, 'Anfibios'),
       (5, 'Peces'),
       (6, 'Insectos');


CREATE TABLE alimentacion (
    id_alimentacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tipo_alimento VARCHAR(50) NOT NULL
);

INSERT INTO alimentacion (id_alimentacion, tipo_alimento)
VALUES (1, 'Carnívoro'),
       (2, 'Herbívoro'),
       (3, 'Omnívoro'),
       (4, 'Otro');

CREATE TABLE habitat (
    id_habitat INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_habitat VARCHAR(50) NOT NULL
);

INSERT INTO habitat 
VALUES (1, 'Terrestre'),
       (2, 'Acuático'),
       (3, 'Aéreo'),
       (4, 'Otro');


CREATE TABLE animal (
    id_animal INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_animal VARCHAR(50) NOT NULL,
    descripcion_animal VARCHAR(500) NOT NULL,
    id_clasificacion_id INT UNSIGNED NOT NULL,
    id_alimentacion_id INT UNSIGNED NOT NULL,
    id_habitat_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (id_clasificacion_id) REFERENCES clasificacion(id_clasificacion),
    FOREIGN KEY (id_alimentacion_id) REFERENCES alimentacion(id_alimentacion),
    FOREIGN KEY (id_habitat_id) REFERENCES habitat(id_habitat)
);

INSERT INTO animal 
VALUES 
(1, 'Tigre', 'El tigre es el felino más grande del mundo y es conocido por su impresionante pelaje rayado y su habilidad para cazar grandes presas', 2, 4, 3),
(2, 'Oso polar', 'El oso polar es un mamífero depredador que vive en el Ártico y se alimenta principalmente de focas', 2, 4, 2),
(3, 'Jirafa', 'La jirafa es un animal alto y elegante que vive en las sabanas africanas. Es el animal más alto del mundo', 2, 2, 3),
(4, 'Ballena azul', 'La ballena azul es el animal más grande del planeta. Vive en los océanos y se alimenta de krill', 2, 3, 1),
(5, 'Araña', 'Las arañas son artrópodos con ocho patas y colmillos venenosos. Son expertas cazadoras y tejen telas de araña para atrapar a sus presas', 1, 1, 4),
(6, 'Gorila', 'El gorila es un gran simio que vive en los bosques de África central. Son animales inteligentes y sociales', 2, 2, 4),
(7, 'Cebra', 'La cebra es un animal herbívoro que vive en las praderas africanas. Son conocidas por sus rayas distintivas', 2, 2, 3),
(8, 'Avestruz', 'El avestruz es un ave grande y no voladora que vive en las zonas áridas de África. Es el ave más grande del mundo', 2, 2, 2),
(9, 'Cocodrilo', 'El cocodrilo es un reptil depredador que vive en las zonas tropicales y subtropicales. Son expertos cazadores y tienen una mandíbula poderosa', 2, 3, 2),
(10, 'Elefante', 'El elefante es el animal terrestre más grande del mundo. Son conocidos por su gran tamaño, su inteligencia y su memoria', 2, 2, 3),
(11, 'Rana', 'Las ranas son anfibios que viven en los ríos, lagos y humedales. Son conocidas por su capacidad para saltar grandes distancias', 1, 1, 4),
(12, 'Pulpo', 'El pulpo es un molusco que vive en los océanos. Son conocidos por sus ocho brazos y su habilidad para cambiar de color', 1, 3, 1),
(13, 'Canguro', 'El canguro es un marsupial que vive en Australia. Son conocidos por su capacidad para saltar grandes distancias y por llevar a sus crías en una bolsa', 2, 2, 3),
(14, 'León africano', 'El león africano es una especie de mamífero carnívoro de la familia Felidae que habita en África. Es el segundo felino más grande después del tigre y su melena distintiva es una de sus características más reconocibles.', 2, 2, 3),
(15, 'Gorila oriental', 'El gorila oriental es una especie de primate que habita en las selvas de África central. Es uno de los primates más grandes del mundo y se encuentra en peligro de extinción debido a la caza y la pérdida de su hábitat natural.', 2, 1, 1),
(16, 'Panda rojo', 'El panda rojo, también conocido como panda pequeño, es una especie de mamífero que habita en las montañas del Himalaya y el sur de China. A pesar de su nombre, no está relacionado con el panda gigante y es más cercano a los mapaches.', 2, 3, 1),
(17, 'Orangután de Sumatra', 'El orangután de Sumatra es una especie de primate que habita en la isla de Sumatra, en Indonesia. Es uno de los primates más grandes del mundo y se encuentra en peligro crítico de extinción debido a la caza y la deforestación.', 2, 1, 1),
(18, 'Tiburón blanco', 'El tiburón blanco es una especie de tiburón que habita en las aguas templadas y tropicales de todo el mundo. Es uno de los mayores depredadores del océano y se alimenta de una variedad de peces y mamíferos marinos.', 2, 3, 4),
(19, 'Oso negro', 'El oso negro es una especie de mamífero omnívoro que habita en América del Norte. Es uno de los osos más comunes en Norteamérica y es conocido por su pelaje negro y su hocico pronunciado.', 2, 2, 3),
(20, 'Canguro rojo', 'El canguro rojo es una especie de marsupial que habita en Australia. Es el marsupial más grande del mundo y es conocido por sus patas traseras fuertes que les permiten saltar grandes distancias.', 2, 1, 1),
(21, 'Puma', 'El puma es un felino solitario y sigiloso que puede encontrarse en América, desde Canadá hasta el sur de Chile.', 3, 3, 3),
(22, 'Orangután', 'El orangután es un simio nativo de Asia que habita en los bosques tropicales de Indonesia y Malasia.', 2, 4, 4),
(23, 'Tiburón martillo', 'El tiburón martillo es un tiburón muy reconocible por su cabeza plana y en forma de T.', 4, 2, 1),
(24, 'Murciélago', 'Los murciélagos son mamíferos voladores que se alimentan de insectos y frutas.', 3, 2, 2),
(25, 'Ballena jorobada', 'La ballena jorobada es un mamífero marino que migra a lo largo de la costa de América, desde Alaska hasta América del Sur.', 4, 1, 1),
(26, 'Perezoso', 'El perezoso es un animal arborícola que se encuentra en América Central y del Sur.', 2, 4, 4),
(27, 'Rana arlequín', 'La rana arlequín es una especie de rana arbórea que se encuentra en América Central y del Sur.', 5, 2, 4),
(28, 'Lobo marino', 'El lobo marino es un mamífero marino que se encuentra en el Pacífico Oriental, desde Alaska hasta el sur de América del Sur.', 4, 1, 1),
(29, 'Cisne negro', 'El cisne negro es una especie de ave acuática nativa de Australia.', 1, 1, 4),
(30, 'Cocodrilo de agua salada', 'El cocodrilo de agua salada es el reptil más grande del mundo y se encuentra en Asia y Oceanía.', 3, 3, 4),
(31, 'Nutria', 'La nutria es un mamífero acuático que se encuentra en América del Norte, Central y del Sur.', 4, 2, 4),
(32, 'Elefante africano', 'El elefante africano es el animal terrestre más grande del mundo y se encuentra en África.', 2, 1, 4),
(33, 'Búho', 'Los búhos son aves rapaces nocturnas que se encuentran en todo el mundo, excepto en la Antártida.', 1, 2, 2),
(34, 'Oso panda', 'El oso panda es un mamífero nativo de China que se alimenta exclusivamente de bambú.', 2, 4, 4),
(35, 'León', 'El león es un felino que habita en África y en una pequeña zona de India.', 3, 3, 3),
(36, 'León Marino', 'El león marino es una especie de mamífero pinnípedo que habita en las costas de América del Norte, América del Sur, Australia, Nueva Zelanda y Sudáfrica.', 6, 3, 4),
(37, 'Búho', 'El búho es un ave rapaz nocturna que se encuentra en todo el mundo, aunque en menor medida en Oceanía y en la Antártida. Se caracteriza por su cabeza redonda y sus grandes ojos.', 1, 1, 4),
(38, 'Mamba Negra', 'La mamba negra es una serpiente venenosa originaria de África. Es conocida por ser una de las serpientes más venenosas y rápidas del mundo, y por su agresividad cuando se siente amenazada.', 3, 2, 2),
(39, 'Llama', 'La llama es un animal domesticado que se encuentra en la región andina de Sudamérica. Se utiliza como animal de carga y su lana se emplea para la confección de ropa y tejidos.', 5, 3, 4),
(40, 'Puercoespín', 'El puercoespín es un animal roedor que se encuentra en diversas partes del mundo. Se caracteriza por su piel cubierta de espinas y su tendencia a enrollarse en una bola cuando se siente amenazado.', 2, 1, 4),
(41, 'Gorila', 'El gorila es un primate originario de África, que habita en los bosques tropicales y subtropicales. Es conocido por ser uno de los primates más grandes y fuertes, y por su carácter tranquilo y social.', 6, 3, 3),
(42, 'Langosta', 'La langosta es un crustáceo que vive en los océanos de todo el mundo. Es un alimento apreciado en diversas culturas culinarias y se pesca con fines comerciales.', 4, 2, 1),
(43, 'Cebra', 'La cebra es un animal herbívoro que se encuentra en África. Se caracteriza por su pelaje a rayas blancas y negras, que le permite camuflarse en la sabana y evitar a los depredadores.', 5, 3, 3),
(44, 'Cocodrilo', 'El cocodrilo es un reptil que se encuentra en todo el mundo en climas tropicales y subtropicales. Es un depredador formidable y temido por su tamaño y su ferocidad.', 3, 2, 4),
(45, 'Perro', 'El perro es un animal doméstico que se encuentra en todo el mundo. Se caracteriza por su lealtad y su capacidad para aprender y adaptarse a diferentes situaciones.', 6, 3, 4),
(46, 'Caballo', 'El caballo es un animal doméstico que se encuentra en todo el mundo. Se utiliza como animal de carga, para fines deportivos y recreativos, y como animal de compañía.', 5, 3, 4),
(47, 'Puma', 'El puma es un mamífero depredador de tamaño mediano con una cabeza redondeada, cuerpo esbelto y una cola larga', 3, 4, 3),
(48, 'Rana', 'La rana es un anfibio caracterizado por sus patas traseras largas y musculosas adaptadas para el salto.', 5, 2, 2),
(49, 'Gorila', 'El gorila es un primate que vive en las selvas de África. Es uno de los animales más grandes y fuertes de la Tierra', 3, 4, 3),
(50, 'Tucán', 'El tucán es un ave caracterizada por su pico grande y colorido, que le sirve para atraer a las hembras y regular su temperatura corporal', 6, 3, 2);



