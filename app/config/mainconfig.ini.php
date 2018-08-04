;<?php die(''); ?>
;for security reasons , don't remove or modify the first line
;this file doesn't list all possible properties. See lib/jelix/core/defaultconfig.ini.php for that

; the default locale used in the application
locale=en_US

; the locales available in the application
availableLocales=en_US

; the locale to fallback when the asked string doesn't exist in the current locale
fallbackLocale=en_US

; the charset used in the application
charset=UTF-8

; the default theme
theme=default

; see http://www.php.net/manual/en/timezones.php for supported values
timeZone=

; default domain name to use with jfullurl for example.
; Let it empty to use $_SERVER['SERVER_NAME'] value instead.
domainName=

; indicate HTTP(s) port if it should be forced to a specific value that PHP cannot
; guess (if the application is behind a proxy on a specific port for example)
; true for default port, or a number for a specific port. leave empty to use the
; current server port.
forceHTTPPort=
forceHTTPSPort=

; chmod for files created by Jelix
chmodFile=0664
chmodDir=0775

[modules]
; modulename.access = x where x =
; 0 if not used
; 1 if accessible by other modules (other modules can use it, but it is not accessible directly through the web)
; 2 if public (accessible through the web)
main.access=2

[coordplugins]
;name = file_ini_name or 1

[tplplugins]
defaultJformsBuilder=html
defaultJformsErrorDecorator=

[responses]
html=myHtmlResponse

[error_handling]
;errorMessage="A technical error has occured (code: %code%). Sorry for this inconvenience."
;sensitiveParameters = "password,passwd,pwd"

[compilation]
;checkCacheFiletime=on
;force=off

[urlengine]

; this is the url path to the jelix-www content (you can found this content in lib/jelix-www/)
; because the jelix-www directory is outside the yourapp/www/ directory, you should create a link to
; jelix-www, or copy its content in yourapp/www/ (with a name like 'jelix' for example)
; so you should indicate the relative path of this link/directory to the basePath, or an absolute path.
; if you change it, change also all pathes in [htmleditors]
; at runtime, it contains the absolute path (basePath+the value) if you give a relative path
jelixWWWPath="jelix/"

; if multiview is activated in apache, eg, you don't have to indicate the ".php" suffix
; then set this parameter to on
multiview=off

; basePath corresponds to the path to the base directory of your application.
; so if the url to access to your application is http://foo.com/aaa/bbb/www/index.php, you should
; set basePath = "/aaa/bbb/www/".
; if it is http://foo.com/index.php, set basePath="/"
; Jelix can guess the basePath, so you can keep basePath empty. But in the case where there are some
; entry points which are not in the same directory (ex: you have two entry point : http://foo.com/aaa/index.php
; and http://foo.com/aaa/bbb/other.php ), you MUST set the basePath (ex here, the higher entry point is index.php so
; : basePath="/aaa/" )
basePath=

; backendBasePath is used when the application is behind a proxy, and when the base path on the frontend
; server doesn't correspond to the base path on the backend server.
; you MUST define basePath when you define backendBasePath
backendBasePath=

; action to show the 'page not found' error
notfoundAct="jelix~error:notfound"

[logger]
; list of loggers for each categories of log messages
; available loggers : file, syslog, firebug, mail, memory. see plugins for others

; _all category is the category containing loggers executed for any categories
_all=

; default category is the category used when a given category is not declared here
default=file
error=file
warning=file
notice=file
deprecated=
strict=
debug=
sql=
soap=

[fileLogger]
default=messages.log

[mailLogger]
;email = root@localhost
;emailHeaders = "Content-Type: text/plain; charset=UTF-8\nFrom: webmaster@yoursite.com\nX-Mailer: Jelix\nX-Priority: 1 (Highest)\n"

[mailer]
webmasterEmail="root@localhost"
webmasterName=

; How to send mail : "mail" (mail()), "sendmail" (call sendmail), "smtp" (send directly to a smtp)
;                   or "file" (store the mail into a file, in filesDir directory)
mailerType=mail
; Sets the hostname to use in Message-Id and Received headers
; and as default HELO string. If empty, the value returned
; by SERVER_NAME is used or 'localhost.localdomain'.
hostname=
sendmailPath="/usr/sbin/sendmail"

; if mailer = file, fill the following parameters
; this should be the directory in the var/ directory, where to store mail as files
filesDir="mails/"

; if mailer = smtp , this option indicate the profile in profiles.ini.php
; containing smtp parameters
smtpProfile=mailer

[acl2]
; example of driver: "db"
driver=

[sessions]
; If several applications are installed in the same documentRoot but with
; a different basePath, shared_session indicates if these application
; share the same php session
shared_session=off

; indicate a session name for each applications installed with the same
; domain and basePath, if their respective sessions shouldn't be shared
name=

; Use alternative storage engines for sessions
;storage = "files"
;files_path = "app:var/sessions/"
;
; or
;
;storage = "dao"
;dao_selector = "jelix~jsession"
;dao_db_profile = ""


[forms]
; define input type for datetime widgets : "textboxes" or "menulists"
;controls.datetime.input = "menulists"
; define the way month labels are displayed widgets: "numbers", "names" or "shortnames"
;controls.datetime.months.labels = "names"
; define the default config for datepickers in jforms
;datepicker = default
; default captcha type, you can set it with "recaptcha" too
;captcha = simple


[datepickers]
;default = jelix/js/jforms/datepickers/default/init.js

[recaptcha]
; see https://developers.google.com/recaptcha/docs/display to know the meaning
; of these configuration parameters.
theme=
type=
size=
tabindex=
