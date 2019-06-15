<?php
/*
UUP dump translation file.

Translation information:
English language name: Spanish (Latinamerican)
Localized language name: Español (Argentina)
Language code: es-AR
Author: Makinenn
*/

//Información del idioma
$s['code'] = 'es-AR';
$s['timeZone'] = 'UTC'; //Zonas horarias soportadas: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Examinar las compilaciones conocidas - UUP dump
$s['build'] = 'Compilación';
$s['arch'] = 'Arquitectura';
$s['ring'] = 'Anillo';
$s['updateid'] = 'ID de actualización';
$s['update'] = 'Actualización';
$s['lang'] = 'Idioma';
$s['edition'] = 'Edición';
$s['seachForBuilds'] = 'Buscar una compilación...';
$s['no'] = 'No';
$s['yes'] = 'Sí';
$s['yesRecommended'] = 'Sí (recomendado)';
$s['next'] = 'Siguiente';
$s['ok'] = 'Aceptar';
$s['cancel'] = 'Cancelar';
$s['information'] = 'Información';
$s['totalDlSize'] = 'Tamaño total de la descarga';
$s['file'] = 'Archivo';
$s['expires'] = 'Caduca';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Tamaño';

//global
$s['home'] = 'Inicio';
$s['downloads'] = 'Descargas';
$s['lightMode'] = 'Modo claro';
$s['darkMode'] = 'Modo oscuro';
$s['sourceCode'] = 'Código fuente';
$s['menu'] = 'Menú';
$s['websiteDesc'] = 'Descarga con facilidad archivos UUP desde los servidores de Windows Update. Este proyecto no está afiliado a Microsoft Corporation.';
$s['notAffiliated'] = 'Este proyecto no está afiliado a Microsoft Corporation. Windows es una marca registrada de Microsoft Corporation.';
$s['copyright'] = '© %d %s y colaboradores.'; //© 2019 whatever127 y colaboradores.
$s['selectLanguage'] = 'Por favor, selecciona tu idioma';

//index.php
$s['slogan'] = 'Descarga con facilidad archivos UUP desde los servidores de Windows Update.';
$s['advOptions'] = 'Opciones avanzadas';
$s['browseBuilds'] = 'Examinar la lista de compilaciones conocidas';
$s['browseBuildsSub'] = 'Escoger una compilación ya conocida en la base de datos local y descargarla.';
$s['fetchLatest'] = 'Buscar la compilación más reciente';
$s['fetchLatestSub'] = 'Recuperar la información de la compilación más reciente desde los servidores de Windows Update.';
$s['newlyAdded'] = 'Compilaciones agregadas recientemente';
$s['dateAdded'] = 'Agregada';

//known.php
$s['browseKnown'] = 'Examinar las compilaciones conocidas';
$s['chooseBuild'] = 'Escoger una compilación';
$s['weFoundBuilds'] = 'Hemos encontrado <b>%d</b> compilaciones para tu búsqueda.'; //Hemos encontrado <b>692</b> compilaciones para tu búsqueda.

//latest.php
$s['latestFetchLatest'] = 'Buscar la compilación más reciente';
$s['latestTestingOnly'] = 'Solo para pruebas';
$s['latestTestingOnlyWarn'] = '<b>Esta página se brinda solo para pruebas.</b> Las compilaciones que el servidor backend no procesó y que aparecen en esta página se brindarán usando paquetes alternativos que podrían brindar resultados incompletos. Si quieres bajar una compilación ya conocida, te conviene usar la página de compilaciones conocidas.';
$s['latestDoYouWantKnown'] = '¿Quisieras continuar examinando la lista de compilaciones conocidas?';
$s['chooseOptions'] = 'Escoger las opciones';
$s['buildOfPretendedClient'] = 'Número de la compilación del cliente simulado de Windows Update';
$s['editionOfPretendedClient'] = 'Edición del sistema simulado';
$s['skipAheadLabel'] = 'Vuelo Skip Ahead';
$s['skipAheadOption'] = 'Usar el vuelo Skip Ahead (Solo Insider Fast)';
$s['fetchUpdates'] = 'Buscar actualizaciones';
$s['fetchUpdatesInfo'] = 'Cliquea el botón <i>Buscar actualizaciones</i> para enviar tu solicitud a los servidores de Windows Update.';

//fetchupd.php
$s['responseFromServer'] = 'Respuesta del servidor';
$s['foundUpdates'] = 'Se encontraron %d actualización(es)'; //Se encontraron 1 actualización(es)
$s['foundTheseUpdates'] = 'Se encontraron las siguientes actualizaciones. Cliquea el nombre de la actualización que deseas para continuar.';
$s['buildNumber'] = 'Número de la compilación: %s'; //Número de la compilación: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Selecciona el idioma para %s'; //Selecciona el idioma para Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Escoger el idioma';
$s['chooseLangDesc'] = 'Escoge qué idioma quieres';
$s['allLangs'] = 'Todos los idiomas';
$s['selLangFiles'] = 'Archivos';
$s['allFiles'] = 'Todos los archivos';
$s['wubOnly'] = 'Solo WindowsUpdateBox';
$s['updateOnly'] = 'Solo actualización';
$s['selectLangInfoText1'] = 'Cliquea el botón <i>Siguiente</i> para seleccionar la edición que quieres descargar.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe y las actualizaciones acumulativas pueden encontrarse en el idioma <i>Todos los idiomas</i>.';
$s['allLangsWarn'] = 'La opción <i>Todos los idiomas</i> no soporta la selección de la edición.';
$s['clickNextToOpenFindFiles'] = 'Cliquea el botón <i>Siguiente</i> para abrir la página que te permitirá buscar los archivos.';

//selectedition.php
$s['selectEditionFor'] = 'Selecciona la edición para %s'; //Selecciona la edición para Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, Inglés (Estados Unidos)
$s['chooseEdition'] = 'Escoger la edición';
$s['chooseEditionDesc'] = 'Escoge qué edición quieres';
$s['allEditions'] = 'Todas las ediciones';
$s['selectEditionInfoText'] = 'Cliquea el botón <i>Siguiente</i> para abrir la página de resumen de tu selección.';

//download.php
$s['summary'] = 'Resumen';
$s['summaryDesc'] = 'Revisa tu selección y escoge el método de descarga';
$s['summaryFor'] = 'Resumen para %s'; //Resumen para Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, Inglés (Estados Unidos), Windows 10 Pro
$s['summaryOfSelection'] = 'Resumen de tu selección';
$s['browseList'] = 'Examinar la lista de archivos';
$s['browseListDesc'] = 'Abre una página con una lista de los archivos en la UUP para descargarlos manualmente.';
$s['aria2Opt1'] = 'Descargar usando aria2';
$s['aria2Opt1Desc'] = 'Descarga con facilidad el paquete de la UUP seleccionada usando aria2.';
$s['aria2Opt2'] = 'Descargar usando aria2 y convertir';
$s['aria2Opt2Desc'] = 'Descarga con facilidad el paquete de la UUP seleccionada usando aria2 y conviértelo a un ISO.';
$s['aria2Opt3'] = 'Descargar usando aria2, convertir y crear ediciones adicionales';
$s['aria2Opt3Desc'] = 'Descarga con facilidad el paquete de la UUP seleccionada usando aria2, conviértelo, crea ediciones adicionales y, por último, crea una imagen ISO.';
$s['jsRequiredToConf'] = 'Se requiere JavaScript para configurar y usar esta opción.';
$s['selAdditionalEditions'] = 'Seleccionar ediciones adicionales';
$s['noAdditionalEditions'] = 'No hay ediciones adicionales disponibles para esta selección.';
$s['learnMore'] = 'Más información';
$s['learnMoreAdditionalEditions1'] = 'Esta opción habilita la creación de las ediciones adicionales seleccionadas.';
$s['learnMoreAdditionalEditions2'] = 'La lista de las ediciones adicionales está determinada por las ediciones base seleccionadas. Puedes revisar debajo la lista de las ediciones base necesarias para crear las ediciones adicionales deseadas:';
$s['learnMoreUpdates1'] = 'Las actualizaciones se integrarán a la imagen convertida solo cuando se ejecute el script de coversión en los siguientes sistemas:';
$s['learnMoreUpdates2'] = 'Si ejecutas el script de conversión en cualquier otro sistema, las actualizaciones no se integrarán en la imagen resultante.';
$s['systemWithAdk'] = '%s con Windows 10 ADK instalado'; //Windows 7 con Windows 10 ADK instalado
$s['additionalUpdates'] = 'Actualizaciones adicionales';
$s['additionalUpdatesDesc'] = 'Este paquete de la UUP contiene actualizaciones adicionales que se integrarán durante el proceso de conversión, lo cual aumentará significativamente el tiempo de creación.';
$s['browseUpdatesList'] = 'Examinar la lista de actualizaciones';

//get.php
$s['listOfFilesFor'] = 'Lista de archivos para %s'; //Lista de archivos para Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Tamaño total de los archivos: %s'; //Tamaño total de los archivos: 2.86 GiB
$s['fileRenamingScript'] = 'Script para renombrar el archivo';
$s['fileRenamingScriptDesc1'] = 'El script que está abajo puede usarse para renombrar rápidamente los archivos descargados.';
$s['fileRenamingScriptDesc2'] = 'Simplemente copia los contenidos del formulario que está abajo en un archivo nuevo con la extensión <code>cmd</code>, colócalo en la carpeta con los archivos descargados y ejecútalo.';
$s['sha1File'] = 'Archivo de sumas de verificación SHA-1';
$s['sha1FileDesc'] = 'Puedes usar este archivo para verificar rápidamente si los archivos se descargaron correctamente.';
$s['aria2NoticeTitle'] = 'Descargar usando las opciones aria2';
$s['aria2NoticeText1'] = 'Al descargar usando las opciones aria2 se crea un contenedor que debe ser descargado. El contenedor descargado contiene todos los archivos necesarios para lograr la tarea seleccionada.';
$s['aria2NoticeText2'] = 'Para comenzar el proceso de descarga, usa un script para tu plataforma:';
$s['aria2NoticeText3'] = 'Aria2 es un proyecto de código abierto. Puedes encontrarlo aquí: %s.'; //Aria2 es un proyecto de código abierto. Puedes encontrarlo aquí: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'El script de conversión de la UUP (versión Windows) fue creado por %s.'; //El script de conversión de la UUP (versión Windows) fue creado por abbodi1406.
$s['aria2NoticeText5'] = 'El script de conversión de la UUP (versión Linux) es de código abierto. Puedes encontrarlo aquí: %s.'; //El script de conversión de la UUP (versión Linux) es de código abierto. Puedes encontrarlo aquí: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Buscar archivos en %s'; //Buscar archivos en Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Si quieres renombrar rápidamente los archivos descargados de esta página, puedes generar un script que los renombrará automáticamente por ti.';
$s['fileRenamingScriptGenW'] = 'Generar un script para renombrar (Windows)';
$s['fileRenamingScriptGenL'] = 'Generar un script para renombrar (Linux)';
$s['searchForFiles'] = 'Buscar archivos...';
$s['weFoundFiles'] = 'Hemos encontrado <b>%d</b> archivos para tu consulta.'; //Hemos encontrado <b>692</b> archivos para tu consulta.

//Error pages
$s['error'] = 'Error';
$s['requestNotSuccessful'] = 'No hubo éxito con la solicitud';
$s['anErrorHasOccurred'] = 'Ocurrió un error al intentar procesar tu solicitud.';
$s['generatedPackNotAvailable'] = 'El paquete generado no está disponible';
$s['generatedPackNotAvailableDesc'] = 'La actualización que estás intentando descargar no tiene un paquete generado que brinde información completa sobre los idiomas disponibles, las ediciones y los archivos. Se usará el paquete alternativo, que podría no brindar la información correcta. Si la descarga falla debido a esto, por favor, espera a que esté disponible el paquete generado automáticamente.';
$s['arm64Warning'] = 'Has seleccionado una compilación ARM64 que <b>solo es compatible con dispositivos basados en ARM64</b> y no funcionará con computadoras normales basadas en Intel o AMD. Para computadoras de <b>64-bit</b>, por favor, usa compilaciones <b>amd64</b>. Para computadoras de <b>32-bit</b>, por favor, usa compilaciones <b>x86</b>. Si estás completamente seguro de que el dispositivo destino está basado en ARM64, puedes ignorar este mensaje sin riesgo alguno.';

//Error messages
$s['error_ERROR'] = 'Error genérico.';
$s['error_UNSUPPORTED_API'] = 'La versión de la API instalada no es compatible con esta versión de UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'El directorio <i>fileinfo</i> no existe.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'La base de datos <i>fileinfo</i> no contiene ninguna compilación.';
$s['error_SEARCH_NO_RESULTS'] = 'No se encontraron elementos para la consulta realizada.';
$s['error_UNKNOWN_ARCH'] = 'Arquitectura desconocida de procesador.';
$s['error_UNKNOWN_RING'] = 'Anillo desconocido.';
$s['error_UNKNOWN_FLIGHT'] = 'Vuelo desconocido.';
$s['error_UNKNOWN_COMBINATION'] = 'La combinación de vuelo y anillo no es correcta. Skip Ahead solo está soportado para el anillo Insider Fast.';
$s['error_ILLEGAL_BUILD'] = 'El número especificado de compilación es menor a %d o mayor a %d.'; //El número especificado de compilación es menor a 9841 o mayor a 2147483646.
$s['error_ILLEGAL_MINOR'] = 'La compilación menor especificada es incorrecta.';
$s['error_NO_UPDATE_FOUND'] = 'El servidor no devolvió actualizaciones.';
$s['error_XML_PARSE_ERROR'] = 'El análisis de la respuesta XML falló. Podría haber un problema con los servidores de Microsoft. Vuelve a intentarlo más tarde.';
$s['error_EMPTY_FILELIST'] = 'El servidor devolvió un lista vacía de archivos.';
$s['error_NO_FILES'] = 'No hay archivos disponibles para tu selección.';
$s['error_NOT_FOUND'] = 'No se puede encontrar la selección especificada.';
$s['error_MISSING_FILES'] = 'Faltan archivos en el paquete de la UUP.';
$s['error_NO_METADATA_ESD'] = 'No hay metadatos disponibles de los archivos ESD para tu selección.';
$s['error_UNSUPPORTED_LANG'] = 'El idioma especificado no está soportado.';
$s['error_UNSPECIFIED_LANG'] = 'No se especificó el idioma.';
$s['error_UNSUPPORTED_EDITION'] = 'La edición especificada no está soportada.';
$s['error_UNSUPPORTED_COMBINATION'] = 'La combinación de idioma y edición no es correcta.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'La actualización seleccionada no contiene una actualización acumulativa.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'No hay información en la base de datos sobre la actualización especificada.';
$s['error_KEY_NOT_EXISTS'] = 'La clave especificada no existe en la información de la actualización.';
$s['error_UNSPECIFIED_UPDATE'] = 'No se especificó el ID de la actualización.';
$s['error_INCORRECT_ID'] = 'El ID de la actualización especificada es incorrecto. Por favor, asegúrate de que el ID de la actualización especificada sea correcto.';
$s['error_RATE_LIMITED'] = 'Tu velocidad está limitada. Por favor, vuelve a intentarlo en algunos segundos.';
$s['error_UNSPECIFIED_VE'] = 'No has seleccionado ediciones adicionales. Si no deseas crear ediciones adicionales, por favor, usa la opción <i>Descargar usando aria2 y convertir</i>.';
$s['errorNoMessage'] = 'Mensaje de error no disponible.';

//Languages
$s['lang_ar-sa'] = 'Árabe (Arabia Saudita)';
$s['lang_bg-bg'] = 'Búlgaro';
$s['lang_cs-cz'] = 'Checo';
$s['lang_da-dk'] = 'Danés';
$s['lang_de-de'] = 'Alemán';
$s['lang_el-gr'] = 'Griego';
$s['lang_en-gb'] = 'Inglés (Reino Unido)';
$s['lang_en-us'] = 'Inglés (Estados Unidos)';
$s['lang_es-ar'] = 'Español (Argentina)';
$s['lang_es-es'] = 'Español (España)';
$s['lang_es-mx'] = 'Español (México)';
$s['lang_et-ee'] = 'Estonio';
$s['lang_fi-fi'] = 'Finés';
$s['lang_fr-ca'] = 'Francés (Canadá)';
$s['lang_fr-fr'] = 'Francés (Francia)';
$s['lang_he-il'] = 'Hebreo';
$s['lang_hr-hr'] = 'Croata';
$s['lang_hu-hu'] = 'Húngaro';
$s['lang_it-it'] = 'Italiano';
$s['lang_ja-jp'] = 'Japonés';
$s['lang_ko-kr'] = 'Coreano';
$s['lang_lt-lt'] = 'Lituano';
$s['lang_lv-lv'] = 'Letón';
$s['lang_nb-no'] = 'Noruego (bokmål)';
$s['lang_nl-nl'] = 'Neerlandés';
$s['lang_pl-pl'] = 'Polaco';
$s['lang_pt-br'] = 'Portugués (Brasil)';
$s['lang_pt-pt'] = 'Portugués (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Rumano';
$s['lang_ru-ru'] = 'Ruso';
$s['lang_sk-sk'] = 'Eslovaco';
$s['lang_sl-si'] = 'Esloveno';
$s['lang_sr-latn-rs'] = 'Serbio (latino)';
$s['lang_sv-se'] = 'Sueco';
$s['lang_th-th'] = 'Tailandés';
$s['lang_tr-tr'] = 'Turco';
$s['lang_uk-ua'] = 'Ucraniano';
$s['lang_zh-cn'] = 'Chino (Simplificado)';
$s['lang_zh-hk'] = 'Chino (Hong Kong)';
$s['lang_zh-tw'] = 'Chino (Tradicional)';