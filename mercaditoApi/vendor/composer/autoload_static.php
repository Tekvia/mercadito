<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdae701c8b03bb0c1e96e7f742b30b070
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'C' => 
        array (
            'Clx\\Xms\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Clx\\Xms\\' => 
        array (
            0 => __DIR__ . '/..' . '/clxcommunications/sdk-xms/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'O' => 
        array (
            'Openpay' => 
            array (
                0 => __DIR__ . '/..' . '/openpay/sdk',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdae701c8b03bb0c1e96e7f742b30b070::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdae701c8b03bb0c1e96e7f742b30b070::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdae701c8b03bb0c1e96e7f742b30b070::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdae701c8b03bb0c1e96e7f742b30b070::$classMap;

        }, null, ClassLoader::class);
    }
}