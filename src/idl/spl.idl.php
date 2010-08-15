<?php
/**
 * Automatically generated by running "php schema.php spl".
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
    'name'   => "spl_classes",
    'desc'   => "This function returns an array with the current available SPL classes.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => StringMap,
      'desc'   => "Returns an array containing the currently available SPL classes.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "spl_object_hash",
    'desc'   => "This function returns a unique identifier for the object. This id can be used as a hash key for storing objects or for identifying an object.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "A string that is unique for each currently existing object and is always the same for each object.",
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Object,
        'desc'   => "Any object.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "class_implements",
    'desc'   => "This function returns an array with the names of the interfaces that the given class and its parents implement.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "An array on success, or FALSE on error.",
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Variant,
        'desc'   => "An object (class instance) or a string (class name).",
      ),
      array(
        'name'   => "autoload",
        'type'   => Boolean,
        'value'  => "true",
        'desc'   => "Whether to allow this function to load the class automatically through the __autoload magic method.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "class_parents",
    'desc'   => "This function returns an array with the name of the parent classes of the given class.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "An array on success, or FALSE on error.",
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Variant,
        'desc'   => "An object (class instance) or a string (class name).",
      ),
      array(
        'name'   => "autoload",
        'type'   => Boolean,
        'value'  => "true",
        'desc'   => "Whether to allow this function to load the class automatically through the __autoload magic method.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "iterator_apply",
    'desc'   => "Calls a function for every element in an iterator.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns the iteration count.",
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Variant,
        'desc'   => "The class to iterate over.",
      ),
      array(
        'name'   => "func",
        'type'   => Variant,
        'desc'   => "The callback function to call on every element. The function must return TRUE in order to continue iterating over the iterator.",
      ),
      array(
        'name'   => "params",
        'type'   => VariantMap,
        'value'  => "null_array",
        'desc'   => "Arguments to pass to the callback function.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "iterator_count",
    'desc'   => "Count the elements in an iterator.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "The number of elements in iterator.",
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Variant,
        'desc'   => "The iterator being counted.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "iterator_to_array",
    'desc'   => "Copy the elements of an iterator into an array.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "An array containing the elements of the iterator.",
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Variant,
        'desc'   => "The iterator being copied.",
      ),
      array(
        'name'   => "use_keys",
        'type'   => Boolean,
        'value'  => "true",
        'desc'   => "Whether to use the iterator element keys as index.",
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

