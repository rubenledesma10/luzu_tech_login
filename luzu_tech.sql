-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2023 a las 19:55:33
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `luzu_tech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celulares`
--

CREATE TABLE `celulares` (
  `id_celular` int(11) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `celulares`
--

INSERT INTO `celulares` (`id_celular`, `categoria`, `marca`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Telefonía - Celulares', 'SAMSUNG ', 'GALAXY A13', 'Celular de 6.6\" FHD+ (1080x2408) PLS TFT LCD. Procesador Octa Core (2.0GHz). Capacidad 128 Gb / RAM 4 Gb. Camara principal 50 + 5 + 2 + 2 Mp. F1.8, F2.2, F2.4, F2.4. Zoom digital 10x. Camara frontal 8 Mp. F2.2. Flash. Lector de tarjeta Micro SD. USB Type C 2.0. GPS, Glonass, Galileo, QZSS. Entrada para auricular de 3.5mm. Wi Fi 802.11 a/b/g/n/ac 2.4+5GHz. Bluetooth 5.0. Sistema operativo Android. Navegador Chrome. SIM 1 + Micro SD. Sensores: acelerometro, huella digital, geomagnetico, luz, proximidad. Bateria 5000 mAh.', 78000),
(2, 'Telefonía - Celulares', 'SAMSUNG ', 'GALAXY A23', 'Celular. Pantalla: 6.6\" PLS TFT LCD 1080 x 2408 (FHD+). Procesador: Octa-Core. Almacenamiento: 128 Gb. Ram: 4Gb. Camara: 50.0 MP + 5.0 MP + 2.0 MP + 2.0 MP. Camara Frontal: 8 MP. Sistema Operativo: Android. WIFI. Bluetooth. Lector de tarjetas MicroSD. NFC. USB. GPS. Graba y reproduce videos. Navegador Chrome. Bateria: 5000 mAh.', 102000),
(3, 'Telefonía - Celulares', 'MOTOROLA ', 'MOTO E20', 'Celular de 6.5\" IPS (720x1600) HD+, 269ppi, notched, 60Hz. Relacion de aspecto 20:9 Procesador Octa core 1.6 GHz, Unisoc T606. Sistema operativo Android go 11. Almacenamiento 32Gb Expandible hasta: TBC, admite unificacion de memorias / RAM 2Gb LPDDR4x eMCP. Tarjeta nano SIM. Bateria 4000mAh. Carga rapida 10w. Autonomia 40hs. Camara principal 13 + 2Mp. Frontal 5Mp. USB tipo C 2.0. Wi Fi. Bluetooth 4.2. Entrada Jack de 3.5mm. Sensores: acelerometro, sensor de proximidad, huella dactilar, luz ambiente. Boton de asistente de google.', 38000),
(4, 'Telefonía - Celulares', 'MOTOROLA ', 'MOTO G52', 'Celular de 6.55\" pOLED. Procesador Qualcomm Snapdragon 680, Octa core, 2.4GHz. Resolucion FHD+ (1080 x 2400). Sistema operativo Android 12. Camara principal: 50MP (74.26) F1.8, Gran angular y profundidad: 8MP (118) F2.2, Macro: 2MP (78) F2.4. Zoom digital (8x fotos / 8x video). Flash LED / Camara frontal 16MP (74.45) F2.45. Flash frontal backlight. Capacidad 128 Gb (expandible hasta 1Tb, Micro SD) / RAM 6 Gb. Sensores: Acelerometro, sensor de proximidad, brujula(campo magnetico), giroscopio, huella dactilar, luz ambiente, desbloqueo facial. Wi Fi 802.11 a/b/g/n/ac/k/v/r/u - WIFI5 (bandas 2.4 y 5 GHz). Bluetooth 5.0. NFC. GPS, AGPS, GLONASS, Galileo. USB C 2.0. Entrada de audio de 3.5mm. Vidrio de pantalla Gorilla Glass 3. Capacidad de bateria 5000 mAh. Incluye Equipo, Cubierta protectora, Herramienta de extraccion de SIM, Manual de usuario, Manual de informacion legal, Cable de datos USB-C, Cargador 33W.', 76000),
(5, 'Telefonía - Celulares', 'APPLE', 'IPHONE 13', 'Celular de 6.1\" OLED. Procesador Chip A15 Bionic. Almacenamiento 128Gb / RAM 4 Gb. Camara frontal 12Mp / trasera 12Mp. NFC. USB-C. Bluetooth 5.0. Sistema operativo iOS 15. WiFi 802.11ax (6tagen.) con MIMO2x2. Radio. Graba y reproduce video. GPS. Navegador: Safari. Un gran salto en la duracion de la bateria. Pantalla Super Retina XDR. Diseno resistente con ceramic shield. Mejores fotos y videos con poca luz. Modo cine con baja profundidad de campo y cambios de enfoque automaticos.', 575000),
(6, 'Telefonía - Celulares', 'APPLE', 'IPHONE 13 MINI', 'Celular de 5.4\" OLED. Procesador Chip A15 Bionic. Almacenamiento 128Gb / RAM 4 Gb. Camara frontal 12Mp / trasera 12Mp. NFC. USB-C. Bluetooth 5.0. Sistema operativo iOS 15. WiFi 802.11ax (6tagen.) con MIMO2x2. Radio. Graba y reproduce video. GPS. Navegador Safari. Un gran salto en la duracion de la bateria. Pantalla Super Retina XDR. Diseno resistente con ceramic shield. Mejores fotos y videos con poca luz. Modo cine con baja profundidad de campo y cambios de enfoque automaticos.', 506000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadoras`
--

CREATE TABLE `computadoras` (
  `id_compu` int(11) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `computadoras`
--

INSERT INTO `computadoras` (`id_compu`, `categoria`, `marca`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Informática - Notebooks', 'LENOVO ', '81VU0067AR INTEL CELERON', 'Notebook. Proc. Intel Celeron N4020. Memoria RAM 4Gb. Almacenamiento 128Gb. Unidad Pantalla 14\" HD. USB: 2 x 3.0. HDMI. Lector de tarjetas SSD. Windows 10. Bateria 32Whrs-2Cell Li-ion.', 85000),
(2, 'Informática - Notebooks', 'LENOVO ', '82QE000VAR INTEL CORE I5', 'Notebook. Pantalla tactil de 14\" 2.2K (2240x1400) IPS 300nits Glossy, 100% sRGB, TUV Low Blue Light, Dolby Vision, Glass, Touch. Procesador Intel Core i5-1235U, 10C (2P +8E) / 12T, P-core 1.3 / 4.4GHz, -- E-core 0.9 / 3.3GHz, 12MB. Placa de video Integrated Intel Iris Xe Graphics. Sistema operativo Windows 11 Home 64. Capacidad 512 Gb SSD M.2 2242 PCIe 4.0x4 NVMe / RAM 16GB soldered. Lector de tarjetas Micro SD. Microfono incorporado. Camara FHD. Bateria Integrada 71 Wh 4 cell. Wi-Fi 6E 11ax, 2x2 + BT5.2. Conectoes: 1x USB 3.2 Gen 1, 1x HDMI 2.0. 1x microSD card reader. 1x Headphone / microphone combo jack (3.5mm). 2x Thunderbolt 4 (support data transfer, Power Delivery 3.0, and DisplayPort 1.4). Incluye Lapiz Lenovo Digital.', 370000),
(3, 'Informática - Notebooks', 'HP', '14-CF2531LA CELERON N4020', 'Notebook de 14\" HD (1366 x 768) 220nits 45% NTSC. Procesador Intel Celeron N4020 (1.10 hasta 2.80 GHz). Capacidad: unidad en estado solido SATA M.2 de 128Gb / RAM 4 Gb DDR4-2400MHz. Placa de video integrada graficos Intel UHD 600. Sistema operativo windows 10 home 64. Puertos 1 USB Type-C con Super Speed de 5 Gbps de Velocidad de senalizacion: 2 USB Type-A con Super Speed de 5 Gbps. Velocidad de senalizacion: 1 HDMI 1.4: 1 RJ-45: 1 conector inteligente CA: 1 combinacion de auriculares y microfono. Lector de tarjetas SD multiformato. Camara HD HP True Vision de 720p con microfono digital integrado. 2 Altavoces. ComboRealtek RTL8723DE802.11b/g/n(1x1) Wi-Fi y Bluetooth 4.2. Bateria de iones de litio de 3 celdas y 41 WHrs. Servicio en la nube: almacenamiento en dropbox de 25Gb durante 1 2 meses.', 99000),
(4, 'Informática - Notebooks', 'HP', '14-DQ2029LA INTEL CORE I5', 'Notebook de 14\" HD (1366 x 768), 250nits, 45% NTSC. Procesador Intel Core i5-1135G7 ( hasta 4.120 GHz). Capacidad: unidad en estado solido PCle NVMe M.2 de 256Gb / RAM 8 Gb DDR4-2666 MHz. Placa de video integrada, graficos Intel iris X. Sistema operativo windows 10 home 64. Puertos 1 USB Type-C con Super Speed de 5 Gbps de Velocidad de senalizacion. 2 USB Type-A con Super Speed de 5 Gbps velocidad de senalizacion. 1 HDMI 1.4b. 1 pin de CA inteligente. 1 combinacion de auriculares y microfono. Lector de tarjetas SD multiformato. Camara HD HP True Vision de 720p con microfonos digitales integrados de doble matriz. 2 Altavoces. Combo Realtek RTL8821CE-M 802.11b/g/n(1x1) Wi-Fi y Bluetooth 4.2. Bateria de iones de litio de 3 celdas y 41 WHrs', 200000),
(5, 'Informática - Notebooks', 'ASUS', '91X515EA-BR1324T INTEL CORE I3', 'Notebook. Pantalla LED de 15.6\". Procesador: Intel Core i3-1115G4. Placa de video integrada. Almacemamiento: 256 Gb SSD. RAM: 4 Gb. WIFI. HDMI. Bluetooth. Bateria: 37 Whrs. Sistema Operativo: Windows 10 Home. USB. TEclado numerico.', 150000),
(6, 'Informática - Notebooks', 'ASUS', 'E410KA-EK407W INTEL PENTIUM', 'Notebook de 14\" FHD (1920 x 1080) 16:9. Procesador Intel Pentium Silver N6000 Processor 1.1 GHz (4M Cache, up to 3.3 GHz, 4 cores). Sistema operativo Windows 11 home. Placa de video integrada Intel HD Graphics. Capacidad 128G eMMC / RAM 4 Gb DDR4 on board. Camara VGA. Wi-Fi 5(802.11ac)+Bluetooth 4.1 (Dual band) 1*1. Entradas: 1x HDMI 1.4, 1x 3.5mm Combo Audio Jack, 1x USB 2.0 Type-A, 1x USB 3.2 Gen 1 Type-A, 1x USB 3.2 Gen 1 Type-C. Entrada para microfono. Microfono incorporado. Bateria 42WHrs, 3S1P, 3-cell Li-ion.', 125000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `heladeras`
--

CREATE TABLE `heladeras` (
  `id_heladera` int(11) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `heladeras`
--

INSERT INTO `heladeras` (`id_heladera`, `categoria`, `marca`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Electrohogar - Heladeras', 'ELECTROLUX ', 'NO FROST DFN3500P ', 'No frost. Capacidad Neta 298Lt / Bruta 303Lt. Freezer superior. Fábrica de hielo manual. Descongelamiento automático. Luz. Estantes removibles y de vidrio templado. Compartimiento Extra frio. Compart imiento p/ botellas. Cajón p/vegetales.', 217000),
(2, 'Electrohogar - Heladeras', 'ELECTROLUX ', 'NO FROST DFN3500B', '\"HELADERA NO FROST ELECTROLUX DFN3500B 302LT Color Blanca Eficiencia Energética A. Cuenta con un diseño exterior estilizado. En su interior sus estantes de vidrio templado están construidos con un b orde antiderrame y son desmontables. Por otro lado viene con un cajón especial para quesos y otro para frutas y verduras. El freezer a su vez está dividido por un estante y tiene espacio para bote llas en la contrapuerta. También trae incorporado un porta copas. Por otra parte tiene un cajón especial extrafrío que mantiene una temperatura 2ºC más baja que en el resto del refrigerador.\r\nHelad era No Frost Blanca 302 Lts - Eficiencia Energética A - Freezer 73 Lts\"', 186000),
(3, 'Electrohogar - Heladeras', 'WHIRLPOOL ', 'NO FROST WRM56K2 PLATA', 'Heladera No Frost Inverter. Volumen bruto 462 Litros. Volumen neto: 492 Lts. Sistema de enfriamiento: No frost. Ubicacion del freezer: Superior. Tipo de controles: Touch externos. Eficiencia energetica A+. Compartimiento para frutas y multiuso. Tipo de estantes de vidrio templado. Tecnologia Evox: evita la corrosion y las marcas del uso cotidiano en las puertas. Control externo de temperatura. Modos especiales en el display: compras, vacaciones o fiesta (funciones para cada momento, que optimizan la temperatura segun la necesidad). Turbo control y turbo freezer: doble compartimiento extra frio con funcion Turbo para enfriar alimentos y bebidas en tiempo record. Espacio Adapt: estantes y bandejas con altura ajustable para optimizar el espacio al maximo. Turbo Ice: funcion que acelera la fabricacion de hielo. Control de circulacion de aire: regula la cantidad de aire frio hacia el freezer o la helader segun necesidades. Indicacion de puerta abierta. Aviso de hielo listo. Iluminacion LED del refrigerador.', 435000),
(4, 'Electrohogar - Heladeras', 'WHIRLPOOL ', 'NO FROST WRE80K2 EVOX INOXIDABLE', 'Heladera No Frost. Volumen Neto 573 Lts / Volumen Bruto 586 Lts. Sistema de enfriamiento: No Frost. Ubicacion del freezer: Inferior. Tipo de controles: Panel Touch. Eficiencia Energetica: A. Freezer inferior. Inoxidable c/Tecnologia EVOX. Panel Touch ext.c/control de temp.independiente p/freezer y refrig. Smart Bar (contenedor removible p/bebidas). Turbo freezer. Luces LED. Smart/Twist Ice. Espacio Dairy. Porta copas', 580000),
(5, 'Electrohogar - Heladeras', 'SAMSUNG ', 'NO FROST RT32K5930SL DIGITAL', 'Twin Cooling Plus crea un entorno favorable para preservar los alimentos frescos en la heladera - Mantiene los alimentos frescos durante más tiempo - 5 formas distintas de utilizar tu heladera - Convierte fácilmente tu freezer en una heladera para enfriar todos tus alimentos o cambia a modo off para ahorrar energía - La tecnología Digital Inverter ajusta automáticamente la velocidad del compre sor según la demanda de frío de acuerdo a 7 niveles.', 225000),
(6, 'Electrohogar - Heladeras', 'SAMSUNG ', 'NO FROST RT35K5532SL DIGITAL', 'Twin Cooling Plus crea un entorno favorable para preservar los alimentos frescos en la heladera - Mantiene los alimentos frescos durante más tiempo - 5 formas distintas de utilizar tu heladera - Convierte fácilmente tu freezer en una heladera para enfriar todos tus alimentos o cambia a modo off para ahorrar energía - La tecnología Digital Inverter ajusta automáticamente la velocidad del compres or según la demanda de frío de acuerdo a 7 niveles.', 300000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavarropas`
--

CREATE TABLE `lavarropas` (
  `id_lavarropa` int(11) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lavarropas`
--

INSERT INTO `lavarropas` (`id_lavarropa`, `categoria`, `marca`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Electrohogar - Lavarropas', 'DREAN', 'LAVARROPAS AUTOMATICO NEXT 6.06 ECO 6 BLANCO', 'Clase AA. Cap.6 Kg. Display Led. Carga Autoadaptativa. Sist.Autobalance. 29 Alternativas de lavado. Puerta extra grande. Ciclos especificos de lavado. Antiarrugas. Lavado rapido. Lavado de 1/2 hr. Eco Wash. Hand Wash. Control de temperatura. 600RPM.', 126000),
(2, 'Electrohogar - Lavarropas', 'DREAN', 'LAVARROPAS AUTOMATICO CONCEPT 5.05 V1 5 BLANCO', 'Panel electronico. CDA (control digital de agitacion) con 4 opciones especificas. Capac. 5 Kg. Ciclo Eco 1/2 carga. Antiarrugas. Control de mantenimiento inteligente. Nuevo Software. Centrifugado optimizado a 500rpm. Impulsor de mayor tamano.', 90000),
(3, 'Electrohogar - Lavarropas', 'SAMSUNG', 'LAVARROPAS AUTOMATICO WW65M0NHUU 6.5 GRIS', 'Capacidad 6.5Kg. 6 Programas de lavado. Display digital. Tambor de acero (diseno diamante). Lavado rapido de 29. Centrifugado 1000RPM. Puerta extra amplia. Control de voltaje ante picos o caidas de tension. Eficiencia AAB (energetica/lavado/centrifugado)', 133000),
(4, 'Electrohogar - Lavarropas', 'SAMSUNG', 'LAVARROPAS AUTOMATICO WA80F5S4UDW 8', 'Panel de control y display digital. Capacidad 8Kg. 700RPM. 9 Programas de lavado. Tambor de acero inoxidable diseno diamante. Pulsador Wobble (previene enredos y danos en la ropa). Final diferido. Seguro p/ninos. Eficiencia Energetica A.', 169000),
(5, 'Electrohogar - Lavarropas', 'PATRICK', 'LAVARROPAS SEMIAUTOMATICO LTPK79SB 7 BLANCO', 'Lavarropas Semiautomatico. Capacidad: 7kg. 9 Programas automaticos de lavadoy enjuague: Eco - Enjuague - Lana - Sintetico - Algodon - Algodon muy Sucio - Superlavado - Suavizante - Vaciado. Dispenser de detergente y suavizante con dosificador. Motor termoprotegido. Interriuptor de seguridad. Bomba de desagote. Sistema de lavado automatico. Tambor de acero inoxidable. Tapa transparente: Mayor visibilidad. Facil apertura y cierre. Comando Superior: Con Selector Perilla.', 58000),
(6, 'Electrohogar - Lavarropas', 'PATRICK', 'LAVARROPAS SEMIAUTOMATICO LTPK67SB 6 BLANCO', 'Lavarropas Semiautomatico. Capacidad: 6 Kg. 7 Programas: Eco - Enjuague - Sintetico - Algodon - Color -Sucio - Muy sucio. Dispenser de detergente y suavizante. Motor termoprotegido. Interriuptor de seguridad. Tambor de acero inoxidable. Comando superior: Con selector de perilla. Sistema de lavado europeo. Tapa Transparente: Mayor visibilidad. Facil apertura y cierre de tambor.', 44000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `televisores`
--

CREATE TABLE `televisores` (
  `id_tv` int(11) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `televisores`
--

INSERT INTO `televisores` (`id_tv`, `categoria`, `marca`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Audio, tv y video - Televisores', 'BGH', 'SMART LED TV 32 PULGADAS HD B3222K5', 'Televisor LED Smart de 32\" HD (1366 x 768). Formato de pantalla 16:9. Frecuencia de barrido 60Hz. Radio contraste 1200. Brillo 180 CD/M2. Tiempo de respuesta 8ms. Wi Fi. Entrada video compuesto: 1 RCA. Sintonizador TDA Analogico: PAL-M/N, NTSC-M, Digital: ISDB-T. 2 Conectores hembra tipo A (USB v2.0). 3 HDMI v1.4 con CEC y HDCP 1.4, HDMI 2 compatible con ARC. Incluye bolsa con tornillos para la base x1, control remoto x1, Cable miniplug A/V 3 en 1, cable de alimentacion x1. Cuenta con Netflix, Youtube, Gestor de aplicaciones, Screen sharing y open browser. Procesador Quad Core. MT9216 CA55 1.1GHz: cuatro veces la capacidad de procesamiento Incluye Dolby Audio para disfrutar mejor todos los contenidos. Salida de audio digital optica. Potencia de sonido 2 x 5W. Salida de auriculares. Salida de audio digital optica. Medidas con base (alt-anch-prof). 47.7 x 73.2 x 18.2cm. Peso con base 4.3Kg. Montaje en pared: 100 x 100 VESA 10mm 4 tornillos M4 (no provistos). Clase energetica A+.', 48000),
(2, 'Audio, tv y video - Televisores', 'BGH', 'SMART LED ANDROID TV 32 PULGADAS HD B3222S5A', 'Televisor LED Android Smart de 32\" HD (1366 x 768), V11: ofrece una expriencia de uso mas amigable y con una interfaz grafica intuitiva. Procesador MT9216 1.5GHz Quad Core. Formato de pantalla 16:9. Frecuencia de barrido 60Hz. Radio contraste 3000. Brillo 230 CD/M2. Salida de audio digital multicanal S/PDIF optico. Sonido mejorado Dolby Audio. Potencia 2 x 8W. Tiempo de respuesta 8.5ms. Comando de voz por Google y servicios de Google Play. Wi Fi. Entrada video compuesto: 1 RCA. Sintonizador TDA Analogico: PAL-M/N, NTSC-M, Digital: ISDB-T. 2 Conectores hembra tipo A (USB v2.0). 2 HDMI v2.0 con CEC y HDCP 2.0, HDMI 2 compatible con ARC. Incluye base x2, guia rapida x1, manual legal x1, bolsa con tornillos para la base x1, control remoto x1, cable de alimentacion x1. Medidas con base (alt-anch-prof) 47.6 x 71.9 x 19. Montaje a pared 200 x 200 VESA 10mm 4 tornillos M4 (no provistos)', 54000),
(3, 'Audio, tv y video - Televisores', 'HISENSE', 'SMART LED TV 32 PULGADAS HD 32A421GSV', 'Televisor Smart. Pantalla HD de 32\". Potencia rms: 6W x 2. Brillo: 180Cd / m2. Contraste dinamico: 3000:1. Frecuencia de barrido: 60 Hz. Sonido Estereo. HDMI x 2. USB x2. Sintonizador TDA.', 45000),
(4, 'Audio, tv y video - Televisores', 'HISENSE', 'SMART LED TV 50 PULGADAS 4K UHD 9150A641GSV', 'Televisor Smart. Pantalla 50\" 4K. Resolucion: 3840 x 2160 Px. Potencia RMs: 8 W x 4. USB x2. HDMI x3. Bluetooth. Brillo: 250 Cd/m2. Radio de contraste : 5000:1. WIFI. Tipo de sonido: Estereo (Standard / Teatro / Musica / Dialogo / Nocturno). Frecuencia de barrido: 60 Hz. Sintonizador TDA. Entrada PC.', 83000),
(5, 'Audio, tv y video - Televisores', 'MOTOROLA', 'SMART LED ANDROID TV 32 PULGADAS HD', 'TV led smart de 32\" .Resolucion 1366x768. Cuenta con dos puertos USB y dos puertos HDMI. Sintonizador TDA. Frecuencia de barrido 50HZ/60HZ. Potencia de parlantes 8w RMS (x2). WiFi . Bluetooth. Medidas con base 45,6x72,07x16,54 cm', 55500),
(6, 'Audio, tv y video - Televisores', 'MOTOROLA', 'SMART LED ANDROID TV 43 PULGADAS FULL HD', 'TV led smart de 43\". Resolucion 1920X1080. Cuenta con dos puertos USB y dos puertos HDMI. Sintonizador TDA. Frecuencia de barrido 50HZ/60HZ. Potencia de parlantes 8w RMS (x2). WiFi. Bluetooth. Medidas con base 59,73X95,61X20,45 cm', 87500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `varios_tech`
--

CREATE TABLE `varios_tech` (
  `id_varios` int(11) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `varios_tech`
--

INSERT INTO `varios_tech` (`id_varios`, `categoria`, `marca`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Accesorios - Reloj', 'XINJI', 'RELOJ INTELIGENTE C1', 'Tipo de pantalla AMOLED de 1 69\"\r\nMemoria flash: 128MB\r\nBluetooth 5.0\r\nMonitoreo de Salud\r\nAsistente Personal de Fitness\r\nResistencia al Agua 5 ATM\r\nDispositivos soportados: Soporta Android 5.0 y superior\r\nSoporta IOS 10.0 y superior\r\nGPS : no\r\nMaterial de correa Silicona (intercambiable)\r\nMétodo de carga : Carga magnética', 16000),
(2, 'Accesorios - Cargador ', 'TAGWOOD', 'CARGADOR PORTATIL IPH050B', 'Cargador portatil con bateria de Litio para Smartphones y Tablets. Capacidad: 2600mAh. Salida: 5V - 1000mAh. Tiempo de carga: 2hs. Incluye cable USB a Micro USB. LED titilante indicadora del nivel de bateria.', 2900),
(3, 'Informática - Tablets', 'LENOVO', 'TABLET TB-8505FS 8 32 GB GRIS', 'Multitouch 8\" HD. SO: Android pie 9.0. WiFi. BT 5.0. Micro USB 1x 2.0. Proces MediaTek Helio A22 de 2.0Ghz. Men.Ram. 2 Gb. Almac. 32 Gb. Micro SD. Resolucion 1280 x 800. Camara frontal 2.0 Mp/ Trasera 5.0Mp. Incluye estacion de carga inteligente.', 47500),
(4, 'Electrohogar - Cocina', 'MARSHALL', 'COCINA MARSHALL MTI 502N IX', 'Gabinete negro con plancha inoxidable. Horno autolimpiante con puerta espejada. Manija cromada. Quemadores de alta eficiencia. Cajon parrilla c/puerta abatible. Rejilla enteriza de alambre de acero. Ancho 51cm. Multigas', 78600),
(5, 'Pequeños - Procesadoras mixer', 'SMARTLIFE', 'MULTIPROCESADORA SMARTLIFE SL-FP0509', 'Potencia de 1000 Watts, regulador de velocidad luminoso + Pulso, recipiente procesador plástico 1.2 lts, jarra 1.5 lts vidrio, base antideslizante. Incluye:3 discos de corte / Emulsionador / Espátula', 39700),
(6, 'Gaming', 'SONY - Play Station 5', 'CONSOLA PLAY STATION 5 (PS5) BLURAY CFI-1115A 825 ', 'Frecuencia variable de GPU hasta 2.23 GHz (10.3 TFLOPS). Memoria GDDR6 16 GB con ancho de banda de 448 GB/s. Unidad de almacenamiento SSD 825 GB. Ancho de banda de lectura 5.5 GB/s (datos puros) y 9 GB/s (datos comprimidos).', 342000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD PRIMARY KEY (`id_celular`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `computadoras`
--
ALTER TABLE `computadoras`
  ADD PRIMARY KEY (`id_compu`);

--
-- Indices de la tabla `heladeras`
--
ALTER TABLE `heladeras`
  ADD PRIMARY KEY (`id_heladera`);

--
-- Indices de la tabla `lavarropas`
--
ALTER TABLE `lavarropas`
  ADD PRIMARY KEY (`id_lavarropa`);

--
-- Indices de la tabla `televisores`
--
ALTER TABLE `televisores`
  ADD PRIMARY KEY (`id_tv`);

--
-- Indices de la tabla `varios_tech`
--
ALTER TABLE `varios_tech`
  ADD PRIMARY KEY (`id_varios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `celulares`
--
ALTER TABLE `celulares`
  MODIFY `id_celular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `computadoras`
--
ALTER TABLE `computadoras`
  MODIFY `id_compu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `heladeras`
--
ALTER TABLE `heladeras`
  MODIFY `id_heladera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `lavarropas`
--
ALTER TABLE `lavarropas`
  MODIFY `id_lavarropa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `televisores`
--
ALTER TABLE `televisores`
  MODIFY `id_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `varios_tech`
--
ALTER TABLE `varios_tech`
  MODIFY `id_varios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
