<?php
/**
 * Automatically generated by running "php schema.php socket".
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
    'name'   => "socket_create",
    'desc'   => "Creates and returns a socket resource, also referred to as an endpoint of communication. A typical network connection is made up of 2 sockets, one performing the role of the client, and another performing the role of the server.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "socket_create() returns a socket resource on success, or FALSE on error. The actual error code can be retrieved by calling socket_last_error(). This error code may be passed to socket_strerror() to get a textual explanation of the error.",
    ),
    'args'   => array(
      array(
        'name'   => "domain",
        'type'   => Int32,
        'desc'   => "The domain parameter specifies the protocol family to be used by the socket. Available address/protocol families Domain Description AF_INET IPv4 Internet based protocols. TCP and UDP are common protocols of this protocol family. AF_INET6 IPv6 Internet based protocols. TCP and UDP are common protocols of this protocol family. AF_UNIX Local communication protocol family. High efficiency and low overhead make it a great form of IPC (Interprocess Communication).",
      ),
      array(
        'name'   => "type",
        'type'   => Int32,
        'desc'   => "The type parameter selects the type of communication to be used by the socket. Available socket types Type Description SOCK_STREAM Provides sequenced, reliable, full-duplex, connection-based byte streams. An out-of-band data transmission mechanism may be supported. The TCP protocol is based on this socket type. SOCK_DGRAM Supports datagrams (connectionless, unreliable messages of a fixed maximum length). The UDP protocol is based on this socket type. SOCK_SEQPACKET Provides a sequenced, reliable, two-way connection-based data transmission path for datagrams of fixed maximum length; a consumer is required to read an entire packet with each read call. SOCK_RAW Provides raw network protocol access. This special type of socket can be used to manually construct any type of protocol. A common use for this socket type is to perform ICMP requests (like ping). SOCK_RDM Provides a reliable datagram layer that does not guarantee ordering. This is most likely not implemented on your operating system.",
      ),
      array(
        'name'   => "protocol",
        'type'   => Int32,
        'desc'   => "The protocol parameter sets the specific protocol within the specified domain to be used when communicating on the returned socket. The proper value can be retrieved by name by using getprotobyname(). If the desired protocol is TCP, or UDP the corresponding constants SOL_TCP, and SOL_UDP can also be used. Common protocols Name Description icmp The Internet Control Message Protocol is used primarily by gateways and hosts to report errors in datagram communication. The \"ping\" command (present in most modern operating systems) is an example application of ICMP. udp The User Datagram Protocol is a connectionless, unreliable, protocol with fixed record lengths. Due to these aspects, UDP requires a minimum amount of protocol overhead. tcp The Transmission Control Protocol is a reliable, connection based, stream oriented, full duplex protocol. TCP guarantees that all data packets will be received in the order in which they were sent. If any packet is somehow lost during communication, TCP will automatically retransmit the packet until the destination host acknowledges that packet. For reliability and performance reasons, the TCP implementation itself decides the appropriate octet boundaries of the underlying datagram communication layer. Therefore, TCP applications must allow for the possibility of partial record transmission.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_create_listen",
    'desc'   => "socket_create_listen() creates a new socket resource of type AF_INET listening on all local interfaces on the given port waiting for new connections.\n\nThis function is meant to ease the task of creating a new socket which only listens to accept new connections.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "socket_create_listen() returns a new socket resource on success or FALSE on error. The error code can be retrieved with socket_last_error(). This code may be passed to socket_strerror() to get a textual explanation of the error.",
    ),
    'args'   => array(
      array(
        'name'   => "port",
        'type'   => Int32,
        'desc'   => "The port on which to listen on all interfaces.",
      ),
      array(
        'name'   => "backlog",
        'type'   => Int32,
        'value'  => "128",
        'desc'   => "The backlog parameter defines the maximum length the queue of pending connections may grow to. SOMAXCONN may be passed as backlog parameter, see socket_listen() for more information.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_create_pair",
    'desc'   => "socket_create_pair() creates two connected and indistinguishable sockets, and stores them in fd. This function is commonly used in IPC (InterProcess Communication).",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "domain",
        'type'   => Int32,
        'desc'   => "The domain parameter specifies the protocol family to be used by the socket. See socket_create() for the full list.",
      ),
      array(
        'name'   => "type",
        'type'   => Int32,
        'desc'   => "The type parameter selects the type of communication to be used by the socket. See socket_create() for the full list.",
      ),
      array(
        'name'   => "protocol",
        'type'   => Int32,
        'desc'   => "The protocol parameter sets the specific protocol within the specified domain to be used when communicating on the returned socket. The proper value can be retrieved by name by using getprotobyname(). If the desired protocol is TCP, or UDP the corresponding constants SOL_TCP, and SOL_UDP can also be used.\n\nSee socket_create() for the full list of supported protocols.",
      ),
      array(
        'name'   => "fd",
        'type'   => Variant | Reference,
        'desc'   => "Reference to an array in which the two socket resources will be inserted.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_get_option",
    'desc'   => "The socket_get_option() function retrieves the value for the option specified by the optname parameter for the specified socket.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns the value of the given option, or FALSE on errors.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
      ),
      array(
        'name'   => "level",
        'type'   => Int32,
      ),
      array(
        'name'   => "optname",
        'type'   => Int32,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_getpeername",
    'desc'   => "Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure. socket_getpeername() may also return FALSE if the socket type is not any of AF_INET, AF_INET6, or AF_UNIX, in which case the last socket error code is not updated.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create() or socket_accept().",
      ),
      array(
        'name'   => "address",
        'type'   => Variant | Reference,
        'desc'   => "If the given socket is of type AF_INET or AF_INET6, socket_getpeername() will return the peers (remote) IP address in appropriate notation (e.g. 127.0.0.1 or fe80::1) in the address parameter and, if the optional port parameter is present, also the associated port.\n\nIf the given socket is of type AF_UNIX, socket_getpeername() will return the Unix filesystem path (e.g. /var/run/daemon.sock) in the address parameter.",
      ),
      array(
        'name'   => "port",
        'type'   => Variant | Reference,
        'value'  => "null",
        'desc'   => "If given, this will hold the port associated to address.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_getsockname",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure. socket_getsockname() may also return FALSE if the socket type is not any of AF_INET, AF_INET6, or AF_UNIX, in which case the last socket error code is not updated.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create() or socket_accept().",
      ),
      array(
        'name'   => "address",
        'type'   => Variant | Reference,
        'desc'   => "If the given socket is of type AF_INET or AF_INET6, socket_getsockname() will return the local IP address in appropriate notation (e.g. 127.0.0.1 or fe80::1) in the address parameter and, if the optional port parameter is present, also the associated port.\n\nIf the given socket is of type AF_UNIX, socket_getsockname() will return the Unix filesystem path (e.g. /var/run/daemon.sock) in the address parameter.",
      ),
      array(
        'name'   => "port",
        'type'   => Variant | Reference,
        'value'  => "null",
        'desc'   => "If provided, this will hold the associated port.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_set_block",
    'desc'   => "The socket_set_block() function removes the O_NONBLOCK flag on the socket specified by the socket parameter.\n\nWhen an operation (e.g. receive, send, connect, accept, ...) is performed on a blocking socket, the script will pause its execution until it receives a signal or it can perform the operation.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create() or socket_accept().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_set_nonblock",
    'desc'   => "The socket_set_nonblock() function sets the O_NONBLOCK flag on the socket specified by the socket parameter.\n\nWhen an operation (e.g. receive, send, connect, accept, ...) is performed on a non-blocking socket, the script not pause its execution until it receives a signal or it can perform the operation. Rather, if the operation would result in a block, the called function will fail.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create() or socket_accept().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_set_option",
    'desc'   => "The socket_set_option() function sets the option specified by the optname parameter, at the specified protocol level, to the value pointed to by the optval parameter for the socket.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create() or socket_accept().",
      ),
      array(
        'name'   => "level",
        'type'   => Int32,
        'desc'   => "The level parameter specifies the protocol level at which the option resides. For example, to retrieve options at the socket level, a level parameter of SOL_SOCKET would be used. Other levels, such as TCP, can be used by specifying the protocol number of that level. Protocol numbers can be found by using the getprotobyname() function.",
      ),
      array(
        'name'   => "optname",
        'type'   => Int32,
        'desc'   => "The available socket options are the same as those for the socket_get_option() function.",
      ),
      array(
        'name'   => "optval",
        'type'   => Variant,
        'desc'   => "The option value.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_connect",
    'desc'   => "Initiate a connection to address using the socket resource socket, which must be a valid socket resource created with socket_create().",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure. The error code can be retrieved with socket_last_error(). This code may be passed to socket_strerror() to get a textual explanation of the error.\n\nIf the socket is non-blocking then this function returns FALSE with an error Operation now in progress.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
      ),
      array(
        'name'   => "address",
        'type'   => String,
        'desc'   => "The address parameter is either an IPv4 address in dotted-quad notation (e.g. 127.0.0.1) if socket is AF_INET, a valid IPv6 address (e.g. ::1) if IPv6 support is enabled and socket is AF_INET6 or the pathname of a Unix domain socket, if the socket family is AF_UNIX.",
      ),
      array(
        'name'   => "port",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "The port parameter is only used and is mandatory when connecting to an AF_INET or an AF_INET6 socket, and designates the port on the remote host to which a connection should be made.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_bind",
    'desc'   => "Binds the name given in address to the socket described by socket. This has to be done before a connection is be established using socket_connect() or socket_listen().",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.\n\nThe error code can be retrieved with socket_last_error(). This code may be passed to socket_strerror() to get a textual explanation of the error.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create().",
      ),
      array(
        'name'   => "address",
        'type'   => String,
        'desc'   => "If the socket is of the AF_INET family, the address is an IP in dotted-quad notation (e.g. 127.0.0.1).\n\nIf the socket is of the AF_UNIX family, the address is the path of a Unix-domain socket (e.g. /tmp/my.sock).",
      ),
      array(
        'name'   => "port",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "The port parameter is only used when connecting to an AF_INET socket, and designates the port on the remote host to which a connection should be made.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_listen",
    'desc'   => "After the socket socket has been created using socket_create() and bound to a name with socket_bind(), it may be told to listen for incoming connections on socket.\n\nsocket_listen() is applicable only to sockets of type SOCK_STREAM or SOCK_SEQPACKET.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure. The error code can be retrieved with socket_last_error(). This code may be passed to socket_strerror() to get a textual explanation of the error.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create().",
      ),
      array(
        'name'   => "backlog",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "A maximum of backlog incoming connections will be queued for processing. If a connection request arrives with the queue full the client may receive an error with an indication of ECONNREFUSED, or, if the underlying protocol supports retransmission, the request may be ignored so that retries may succeed.\n\nThe maximum number passed to the backlog parameter highly depends on the underlying platform. On Linux, it is silently truncated to SOMAXCONN. On win32, if passed SOMAXCONN, the underlying service provider responsible for the socket will set the backlog to a maximum reasonable value. There is no standard provision to find out the actual backlog value on this platform.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_select",
    'desc'   => "socket_select() accepts arrays of sockets and waits for them to change status. Those coming with BSD sockets background will recognize that those socket resource arrays are in fact the so-called file descriptor sets. Three independent arrays of socket resources are watched.\nWarning\n\nOn exit, the arrays are modified to indicate which socket resource actually changed status.\n\nYou do not need to pass every array to socket_select(). You can leave it out and use an empty array or NULL instead. Also do not forget that those arrays are passed by reference and will be modified after socket_select() returns.\n\nDue a limitation in the current Zend Engine it is not possible to pass a constant modifier like NULL directly as a parameter to a function which expects this parameter to be passed by reference. Instead use a temporary variable or an expression with the leftmost member being a temporary variable: Example #1 Using NULL with socket_select()",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "On success socket_select() returns the number of socket resources contained in the modified arrays, which may be zero if the timeout expires before anything interesting happens. On error FALSE is returned. The error code can be retrieved with socket_last_error().\n\nBe sure to use the === operator when checking for an error. Since the socket_select() may return 0 the comparison with == would evaluate to TRUE: Example #2 Understanding socket_select()'s result",
    ),
    'args'   => array(
      array(
        'name'   => "read",
        'type'   => Variant | Reference,
        'desc'   => "The sockets listed in the read array will be watched to see if characters become available for reading (more precisely, to see if a read will not block - in particular, a socket resource is also ready on end-of-file, in which case a socket_read() will return a zero length string).",
      ),
      array(
        'name'   => "write",
        'type'   => Variant | Reference,
        'desc'   => "The sockets listed in the write array will be watched to see if a write will not block.",
      ),
      array(
        'name'   => "except",
        'type'   => Variant | Reference,
        'desc'   => "The sockets listed in the except array will be watched for exceptions.",
      ),
      array(
        'name'   => "vtv_sec",
        'type'   => Variant,
        'desc'   => "The tv_sec and tv_usec together form the timeout parameter. The timeout is an upper bound on the amount of time elapsed before socket_select() return. tv_sec may be zero , causing socket_select() to return immediately. This is useful for polling. If tv_sec is NULL (no timeout), socket_select() can block indefinitely.",
      ),
      array(
        'name'   => "tv_usec",
        'type'   => Int32,
        'value'  => "0",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_server",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "hostname",
        'type'   => String,
      ),
      array(
        'name'   => "port",
        'type'   => Int32,
        'value'  => "-1",
      ),
      array(
        'name'   => "errnum",
        'type'   => Variant | Reference,
        'value'  => "null",
      ),
      array(
        'name'   => "errstr",
        'type'   => Variant | Reference,
        'value'  => "null",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_accept",
    'desc'   => "After the socket socket has been created using socket_create(), bound to a name with socket_bind(), and told to listen for connections with socket_listen(), this function will accept incoming connections on that socket. Once a successful connection is made, a new socket resource is returned, which may be used for communication. If there are multiple connections queued on the socket, the first will be used. If there are no pending connections, socket_accept() will block until a connection becomes present. If socket has been made non-blocking using socket_set_blocking() or socket_set_nonblock(), FALSE will be returned.\n\nThe socket resource returned by socket_accept() may not be used to accept new connections. The original listening socket socket, however, remains open and may be reused.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns a new socket resource on success, or FALSE on error. The actual error code can be retrieved by calling socket_last_error(). This error code may be passed to socket_strerror() to get a textual explanation of the error.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_read",
    'desc'   => "The function socket_read() reads from the socket resource socket created by the socket_create() or socket_accept() functions.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "socket_read() returns the data as a string on success, or FALSE on error (including if the remote host has closed the connection). The error code can be retrieved with socket_last_error(). This code may be passed to socket_strerror() to get a textual representation of the error.\n\nsocket_read() returns a zero length string (\"\") when there is no more data to read.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create() or socket_accept().",
      ),
      array(
        'name'   => "length",
        'type'   => Int32,
        'desc'   => "The maximum number of bytes read is specified by the length parameter. Otherwise you can use \\r, \\n, or \\0 to end reading (depending on the type parameter, see below).",
      ),
      array(
        'name'   => "type",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "Optional type parameter is a named constant: PHP_BINARY_READ (Default) - use the system recv() function. Safe for reading binary data. PHP_NORMAL_READ - reading stops at \\n or \\r.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_write",
    'desc'   => "The function socket_write() writes to the socket from the given buffer.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns the number of bytes successfully written to the socket or FALSE on failure. The error code can be retrieved with socket_last_error(). This code may be passed to socket_strerror() to get a textual explanation of the error.\n\nIt is perfectly valid for socket_write() to return zero which means no bytes have been written. Be sure to use the === operator to check for FALSE in case of an error.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
      ),
      array(
        'name'   => "buffer",
        'type'   => String,
        'desc'   => "The buffer to be written.",
      ),
      array(
        'name'   => "length",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "The optional parameter length can specify an alternate length of bytes written to the socket. If this length is greater then the buffer length, it is silently truncated to the length of the buffer.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_send",
    'desc'   => "The function socket_send() sends len bytes to the socket socket from buf.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "socket_send() returns the number of bytes sent, or FALSE on error.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create() or socket_accept().",
      ),
      array(
        'name'   => "buf",
        'type'   => String,
        'desc'   => "A buffer containing the data that will be sent to the remote host.",
      ),
      array(
        'name'   => "len",
        'type'   => Int32,
        'desc'   => "The number of bytes that will be sent to the remote host from buf.",
      ),
      array(
        'name'   => "flags",
        'type'   => Int32,
        'desc'   => "The value of flags can be any combination of the following flags, joined with the binary OR (|) operator. Possible values for flags MSG_OOB Send OOB (out-of-band) data. MSG_EOR Indicate a record mark. The sent data completes the record. MSG_EOF Close the sender side of the socket and include an appropriate notification of this at the end of the sent data. The sent data completes the transaction. MSG_DONTROUTE Bypass routing, use direct interface.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_sendto",
    'desc'   => "The function socket_sendto() sends len bytes from buf through the socket socket to the port at the address addr.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "socket_sendto() returns the number of bytes sent to the remote host, or FALSE if an error occurred.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created using socket_create().",
      ),
      array(
        'name'   => "buf",
        'type'   => String,
        'desc'   => "The sent data will be taken from buffer buf.",
      ),
      array(
        'name'   => "len",
        'type'   => Int32,
        'desc'   => "len bytes from buf will be sent.",
      ),
      array(
        'name'   => "flags",
        'type'   => Int32,
        'desc'   => "The value of flags can be any combination of the following flags, joined with the binary OR (|) operator. Possible values for flags MSG_OOB Send OOB (out-of-band) data. MSG_EOR Indicate a record mark. The sent data completes the record. MSG_EOF Close the sender side of the socket and include an appropriate notification of this at the end of the sent data. The sent data completes the transaction. MSG_DONTROUTE Bypass routing, use direct interface.",
      ),
      array(
        'name'   => "addr",
        'type'   => String,
        'desc'   => "IP address of the remote host.",
      ),
      array(
        'name'   => "port",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "port is the remote port number at which the data will be sent.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_recv",
    'desc'   => "The socket_recv() function receives len bytes of data in buf from socket. socket_recv() can be used to gather data from connected sockets. Additionally, one or more flags can be specified to modify the behaviour of the function.\n\nbuf is passed by reference, so it must be specified as a variable in the argument list. Data read from socket by socket_recv() will be returned in buf.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "socket_recv() returns the number of bytes received, or FALSE if there was an error. The actual error code can be retrieved by calling socket_last_error(). This error code may be passed to socket_strerror() to get a textual explanation of the error.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "The socket must be a socket resource previously created by socket_create().",
      ),
      array(
        'name'   => "buf",
        'type'   => Variant | Reference,
        'desc'   => "The data received will be fetched to the variable specified with buf. If an error occurs, if the connection is reset, or if no data is available, buf will be set to NULL.",
      ),
      array(
        'name'   => "len",
        'type'   => Int32,
        'desc'   => "Up to len bytes will be fetched from remote host.",
      ),
      array(
        'name'   => "flags",
        'type'   => Int32,
        'desc'   => "The value of flags can be any combination of the following flags, joined with the binary OR (|) operator. Possible values for flags Flag Description MSG_OOB Process out-of-band data. MSG_PEEK Receive data from the beginning of the receive queue without removing it from the queue. MSG_WAITALL Block until at least len are received. However, if a signal is caught or the remote host disconnects, the function may return less data. MSG_DONTWAIT With this flag set, the function returns even if it would normally have blocked.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_recvfrom",
    'desc'   => "The socket_recvfrom() function receives len bytes of data in buf from name on port port (if the socket is not of type AF_UNIX) using socket. socket_recvfrom() can be used to gather data from both connected and unconnected sockets. Additionally, one or more flags can be specified to modify the behaviour of the function.\n\nThe name and port must be passed by reference. If the socket is not connection-oriented, name will be set to the internet protocol address of the remote host or the path to the UNIX socket. If the socket is connection-oriented, name is NULL. Additionally, the port will contain the port of the remote host in the case of an unconnected AF_INET or AF_INET6 socket.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "socket_recvfrom() returns the number of bytes received, or FALSE if there was an error. The actual error code can be retrieved by calling socket_last_error(). This error code may be passed to socket_strerror() to get a textual explanation of the error.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "The socket must be a socket resource previously created by socket_create().",
      ),
      array(
        'name'   => "buf",
        'type'   => Variant | Reference,
        'desc'   => "The data received will be fetched to the variable specified with buf.",
      ),
      array(
        'name'   => "len",
        'type'   => Int32,
        'desc'   => "Up to len bytes will be fetched from remote host.",
      ),
      array(
        'name'   => "flags",
        'type'   => Int32,
        'desc'   => "The value of flags can be any combination of the following flags, joined with the binary OR (|) operator. Possible values for flags Flag Description MSG_OOB Process out-of-band data. MSG_PEEK Receive data from the beginning of the receive queue without removing it from the queue. MSG_WAITALL Block until at least len are received. However, if a signal is caught or the remote host disconnects, the function may return less data. MSG_DONTWAIT With this flag set, the function returns even if it would normally have blocked.",
      ),
      array(
        'name'   => "name",
        'type'   => Variant | Reference,
        'desc'   => "If the socket is of the type AF_UNIX type, name is the path to the file. Else, for unconnected sockets, name is the IP address of, the remote host, or NULL if the socket is connection-oriented.",
      ),
      array(
        'name'   => "port",
        'type'   => Variant | Reference,
        'value'  => "0",
        'desc'   => "This argument only applies to AF_INET and AF_INET6 sockets, and specifies the remote port from which the data is received. If the socket is connection-oriented, port will be NULL.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_shutdown",
    'desc'   => "The socket_shutdown() function allows you to stop incoming, outgoing or all data (the default) from being sent through the socket",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure. socket_strerror socket_set_option Last updated: Fri, 13 Aug 2010  ",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create().",
      ),
      array(
        'name'   => "how",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "The value of how can be one of the following: possible values for how 0 Shutdown socket reading 1 Shutdown socket writing 2 Shutdown socket reading and writing",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_close",
    'desc'   => "socket_close() closes the socket resource given by socket. This function is specific to sockets and cannot be used on any other type of resources.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
      'desc'   => "No value is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'desc'   => "A valid socket resource created with socket_create() or socket_accept().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_strerror",
    'desc'   => "socket_strerror() takes as its errno parameter a socket error code as returned by socket_last_error() and returns the corresponding explanatory text.\n\nAlthough the error messages generated by the socket extension are in English, the system messages retrieved with this function will appear depending on the current locale (LC_MESSAGES).",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "Returns the error message associated with the errno parameter.",
    ),
    'args'   => array(
      array(
        'name'   => "errnum",
        'type'   => Int32,
        'desc'   => "A valid socket error number, likely produced by socket_last_error().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_last_error",
    'desc'   => "If a socket resource is passed to this function, the last error which occurred on this particular socket is returned. If the socket resource is omitted, the error code of the last failed socket function is returned. The latter is particularly helpful for functions like socket_create() which don't return a socket on failure and socket_select() which can fail for reasons not directly tied to a particular socket. The error code is suitable to be fed to socket_strerror() which returns a string describing the given error code.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Int32,
      'desc'   => "This function returns a socket error code.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'value'  => "null_object",
        'desc'   => "A valid socket resource created with socket_create().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "socket_clear_error",
    'desc'   => "This function clears the error code on the given socket or the global last socket error if no socket is specified.\n\nThis function allows explicitly resetting the error code value either of a socket or of the extension global last error code. This may be useful to detect within a part of the application if an error occurred or not.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
      'desc'   => "No value is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "socket",
        'type'   => Resource,
        'value'  => "null_object",
        'desc'   => "A valid socket resource created with socket_create().",
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

