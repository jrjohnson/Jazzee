class jazzee::apache {
  case $operatingsystem {
    centos, redhat: { 
      $httpd = 'httpd'
      $service_name = 'httpd'
      $conf_template    = 'httpd.conf.erb'
      $conf_path    = '/etc/httpd/conf/httpd.conf'
    }
  }

  package { $httpd:
    ensure => latest,
    alias  => 'apache'
  }

  service { 'apache':
    name      => $service_name,
    ensure    => running,
    enable    => true,
    subscribe => File[$conf_path],
    require   => Package['apache'],
  }

  file { 'httpd.conf':
    path    => $conf_path,
    ensure  => file,
    require => Package['apache'],
    content  => template("jazzee/${conf_template}"),
  }
}