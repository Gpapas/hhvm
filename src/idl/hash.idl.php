<?php
/**
 * Automatically generated by running "php schema.php hash".
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
    'name'   => "hash",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns a string containing the calculated message digest as lowercase hexits unless raw_output is set to true in which case the raw binary representation of the message digest is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "algo",
        'type'   => String,
        'desc'   => "Name of selected hashing algorithm (i.e. \"md5\", \"sha256\", \"haval160,4\", etc..)",
      ),
      array(
        'name'   => "data",
        'type'   => String,
        'desc'   => "Message to be hashed.",
      ),
      array(
        'name'   => "raw_output",
        'type'   => Boolean,
        'value'  => "false",
        'desc'   => "When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hash_algos",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => StringVec,
      'desc'   => "Returns a numerically indexed array containing the list of supported hashing algorithms.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "hash_init",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns a Hashing Context resource for use with hash_update(), hash_update_stream(), hash_update_file(), and hash_final().",
    ),
    'args'   => array(
      array(
        'name'   => "algo",
        'type'   => String,
        'desc'   => "Name of selected hashing algorithm (i.e. \"md5\", \"sha256\", \"haval160,4\", etc..)",
      ),
      array(
        'name'   => "options",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "Optional settings for hash generation, currently supports only one option: HASH_HMAC. When specified, the key must be specified.",
      ),
      array(
        'name'   => "key",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "When HASH_HMAC is specified for options, a shared secret key to be used with the HMAC hashing method must be supplied in this parameter.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hash_file",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns a string containing the calculated message digest as lowercase hexits unless raw_output is set to true in which case the raw binary representation of the message digest is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "algo",
        'type'   => String,
        'desc'   => "Name of selected hashing algorithm (i.e. \"md5\", \"sha256\", \"haval160,4\", etc..)",
      ),
      array(
        'name'   => "filename",
        'type'   => String,
        'desc'   => "URL describing location of file to be hashed; Supports fopen wrappers.",
      ),
      array(
        'name'   => "raw_output",
        'type'   => Boolean,
        'value'  => "false",
        'desc'   => "When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hash_final",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "Returns a string containing the calculated message digest as lowercase hexits unless raw_output is set to true in which case the raw binary representation of the message digest is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "context",
        'type'   => Resource,
        'desc'   => "Hashing context returned by hash_init().",
      ),
      array(
        'name'   => "raw_output",
        'type'   => Boolean,
        'value'  => "false",
        'desc'   => "When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hash_hmac_file",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns a string containing the calculated message digest as lowercase hexits unless raw_output is set to true in which case the raw binary representation of the message digest is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "algo",
        'type'   => String,
        'desc'   => "Name of selected hashing algorithm (i.e. \"md5\", \"sha256\", \"haval160,4\", etc..) See hash_algos() for a list of supported algorithms.",
      ),
      array(
        'name'   => "filename",
        'type'   => String,
        'desc'   => "URL describing location of file to be hashed; Supports fopen wrappers.",
      ),
      array(
        'name'   => "key",
        'type'   => String,
        'desc'   => "Shared secret key used for generating the HMAC variant of the message digest.",
      ),
      array(
        'name'   => "raw_output",
        'type'   => Boolean,
        'value'  => "false",
        'desc'   => "When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hash_hmac",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns a string containing the calculated message digest as lowercase hexits unless raw_output is set to true in which case the raw binary representation of the message digest is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "algo",
        'type'   => String,
        'desc'   => "Name of selected hashing algorithm (i.e. \"md5\", \"sha256\", \"haval160,4\", etc..) See hash_algos() for a list of supported algorithms.",
      ),
      array(
        'name'   => "data",
        'type'   => String,
        'desc'   => "Message to be hashed.",
      ),
      array(
        'name'   => "key",
        'type'   => String,
        'desc'   => "Shared secret key used for generating the HMAC variant of the message digest.",
      ),
      array(
        'name'   => "raw_output",
        'type'   => Boolean,
        'value'  => "false",
        'desc'   => "When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hash_update_file",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "init_context",
        'type'   => Resource,
        'desc'   => "Hashing context returned by hash_init().",
      ),
      array(
        'name'   => "filename",
        'type'   => String,
        'desc'   => "URL describing location of file to be hashed; Supports fopen wrappers.",
      ),
      array(
        'name'   => "stream_context",
        'type'   => Resource,
        'value'  => "null",
        'desc'   => "Stream context as returned by stream_context_create().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hash_update_stream",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Int32,
      'desc'   => "Actual number of bytes added to the hashing context from handle.",
    ),
    'args'   => array(
      array(
        'name'   => "context",
        'type'   => Resource,
        'desc'   => "Hashing context returned by hash_init().",
      ),
      array(
        'name'   => "handle",
        'type'   => Resource,
        'desc'   => "Open file handle as returned by any stream creation function.",
      ),
      array(
        'name'   => "length",
        'type'   => Int32,
        'value'  => "-1",
        'desc'   => "Maximum number of characters to copy from handle into the hashing context.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hash_update",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE.",
    ),
    'args'   => array(
      array(
        'name'   => "context",
        'type'   => Resource,
        'desc'   => "Hashing context returned by hash_init().",
      ),
      array(
        'name'   => "data",
        'type'   => String,
        'desc'   => "Message to be included in the hash digest.",
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

