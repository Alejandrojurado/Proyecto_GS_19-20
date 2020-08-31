-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2020 a las 17:50:50
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `IdContact` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Lastname` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Text` text COLLATE utf8_spanish_ci NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Price` decimal(20,2) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `idSupplier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`idProduct`, `Name`, `Price`, `Descripcion`, `image`, `Code`, `type`, `stock`, `idSupplier`) VALUES
(1, 'URBAN TACTICAL PANTS', '174.00', 'La construcción extremadamente duradera, la comodidad inmejorable, la configuración funcional del bolsillo y la protección confiable de las rodillas hacen de estos pantalones tácticos que le brindan una ventaja para cualquier terreno o actividad.', 'https://ufpro.com/storage/app/media/Product%20Images/Pants/P-40%20Urban/Product%20images/Kangaroo/thumb/1920x1920.crop/p40-urban-pants-kangaroo-hero-2019-610.jpg', 'pqukj', 'uniformes', 50, NULL),
(2, 'WARRIOR ASSAULT DCS ', '139.96', ' El DCS (Dynamic Combat System) es un portaplacas con lados extraíbles. Puede contener Nexus Soft Armor Front y Back y en bolsas laterales ajustables, el DCS también es capaz de sostener grandes placas balísticas de 10 \"x 12\" delante y detrás y placas laterales de 6 \"x 8\"', 'https://www.replicantairsoft.com/webshop/1385-large_default/warrior-dcs-special-forces-plate-carrier-base-only-multicam-inicio-warrior-assault-systems.jpg', 'SVefc', 'Chaleco', 10, NULL),
(3, 'CAGE PLATE CARRIER(CPC)', '392.20', 'El CAGE PLATE CARRIER ™ (CPC ™) ofrece una comodidad insuperable y soporte de carga en una configuración de soporte de placa de perfil bajo. Es liberable y acepta inserciones de armadura blandas y duras (se venden por separado). Cuando se combina con LOW PROFILE BLAST BELT ™ , se convierte en un sistema de carro de carga y blindaje extremadamente eficiente y versátil. Diseñado desde cero para aprovechar al máximo nuestro revolucionario sistema CPC ™ EXTENDABLE STKSS ™ que transfiere el peso del chaleco a las caderas del usuario. El fajín incorporado de CPC ™ está diseñado para aceptar nuestros paneles de blindaje blando y placas de 6 ”x6”. LAS BOLSAS PARA PLACAS CPC ™ (se venden por separado) se estiran para adaptarse a diferentes espesores de placa y tienen bolsas de administración y cargador integradas. Patentado, consulte WWW.LWPATENTS.COM . \r\n', 'https://www.cryeprecision.com/images/items/Fullsize/CPCD0102LG0-A.png', '6zk4', 'Chaleco', 20, NULL),
(4, 'SENSHI BELT', '193.00', 'El cinturón SENSHI de edición especial de  Ronin Tactic  es el cinturón de pistola táctico utilizado por el equipo Ronin. Hecho con un material de camuflaje tejido de nailon con ribete negro, este cinturón proporciona al tirador una plataforma más rígida. \r\n\r\n​\r\n\r\nEl cinturón SENSHI fue diseñado y desarrollado en el campo de batalla por soldados de operaciones especiales, y es un sistema táctico de dos capas liviano y cómodo que se adapta a una amplia gama de fundas y bolsas de accesorios. \r\n\r\nEste sistema de dos capas asegura una plataforma de tiro seguro mediante la combinación de una cinta de gancho y bucle sujetador atalaje interior con una cinta de transporte de carga táctico. La capa exterior de carga táctica permite 2 filas de correas de 1/2 ”, lo que permite al tirador agregar una variedad de accesorios MOLLE. El cinturón cuenta con una hebilla Cobra de 2 ”de nuevo diseño con un\" anillo en D \"adjunto, que garantiza más espacio MOLLE para el tirador. \r\n\r\n', 'https://www.ronintactics.com/uploads/3/0/8/0/30800829/s311809797414925210_p27_i7_w160.jpeg', 'xrv2b', 'Cinturon', 10, NULL),
(5, 'JPC 2.0™', '241.00', 'El JPC 2.0 ™ es un chaleco blindado ligero y mínimo diseñado para máxima movilidad, ahorro de peso y capacidad de empaque. Con poco más de una libra para todo el transportador, el JPC 2.0 ™ ofrece una variedad de opciones de configuración para satisfacer las necesidades del operador en términos de protección, modularidad y comodidad. Todas las solapas delanteras desmontables AVS ™ son compatibles (se venden por separado). Cuenta con nuestro sistema SKELETAL ™ CUMMERBUND con nuestro sistema de SUJECIÓN integrado patentado que permite que las bolsas se MONTEN tanto en el interior como en el exterior del fajín. Este sistema elimina el peso y el volumen innecesarios al tiempo que mejora la ventilación general. Patentado, consulte WWW.LWPATENTS.COM . ', 'https://www.cryeprecision.com/images/items/Fullsize/BLC06602LG0-B.png', 'C5g4t', 'Chaleco', 2, NULL),
(6, 'SBR CARRYING BAG®', '124.00', 'Al dirigirse a la gama, es esencial poder llevar cómodamente su SBR o SMG, junto con todos los artículos adicionales. Nuestra bolsa de transporte SBR es perfecta, ya que ha sido diseñada especialmente para adaptarse a varios modelos de SMG o carabinas cortas como la AKS74U o una AR con cañón de 10,5 ”. El interior está cubierto con una suave tela de terciopelo para proteger su preciosa arma de los arañazos, mientras que un sistema de estabilización basado en tiras de velcro evita que el arma se mueva. Dos bolsillos externos pueden contener todos los elementos adicionales necesarios en la cocina, como cargadores de repuesto, protección para los ojos y los oídos, junto con municiones.', 'https://www.helikon-tex.com/media/catalog/product/cache/4/image/500x/17f82f742ffe127f42dca9de82fb58b1/t/b/tb-scb-cd-12.jpg', 'jvXGj7', 'Mochila', 20, NULL),
(7, 'DUMP POUCH® ', '25.00', 'COMPETITION Dump Pouch® es una de las partes principales del set COMPETITION. La bolsa se fabricó específicamente para las competencias de tiro dinámico para los cargadores vacíos. Se adapta fácilmente a varios cargadores de carabina o pistola. El cuello rígido ajustable con cordón facilita la colocación de los cargadores en situaciones de estrés. El fondo de malla evita la acumulación de arena y ensucia la bolsa. La bolsa es lo suficientemente grande como para usarla también como bolsa de utilidad improvisada para su protección auditiva, guantes, etc. La bolsa se puede montar mediante el sistema MOLLE / PALS o se puede montar directamente en el cinturón de hasta 50 mm de ancho.', 'https://www.helikon-tex.com/media/catalog/product/cache/4/image/500x/17f82f742ffe127f42dca9de82fb58b1/m/o/mo-cdp-cd-11_1.jpg', '3TPGx', 'Pouch', 20, NULL),
(8, 'TRAINING MINI RIG', '85.00', 'Training Mini Rig® fue diseñado para personas que pasan mucho tiempo en el campo de tiro: instructores, entusiastas del tiro, tiradores competitivos. El diseño minimalista y simétrico del Training Mini Rig® se inspiró en uno de los instructores de tiro táctico más famosos. Nuestro equipo acomodaría una carga básica de cargadores, munición adicional, multiherramienta, linterna, etc., todo lo que necesita para una sesión de entrenamiento avanzada y seria.', 'https://shermansurvival.com/83225-thickbox_default/helikon-tex-training-mini-rig-tmr-adaptive-verde.jpg', 'G7cRW', 'Chaleco', 6, NULL),
(9, 'GUANTES ALL ROUND FIT', '21.00', 'Los All Round Tactical Gloves® son la mejor opción para cualquiera que busque comodidad y un agarre de arma confiable. Fueron diseñados para garantizar una sensación perfecta del gatillo y, gracias a la elección adecuada de la tela, una gran transpirabilidad y comodidad de uso. La parte interior de la mano estaba hecha de cuero sintético para un uso prolongado. El puño se cierra con velcro, con gancho adicional de lazo de paracord. A lo largo del pulgar hay un parche de microfibra que se puede usar para limpiar las gafas de tiro o simplemente limpiar el sudor de la frente. Hay un parche adicional compatible con pantalla táctil en la punta del dedo medio.', 'https://images-na.ssl-images-amazon.com/images/I/51OPvBX06pL._AC_.jpg', 'jeHaV', 'Guante', 20, NULL),
(10, 'G4 HOT WEATHER COMBAT SHIRT™', '184.00', 'Nuestra camiseta de combate más ligera y transpirable. Diseñada específicamente para entornos áridos, nuestra ropa de combate para climas cálidos de próxima generación es extremadamente liviana y está diseñada para usarse debajo de un chaleco antibalas y cuenta con una tela ripstop de nailon de secado rápido extremadamente liviana con MCS Blocker ™ para eliminar la humedad y brindar protección UV. El jersey de malla Polartec® Power Dry® de secado rápido y que absorbe la humedad con fibra X-Static antimicrobiana te mantiene fresco y seco. El ripstop de nailon extremadamente ligero refuerza las zonas de mayor desgaste. El cuello con cremallera mínima permite ponerse y quitarse fácilmente. Diseño mínimo general para reducir el peso y la carga térmica. Fabricado en los Estados Unidos con materiales estadounidenses. WWW.LWPATENTS.COM', 'https://www.cryeprecision.com/images/items/Fullsize/APRCSZ02LGR.png', '30jjt', 'uniforme', 10, NULL),
(11, 'G4 HOT WEATHER COMBAT PANT™', '285.00', 'Nuestro pantalón de combate más ligero y transpirable. Nuestra ropa de combate para climas cálidos de próxima generación está diseñada específicamente para entornos áridos y cuenta con una tela ripstop de nailon extremadamente liviana y de secado rápido con MCS Blocker ™ para eliminar la humedad y brindar protección UV. Dos diferentes tejidos ripstop de alta resistencia brindan transpirabilidad, estiramiento y refuerzo en áreas de alto desgaste. Bolsillos forrados en malla para un flujo de aire máximo y tiempos de secado acelerados. Diseñado para usar con nuestras RODILLERAS DE COMBATE SERIE AIRFLEX ™ extraíbles (se venden por separado). Diseño mínimo general para reducir el peso y la carga térmica. Fabricado en los Estados Unidos con materiales estadounidenses. WWW.LWPATENTS.COM', 'https://www.cryeprecision.com/images/items/Fullsize/APRCPZ0232R.png', 'hh435', 'Uniforme', 9, NULL),
(12, 'G3 LAC™ COMBAT SHIRT', '135.10', 'La CAMISETA G3 LAC ™ COMBAT SHIRT se basa en el mismo diseño de nuestra G3 COMBAT SHIRT ™ pero sin los bolsillos de las mangas, lo que proporciona un aspecto más limpio y profesional adaptado a las necesidades de los agentes del orden. Diseñado específicamente para llevarlo debajo de la armadura corporal, te mantiene fresco con tejido de torso DRIFIRE ® resistente a las llamas, ligero, de alto rendimiento y mangas de polialgodón ripstop. Diseñado para usar con nuestras CODOS AIRFLEX ™ extraíbles  (se venden por separado). La CAMISA DE COMBATE G3 LAC ™ cuenta con un cuello con cremallera que permite ponerse y quitarse fácilmente mientras mantiene las eslingas, correas y latón fuera del cuello. Patentado, consulte WWW.LWPATENTS.COM . Fabricado en los Estados Unidos con materiales estadounidenses.  ', 'https://www.cryeprecision.com/images/items/Fullsize/APRCSS30LGR.png', 'klg50', 'Uniforme', 60, NULL),
(13, 'G3 LAC™ COMBAT PANT', '230.90', 'El G3 LAC ™ COMBAT PANT se basa en el mismo diseño de nuestro G3 COMBAT PANT ™ pero sin los bolsillos de las pantorrillas, lo que proporciona un aspecto más limpio y profesional adaptado a las necesidades de los agentes del orden. Estos pantalones probados en combate tienen un tamaño en incrementos de cintura de 2 ”y varios largos para un ajuste perfecto. Cuenta con una pretina acolchada única y paneles elásticos de alta movilidad en la rodilla y la espalda baja. 8 bolsillos. Diseñado para usar con nuestras RODILLERAS AIRFLEX ™ COMBAT patentadas y removibles  (se venden por separado). La tela base es de polialgodón ripstop con acentos duraderos de tejido elástico en 4 direcciones. Bragueta con cremallera con cierre de la marca VELCRO ® . Característica única de cintura ajustable de perfil bajo. Patentado, consulte WWW.LWPATENTS.COM . Fabricado en los Estados Unidos con materiales estadounidenses. ', 'https://www.cryeprecision.com/images/items/Fullsize/APRCPS3032R.png', 'p4p3t', 'Uniforme', 9, NULL),
(14, 'G3 WEATHER COMBAT PANT™', '413.40', 'Nuestro G3 ALL WEATHER COMBAT PANT ™ se basa en el mismo diseño sin concesiones de nuestro G3 COMBAT PANT ™, pero está construido con una tela tejida elástica en 4 direcciones tratada con Nano STX ™ para una resistencia climática extrema. Estos pantalones probados en combate tienen un tamaño en incrementos de cintura de 2 \"y varios largos para un ajuste perfecto. Presenta el mismo diseño de 10 bolsillos que nuestro G3 COMBAT PANT ™ . Diseñado para usar con nuestras RODILLERAS AIRFLEX ™ COMBAT extraíbles patentadas  (se venden por separado) . Bragueta con cremallera con cierre de la marca VELCRO ® . Característica única de cintura ajustable de perfil bajo. Patentado, visite WWW.LWPATENTS.COM . Fabricado en los EE.', 'https://www.cryeprecision.com/images/items/Fullsize/APRCPF0232R-A.png', 'ak47m', 'Uniforme', 60, NULL),
(15, 'LVS™ OVERT COVER', '97.00', 'La CUBIERTA OVERT de LVS ™ optimiza el uso de LVS ™ encima de la ropa. Hay varios colores disponibles y ofrece amplias áreas de VELCRO ®  para la identificación de la agencia, además permite un lavado fácil y puede aceptar placas de rifle sin dejar de tener un perfil extremadamente bajo. Para una integración de placa más estable y ajustable, sugerimos agregar el SOPORTE DE PLACAS LVS ™ dentro de la cubierta. Esta funda se combina mejor con placas ocultables. No se recomiendan placas de más de ¾ ”de espesor. Fabricado en los Estados Unidos con materiales estadounidenses.', 'https://www.cryeprecision.com/images/items/Fullsize/LVSCVC00MD0-B.png', 'tt345', 'Chaleco', 10, NULL),
(16, 'SKULLCAP ™', '20.00', 'La SKULLCAP ™ es una gorra de 3 paneles ajustada, cortada para una máxima cobertura y conciencia de la situación. Mantiene sus oídos calientes y no bloquea su visión periférica. Hecho de una tela personalizada que permite MultiCam ® para ser impreso directamente sobre el vellón, a mediados de este peso de poliéster / spandex bloques de mezcla de viento y retiene el calor mientras se estira para adaptarse cómodamente a la mayoría de los jefes. Lo suficientemente ligero como para caber debajo de un casco, pero lo suficientemente cálido como para llevarlo solo. Talla única para todos. Fabricado en los Estados Unidos con materiales estadounidenses.', 'https://www.cryeprecision.com/images/items/Fullsize/ACCHS102000.png', 'pot68', 'Gorras', 90, NULL),
(17, 'SHOOTER\'S CAP ™', '30.00', 'Nuestra versión de la gorra de béisbol clásica, con algunas sutiles diferencias. Sin remaches de metal en la parte superior. La parte inferior de la visera es un material receptivo de gancho de la marca VELCRO ® negro . Esta versión cuenta con un panel de lazo de la marca VELCRO ® en la parte delantera. Cumple con Berry. Talla única para todos. Fabricado en los Estados Unidos con materiales estadounidenses.', 'https://www.cryeprecision.com/images/items/Fullsize/APRBC202000.png', 'ghj50', 'Gorras', 10, NULL),
(18, 'AIRFLEX™ IMPACT ', '49.00', 'LAS RODILLERAS AIRFLEX ™ IMPACT COMBAT son la última realización de nuestro sistema integrado de protección de articulaciones. Ofrecen mayor protección contra impactos, comodidad y flexibilidad al incorporar espuma de doble densidad, una estructura de tapa absorbente de impactos única y un área de sujeción VELCRO® ampliada. Estas almohadillas superan los requisitos de protección contra impactos de la norma de prueba EN14404. Estas almohadillas están diseñadas específicamente para integrarse con todos los estilos de nuestros  COMBAT PANTS ™ . Fabricado en los Estados Unidos con materiales estadounidenses. WWW.LWPATENTS.COM', 'https://www.cryeprecision.com/images/items/Fullsize/PADKC500000-A.png', 'kñlko', 'Protecciones', 10, NULL),
(19, 'RANGE BELT™', '134.00', 'El Crye Precision RANGE BELT ™ es una plataforma estable y cómoda que funciona muy bien como cinturón de trabajo / pistola / equipo; flexible para mayor comodidad pero lo suficientemente resistente para soportar una funda y otros equipos pesados. Úselo solo, sobre un cinturón interior de VELCRO ® , o úselo como un inserto en nuestro MRB ™ .', 'https://www.cryeprecision.com/images/items/Fullsize/MRBIB202LG0.png', 'p34t', 'Cinturones', 10, NULL),
(20, 'AVS™ 1000 PACK', '256.10', 'El AVS ™ 1000 PACK es un paquete de asalto liviano y aerodinámico diseñado para brindar al usuario una variedad de opciones de acceso y conexión. Puede configurarse como un paquete independiente, un reemplazo de bolsa de placa trasera o adjuntarse directamente al portaplacas (o prácticamente cualquier chaleco) para permitir un acceso rápido sin correas de paquete redundantes. Fabricado en los Estados Unidos con materiales estadounidenses.', 'https://www.cryeprecision.com/images/items/Fullsize/POUBP102000.png', 'po56', 'Protecciones', 20, NULL),
(21, 'GP POUCH MARITIME', '61.00', 'Menos bolsas, más opciones. Hemos creado un sistema de bolsa simple y liviano que maneja la gran mayoría de todas las tareas de transporte de carga. Todas las   bolsas SPS ™ tienen  AVS ™ , MOLLE y funciones de sujeción de cinturón integradas. Fabricadas en los EE. UU. Con materiales de EE. UU.NOTA: LOS ARTÍCULOS MARÍTIMOS SON \"HECHOS A PEDIDO\" ÚNICAMENTE. NO MANTENDREMOS EXISTENCIAS DE ESTOS ARTÍCULOS, PERO LOS PRODUCIREMOS DE FORMA INTERMITENTE DURANTE TODO EL AÑO SEGÚN SE SOLICITEN. TENGA EN CUENTA QUE SE APLICARÁ UN PLAZO MÍNIMO DE 12 SEMANAS.', 'https://www.cryeprecision.com/images/items/Fullsize/MPS07002000-D.png', 'pty57', 'Pouch', 20, NULL),
(22, 'FRAG POUCH MARITIME', '41.00', 'Menos bolsas, más opciones. Hemos creado un sistema de bolsa simple y liviano que maneja la gran mayoría de todas las tareas de transporte de carga. Todas las bolsas SPS ™ tienen AVS ™ , MOLLE y funciones de sujeción de cinturón integradas. Fabricadas en los EE. UU. Con materiales de EE. UU.', 'https://www.cryeprecision.com/images/items/Fullsize/MPS01302000.png', '69poi', 'Pouch', 20, NULL),
(23, 'AIRFRAME™ HELMET', '1092.00', 'El casco balístico AirFrame ™ establece los estándares en protección, comodidad y modularidad. Los cascos AirFrame ™ completos pesan menos que los cascos completos ACH 2002 y, al mismo tiempo, proporcionan más área de cobertura. El AirFrame ™ fue desarrollado con el mandato de reducir drásticamente el peso de la cabeza y superar las amenazas comunes de fragmentación. Un CASCO AIRFRAME ™ mediano completo pesa solo 2.30 libras y el grande pesa solo 2.55 libras. El exclusivo diseño de carcasa superpuesta del AirFrame ™ crea una ventilación integrada que proporciona enfriamiento pasivo y puede reducir los efectos dañinos de las ondas expansivas explosivas. Cada casco AIRFRAME ™ cuenta con un Ops-Core ®Sistema de retención H-Nape Head-Loc ™ para una estabilidad, comodidad y facilidad de ajuste incomparables. Armar el AirFrame ™ con protección balística para los oídos o la cara es sencillo y rápido. Todos los cascos y los componentes son compatibles con los sistemas comunes de oído-Pro como Peltors ® y Sordins ® . Patentado, consulte WWW.LWPATENTS.COM . Fabricado en los Estados Unidos con materiales estadounidenses.', 'https://www.cryeprecision.com/images/items/FullSize/HLMM0106LG0.png', 'po45t', 'Cascos', 20, NULL),
(24, 'First Responder Guardian Carrier', '167.00', 'Portaplacas modular\r\nCincha modular en la parte delantera y trasera\r\nMango de arrastre reforzado\r\nUna talla le queda a la mayoría\r\nCorreas de hombro ajustables acolchadas\r\nCorreas laterales ajustables con liberación lateral de alta resistencia para ponerse y quitarse rápidamente\r\nDiseñado para adaptarse a placas Med ESAPI 10x12 y Lg ESAPI 10x13.25\r\nPanel de bucle en la parte delantera y trasera para identificación de LE / First Responder\r\nParches de identificación: POLICE, SHERIFF, EMT, etc.disponibles a pedido\r\nPóngase en contacto con Sales@lbtinc.com para comprar parches de identificación', 'https://cdn.shopify.com/s/files/1/2953/0836/products/LBT-6094FRG-1_Medium_deleted_on_2017-01-07_at_18-01-09_480x.jpg?v=1534352788', 'pt6yp', 'Chaleco', 20, NULL),
(25, 'PVS 14', '3270.00', 'El PVS-14 Multi-Propósito monocular de visión nocturna ha sido diseñado para ofrecer la forma ideal para ver todo en la noche. Hoy en día hay más unidades PVS-14 actualmente desplegados en los ejércitos de la OTAN que cualquier otro dispositivo de visión nocturna. El  PVS-14 fue el primer multi-uso monocular de bienes, lo que le permite cumplir con una gran variedad de tareas militares. También es una de las unidades de visión nocturna más populares para hacer cumplir la ley. El PVS-14 3ª monocular de visión nocturna utiliza el mismo chasis, y su diseño batalla-probado es ligero, resistente y tiene óptica sobresaliente. Con el control de ganancia variable de serie, este NV monocular se puede configurar en cualquiera de Gen 3 variantes, y es compatible con una gran cantidad de accesorios que le permite ser de mano, cabeza / casco montado, arma o monta la cámara. Diseñado para las operaciones más exigentes de la noche de aplicación militar o de la ley. Es uno de los mejores sistemas disponibles.', 'https://nightvisionhome.com/wp-content/uploads/2015/04/PVS14-01.jpg', 'anv14', 'Otros', 10, NULL),
(26, 'QUEST 4D 3 GTX', '200.00', 'La clave de la QUEST 4D 3 GTX es la comodidad al caminar, con tecnologías que reducen la fatiga a lo largo de tus rutas de trekking. Ligera, amortiguada y con tecnología adaptada de las zapatillas de running, pero con la sujeción suficiente para el excursionismo, esta bota te ayuda a llegar al siguiente lugar de acampada con mayor comodidad en los pies.', 'https://www.salomon.com/sites/default/files/products-images/450x450-G/quest-4d-3-gtx__L40944300.jpg', 'qu20t', 'Botas', 10, NULL),
(27, 'OPERATOR AF SINCE 1776', '18.00', 'Chasis súper suave, hilado en anillo 52% algodón, 48% poliéster\r\n- Gráfico serigrafiado\r\n- Diseño y desarrollo de veteranos de EE. UU. -\r\nGarantía de materiales y mano de obra de 1 año', 'https://cdn.shopify.com/s/files/1/1800/9299/products/Tax-Stamp-Tee-Navy-Heather-Front.jpg?v=1590979217', 'vkto3', 'Uniformes', 10, NULL),
(28, 'Leatherman OHT', '129.00', 'La Leatherman OHT se puede manejar 100% con una sola mano. Incluye unos alicates con resorte, cortador de cinturones, una llave para depósitos de oxígeno:\r\n\r\nHasta 16 usos. Todas estas 16 herramientas están pensadas para momentos de urgencia y emergencias, fácilmente accesible con una sola mano, tanto si eres zurdo con la mano izquierda como si eres diestro con la mano derecha.\r\nTodas las herramientas de la Leatherman OHT, cuentan con un bloqueo o seguro muy útil para ayudarte con la precisión de tu trabajo y solo con la ayuda de una sola mano. Además, las cachas a través de su diseño grabado te permiten reconocer cada herramienta. Está pensada para maniobras tácticas de los cuerpos de seguridad como policías y militares.\r\n\r\n', 'https://leatherman.es/media/catalog/product/cache/74c1057f7991b4edb2bc7bdaa94de933/8/3/831639_1.jpg', 'ohtr40', 'Herramientas', 10, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roluser`
--

CREATE TABLE `roluser` (
  `IdRol` int(11) NOT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `IdUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `IdSales` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) DEFAULT NULL,
  `PaypalDatos` text DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Correo` varchar(5000) DEFAULT NULL,
  `Total` decimal(60,2) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salesdetail`
--

CREATE TABLE `salesdetail` (
  `IdSalesDetail` int(11) NOT NULL,
  `IdSale` int(11) DEFAULT NULL,
  `IdProduct` int(11) DEFAULT NULL,
  `Price` decimal(20,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Discharged` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` int(11) NOT NULL,
  `direction` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `cif` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `direction` varchar(50) NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 NOT NULL,
  `stage` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `active` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `email`, `password`, `name`, `lastname`, `postalcode`, `direction`, `city`, `stage`, `phonenumber`, `dni`, `active`) VALUES
(1, 'eslayx2@gmail.com', '$2y$10$tU5fanmJD1NF7rTwe5lbU.WE/5YP2N1NsUwgXen78W2uRmCM/nEP6', 'Alejandro José', 'Reyes', 'Calle Pintor Victorio Manchón nº2 blq2 p1 5ºD', '649901426', '45315365y', 'Melilla', 'Melilla', '52005', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`IdContact`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `FK` (`idSupplier`);

--
-- Indices de la tabla `roluser`
--
ALTER TABLE `roluser`
  ADD PRIMARY KEY (`IdRol`),
  ADD KEY `FK` (`IdUser`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`IdSales`);

--
-- Indices de la tabla `salesdetail`
--
ALTER TABLE `salesdetail`
  ADD PRIMARY KEY (`IdSalesDetail`),
  ADD KEY `IdSale` (`IdSale`),
  ADD KEY `IdProduct` (`IdProduct`);

--
-- Indices de la tabla `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `IdContact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `roluser`
--
ALTER TABLE `roluser`
  MODIFY `IdRol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `IdSales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salesdetail`
--
ALTER TABLE `salesdetail`
  MODIFY `IdSalesDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de la tabla `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idSupplier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `roluser`
--
ALTER TABLE `roluser`
  ADD CONSTRAINT `FK_roluser_users` FOREIGN KEY (`IdUser`) REFERENCES `users` (`idUser`);

--
-- Filtros para la tabla `salesdetail`
--
ALTER TABLE `salesdetail`
  ADD CONSTRAINT `salesdetail_ibfk_1` FOREIGN KEY (`IdSale`) REFERENCES `sales` (`IdSales`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salesdetail_ibfk_2` FOREIGN KEY (`IdProduct`) REFERENCES `product` (`idProduct`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
