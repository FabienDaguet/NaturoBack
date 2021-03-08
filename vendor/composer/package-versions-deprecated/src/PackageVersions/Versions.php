<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'antishov/doctrine-extensions-bundle' => 'v1.4.3@b036a8d62111c03f237a619b1840c46570f48483',
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.12.1@b17c5014ef81d212ac539f07a1001832df1b6d3b',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.1@2afde5a9844126bc311cd5f548b5475e75f800d3',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.3@015fdd490074d4daa891e2d1df998dc35ba54924',
  'doctrine/doctrine-migrations-bundle' => '3.0.2@b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.0@260991be753a38aa25b6f2d13dbb7f113f8dbf8f',
  'doctrine/orm' => '2.8.1@242cf1a33df1b8bc5e1b86c3ebd01db07851c833',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'easycorp/easyadmin-bundle' => 'v3.2.7@48f71e3c95a5b1afffd99e5cee350f313dad4038',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'gedmo/doctrine-extensions' => 'v3.0.3@b4302ede2e247a6cc884b302a5f7146e08bd1b18',
  'jms/metadata' => '2.4.0@491917b66b44deff7d1c320d35c1b92237083f67',
  'knplabs/knp-components' => 'v3.0.0@246b700fdc40020f1db1c887cd462b9b9d3b79b0',
  'knplabs/knp-paginator-bundle' => 'v5.4.2@8a7255062dd9f6ff8a3a4712a4b34bdbbc9f31f7',
  'laminas/laminas-code' => '4.0.0@28a6d70ea8b8bca687d7163300e611ae33baf82a',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v6.1.0@b3596907c3d35bee5a9a1096baaeb7d465a04f30',
  'symfony/asset' => 'v5.2.4@54a42aa50f9359d1184bf7e954521b45ca3d5828',
  'symfony/cache' => 'v5.2.4@d15fb2576cdbe2c40d7c851e62f85b0faff3dd3d',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.2.4@212d54675bf203ff8aef7d8cee8eecfb72f4a263',
  'symfony/console' => 'v5.2.4@d6d0cc30d8c0fda4e7b213c20509b0159a8f4556',
  'symfony/css-selector' => 'v5.2.4@f65f217b3314504a1ec99c2d6ef69016bb13490f',
  'symfony/dependency-injection' => 'v5.2.4@f7d89110c55d88620dc811f342f94393b8a045d4',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.2.4@b9fc1a1e35c732e9ad48ba36dbb1a923a0c95dc2',
  'symfony/dotenv' => 'v5.2.4@783f12027c6b40ab0e93d6136d9f642d1d67cd6b',
  'symfony/error-handler' => 'v5.2.4@b547d3babcab5c31e01de59ee33e9d9c1421d7d0',
  'symfony/event-dispatcher' => 'v5.2.4@d08d6ec121a425897951900ab692b612a61d6240',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.2.4@3fc560e62bc5121751b792b11505db03a12cf83c',
  'symfony/filesystem' => 'v5.2.4@710d364200997a5afde34d9fe57bd52f3cc1e108',
  'symfony/finder' => 'v5.2.4@0d639a0943822626290d169965804f79400e6a04',
  'symfony/flex' => 'v1.12.2@e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
  'symfony/form' => 'v5.2.4@7664ad970bc54ae7ac1ccc2ba0c7133c1d0c90f8',
  'symfony/framework-bundle' => 'v5.2.4@6158eb79d62946c24d3f6959bf9b2073555e200e',
  'symfony/http-client' => 'v5.2.4@c7d1f35a31ef153a302e3f80336170e1280b983d',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.2.4@54499baea7f7418bce7b5ec92770fd0799e8e9bf',
  'symfony/http-kernel' => 'v5.2.4@c452dbe4f385f030c3957821bf921b13815d6140',
  'symfony/intl' => 'v5.2.4@11b4217e394c80a2e313d3a4a37262fbe65a7add',
  'symfony/mailer' => 'v5.2.4@0ca4de7d25e520dfaf59da41c02381264f285d7d',
  'symfony/mime' => 'v5.2.4@5155d2fe14ef1eb150e3bdbbc1ec1455df95e9cd',
  'symfony/monolog-bridge' => 'v5.2.4@aca99c4135001224b917eed17cc846e8c0ba981c',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/notifier' => 'v5.2.4@bdb8702e91f19fc64d0c678f41fed144d0263657',
  'symfony/options-resolver' => 'v5.2.4@5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce',
  'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/polyfill-uuid' => 'v1.22.1@9773608c15d3fe6ba2b6456a124777a7b8ffee2a',
  'symfony/process' => 'v5.2.4@313a38f09c77fbcdc1d223e57d368cea76a2fd2f',
  'symfony/property-access' => 'v5.2.4@3af8ed262bd3217512a13b023981fe68f36ad5f3',
  'symfony/property-info' => 'v5.2.4@7185bbc74e6f49c3f1b5936b4d9e4ca133921189',
  'symfony/proxy-manager-bridge' => 'v5.2.4@fd6bb40190b1719abbe831be09adf38e0744d5f5',
  'symfony/routing' => 'v5.2.4@cafa138128dfd6ab6be1abf6279169957b34f662',
  'symfony/security-bundle' => 'v5.2.4@ec3162de6b75df14fffb9f60c1ae1051ae46037e',
  'symfony/security-core' => 'v5.2.4@07feaed0887fc9f53e03fe30546895c1f7588362',
  'symfony/security-csrf' => 'v5.2.4@e22ef49d5d3773014942f3dfe301b168a4a833dc',
  'symfony/security-guard' => 'v5.2.4@a191352047f2ea0d927c62e1a2f261cf906d1bde',
  'symfony/security-http' => 'v5.2.4@46876779ad5405d0b7f4c93d8203ad1984568e7a',
  'symfony/serializer' => 'v5.2.4@a285f474a72397ccbd384900abc968ffcb511dda',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.2.4@b12274acfab9d9850c52583d136a24398cdf1a0c',
  'symfony/string' => 'v5.2.4@4e78d7d47061fa183639927ec40d607973699609',
  'symfony/translation' => 'v5.2.4@74b0353ab34ff4cca827a2cf909e325d96815e60',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.2.4@4fa4380e5413eb5db24abdef4dfd9fe567b11605',
  'symfony/twig-bundle' => 'v5.2.4@5ebbb5f0e8bfaa0b4b37cb25ff97f83b18caf221',
  'symfony/uid' => 'v5.2.4@959f69a8c0d68a37311eeabd630a0ef0979bc1d0',
  'symfony/validator' => 'v5.2.4@db23f365a5646da5f7650c0da4a7a571c1ff37b1',
  'symfony/var-dumper' => 'v5.2.4@6a81fec0628c468cf6d5c87a4d003725e040e223',
  'symfony/var-exporter' => 'v5.2.4@5aed4875ab514c8cb9b6ff4772baa25fa4c10307',
  'symfony/web-link' => 'v5.2.4@9c50065e5192eeb669c30d7f02fd7bb85b6f6d36',
  'symfony/webpack-encore-bundle' => 'v1.11.1@395b60a549ded8e7f77f0d551815d7555e2d9eb0',
  'symfony/yaml' => 'v5.2.4@7d6ae0cce3c33965af681a4355f1c4de326ed277',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'twig/cssinliner-extra' => 'v3.3.0@89a7b0f64c1296068864d540567428210c9de340',
  'twig/extra-bundle' => 'v3.3.0@e2d27a86c3f47859eb07808fa7c8679d30fcbdde',
  'twig/string-extra' => 'v3.3.0@8a8bb5631e8e27573fae741211b9c752b9b0b428',
  'twig/twig' => 'v3.3.0@1f3b7e2c06cc05d42936a8ad508ff1db7975cdc5',
  'vich/uploader-bundle' => '1.16.1@781dd64bf278e924971a35d38ef6c690e35de6e1',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'symfony/browser-kit' => 'v5.2.4@3ca3a57ce9860318b20a924fec5daf5c6db44d93',
  'symfony/debug-bundle' => 'v5.2.4@ec21bd26d24dab02ac40e4bec362b3f4032486e8',
  'symfony/dom-crawler' => 'v5.2.4@400e265163f65aceee7e904ef532e15228de674b',
  'symfony/maker-bundle' => 'v1.29.1@313b5669a5370bf36cd34fa8f5b5bbbfa5fb8aa8',
  'symfony/phpunit-bridge' => 'v5.2.4@9d85d900c1afe29138a0d5854505eb684bc3ac6d',
  'symfony/web-profiler-bundle' => 'v5.2.4@4b28c24db64156ad892300be7fae1978bed075ce',
  'symfony/polyfill-ctype' => '*@10849fe338a98d60ef9ce60bef4202420a913b20',
  'symfony/polyfill-iconv' => '*@10849fe338a98d60ef9ce60bef4202420a913b20',
  'symfony/polyfill-php72' => '*@10849fe338a98d60ef9ce60bef4202420a913b20',
  '__root__' => 'dev-master@10849fe338a98d60ef9ce60bef4202420a913b20',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
