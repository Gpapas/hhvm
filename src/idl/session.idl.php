<?php
/**
 * Automatically generated by running "php schema.php session".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )

DefineFunction(
  array(
    'name'   => "session_set_cookie_params",
    'desc'   => "Set cookie parameters defined in the php.ini file. The effect of this function only lasts for the duration of the script. Thus, you need to call session_set_cookie_params() for every request and before session_start() is called.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
      'desc'   => "No value is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "lifetime",
        'type'   => Int64,
        'desc'   => "Lifetime of the session cookie, defined in seconds.",
      ),
      array(
        'name'   => "path",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "Path on the domain where the cookie will work. Use a single slash ('/') for all paths on the domain.",
      ),
      array(
        'name'   => "domain",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "Cookie domain, for example 'www.php.net'. To make cookies visible on all subdomains then the domain must be prefixed with a dot like '.php.net'.",
      ),
      array(
        'name'   => "secure",
        'type'   => Variant,
        'value'  => "null",
        'desc'   => "If TRUE cookie will only be sent over secure connections.",
      ),
      array(
        'name'   => "httponly",
        'type'   => Variant,
        'value'  => "null",
        'desc'   => "If set to TRUE then PHP will attempt to send the httponly flag when setting the session cookie.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_get_cookie_params",
    'desc'   => "Gets the session cookie parameters.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => StringMap,
      'desc'   => "Returns an array with the current session cookie information, the array contains the following items: \"lifetime\" - The lifetime of the cookie in seconds. \"path\" - The path where information is stored. \"domain\" - The domain of the cookie. \"secure\" - The cookie should only be sent over secure connections. \"httponly\" - The cookie can only be accessed through the HTTP protocol.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_name",
    'desc'   => "session_name() returns the name of the current session. If name is given, session_name() will update the session name and return the old session name.\n\nThe session name is reset to the default value stored in session.name at request startup time. Thus, you need to call session_name() for every request (and before session_start() or session_register() are called).",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "Returns the name of the current session.",
    ),
    'args'   => array(
      array(
        'name'   => "newname",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "The session name references the session id in cookies and URLs. It should contain only alphanumeric characters; it should be short and descriptive (i.e. for users with enabled cookie warnings). If name is specified, the name of the current session is changed to its value.\n\nWarning\n\nThe session name can't consist of digits only, at least one letter must be present. Otherwise a new session id is generated every time.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_module_name",
    'desc'   => "session_module_name() gets the name of the current session module.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns the name of the current session module.",
    ),
    'args'   => array(
      array(
        'name'   => "newname",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "If module is specified, that module will be used instead.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_set_save_handler",
    'desc'   => "session_set_save_handler() sets the user-level session storage functions which are used for storing and retrieving data associated with a session. This is most useful when a storage method other than those supplied by PHP sessions is preferred. i.e. Storing the session data in a local database.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "open",
        'type'   => String,
        'desc'   => "Open function, this works like a constructor in classes and is executed when the session is being opened. The open function expects two parameters, where the first is the save path and the second is the session name.",
      ),
      array(
        'name'   => "close",
        'type'   => String,
        'desc'   => "Close function, this works like a destructor in classes and is executed when the session operation is done.",
      ),
      array(
        'name'   => "read",
        'type'   => String,
        'desc'   => "Read function must return string value always to make save handler work as expected. Return empty string if there is no data to read. Return values from other handlers are converted to boolean expression. TRUE for success, FALSE for failure.",
      ),
      array(
        'name'   => "write",
        'type'   => String,
        'desc'   => "Write function that is called when session data is to be saved. This function expects two parameters: an identifier and the data associated with it.\n\nThe \"write\" handler is not executed until after the output stream is closed. Thus, output from debugging statements in the \"write\" handler will never be seen in the browser. If debugging output is necessary, it is suggested that the debug output be written to a file instead.",
      ),
      array(
        'name'   => "destroy",
        'type'   => String,
        'desc'   => "The destroy handler, this is executed when a session is destroyed with session_destroy() and takes the session id as its only parameter.",
      ),
      array(
        'name'   => "gc",
        'type'   => String,
        'desc'   => "The garbage collector, this is executed when the session garbage collector is executed and takes the max session lifetime as its only parameter.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_save_path",
    'desc'   => "session_save_path() returns the path of the current directory used to save session data.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "Returns the path of the current directory used for data storage.",
    ),
    'args'   => array(
      array(
        'name'   => "newname",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "Session data path. If specified, the path to which data is saved will be changed. session_save_path() needs to be called before session_start() for that purpose.\n\n\n\nOn some operating systems, you may want to specify a path on a filesystem that handles lots of small files efficiently. For example, on Linux, reiserfs may provide better performance than ext2fs.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_id",
    'desc'   => "session_id() is used to get or set the session id for the current session.\n\nThe constant SID can also be used to retrieve the current name and session id as a string suitable for adding to URLs. See also Session handling.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "session_id() returns the session id for the current session or the empty string (\"\") if there is no current session (no current session id exists).",
    ),
    'args'   => array(
      array(
        'name'   => "newid",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "If id is specified, it will replace the current session id. session_id() needs to be called before session_start() for that purpose. Depending on the session handler, not all characters are allowed within the session id. For example, the file session handler only allows characters in the range a-z A-Z 0-9 , (comma) and - (minus)! When using session cookies, specifying an id for session_id() will always send a new cookie when session_start() is called, regardless if the current session id is identical to the one being set.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_regenerate_id",
    'desc'   => "session_regenerate_id() will replace the current session id with a new one, and keep the current session information.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "delete_old_session",
        'type'   => Boolean,
        'value'  => "false",
        'desc'   => "Whether to delete the old associated session file or not.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_cache_limiter",
    'desc'   => "session_cache_limiter() returns the name of the current cache limiter.\n\nThe cache limiter defines which cache control HTTP headers are sent to the client. These headers determine the rules by which the page content may be cached by the client and intermediate proxies. Setting the cache limiter to nocache disallows any client/proxy caching. A value of public permits caching by proxies and the client, whereas private disallows caching by proxies and permits the client to cache the contents.\n\nIn private mode, the Expire header sent to the client may cause confusion for some browsers, including Mozilla. You can avoid this problem by using private_no_expire mode. The Expire header is never sent to the client in this mode.\n\nThe cache limiter is reset to the default value stored in session.cache_limiter at request startup time. Thus, you need to call session_cache_limiter() for every request (and before session_start() is called).",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "Returns the name of the current cache limiter.",
    ),
    'args'   => array(
      array(
        'name'   => "new_cache_limiter",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "If cache_limiter is specified, the name of the current cache limiter is changed to the new value. Possible values Value Headers sent public\n\nprivate_no_expire\n\nprivate\n\nnocache",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_cache_expire",
    'desc'   => "session_cache_expire() returns the current setting of session.cache_expire.\n\nThe cache expire is reset to the default value of 180 stored in session.cache_limiter at request startup time. Thus, you need to call session_cache_expire() for every request (and before session_start() is called).",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Int64,
      'desc'   => "Returns the current setting of session.cache_expire. The value returned should be read in minutes, defaults to 180.",
    ),
    'args'   => array(
      array(
        'name'   => "new_cache_expire",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "If new_cache_expire is given, the current cache expire is replaced with new_cache_expire.\n\nSetting new_cache_expire is of value only, if session.cache_limiter is set to a value different from nocache.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_encode",
    'desc'   => "session_encode() returns a string with the contents of the current session encoded within.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns the contents of the current session encoded.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_decode",
    'desc'   => "session_decode() decodes the session data in data, setting variables stored in the session.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "data",
        'type'   => String,
        'desc'   => "The encoded data to be stored.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_start",
    'desc'   => "session_start() creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.\n\nTo use a named session, call session_name() before calling session_start().\n\nWhen session.use_trans_sid is enabled, the session_start() function will register an internal output handler for URL rewriting.\n\nIf a user uses ob_gzhandler or similar with ob_start(), the function order is important for proper output. For example, ob_gzhandler must be registered before starting the session.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "This function returns TRUE if a session was successfully started, otherwise FALSE.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_destroy",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_unset",
    'desc'   => "The session_unset() function frees all session variables currently registered.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "No value is returned.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_commit",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_write_close",
    'desc'   => "End the current session and store session data.\n\nSession data is usually stored after your script terminated without the need to call session_write_close(), but as session data is locked to prevent concurrent writes only one script may operate on a session at any time. When using framesets together with sessions you will experience the frames loading one by one due to this locking. You can reduce the time needed to load all the frames by ending the session as soon as all changes to session variables are done.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
      'desc'   => "No value is returned. Session PgSQL session_unset Last updated: Fri, 13 Aug 2010  ",
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_register",
    'desc'   => "session_register() accepts a variable number of arguments, any of which can be either a string holding the name of a variable or an array consisting of variable names or other arrays. For each name, session_register() registers the global variable with that name in the current session.\n\nYou can also create a session variable by simply setting the appropriate member of the \$_SESSION or \$HTTP_SESSION_VARS (PHP < 4.1.0) array.\n\n\n\nIf session_start() was not called before this function is called, an implicit call to session_start() with no parameters will be made. \$_SESSION does not mimic this behavior and requires session_start() before use. WarningThis function has been DEPRECATED as of PHP 5.3.0. Relying on this feature is highly discouraged.",
    'flags'  =>  HasDocComment | VariableArguments,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "var_names",
        'type'   => Variant,
        'desc'   => "A string holding the name of a variable or an array consisting of variable names or other arrays.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_unregister",
    'desc'   => "session_unregister() unregisters the global variable named name from the current session. WarningThis function has been DEPRECATED as of PHP 5.3.0. Relying on this feature is highly discouraged.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "varname",
        'type'   => String,
        'desc'   => "The variable name.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "session_is_registered",
    'desc'   => "Finds out whether a global variable is registered in a session. WarningThis function has been DEPRECATED as of PHP 5.3.0. Relying on this feature is highly discouraged.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "session_is_registered() returns TRUE if there is a global variable with the name name registered in the current session, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "varname",
        'type'   => String,
        'desc'   => "The variable name.",
      ),
    ),
  ));


///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

