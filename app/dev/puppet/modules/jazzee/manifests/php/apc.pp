class jazzee::php::apc {
  case $operatingsystem {
    centos, redhat, oraclelinux: { 
      package { 'php-pecl-apc':
        ensure => latest,
        notify => Service['httpd']
      }

      file { 'apc.ini':
        path      => '/etc/php.d/apc.ini',
        ensure    => file,
        require   => Package['php-pecl-apc'],
        content   => template("jazzee/apc.ini.erb"),
        notify => Service['httpd']
      }
    }
    default: {fail("$operatingsystem is not defined.")}
  }
}