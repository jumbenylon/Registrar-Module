<?php


// EPP Server settings
define('EPP_HOST',          'tls://mtanzania.tznic.or.tz'); //Protocol setting depends on the allowed protocols on both sides...registry and client PHP setting...sslv3, tls, etc
define('EPP_PORT',          700);
define('EPP_TIMEOUT',       60);

// EPP Cert information
define('EPP_CERT',         '/home/sakurahost/public_html/modules/registrars/fred/certs.pem');


// EPP Auth information
define('EPP_USER',          'REG-SAKURA');
define('EPP_PWD',           'S@K^$r#2023#40(');

// EPP Log settings
define('EPP_LOG',            true);
define('EPP_LOG_FILE',       'log.xml');
define('FORMAT_OUTPUT',      true);

define('XMLNS_EPP',         'urn:ietf:params:xml:ns:epp-1.0');
define('XSCHEMA_EPP',       'urn:ietf:params:xml:ns:epp-1.0 epp-1.0.xsd');
define('XMLNS_XSCHEMA',     'http://www.w3.org/2001/XMLSchema-instance');


