<?php

	$spanish = array(

		/**
		 * Sites
		 */

			'item:site' => 'Sitios',

		/**
		 * Sessions
		 */

			'login' => "Ingresar",
			'loginok' => "Ha ingresado correctamente.",
			'loginerror' => "No se ha podido ingresar. Probablemente no has validad tu cuenta aún, ó los detalles que has enviado están incorrectos. Asegúrate de ello e intenta nuevamente.",

			'logout' => "Salir",
			'logoutok' => "Has salido correctamente.",
			'logouterror' => "No ha podido ingresar. Intenta nuevamente.",

		/**
		 * Errors
		 */
			'exception:title' => "Bienvenido a Elgg.",

			'InstallationException:CantCreateSite' => "No es posible crear un sitio Elgg por defecto con la información suministrada Nombre:%s, URL: %s",

			'actionundefined' => "La acción solicitada (%s) no está definida en el sistema.",
			'actionloggedout' => "Lo sentimos, no puedes realizar esta acción mientras no haya ingresado.",

			'notfound' => "El recurso solicitado no fué encontrado, ó no tiene acceso a el.",

			'SecurityException:Codeblock' => "Acceso denegado para ejecutar esta instrucción privilegiada",
			'DatabaseException:WrongCredentials' => "Elgg no se puede conectar a la base de datos con la información suministrada %s@%s (pw: %s).",
			'DatabaseException:NoConnect' => "Elgg no ha podido seleccionar la base de datos '%s', asegúrate que esta haya sido creada y tengas acceso a ella.",
			'SecurityException:FunctionDenied' => "El acceso a la función privilegiada '%s' ha sido negada.",
			'DatabaseException:DBSetupIssues' => "Se encontraron una serie de errores: ",
			'DatabaseException:ScriptNotFound' => "Elgg no puede encontrar el código de acceso a bases de datos en %s.",

			'IOException:FailedToLoadGUID' => "Ha fallado el intento de cargar nuevo %s de GUID:%d",
			'InvalidParameterException:NonElggObject' => "Ha enviadoun un non-ElggObject a un ElggObject constructor!",
			'InvalidParameterException:UnrecognisedValue' => "Valor no reconocido ha sido enviado al constuctor.",

			'InvalidClassException:NotValidElggStar' => "GUID:%d no es un válido %s",

			'PluginException:MisconfiguredPlugin' => "%s es un plugin desconfigurado.",

			'InvalidParameterException:NonElggUser' => "Ha pasado un non-ElggUser a un ElggUser constructor!",

			'InvalidParameterException:NonElggSite' => "Ha pasado un non-ElggSite a un ElggSite constructor!",

			'InvalidParameterException:NonElggGroup' => "Ha pasado un non-ElggGroup a un ElggGroup constructor!",

			'IOException:UnableToSaveNew' => "No ha sido posible salvar nuevo %s",

			'InvalidParameterException:GUIDNotForExport' => "No se ha especificado un GUID durante la exportación, esto no debió pasar.",
			'InvalidParameterException:NonArrayReturnValue' => "La entidad serializada no ha enviado una cadena con parámetros devueltos",

			'ConfigurationException:NoCachePath' => "¡El directorio Caché no ha sido establecido!",
			'IOException:NotDirectory' => "%s no es un directorio.",

			'IOException:BaseEntitySaveFailed' => "¡No se pudo salvar la nueva información de la identidad base!",
			'InvalidParameterException:UnexpectedODDClass' => "import() ha pasado una clase ODD inesperada",
			'InvalidParameterException:EntityTypeNotSet' => "El tipo de entidad debe ser ingresado.",

			'ClassException:ClassnameNotClass' => "%s no es un %s.",
			'ClassNotFoundException:MissingClass' => "La clase '%s' no fué encontrada, ¿plugin inexistente?",
			'InstallationException:TypeNotSupported' => "El tipo %s no es soportado. Esto indica un error en su instalación, originado tal vez por una actualización incompleta.",

			'ImportException:ImportFailed' => "No se pudo importar el elemento %d",
			'ImportException:ProblemSaving' => "Hubo un problema al salvar %s",
			'ImportException:NoGUID' => "La nueva entidad creada no tiene GUID, esto no debió pasar.",

			'ImportException:GUIDNotFound' => "La entidad '%d' no pudo ser encontrada.",
			'ImportException:ProblemUpdatingMeta' => "Hay un problema actualizando '%s' en la entidad '%d'",

			'ExportException:NoSuchEntity' => "No existe una entidad GUID:%d", 

			'ImportException:NoODDElements' => "No hay elementos OpenDD encontrados en la información importada, la importación ha fallado.",
			'ImportException:NotAllImported' => "No todos los elementos fueron importados.",

			'InvalidParameterException:UnrecognisedFileMode' => "Modo de archivo no reconocido '%s'",
			'InvalidParameterException:MissingOwner' => "¡Todos los archivos deben tener un dueño!",
			'IOException:CouldNotMake' => "No se pudo hacer %s",
			'IOException:MissingFileName' => "Debe especificar un nombre antes de abrir un archivo.",
			'ClassNotFoundException:NotFoundNotSavedWithFile' => "¡ Filestore no fué encontrado ó la clase no fué salvada con el archivo!",
			'NotificationException:NoNotificationMethod' => "No hay un método de notificación especificado.",
			'NotificationException:NoHandlerFound' => "No se encontró un controlador para '%s' ó este no está disponible.",
			'NotificationException:ErrorNotifyingGuid' => "Hay un error mientras se notificaba %d",
			'NotificationException:NoEmailAddress' => "No se puede obtener la dirección de correo para GUID:%d",
			'NotificationException:MissingParameter' => "Parametro requerido inexistente, '%s'",

			'DatabaseException:WhereSetNonQuery' => "En un grupo de datos que no contienen WhereQueryComponent",
			'DatabaseException:SelectFieldsMissing' => "Campos no existen en la consulta seleccionada",
			'DatabaseException:UnspecifiedQueryType' => "Tipo de consulta no especificado ó no reconocido.",
			'DatabaseException:NoTablesSpecified' => "No hay tablas especificadas para consultar.",
			'DatabaseException:NoACL' => "No hay acceso al control brindado en la consulta",

			'InvalidParameterException:NoEntityFound' => "No se ha encontrado una entidad, no existe ó no tiene acceso a ella.",

			'InvalidParameterException:GUIDNotFound' => "GUID:%s no fué encontrada, ó no tiene acceso a ella.",
			'InvalidParameterException:IdNotExistForGUID' => "Lo sentimos, '%s' no existe para guid:%d",
			'InvalidParameterException:CanNotExportType' => "Lo sentimos, no sabemos como exportar '%s'",
			'InvalidParameterException:NoDataFound' => "No se encontró ningún tipo de datos.",
			'InvalidParameterException:DoesNotBelong' => "No pertenece a la entidad.",
			'InvalidParameterException:DoesNotBelongOrRefer' => "No pertenece o es referida de ninguna entidad.",
			'InvalidParameterException:MissingParameter' => "Parámetro inexistente, necesita proveer un GUID.",

			'SecurityException:APIAccessDenied' => "Lo sentimos, El acceso al API ha sido deshabilitado por el administrador.",
			'SecurityException:NoAuthMethods' => "No se han encontrado métodos de autenticación que permitan proceder en la petición enviada al API.",
			'APIException:ApiResultUnknown' => "El resultado del API es de tipo desconocido, esto no debió pasar.", 

			'ConfigurationException:NoSiteID' => "No se ha especificado una ID de sitio.",
			'InvalidParameterException:UnrecognisedMethod' => "Llada al método '%s' no fué reconocida",
			'APIException:MissingParameterInMethod' => "Parámetro inexistente %s en el método %s",
			'APIException:ParameterNotArray' => "%s no parece ser una cadena.",
			'APIException:UnrecognisedTypeCast' => "Tipo no reconocido en %s para la variable '%s' en el metodo '%s'",
			'APIException:InvalidParameter' => "Parámetro inválido encontrado para 's' en el metodo '%s'.",
			'APIException:FunctionParseError' => "%s(%s) tiene error parseo.",
			'APIException:FunctionNoReturn' => "%s(%s) no retornó valores.",
			'SecurityException:AuthTokenExpired' => "El token de autenticación es inexistente, inválido o ha expirado.",
			'CallException:InvalidCallMethod' => "%s debe ser llamado usando '%s'",
			'APIException:MethodCallNotImplemented' => "La llamada al método '%s' no ha sido implementada.",
			'APIException:AlgorithmNotSupported' => "El algoritmo '%s' no es soportado ó ha sido deshabilitado.",
			'ConfigurationException:CacheDirNotSet' => "El directorio caché 'cache_path' no ha sido ajustado.",
			'APIException:NotGetOrPost' => "Método requerido debe ser GET ó POST",
			'APIException:MissingAPIKey' => "X-Elgg-apikey inexistente en las cabeceras HTTP",
			'APIException:MissingHmac' => "cabecera X-Elgg-hmac inexistente",
			'APIException:MissingHmacAlgo' => "Cabecera X-Elgg-hmac-algo inexistente",
			'APIException:MissingTime' => "Cabecera X-Elgg-time inexistente",
			'APIException:TemporalDrift' => "X-Elgg-time está ajustada muy en el pasado ó en el futuro. Epoch ha fallado.",
			'APIException:NoQueryString' => "No se han enviado datos en la consulta",
			'APIException:MissingPOSTHash' => "Cabecera X-Elgg-posthash inexistente",
			'APIException:MissingPOSTAlgo' => "Cabecera X-Elgg-posthash_algo inexistente",
			'APIException:MissingContentType' => "No existe el tipo de contenido en los datos suministrados",
			'SecurityException:InvalidPostHash' => "Datos hasg en POST son inválidos - Se esperaba %s pero obtuvo %s.",
			'SecurityException:DupePacket' => "Firma enviada es reconocida.",
			'SecurityException:InvalidAPIKey' => "Llave API inválida ó inexistente.",
			'NotImplementedException:CallMethodNotImplemented' => "Llamada al método '%s' no es soportada actualmente.",

			'NotImplementedException:XMLRPCMethodNotImplemented' => "La llamada XML-RPC '%s' no ha sido implementada.",
			'InvalidParameterException:UnexpectedReturnFormat' => "Llamada al método '%s' ha obtenido un resultado no esperado.",
			'CallException:NotRPCCall' => "La llamada no parece ser válida XML-RPC",

			'PluginException:NoPluginName' => "El plugin no ha sido encontrado",

			'ConfigurationException:BadDatabaseVersion' => "La base de datos que tienes instalada no se ajusta a los requerimientos para ejecutar Elgg. Por favor consulte su documentación.",
			'ConfigurationException:BadPHPVersion' => "Para ejecucion se requiere almenos PHP version 5.2.",


			'InstallationException:DatarootNotWritable' => "El directorio de datos %s tiene protección contra escritura.",
			'InstallationException:DatarootUnderPath' => "Le directorio de datos %s debe estar por fuera de la ruta de instalación.",
			'InstallationException:DatarootBlank' => "No se ha especificado un directorio de datos.",

		/**
		 * User details
		 */

			'name' => "Nombre para mostrar",
			'email' => "Dirección de correo",
			'username' => "Usuario",
			'password' => "Contraseña",
			'passwordagain' => "Contraseña (nuevamente para verificar)",
			'admin_option' => "¿Convertir este usuario en administrador?",

		/**
		 * Access
		 */

			'ACCESS_PRIVATE' => "Privado",
			'ACCESS_LOGGED_IN' => "Usuarios registrados",
			'ACCESS_PUBLIC' => "Público",
			'PRIVATE' => "Privado",
			'LOGGED_IN' => "Usuarios registrados",
			'PUBLIC' => "Público",
			'access' => "Acceso",

		/**
		 * Dashboard and widgets
		 */

			'dashboard' => "Dashboard",
			'dashboard:nowidgets' => "Esta es la página de inicio del sistema, puedes personalizarla agregando widgets presionando 'Edit page' y así seguir las actualizaciones que ocurran.",

			'widgets:add' => 'Personalizar tu página',
			'widgets:add:description' => "Selecciona las caracteristicas que deseas a tu página arrastrando y soltando desde la <b>Galería de Widgets</b> de la derecha, a cualquiera de las tres areas de abajo, y posicionalas a tu gusto donde quieres que aparezcan.

Para eliminar un widget arrastralo de vuelta a la <b>Galería de Widgets</b>.",
			'widgets:position:fixed' => '(Ajustar posición en la pantalla)',

			'widgets' => "Widgets",
			'widget' => "Widget",
			'item:object:widget' => "Widgets",
			'layout:customise' => "Personalizar",
			'widgets:gallery' => "Widget gallery",
			'widgets:leftcolumn' => "Widgets Izquierda",
			'widgets:fixed' => "Ajustar posición",
			'widgets:middlecolumn' => "Widgets del centro",
			'widgets:rightcolumn' => "Widgets Derecha",
			'widgets:profilebox' => "Área de Perfil",
			'widgets:panel:save:success' => "Tus widgets han sido salvados correctamente.",
			'widgets:panel:save:failure' => "Hubo un error al salvar tus widgets. Intenta nuevamente.",
			'widgets:save:success' => "El widget ha sido salvado correctamente.",
			'widgets:save:failure' => "No pudimos salvar tu widgets. Intenta nuevamente.",


		/**
		 * Groups
		 */

			'group' => "Grupo", 
			'item:group' => "Grupos",

		/**
		 * Profile
		 */

			'profile' => "Perfil",
			'user' => "Usuario",
			'item:user' => "Usuarios",

		/**
		 * Profile menu items and titles
		 */

			'profile:yours' => "Tu perfil",
			'profile:user' => "Perfil de %s",

			'profile:edit' => "Editar perfil",
			'profile:editicon' => "Subir un nuevo avatar",
			'profile:profilepictureinstructions' => "El avatar es la imágen que se muestra en tu página de perfil. <br /> Puedes cambiarlo cuando quieras. (Formatos aceptados: GIF, JPG or PNG)",
			'profile:icon' => "Avatar",
			'profile:createicon' => "Crear tu avatar",
			'profile:currentavatar' => "Avatar actual",
			'profile:createicon:header' => "Avatar",
			'profile:profilepicturecroppingtool' => "Crear avatar de la imagen",
			'profile:createicon:instructions' => "Presiona y arrastra el mouse seleccionando el área que quieras cortar.  Una vista previa de la imágen aparecerá en la zóna derecha.  Cuando estés conforme con el resultado, presiona 'Crear Avatar'. Esta imágen será utilizada en el sitio para identificarte. ",

			'profile:editdetails' => "Editar detalles",
			'profile:editicon' => "Editar avatar",

			'profile:aboutme' => "Acerca de mi", 
			'profile:description' => "Acerca de mi",
			'profile:briefdescription' => "Pequeño resumen",
			'profile:location' => "Localización",
			'profile:skills' => "Habilidades",  
			'profile:interests' => "Intereses", 
			'profile:contactemail' => "Correo de contacto",
			'profile:phone' => "Teléfono",
			'profile:mobile' => "Celular",
			'profile:website' => "Blog/Sitio Web",

			'profile:river:update' => "%s ha actualizado su perfil",
			'profile:river:iconupdate' => "%s ha actualizado su avatar",

		/**
		 * Profile status messages
		 */

			'profile:saved' => "Su perfil ha sido salvado correctamente.",
			'profile:icon:uploaded' => "La imágen ha sido subida correctamente.",

		/**
		 * Profile error messages
		 */

			'profile:noaccess' => "No tiene permisos suficientes para editar este perfil.",
			'profile:notfound' => "Lo sentimos; el perfil especificado no fué encontrado.",
			'profile:cantedit' => "Lo sentimos; no tiene permisos suficientes para editar este perfil.",
			'profile:icon:notfound' => "Lo sentimos; hay un problema al tratar de subir la imágen.",

		/**
		 * Friends
		 */

			'friends' => "Amigos",
			'friends:yours' => "Tus amigos",
			'friends:owned' => "Amigos de %s",
			'friend:add' => "Agregar amigo",
			'friend:remove' => "Eliminar amigo",

			'friends:add:successful' => "Has agregado correctamente %s como tu amigo.",
			'friends:add:failure' => "No pudimos agregar a %s como tu amigo. Por favor intenta nuevamente.",

			'friends:remove:successful' => "%s Ha sido eliminado correctamente de tu lista de amigos.",
			'friends:remove:failure' => "No pudimos eliminar a %s de tu lista de amigos. Por favor intenta nuevamente.",

			'friends:none' => "Este usuario no ha agredado a su listado ningún amigo todavia.",
			'friends:none:you' => "¡Aun no has agregado a tu listado ningún amigo! Busca por el campo de intereses y empieza a encontrar personas para seguir.",

			'friends:none:found' => "No se han encontrado amigos.",

			'friends:of:none' => "Nadie ha agregado a este usuario como amigo todavia.",
			'friends:of:none:you' => "Nadia te ha agregado como su amigo todavia. Inicia agregando contenido y completando tu perfil para facilitar a las personas que te encuentren!",

			'friends:of' => "Amigos de",
			'friends:of:owned' => "Personas que han agregado a %s en su lista de amigos",

			 'friends:num_display' => "Número de amigos a mostrar",
			 'friends:icon_size' => "Tamaño del ícono",
			 'friends:tiny' => "minúsculo",
			 'friends:small' => "pequeño",
			 'friends' => "Amigos",
			 'friends:of' => "Amigos de",
			 'friends:collections' => "Grupo de amigos",
			 'friends:collections:add' => "Nuevo grupo de amigos",
			 'friends:addfriends' => "Agregar amigos",
			 'friends:collectionname' => "Nombre del grupo de amigos",
			 'friends:collectionfriends' => "Amigos en el grupo",
			 'friends:collectionedit' => "Editar este grupo de amigos",
			 'friends:nocollections' => "Aun no tienes grupos de amigos.",
			 'friends:collectiondeleted' => "Tu grupo de amigos ha sido eliminado.",
			 'friends:collectiondeletefailed' => "No podemos eliminar el grupo de amigos. Tal vez no tienes privilegios suficientes, ó algún otro problema ha ocurrido.",
			 'friends:collectionadded' => "Tu grupo de amigos ha sido creado satisfactoriamente",
			 'friends:nocollectionname' => "Necesitas un nombre para este grupo de amigos antes que pueda ser creado.",

			'friends:river:created' => "%s agregó el widget de amigos.",
			'friends:river:updated' => "%s actualizó el widget de amigos.",
			'friends:river:delete' => "%s eliminó su widget de amigos.",
			'friends:river:add' => "%s agregó alguien a su lista de amigos.",

		/**
		 * Feeds
		 */
			'feed:rss' => 'Suscríbete al feed',
			'feed:odd' => 'Sindica OpenDD',

		/**
		 * River
		 */
			'river' => "Río",			
			'river:relationship:friend' => 'es ahora amigo de',

		/**
		 * Plugins
		 */
			'plugins:settings:save:ok' => "Los ajustes para el plugin %s fueron salvados correctamente.",
			'plugins:settings:save:fail' => "Hay un problema al salvar las preferencias para el plugin %s.",
			'plugins:usersettings:save:ok' => "La preferencias de usuario han sido salvadas correctamente en el plugin %s.",
			'plugins:usersettings:save:fail' => "Hay un problema al salvar las preferencias de usuario en el plugin %s.",

		/**
		 * Notifications
		 */
			'notifications:usersettings' => "Ajustes de notificaciones",
			'notifications:methods' => "Por favor especifique cuales métodos va a permitir.",

			'notifications:usersettings:save:ok' => "Los ajustes de notificaciones han sido guardados correctamente.",
			'notifications:usersettings:save:fail' => "Hay un problema al salvar los ajustes de notificaciones.",
		/**
		 * Search
		 */

			'search' => "Buscar",
			'searchtitle' => "Buscar: %s",
			'users:searchtitle' => "Buscando por usuarios: %s",
			'advancedsearchtitle' => "%s con resultados buscando %s",
			'notfound' => "No se encontraron resultados.",
			'next' => "Siguiente",
			'previous' => "Anterior",

			'viewtype:change' => "Cambiar el listado de tipos",
			'viewtype:list' => "Ver listado",
			'viewtype:gallery' => "Galería",

			'tag:search:startblurb' => "Items con tags iguales a '%s':",

			'user:search:startblurb' => "Usuarios iguales a '%s':",
			'user:search:finishblurb' => "Para ver más, presione aquí.",

		/**
		 * Account
		 */

			'account' => "Cuenta",
			'settings' => "Ajustes",

			'register' => "Registrarse",
			'registerok' => "You have successfully registered for %s. To activate your account, please confirm your email address by clicking on the link we sent you.",
			'registerbad' => "Your registration was unsuccessful. The username may already exist, your passwords might not match, or your username or password may be too short.",
			'registerdisabled' => "Registration has been disabled by the system administrator",

			'registration:notemail' => 'The email address you provided does not appear to be a valid email address.',
			'registration:userexists' => 'That username already exists',
			'registration:usernametooshort' => 'Your username must be a minimum of 4 characters long.',
			'registration:passwordtooshort' => 'The password must be a minimum of 6 characters long.',
			'registration:dupeemail' => 'This email address has already been registered.',

			'adduser' => "Add User",
			'adduser:ok' => "You have successfully added a new user.",
			'adduser:bad' => "The new user could not be created.",

			'item:object:reported_content' => "Reported items",

			'user:set:name' => "Account name settings",
			'user:name:label' => "Your name",
			'user:name:success' => "Successfully changed your name on the system.",
			'user:name:fail' => "Could not change your name on the system.",

			'user:set:password' => "Account password",
			'user:password:label' => "Your new password",
			'user:password2:label' => "Your new password again",
			'user:password:success' => "Password changed",
			'user:password:fail' => "Could not change your password on the system.",
			'user:password:fail:notsame' => "The two passwords are not the same!",
			'user:password:fail:tooshort' => "Password is too short!",

			'user:set:language' => "Language settings",
			'user:language:label' => "Your language",
			'user:language:success' => "Your language settings have been updated.",
			'user:language:fail' => "Your language settings could not be saved.",

			'user:username:notfound' => 'Username %s not found.',

			'user:password:lost' => 'Lost password',
			'user:password:resetreq:success' => 'Successfully requested a new password, email sent',
			'user:password:resetreq:fail' => 'Could not request a new password.',

			'user:password:text' => 'To generate a new password, enter your username below. We will send the address of a unique verification page to you via email click on the link in the body of the message and a new password will be sent to you.',

		/**
		 * Administration
		 */

			'admin:configuration:success' => "Your settings have been saved.",
			'admin:configuration:fail' => "Your settings could not be saved.",

			'admin' => "Administration",
			'admin:description' => "The admin panel allows you to control all aspects of the system, from user management to how plugins behave. Choose an option below to get started.",

			'admin:user' => "User Administration",
			'admin:user:description' => "This admin panel allows you to control user settings for your site. Choose an option below to get started.",
			'admin:user:adduser:label' => "Click here to add a new user...",
			'admin:user:opt:linktext' => "Configure users...",
			'admin:user:opt:description' => "Configure users and account information. ",

			'admin:site' => "Site Administration",
			'admin:site:description' => "This admin panel allows you to control global settings for your site. Choose an option below to get started.",
			'admin:site:opt:linktext' => "Configure site...",
			'admin:site:opt:description' => "Configure the site technical and non-technical settings. ",

			'admin:plugins' => "Tool Administration",
			'admin:plugins:description' => "This admin panel allows you to control and configure tools installed on your site.",
			'admin:plugins:opt:linktext' => "Configure tools...",
			'admin:plugins:opt:description' => "Configure the tools installed on the site. ",
			'admin:plugins:label:author' => "Author",
			'admin:plugins:label:copyright' => "Copyright",
			'admin:plugins:label:licence' => "Licence",
			'admin:plugins:label:website' => "URL",
			'admin:plugins:disable:yes' => "Plugin %s was disabled successfully.",
			'admin:plugins:disable:no' => "Plugin %s could not be disabled.",
			'admin:plugins:enable:yes' => "Plugin %s was enabled successfully.",
			'admin:plugins:enable:no' => "Plugin %s could not be enabled.",

			'admin:statistics' => "Statistics",
			'admin:statistics:description' => "This is an overview of statistics on your site. If you need more detailed statistics, a professional administration feature is available.",
			'admin:statistics:opt:description' => "View statistical information about users and objects on your site.",
			'admin:statistics:opt:linktext' => "View statistics...",
			'admin:statistics:label:basic' => "Basic site statistics",
			'admin:statistics:label:numentities' => "Entities on site",
			'admin:statistics:label:numusers' => "Number of users",
			'admin:statistics:label:numonline' => "Number of users online",
			'admin:statistics:label:onlineusers' => "Users online now",
			'admin:statistics:label:version' => "Elgg version",
			'admin:statistics:label:version:release' => "Release",
			'admin:statistics:label:version:version' => "Version",

			'admin:user:label:search' => "Find users:",
			'admin:user:label:seachbutton' => "Search", 

			'admin:user:ban:no' => "Can not ban user",
			'admin:user:ban:yes' => "User banned.",
			'admin:user:unban:no' => "Can not unban user",
			'admin:user:unban:yes' => "User un-banned.",
			'admin:user:delete:no' => "Can not delete user",
			'admin:user:delete:yes' => "User deleted",

			'admin:user:resetpassword:yes' => "Password reset, user notified.",
			'admin:user:resetpassword:no' => "Password could not be reset.",

			'admin:user:makeadmin:yes' => "User is now an admin.",
			'admin:user:makeadmin:no' => "We could not make this user an admin.",

		/**
		 * User settings
		 */
			'usersettings:description' => "The user settings panel allows you to control all your personal settings, from user management to how plugins behave. Choose an option below to get started.",

			'usersettings:statistics' => "Your statistics",
			'usersettings:statistics:opt:description' => "View statistical information about users and objects on your site.",
			'usersettings:statistics:opt:linktext' => "Account statistics",

			'usersettings:user' => "Your settings",
			'usersettings:user:opt:description' => "This allows you to control user settings.",
			'usersettings:user:opt:linktext' => "Change your settings",

			'usersettings:plugins' => "Tools",
			'usersettings:plugins:opt:description' => "Configure settings for your active tools.",
			'usersettings:plugins:opt:linktext' => "Configure your tools...",

			'usersettings:plugins:description' => "This panel allows you to control and configure the personal settings for the tools installed by your system administrator.",
			'usersettings:statistics:label:numentities' => "Your entities",

			'usersettings:statistics:yourdetails' => "Your details",
			'usersettings:statistics:label:name' => "Full name",
			'usersettings:statistics:label:email' => "Email",
			'usersettings:statistics:label:membersince' => "Member since",
			'usersettings:statistics:label:lastlogin' => "Last logged in",



		/**
		 * Generic action words
		 */

			'save' => "Save",
			'cancel' => "Cancel",
			'saving' => "Saving ...",
			'update' => "Update",
			'edit' => "Edit",
			'delete' => "Delete",
			'load' => "Load",
			'upload' => "Upload",
			'ban' => "Ban",
			'unban' => "Unban",
			'enable' => "Enable",
			'disable' => "Disable",
			'request' => "Request",

			'invite' => "Invite",

			'resetpassword' => "Reset password",
			'makeadmin' => "Make admin",

			'option:yes' => "Yes",
			'option:no' => "No",

			'unknown' => 'Unknown',

			'learnmore' => "Click here to learn more.",

			'content' => "content",
			'content:latest' => 'Actividad reciente',
			'content:latest:blurb' => 'En este enlace puedes encontrar el más reciente actividad en el sitio.',

		/**
		 * Generic data words
		 */

			'title' => "Title",
			'description' => "Description",
			'tags' => "Tags",
			'spotlight' => "Spotlight",
			'all' => "All",

			'by' => 'by',

			'annotations' => "Annotations",
			'relationships' => "Relationships",
			'metadata' => "Metadata",

		/**
		 * Input / output strings
		 */

			'deleteconfirm' => "Are you sure you want to delete this item?",
			'fileexists' => "A file has already been uploaded. To replace it, select it below:",

		/**
		 * Import / export
		 */
			'importsuccess' => "Import of data was successful",
			'importfail' => "OpenDD import of data failed.",

		/**
		 * Time
		 */

			'friendlytime:justnow' => "justo ahora",
			'friendlytime:minutes' => "hace %s minutos",
			'friendlytime:minutes:singular' => "hace un minuto",
			'friendlytime:hours' => "hace %s horas",
			'friendlytime:hours:singular' => "hace una hora",
			'friendlytime:days' => "hace %s días",
			'friendlytime:days:singular' => "ayer",

		/**
		 * Installation and system settings
		 */

			'installation:error:htaccess' => "Elgg requires a file called .htaccess to be set in the root directory of its installation. We tried to create it for you, but Elgg doesn't have permission to write to that directory. 

Creating this is easy. Copy the contents of the textbox below into a text editor and save it as .htaccess

",
			'installation:error:settings' => "Elgg couldn't find its settings file. Most of Elgg's settings will be handled for you, but we need you to supply your database details. To do this:

1. Rename engine/settings.example.php to settings.php in your Elgg installation.

2. Open it with a text editor and enter your MySQL database details. If you don't know these, ask your system administrator or technical support for help.

Alternatively, you can enter your database settings below and we will try and do this for you...",

			'installation:error:configuration' => "Once you've corrected any configuration issues, press reload to try again.",

			'installation' => "Installation",
			'installation:success' => "Elgg's database was installed successfully.",
			'installation:configuration:success' => "Your initial configuration settings have been saved. Now register your initial user; this will be your first system administrator.",

			'installation:settings' => "System settings",
			'installation:settings:description' => "Now that the Elgg database has been successfully installed, you need to enter a couple of pieces of information to get your site fully up and running. We've tried to guess where we could, but <b>you should check these details.</b>",

			'installation:settings:dbwizard:prompt' => "Enter your database settings below and hit save:",
			'installation:settings:dbwizard:label:user' => "Database user",
			'installation:settings:dbwizard:label:pass' => "Database password",
			'installation:settings:dbwizard:label:dbname' => "Elgg database",
			'installation:settings:dbwizard:label:host' => "Database hostname (usually 'localhost')",
			'installation:settings:dbwizard:label:prefix' => "Database table prefix (usually 'elgg')",

			'installation:settings:dbwizard:savefail' => "We were unable to save the new settings.php. Please save the following file as engine/settings.php using a text editor.",

			'installation:sitename' => "The name of your site (eg \"My social networking site\"):",
			'installation:sitedescription' => "Short description of your site (optional)",
			'installation:wwwroot' => "The site URL, followed by a trailing slash:",
			'installation:path' => "The full path to your site root on your disk, followed by a trailing slash:",
			'installation:dataroot' => "The full path to the directory where uploaded files will be stored, followed by a trailing slash:",
			'installation:dataroot:warning' => "You must create this directory manually. It should sit in a different directory to your Elgg installation.",
			'installation:language' => "The default language for your site:",
			'installation:debug' => "Debug mode provides extra information which can be used to diagnose faults, however it can slow your system down so should only be used if you are having problems:",
			'installation:debug:label' => "Turn on debug mode",
			'installation:usage' => "This option lets Elgg send anonymous usage statistics back to Curverider.",
			'installation:usage:label' => "Send anonymous usage statistics",
			'installation:view' => "Enter the view which will be used as the default for your site or leave this blank for the default view (if in doubt, leave as default):",

		/**
		 * Welcome
		 */

			'welcome' => "Welcome %s",
			'welcome_message' => "Welcome to this Elgg installation.",

		/**
		 * Emails
		 */
			'email:settings' => "Email settings",
			'email:address:label' => "Your email address",

			'email:save:success' => "New email address saved, verification requested.",
			'email:save:fail' => "Your new email address could not be saved.",

			'email:confirm:success' => "You have confirmed your email address!",
			'email:confirm:fail' => "Your email address could not be verified...",

			'friend:newfriend:subject' => "%s has made you a friend!",
			'friend:newfriend:body' => "%s has made you a friend!

To view their profile, click here:

	%s

You cannot reply to this email.",


			'email:validate:subject' => "%s please confirm your email address!",
			'email:validate:body' => "Hi %s,

Please confirm your email address by clicking on the link below:

%s
",
			'email:validate:success:subject' => "Email validated %s!",
			'email:validate:success:body' => "Hi %s,

Congratulations, you have successfully validated your email address.",


			'email:resetpassword:subject' => "Password reset!",
			'email:resetpassword:body' => "Hi %s,

Your password has been reset to: %s",


			'email:resetreq:subject' => "Request for new password.",
			'email:resetreq:body' => "Hi %s,

Somebody (from the IP address %s) has requested a new password for their account.

If you requested this click on the link below, otherwise ignore this email.

%s
",


		/**
		 * XML-RPC
		 */
			'xmlrpc:noinputdata'	=>	"Input data missing",

		/**
		 * Comments
		 */

			'comments:count' => "%s comentarios",
			'generic_comments:add' => "Agregar un comentario",
			'generic_comments:text' => "Comentario",
			'generic_comment:posted' => "Su comentario ha sido publicado correctamente.",
			'generic_comment:deleted' => "Su comentario ha sido eliminado correctamente.",
			'generic_comment:blank' => "Lo sentimos; necesitas escribir algo en tu comentario antes de publicarlo.",
			'generic_comment:notfound' => "Lo sentimos; no encontramos el item solicitado.",
			'generic_comment:notdeleted' => "Lo sentimos; no podemos borrar este comentario.",
			'generic_comment:failure' => "Un error inesperado ha ocurrido cuando se publicaba el mensaje. Intente nuevamente.",

			'generic_comment:email:subject' => '¡Tienes un nuevo comentario!',
			'generic_comment:email:body' => "Tienes un nuevo comentario en \"%s\" de %s. Y dice:


%s


Para responder a el comentario inicial, visita:

	%s

Para ver el perfil de %s, visita:

	%s

RECUERDA: Este es un mensaje automático, no respondas a el directamente por que no será recibido por destinatario alguno,
Utiliza los enlaces anteriores.

El equipo deCali.org",

		/**
		 * Entities
		 */
			'entity:default:strapline' => 'Created %s by %s',
			'entity:default:missingsupport:popup' => 'This entity cannot be displayed correctly. This may be because it requires support provided by a plugin that is no longer installed.',

			'entity:delete:success' => 'Entity %s has been deleted',
			'entity:delete:fail' => 'Entity %s could not be deleted',


		/**
		 * Action gatekeeper
		 */
			'actiongatekeeper:missingfields' => 'Form is missing __token or __ts fields',
			'actiongatekeeper:tokeninvalid' => 'Token provided by form does not match that generated by server.',
			'actiongatekeeper:timeerror' => 'Form has expired, please refresh and try again.',
			'actiongatekeeper:pluginprevents' => 'A extension has prevented this form from being submitted.',

		/**
		 * Languages according to ISO 639-1
		 */
			"aa" => "Afar",
			"ab" => "Abkhazian",
			"af" => "Afrikaans",
			"am" => "Amharic",
			"ar" => "Arabic",
			"as" => "Assamese",
			"ay" => "Aymara",
			"az" => "Azerbaijani",
			"ba" => "Bashkir",
			"be" => "Byelorussian",
			"bg" => "Bulgarian",
			"bh" => "Bihari",
			"bi" => "Bislama",
			"bn" => "Bengali; Bangla",
			"bo" => "Tibetan",
			"br" => "Breton",
			"ca" => "Catalan",
			"co" => "Corsican",
			"cs" => "Czech",
			"cy" => "Welsh",
			"da" => "Danish",
			"de" => "German",
			"dz" => "Bhutani",
			"el" => "Greek",
			"en" => "English",
			"eo" => "Esperanto",
			"es" => "Spanish",
			"et" => "Estonian",
			"eu" => "Basque",
			"fa" => "Persian",
			"fi" => "Finnish",
			"fj" => "Fiji",
			"fo" => "Faeroese",
			"fr" => "French",
			"fy" => "Frisian",
			"ga" => "Irish",
			"gd" => "Scots / Gaelic",
			"gl" => "Galician",
			"gn" => "Guarani",
			"gu" => "Gujarati",
			"he" => "Hebrew",
			"ha" => "Hausa",
			"hi" => "Hindi",
			"hr" => "Croatian",
			"hu" => "Hungarian",
			"hy" => "Armenian",
			"ia" => "Interlingua",
			"id" => "Indonesian",
			"ie" => "Interlingue",
			"ik" => "Inupiak",
			"in" => "Indonesian",
			"is" => "Icelandic",
			"it" => "Italian",
			"iu" => "Inuktitut",
			"iw" => "Hebrew (obsolete)",
			"ja" => "Japanese",
			"ji" => "Yiddish (obsolete)",
			"jw" => "Javanese",
			"ka" => "Georgian",
			"kk" => "Kazakh",
			"kl" => "Greenlandic",
			"km" => "Cambodian",
			"kn" => "Kannada",
			"ko" => "Korean",
			"ks" => "Kashmiri",
			"ku" => "Kurdish",
			"ky" => "Kirghiz",
			"la" => "Latin",
			"ln" => "Lingala",
			"lo" => "Laothian",
			"lt" => "Lithuanian",
			"lv" => "Latvian/Lettish",
			"mg" => "Malagasy",
			"mi" => "Maori",
			"mk" => "Macedonian",
			"ml" => "Malayalam",
			"mn" => "Mongolian",
			"mo" => "Moldavian",
			"mr" => "Marathi",
			"ms" => "Malay",
			"mt" => "Maltese",
			"my" => "Burmese",
			"na" => "Nauru",
			"ne" => "Nepali",
			"nl" => "Dutch",
			"no" => "Norwegian",
			"oc" => "Occitan",
			"om" => "(Afan) Oromo",
			"or" => "Oriya",
			"pa" => "Punjabi",
			"pl" => "Polish",
			"ps" => "Pashto / Pushto",
			"pt" => "Portuguese",
			"qu" => "Quechua",
			"rm" => "Rhaeto-Romance",
			"rn" => "Kirundi",
			"ro" => "Romanian",
			"ru" => "Russian",
			"rw" => "Kinyarwanda",
			"sa" => "Sanskrit",
			"sd" => "Sindhi",
			"sg" => "Sangro",
			"sh" => "Serbo-Croatian",
			"si" => "Singhalese",
			"sk" => "Slovak",
			"sl" => "Slovenian",
			"sm" => "Samoan",
			"sn" => "Shona",
			"so" => "Somali",
			"sq" => "Albanian",
			"sr" => "Serbian",
			"ss" => "Siswati",
			"st" => "Sesotho",
			"su" => "Sundanese",
			"sv" => "Swedish",
			"sw" => "Swahili",
			"ta" => "Tamil",
			"te" => "Tegulu",
			"tg" => "Tajik",
			"th" => "Thai",
			"ti" => "Tigrinya",
			"tk" => "Turkmen",
			"tl" => "Tagalog",
			"tn" => "Setswana",
			"to" => "Tonga",
			"tr" => "Turkish",
			"ts" => "Tsonga",
			"tt" => "Tatar",
			"tw" => "Twi",
			"ug" => "Uigur",
			"uk" => "Ukrainian",
			"ur" => "Urdu",
			"uz" => "Uzbek",
			"vi" => "Vietnamese",
			"vo" => "Volapuk",
			"wo" => "Wolof",
			"xh" => "Xhosa",
			"y" => "Yiddish",
			"yo" => "Yoruba",
			"za" => "Zuang",
			"zh" => "Chinese",
			"zu" => "Zulu",
	);

	add_translation("es",$spanish);

?>

