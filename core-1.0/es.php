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
	
			'InstallationException:CantCreateSite' => "Unable to create a default ElggSite with credentials Name:%s, Url: %s",
		
			'actionundefined' => "The requested action (%s) was not defined in the system.",
			'actionloggedout' => "Sorry, you cannot perform this action while logged out.",
	
			'notfound' => "The requested resource could not be found, or you do not have access to it.",
			
			'SecurityException:Codeblock' => "Denied access to execute privileged code block",
			'DatabaseException:WrongCredentials' => "Elgg couldn't connect to the database using the given credentials %s@%s (pw: %s).",
			'DatabaseException:NoConnect' => "Elgg couldn't select the database '%s', please check that the database is created and you have access to it.",
			'SecurityException:FunctionDenied' => "Access to privileged function '%s' is denied.",
			'DatabaseException:DBSetupIssues' => "There were a number of issues: ",
			'DatabaseException:ScriptNotFound' => "Elgg couldn't find the requested database script at %s.",
			
			'IOException:FailedToLoadGUID' => "Failed to load new %s from GUID:%d",
			'InvalidParameterException:NonElggObject' => "Passing a non-ElggObject to an ElggObject constructor!",
			'InvalidParameterException:UnrecognisedValue' => "Unrecognised value passed to constuctor.",
			
			'InvalidClassException:NotValidElggStar' => "GUID:%d is not a valid %s",
			
			'PluginException:MisconfiguredPlugin' => "%s is a misconfigured plugin.",
			
			'InvalidParameterException:NonElggUser' => "Passing a non-ElggUser to an ElggUser constructor!",
			
			'InvalidParameterException:NonElggSite' => "Passing a non-ElggSite to an ElggSite constructor!",
			
			'InvalidParameterException:NonElggGroup' => "Passing a non-ElggGroup to an ElggGroup constructor!",
	
			'IOException:UnableToSaveNew' => "Unable to save new %s",
			
			'InvalidParameterException:GUIDNotForExport' => "GUID has not been specified during export, this should never happen.",
			'InvalidParameterException:NonArrayReturnValue' => "Entity serialisation function passed a non-array returnvalue parameter",
			
			'ConfigurationException:NoCachePath' => "Cache path set to nothing!",
			'IOException:NotDirectory' => "%s is not a directory.",
			
			'IOException:BaseEntitySaveFailed' => "Unable to save new object's base entity information!",
			'InvalidParameterException:UnexpectedODDClass' => "import() passed an unexpected ODD class",
			'InvalidParameterException:EntityTypeNotSet' => "Entity type must be set.",
			
			'ClassException:ClassnameNotClass' => "%s is not a %s.",
			'ClassNotFoundException:MissingClass' => "Class '%s' was not found, missing plugin?",
			'InstallationException:TypeNotSupported' => "Type %s is not supported. This indicates an error in your installation, most likely caused by an incomplete upgrade.",

			'ImportException:ImportFailed' => "Could not import element %d",
			'ImportException:ProblemSaving' => "There was a problem saving %s",
			'ImportException:NoGUID' => "New entity created but has no GUID, this should not happen.",
			
			'ImportException:GUIDNotFound' => "Entity '%d' could not be found.",
			'ImportException:ProblemUpdatingMeta' => "There was a problem updating '%s' on entity '%d'",
			
			'ExportException:NoSuchEntity' => "No such entity GUID:%d", 
			
			'ImportException:NoODDElements' => "No OpenDD elements found in import data, import failed.",
			'ImportException:NotAllImported' => "Not all elements were imported.",
			
			'InvalidParameterException:UnrecognisedFileMode' => "Unrecognised file mode '%s'",
			'InvalidParameterException:MissingOwner' => "All files must have an owner!",
			'IOException:CouldNotMake' => "Could not make %s",
			'IOException:MissingFileName' => "You must specify a name before opening a file.",
			'ClassNotFoundException:NotFoundNotSavedWithFile' => "Filestore not found or class not saved with file!",
			'NotificationException:NoNotificationMethod' => "No notification method specified.",
			'NotificationException:NoHandlerFound' => "No handler found for '%s' or it was not callable.",
			'NotificationException:ErrorNotifyingGuid' => "There was an error while notifying %d",
			'NotificationException:NoEmailAddress' => "Could not get the email address for GUID:%d",
			'NotificationException:MissingParameter' => "Missing a required parameter, '%s'",
			
			'DatabaseException:WhereSetNonQuery' => "Where set contains non WhereQueryComponent",
			'DatabaseException:SelectFieldsMissing' => "Fields missing on a select style query",
			'DatabaseException:UnspecifiedQueryType' => "Unrecognised or unspecified query type.",
			'DatabaseException:NoTablesSpecified' => "No tables specified for query.",
			'DatabaseException:NoACL' => "No access control was provided on query",
			
			'InvalidParameterException:NoEntityFound' => "No entity found, it either doesn't exist or you don't have access to it.",
			
			'InvalidParameterException:GUIDNotFound' => "GUID:%s could not be found, or you can not access it.",
			'InvalidParameterException:IdNotExistForGUID' => "Sorry, '%s' does not exist for guid:%d",
			'InvalidParameterException:CanNotExportType' => "Sorry, I don't know how to export '%s'",
			'InvalidParameterException:NoDataFound' => "Could not find any data.",
			'InvalidParameterException:DoesNotBelong' => "Does not belong to entity.",
			'InvalidParameterException:DoesNotBelongOrRefer' => "Does not belong to entity or refer to entity.",
			'InvalidParameterException:MissingParameter' => "Missing parameter, you need to provide a GUID.",
			
			'SecurityException:APIAccessDenied' => "Sorry, API access has been disabled by the administrator.",
			'SecurityException:NoAuthMethods' => "No authentication methods were found that could authenticate this API request.",
			'APIException:ApiResultUnknown' => "API Result is of an unknown type, this should never happen.", 
			
			'ConfigurationException:NoSiteID' => "No site ID has been specified.",
			'InvalidParameterException:UnrecognisedMethod' => "Unrecognised call method '%s'",
			'APIException:MissingParameterInMethod' => "Missing parameter %s in method %s",
			'APIException:ParameterNotArray' => "%s does not appear to be an array.",
			'APIException:UnrecognisedTypeCast' => "Unrecognised type in cast %s for variable '%s' in method '%s'",
			'APIException:InvalidParameter' => "Invalid parameter found for '%s' in method '%s'.",
			'APIException:FunctionParseError' => "%s(%s) has a parsing error.",
			'APIException:FunctionNoReturn' => "%s(%s) returned no value.",
			'SecurityException:AuthTokenExpired' => "Authentication token either missing, invalid or expired.",
			'CallException:InvalidCallMethod' => "%s must be called using '%s'",
			'APIException:MethodCallNotImplemented' => "Method call '%s' has not been implemented.",
			'APIException:AlgorithmNotSupported' => "Algorithm '%s' is not supported or has been disabled.",
			'ConfigurationException:CacheDirNotSet' => "Cache directory 'cache_path' not set.",
			'APIException:NotGetOrPost' => "Request method must be GET or POST",
			'APIException:MissingAPIKey' => "Missing X-Elgg-apikey HTTP header",
			'APIException:MissingHmac' => "Missing X-Elgg-hmac header",
			'APIException:MissingHmacAlgo' => "Missing X-Elgg-hmac-algo header",
			'APIException:MissingTime' => "Missing X-Elgg-time header",
			'APIException:TemporalDrift' => "X-Elgg-time is too far in the past or future. Epoch fail.",
			'APIException:NoQueryString' => "No data on the query string",
			'APIException:MissingPOSTHash' => "Missing X-Elgg-posthash header",
			'APIException:MissingPOSTAlgo' => "Missing X-Elgg-posthash_algo header",
			'APIException:MissingContentType' => "Missing content type for post data",
			'SecurityException:InvalidPostHash' => "POST data hash is invalid - Expected %s but got %s.",
			'SecurityException:DupePacket' => "Packet signature already seen.",
			'SecurityException:InvalidAPIKey' => "Invalid or missing API Key.",
			'NotImplementedException:CallMethodNotImplemented' => "Call method '%s' is currently not supported.",
	
			'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC method call '%s' not implemented.",
			'InvalidParameterException:UnexpectedReturnFormat' => "Call to method '%s' returned an unexpected result.",
			'CallException:NotRPCCall' => "Call does not appear to be a valid XML-RPC call",
	
			'PluginException:NoPluginName' => "The plugin name could not be found",
	
			'ConfigurationException:BadDatabaseVersion' => "The database backend you have installed doesn't meet the basic requirements to run Elgg. Please consult your documentation.",
			'ConfigurationException:BadPHPVersion' => "You need at least PHP version 5.2 to run Elgg.",
			
	
			'InstallationException:DatarootNotWritable' => "Your data directory %s is not writable.",
			'InstallationException:DatarootUnderPath' => "Your data directory %s must be outside of your install path.",
			'InstallationException:DatarootBlank' => "You have not specified a data directory.",
	
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
	
			'profile:saved' => "Your profile was successfully saved.",
			'profile:icon:uploaded' => "Your profile picture was successfully uploaded.",
	
		/**
		 * Profile error messages
		 */
	
			'profile:noaccess' => "You do not have permission to edit this profile.",
			'profile:notfound' => "Sorry; we could not find the specified profile.",
			'profile:cantedit' => "Sorry; you do not have permission to edit this profile.",
			'profile:icon:notfound' => "Sorry; there was a problem uploading your profile picture.",
	
		/**
		 * Friends
		 */
	
			'friends' => "Amigos",
			'friends:yours' => "Tus amigos",
			'friends:owned' => "Amigos de %s",
			'friend:add' => "Agregar amigo",
			'friend:remove' => "Eliminar amigo",
	
			'friends:add:successful' => "You have successfully added %s as a friend.",
			'friends:add:failure' => "We couldn't add %s as a friend. Please try again.",
	
			'friends:remove:successful' => "You have successfully removed %s from your friends.",
			'friends:remove:failure' => "We couldn't remove %s from your friends. Please try again.",
	
			'friends:none' => "This user hasn't added anyone as a friend yet.",
			'friends:none:you' => "You haven't added anyone as a friend! Search for your interests to begin finding people to follow.",
	
			'friends:none:found' => "No friends were found.",
	
			'friends:of:none' => "Nobody has added this user as a friend yet.",
			'friends:of:none:you' => "Nobody has added you as a friend yet. Start adding content and fill in your profile to let people find you!",
	
			'friends:of' => "Friends of",
			'friends:of:owned' => "People who have made %s a friend",

			 'friends:num_display' => "Number of friends to display",
			 'friends:icon_size' => "Icon size",
			 'friends:tiny' => "tiny",
			 'friends:small' => "small",
			 'friends' => "Friends",
			 'friends:of' => "Friends of",
			 'friends:collections' => "Collections of friends",
			 'friends:collections:add' => "New friends collection",
			 'friends:addfriends' => "Add friends",
			 'friends:collectionname' => "Collection name",
			 'friends:collectionfriends' => "Friends in collection",
			 'friends:collectionedit' => "Edit this collection",
			 'friends:nocollections' => "You do not yet have any collections.",
			 'friends:collectiondeleted' => "Your collection has been deleted.",
			 'friends:collectiondeletefailed' => "We were unable to delete the collection. Either you don't have permission, or some other problem has occurred.",
			 'friends:collectionadded' => "Your collection was successfuly created",
			 'friends:nocollectionname' => "You need to give your collection a name before it can be created.",
		
	        'friends:river:created' => "%s added the friends widget.",
	        'friends:river:updated' => "%s updated their friends widget.",
	        'friends:river:delete' => "%s removed their friends widget.",
	        'friends:river:add' => "%s add someone as a friend.",
	
		/**
		 * Feeds
		 */
			'feed:rss' => 'Subscribe to feed',
			'feed:odd' => 'Syndicate OpenDD',
	
		/**
		 * River
		 */
			'river' => "River",			
			'river:relationship:friend' => 'is now friends with',

		/**
		 * Plugins
		 */
			'plugins:settings:save:ok' => "Settings for the %s plugin were saved successfully.",
			'plugins:settings:save:fail' => "There was a problem saving settings for the %s plugin.",
			'plugins:usersettings:save:ok' => "User settings for the %s plugin were saved successfully.",
			'plugins:usersettings:save:fail' => "There was a problem saving  user settings for the %s plugin.",
			
		/**
		 * Notifications
		 */
			'notifications:usersettings' => "Notification settings",
			'notifications:methods' => "Please specify which methods you want to permit.",
	
			'notifications:usersettings:save:ok' => "Your notification settings were successfully saved.",
			'notifications:usersettings:save:fail' => "There was a problem saving your notification settings.",
		/**
		 * Search
		 */
	
			'search' => "Search",
			'searchtitle' => "Search: %s",
			'users:searchtitle' => "Searching for users: %s",
			'advancedsearchtitle' => "%s with results matching %s",
			'notfound' => "No results found.",
			'next' => "Next",
			'previous' => "Previous",
	
			'viewtype:change' => "Change listing type",
			'viewtype:list' => "List view",
			'viewtype:gallery' => "Gallery",
	
			'tag:search:startblurb' => "Items with tags matching '%s':",

			'user:search:startblurb' => "Users matching '%s':",
			'user:search:finishblurb' => "To view more, click here.",
	
		/**
		 * Account
		 */
	
			'account' => "Account",
			'settings' => "Settings",
	
			'register' => "Register",
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
