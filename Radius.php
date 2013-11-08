<?php

define('RADIUS_OPTION_SALT'                              ,   2);
define('RADIUS_OPTION_TAGGED'                            ,   1);

define('RADIUS_ACCESS_REQUEST'                           ,   1);
define('RADIUS_ACCESS_ACCEPT'                            ,   2);
define('RADIUS_ACCESS_REJECT'                            ,   3);
define('RADIUS_ACCESS_CHALLENGE'                         ,  11);
define('RADIUS_ACCOUNTING_REQUEST'                       ,   4);
define('RADIUS_ACCOUNTING_RESPONSE'                      ,   5);
define('RADIUS_COA_REQUEST'                              ,  43);
define('RADIUS_COA_ACK'                                  ,  44);
define('RADIUS_COA_NAK'                                  ,  45);
define('RADIUS_DISCONNECT_REQUEST'                       ,  40);
define('RADIUS_DISCONNECT_ACK'                           ,  41);
define('RADIUS_DISCONNECT_NAK'                           ,  42);

define('RADIUS_USER_NAME'                                ,   1);
define('RADIUS_USER_PASSWORD'                            ,   2);
define('RADIUS_CHAP_PASSWORD'                            ,   3);
define('RADIUS_NAS_IP_ADDRESS'                           ,   4);
define('RADIUS_NAS_PORT'                                 ,   5);
define('RADIUS_SERVICE_TYPE'                             ,   6);

define('RADIUS_LOGIN'               ,   1);
define('RADIUS_FRAMED'              ,   2);
define('RADIUS_CALLBACK_LOGIN'      ,   3);
define('RADIUS_CALLBACK_FRAMED'     ,   4);
define('RADIUS_OUTBOUND'            ,   5);
define('RADIUS_ADMINISTRATIVE'      ,   6);
define('RADIUS_NAS_PROMPT'          ,   7);
define('RADIUS_AUTHENTICATE_ONLY'   ,   8);
define('RADIUS_CALLBACK_NAS_PROMPT' ,   9);

define('RADIUS_FRAMED_PROTOCOL'                          ,   7);

define('RADIUS_PPP'      , 1);
define('RADIUS_SLIP'     , 2);
define('RADIUS_ARAP'     , 3);
define('RADIUS_GANDALF'  , 4);
define('RADIUS_XYLOGICS' , 5);

define('RADIUS_FRAMED_IP_ADDRESS'                        ,   8);
define('RADIUS_FRAMED_IP_NETMASK'                        ,   9);
define('RADIUS_FRAMED_ROUTING'                           ,  10);
define('RADIUS_FILTER_ID'                                ,  11);
define('RADIUS_FRAMED_MTU'                               ,  12);
define('RADIUS_FRAMED_COMPRESSION'                       ,  13);
define('RADIUS_LOGIN_IP_HOST'                            ,  14);
define('RADIUS_LOGIN_SERVICE'                            ,  15);
define('RADIUS_LOGIN_TCP_PORT'                           ,  16);
define('RADIUS_REPLY_MESSAGE'                            ,  18);
define('RADIUS_CALLBACK_NUMBER'                          ,  19);
define('RADIUS_CALLBACK_ID'                              ,  20);
define('RADIUS_FRAMED_ROUTE'                             ,  22);
define('RADIUS_FRAMED_IPX_NETWORK'                       ,  23);
define('RADIUS_STATE'                                    ,  24);
define('RADIUS_CLASS'                                    ,  25);
define('RADIUS_VENDOR_SPECIFIC'                          ,  26);
define('RADIUS_SESSION_TIMEOUT'                          ,  27);
define('RADIUS_IDLE_TIMEOUT'                             ,  28);
define('RADIUS_TERMINATION_ACTION'                       ,  29);
define('RADIUS_CALLED_STATION_ID'                        ,  30);
define('RADIUS_CALLING_STATION_ID'                       ,  31);
define('RADIUS_NAS_IDENTIFIER'                           ,  32);
define('RADIUS_PROXY_STATE'                              ,  33);
define('RADIUS_LOGIN_LAT_SERVICE'                        ,  34);
define('RADIUS_LOGIN_LAT_NODE'                           ,  35);
define('RADIUS_LOGIN_LAT_GROUP'                          ,  36);
define('RADIUS_FRAMED_APPLETALK_LINK'                    ,  37);
define('RADIUS_FRAMED_APPLETALK_NETWORK'                 ,  38);
define('RADIUS_FRAMED_APPLETALK_ZONE'                    ,  39);
define('RADIUS_CHAP_CHALLENGE'                           ,  60);
define('RADIUS_NAS_PORT_TYPE'                            ,  61);
define('RADIUS_PORT_LIMIT'                               ,  62);
define('RADIUS_LOGIN_LAT_PORT'                           ,  63);
define('RADIUS_CONNECT_INFO'                             ,  77);
define('RADIUS_ACCT_STATUS_TYPE'                         ,  40);
define('RADIUS_ACCT_DELAY_TIME'                          ,  41);
define('RADIUS_ACCT_INPUT_OCTETS'                        ,  42);
define('RADIUS_ACCT_OUTPUT_OCTETS'                       ,  43);
define('RADIUS_ACCT_SESSION_ID'                          ,  44);
define('RADIUS_ACCT_AUTHENTIC'                           ,  45);
define('RADIUS_ACCT_SESSION_TIME'                        ,  46);
define('RADIUS_ACCT_INPUT_PACKETS'                       ,  47);
define('RADIUS_ACCT_OUTPUT_PACKETS'                      ,  48);
define('RADIUS_ACCT_TERMINATE_CAUSE'                     ,  49);
define('RADIUS_ACCT_MULTI_SESSION_ID'                    ,  50);
define('RADIUS_ACCT_LINK_COUNT'                          ,  51);
define('RADIUS_MICROSOFT_MS_CHAP_RESPONSE'               ,   1);
define('RADIUS_MICROSOFT_MS_CHAP_ERROR'                  ,   2);
define('RADIUS_MICROSOFT_MS_CHAP_PW_1'                   ,   3);
define('RADIUS_MICROSOFT_MS_CHAP_PW_2'                   ,   4);
define('RADIUS_MICROSOFT_MS_CHAP_LM_ENC_PW'              ,   5);
define('RADIUS_MICROSOFT_MS_CHAP_NT_ENC_PW'              ,   6);
define('RADIUS_MICROSOFT_MS_MPPE_ENCRYPTION_POLICY'      ,   7);
define('RADIUS_MICROSOFT_MS_MPPE_ENCRYPTION_TYPES'       ,   8);
define('RADIUS_MICROSOFT_MS_RAS_VENDOR'                  ,   9);
define('RADIUS_MICROSOFT_MS_CHAP_DOMAIN'                 ,  10);
define('RADIUS_MICROSOFT_MS_CHAP_CHALLENGE'              ,  11);
define('RADIUS_MICROSOFT_MS_CHAP_MPPE_KEYS'              ,  12);
define('RADIUS_MICROSOFT_MS_BAP_USAGE'                   ,  13);
define('RADIUS_MICROSOFT_MS_LINK_UTILIZATION_THRESHOLD'  ,  14);
define('RADIUS_MICROSOFT_MS_LINK_DROP_TIME_LIMIT'        ,  15);
define('RADIUS_MICROSOFT_MS_MPPE_SEND_KEY'               ,  16);
define('RADIUS_MICROSOFT_MS_MPPE_RECV_KEY'               ,  17);
define('RADIUS_MICROSOFT_MS_RAS_VERSION'                 ,  18);
define('RADIUS_MICROSOFT_MS_OLD_ARAP_PASSWORD'           ,  19);
define('RADIUS_MICROSOFT_MS_NEW_ARAP_PASSWORD'           ,  20);
define('RADIUS_MICROSOFT_MS_ARAP_PASSWORD_CHANGE_REASON' ,  21);
define('RADIUS_MICROSOFT_MS_FILTER'                      ,  22);
define('RADIUS_MICROSOFT_MS_ACCT_AUTH_TYPE'              ,  23);
define('RADIUS_MICROSOFT_MS_ACCT_EAP_TYPE'               ,  24);
define('RADIUS_MICROSOFT_MS_CHAP2_RESPONSE'              ,  25);
define('RADIUS_MICROSOFT_MS_CHAP2_SUCCESS'               ,  26);
define('RADIUS_MICROSOFT_MS_CHAP2_PW'                    ,  27);
define('RADIUS_MICROSOFT_MS_PRIMARY_DNS_SERVER'          ,  28);
define('RADIUS_MICROSOFT_MS_SECONDARY_DNS_SERVER'        ,  29);
define('RADIUS_MICROSOFT_MS_PRIMARY_NBNS_SERVER'         ,  30);
define('RADIUS_MICROSOFT_MS_SECONDARY_NBNS_SERVER'       ,  31);
define('RADIUS_MICROSOFT_MS_ARAP_CHALLENGE'              ,  33);
define('RADIUS_VENDOR_MICROSOFT'                         , 311);

define('RADIUS_MPPE_KEY_LEN'                             ,  16);

/**
 * radius_add_server() may be called multiple times, and it may be used together with radius_config(). At most 10 servers may be specified. When multiple servers are given, they are tried in round-robin fashion until a valid response is received, or until each server's max_tries limit has been reached.
 *
 * @param resource $radius_handle
 * @param string   $hostname  The hostname parameter specifies the server host, either as a fully qualified domain name or as a dotted-quad IP address in text form.
 * @param int      $port      The port specifies the UDP port to contact on the server. If port is given as 0, the library looks up the radius/udp or radacct/udp service in the network services database, and uses the port found there. If no entry is found, the library uses the standard Radius ports, 1812 for authentication and 1813 for accounting.
 * @param string   $secret    The shared secret for the server host is passed to the secret parameter. The Radius protocol ignores all but the leading 128 bytes of the shared secret.
 * @param int      $timeout   The timeout for receiving replies from the server is passed to the timeout parameter, in units of seconds.
 * @param int      $max_tries The maximum number of repeated requests to make before giving up is passed into the max_tries.
 *
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function radius_add_server ( resource $radius_handle , string $hostname , int $port , string $secret , int $timeout , int $max_tries ) {}

/**
 * @return resource Returns a handle on success, FALSE on error. This function only fails if insufficient memory is available.
 */
function radius_auth_open () {}

/**
 * A Radius request consists of a code specifying the kind of request, and zero or more attributes which provide additional information. To begin constructing a new request, call radius_create_request().
 *
 * Note: Attention: You must call this function, before you can put any attribute!
 *
 * @param  resource $radius_handle
 * @param  int      $type Type is RADIUS_ACCESS_REQUEST or RADIUS_ACCOUNTING_REQUEST.
 * @return bool     Returns TRUE on success or FALSE on failure.
 */
function radius_create_request ( resource $radius_handle , int $type ) {}

/**
 * After the Radius request has been constructed, it is sent by radius_send_request().
 * The radius_send_request() function sends the request and waits for a valid reply, retrying the defined servers in round-robin fashion as necessary.
 *
 * @param resource $radius_handle
 *
 * @return int If a valid response is received, radius_send_request() returns the Radius code which specifies the type of the response. This will typically be RADIUS_ACCESS_ACCEPT, RADIUS_ACCESS_REJECT, or RADIUS_ACCESS_CHALLENGE. If no valid response is received, radius_send_request() returns FALSE.
 */
function radius_send_request ( resource $radius_handle ) {}

/**
 * It is not needed to call this function because php frees all resources at the end of each request.
 * @param resource $radius_handle
 * @returns bool TRUE on success or FALSE on failure.
 */
function radius_close ( resource $radius_handle ) {}

/**
 * @param string $data
 * @return string
 */
function radius_cvt_addr ( string $data ) {}

/**
 * @param string $data
 * @ret   int
 */
function radius_cvt_int ( string $data ) {}

/**
 * @param  string $data
 * @return string
 */
function radius_cvt_string ( string $data ) {}

/**
 * Like Radius requests, each response may contain zero or more attributes. After a response has been received successfully by radius_send_request(), its attributes can be extracted one by one using radius_get_attr(). Each time radius_get_attr() is called, it gets the next attribute from the current response.
 * @param resource $radius_handle
 * @return mixed Returns an associative array containing the attribute-type and the data, or error number <= 0.
 */
function radius_get_attr ( resource $radius_handle ) {}

/**
 * If radius_get_attr() returns RADIUS_VENDOR_SPECIFIC, radius_get_vendor_attr() may be called to determine the vendor.
 *
 * @param string $data
 *
 * @return Returns an associative array containing the attribute-type, vendor and the data, or FALSE on error.
 */
function radius_get_vendor_attr ( string $data ) {}

/**
 * Attaches an IP address attribute to the current RADIUS request.
 *
 * Note: A request must be created via radius_create_request() before this function can be called.
 *
 * @param resource $radius_handle  The RADIUS resource.
 * @param int      $type           The attribute type.
 * @param string   $addr           An IPv4 address in string form, such as 10.0.0.1.
 * @param int      $options        A bitmask of the attribute options. The available options include RADIUS_OPTION_TAGGED and RADIUS_OPTION_SALT.
 * @param int      $tag (optional) The attribute tag. This parameter is ignored unless the RADIUS_OPTION_TAGGED option is set.
 *
 * @return bool    Returns TRUE on success or FALSE on failure.
 */
function radius_put_addr ( resource $radius_handle , int $type , string $addr , int $options = 0 , int $tag ) {}

/**
 * Attaches a binary attribute to the current RADIUS request.
 *
 * Note: A request must be created via radius_create_request() before this function can be called.
 *
 * @param resource $radius_handle  The RADIUS resource.
 * @param int      $type           The attribute type.
 * @param string   $value          The attribute value, which will be treated as a raw binary string.
 * @param int      $options        A bitmask of the attribute options. The available options include RADIUS_OPTION_TAGGED and RADIUS_OPTION_SALT.
 * @param int      $tag (optional) The attribute tag. This parameter is ignored unless the RADIUS_OPTION_TAGGED option is set.
 *
 * @return bool    Returns TRUE on success or FALSE on failure.
 */
function radius_put_attr ( resource $radius_handle , int $type , string $value , int $options = 0 , int $tag ) {}

/**
 * Attaches an integer attribute to the current RADIUS request.
 *
 * Note:
 * A request must be created via radius_create_request() before this function can be called.
 *
 * @param resource $radius_handle  The RADIUS resource.
 * @param int      $type           The attribute type.
 * @param int      $value          The attribute value.
 * @param int      $options        A bitmask of the attribute options. The available options include RADIUS_OPTION_TAGGED and RADIUS_OPTION_SALT.
 * @param int      $tag (optional) The attribute tag. This parameter is ignored unless the RADIUS_OPTION_TAGGED option is set.
 *
 * @return bool    Returns TRUE on success or FALSE on failure.
 */
function radius_put_int ( resource $radius_handle , int $type , int $value , int $options = 0 , int $tag ) {}

/**
 * Attaches a string attribute to the current RADIUS request. In general, radius_put_attr() is a more useful function for attaching string attributes, as it is binary safe.
 *
 * Note:
 * A request must be created via radius_create_request() before this function can be called.
 *
 * @param resource $radius_handle  The RADIUS resource.
 * @param int      $type           The attribute type.
 * @param string   $value          The attribute value. This value is expected by the underlying library to be null terminated, therefore this parameter is not binary safe.
 * @param int      $options        A bitmask of the attribute options. The available options include RADIUS_OPTION_TAGGED and RADIUS_OPTION_SALT.
 * @param int      $tag (optional) The attribute tag. This parameter is ignored unless the RADIUS_OPTION_TAGGED option is set.
 *
 * @return bool    Returns TRUE on success or FALSE on failure.
 */
function radius_put_string ( resource $radius_handle , int $type , string $value , int $options = 0 , int $tag ) {}

/**
 * Attaches an IP address vendor specific attribute to the current RADIUS request.
 *
 * Note: A request must be created via radius_create_request() before this function can be called.
 *
 * @param resource $radius_handle  The RADIUS resource.
 * @param int      $vendor         The vendor ID.
 * @param int      $type           The attribute type.
 * @param string   $addr           An IPv4 address in string form, such as 10.0.0.1.
 * @param int      $options        A bitmask of the attribute options. The available options include RADIUS_OPTION_TAGGED and RADIUS_OPTION_SALT.
 * @param int      $tag (optional) The attribute tag. This parameter is ignored unless the RADIUS_OPTION_TAGGED option is set.
 *
 * @return bool    Returns TRUE on success or FALSE on failure.
 */
function radius_put_vendor_addr ( resource $radius_handle, int $vendor, int $type , string $addr , int $options = 0 , int $tag ) {}

/**
 * Attaches a vendor specific binary attribute to the current RADIUS request.
 *
 * Note: A request must be created via radius_create_request() before this function can be called.
 *
 * @param resource $radius_handle  The RADIUS resource.
 * @param int      $vendor         The vendor ID.
 * @param int      $type           The attribute type.
 * @param string   $value          The attribute value, which will be treated as a raw binary string.
 * @param int      $options        A bitmask of the attribute options. The available options include RADIUS_OPTION_TAGGED and RADIUS_OPTION_SALT.
 * @param int      $tag (optional) The attribute tag. This parameter is ignored unless the RADIUS_OPTION_TAGGED option is set.
 *
 * @return bool    Returns TRUE on success or FALSE on failure.
 */
function radius_put_vendor_attr ( resource $radius_handle , int $vendor, int $type , string $value , int $options = 0 , int $tag ) {}

/**
 * Attaches a vendor specific integer attribute to the current RADIUS request.
 *
 * Note: * A request must be created via radius_create_request() before this function can be called.
 *
 * @param resource $radius_handle  The RADIUS resource.
 * @param int      $vendor         The vendor ID.
 * @param int      $type           The attribute type.
 * @param int      $value          The attribute value.
 * @param int      $options        A bitmask of the attribute options. The available options include RADIUS_OPTION_TAGGED and RADIUS_OPTION_SALT.
 * @param int      $tag (optional) The attribute tag. This parameter is ignored unless the RADIUS_OPTION_TAGGED option is set.
 *
 * @return bool    Returns TRUE on success or FALSE on failure.
 */
function radius_put_vendor_int ( resource $radius_handle , int $vendor, int $type , int $value , int $options = 0 , int $tag ) {}

/**
 * Attaches a vendor specific string attribute to the current RADIUS request. In general, radius_put_vendor_attr() is a more useful function for attaching string attributes, as it is binary safe.
 *
 * Note:
 * A request must be created via radius_create_request() before this function can be called.
 *
 * @param resource $radius_handle  The RADIUS resource.
 * @param int      $vendor         The vendor ID.
 * @param int      $type           The attribute type.
 * @param string   $value          The attribute value. This value is expected by the underlying library to be null terminated, therefore this parameter is not binary safe.
 * @param int      $options        A bitmask of the attribute options. The available options include RADIUS_OPTION_TAGGED and RADIUS_OPTION_SALT.
 * @param int      $tag (optional) The attribute tag. This parameter is ignored unless the RADIUS_OPTION_TAGGED option is set.
 *
 * @return bool    Returns TRUE on success or FALSE on failure.
 */
function radius_put_vendor_string ( resource $radius_handle , int $vendor, int $type , string $value , int $options = 0 , int $tag ) {}

/**
 * Some data (Passwords, MS-CHAPv1 MPPE-Keys) is mangled for security reasons, and must be demangled before you can use them.
 * @param resource $radius_handle
 * @param string $mangled
 * @return string Returns the demangled string, or FALSE on error.
 */
function radius_demangle ( resource $radius_handle , string $mangled ) {}

/**
 * When using MPPE with MS-CHAPv2, the send- and recv-keys are mangled (see » RFC 2548), however this function is useless, because I don't think that there is or will be a PPTP-MPPE implementation in PHP.
 *
 * @param resource $radius_handle
 * @param string   $mangled
 *
 * @return mixed Returns the demangled string, or FALSE on error.
 */
function radius_demangle_mppe_key ( resource $radius_handle , string $mangled ) {}
