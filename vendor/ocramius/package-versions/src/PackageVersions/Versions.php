<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'laravel/laravel';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'algolia/algoliasearch-client-php' => '2.4.0@602748161cecbf9d329379a9949d63e1dc683852',
  'algolia/scout-extended' => 'v1.7.0@32a7940efdfe43416bf820540e7ba7ecf7387b71',
  'anhskohbo/no-captcha' => '3.1.1@3b2f7d461e1fc7153e0c724c3ccac7a2db156733',
  'barryvdh/laravel-dompdf' => 'v0.8.5@7393732b2f3a3ee357974cbb0c46c9b65b84dad1',
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'dnoegel/php-xdg-base-dir' => '0.1@265b8593498b997dc2d31e75b89f053b5cc9621a',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/lexer' => '1.1.0@e17f069ede36f7534b95adec71910ed1b49c74ea',
  'dompdf/dompdf' => 'v0.8.3@75f13c700009be21a1965dc2c5b68a8708c22ba2',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.11@92dd169c32f6f55ba570c309d83f5209cefb5e23',
  'erusev/parsedown' => '1.7.3@6d893938171a817f4e9bc9e86f2da1e370b7bcd7',
  'fideloper/proxy' => '4.2.1@03085e58ec7bee24773fa5a8850751a6e61a7e8a',
  'guzzlehttp/guzzle' => '6.3.3@407b0cb880ace85c9b63c5f9551db498cb2d50ba',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'intervention/image' => '2.5.0@39eaef720d082ecc54c64bf54541c55f10db546d',
  'jakub-onderka/php-console-color' => 'v0.2@d5deaecff52a0d61ccb613bb3804088da0307191',
  'jakub-onderka/php-console-highlighter' => 'v0.4@9f7a229a69d52506914b4bc61bfdb199d90c5547',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'laravel/framework' => 'v6.0.0@89c81d4dc37714d82521d05dc003b26b2a86defc',
  'laravel/scout' => 'v7.1.3@3e7c978597b0e66f7886b9feac6079dda225e78e',
  'laravel/tinker' => 'v1.0.10@ad571aacbac1539c30d480908f9d0c9614eaf1a7',
  'laravel/ui' => 'v1.0.1@15ac62a34c1b07a88da3eff2506ac6ae782c9803',
  'league/flysystem' => '1.0.55@33c91155537c6dc899eacdc54a13ac6303f156e6',
  'monolog/monolog' => '2.0.0@68545165e19249013afd1d6f7485aecff07a2d22',
  'nesbot/carbon' => '2.24.0@934459c5ac0658bc765ad1e53512c7c77adcac29',
  'nikic/php-parser' => 'v4.2.4@97e59c7a16464196a8b9c77c47df68e4a39a45c4',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'opis/closure' => '3.4.0@60a97fff133b1669a5b1776aa8ab06db3f3962b7',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'phenx/php-font-lib' => '0.5.1@760148820110a1ae0936e5cc35851e25a938bc97',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'php-http/client-common' => '2.0.0@2b8aa3c4910afc21146a9c8f96adb266e869517a',
  'php-http/curl-client' => '2.0.0@e7a2a5ebcce1ff7d75eaf02b7c85634a6fac00da',
  'php-http/discovery' => '1.7.0@e822f86a6983790aa17ab13aa7e69631e86806b6',
  'php-http/httplug' => 'v2.0.0@b3842537338c949f2469557ef4ad4bdc47b58603',
  'php-http/message' => '1.8.0@ce8f43ac1e294b54aabf5808515c3554a19c1e1c',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'phpoption/phpoption' => '1.5.0@94e644f7d2051a5f0fcf77d81605f152eecff0ed',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.9.9@9aaf29575bb8293206bb0420c1e1c87ff2ffa94e',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.8.0@d09ea80159c1929d75b3f9c60504d613aeb4a1e3',
  'realrashid/sweet-alert' => 'v2.0.2@79412ca91857de578253585270abbf23397d5a67',
  'riimu/kit-phpencoder' => 'v2.4.0@7e876d25019c3f6c23321ab5ac1a55c72fcd0933',
  'sabberworm/php-css-parser' => '8.3.0@91bcc3e3fdb7386c9a2e0e0aa09ca75cc43f121f',
  'sentry/sdk' => '2.0.4@4c115873c86ad5bd0ac6d962db70ca53bf8fb874',
  'sentry/sentry' => '2.2.4@a74999536b9119257cb1a4b1aa038e4a08439f67',
  'sentry/sentry-laravel' => '1.4.1@c06c2dfb04b2b0e2a16f996d5fbfe239f32b9f0d',
  'swiftmailer/swiftmailer' => 'v6.2.1@5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a',
  'symfony/console' => 'v4.3.4@de63799239b3881b8a08f8481b22348f77ed7b36',
  'symfony/css-selector' => 'v4.3.4@c6e5e2a00db768c92c3ae131532af4e1acc7bd03',
  'symfony/debug' => 'v4.3.4@afcdea44a2e399c1e4b52246ec8d54c715393ced',
  'symfony/event-dispatcher' => 'v4.3.4@429d0a1451d4c9c4abe1959b2986b88794b9b7d2',
  'symfony/event-dispatcher-contracts' => 'v1.1.5@c61766f4440ca687de1084a5c00b08e167a2575c',
  'symfony/finder' => 'v4.3.4@86c1c929f0a4b24812e1eb109262fc3372c8e9f2',
  'symfony/http-foundation' => 'v4.3.4@d804bea118ff340a12e22a79f9c7e7eb56b35adc',
  'symfony/http-kernel' => 'v4.3.4@5e0fc71be03d52cd00c423061cfd300bd6f92a52',
  'symfony/mime' => 'v4.3.4@987a05df1c6ac259b34008b932551353f4f408df',
  'symfony/options-resolver' => 'v4.3.6@f46c7fc8e207bd8a2188f54f8738f232533765a4',
  'symfony/polyfill-ctype' => 'v1.12.0@550ebaac289296ce228a706d0867afc34687e3f4',
  'symfony/polyfill-iconv' => 'v1.12.0@685968b11e61a347c18bf25db32effa478be610f',
  'symfony/polyfill-intl-idn' => 'v1.12.0@6af626ae6fa37d396dc90a399c0ff08e5cfc45b2',
  'symfony/polyfill-mbstring' => 'v1.12.0@b42a2f66e8f1b15ccf25652c3424265923eb4f17',
  'symfony/polyfill-php72' => 'v1.12.0@04ce3335667451138df4307d6a9b61565560199e',
  'symfony/polyfill-php73' => 'v1.12.0@2ceb49eaccb9352bff54d22570276bb75ba4a188',
  'symfony/process' => 'v4.3.4@e89969c00d762349f078db1128506f7f3dcc0d4a',
  'symfony/routing' => 'v4.3.4@ff1049f6232dc5b6023b1ff1c6de56f82bcd264f',
  'symfony/service-contracts' => 'v1.1.6@ea7263d6b6d5f798b56a45a5b8d686725f2719a3',
  'symfony/translation' => 'v4.3.4@28498169dd334095fa981827992f3a24d50fed0f',
  'symfony/translation-contracts' => 'v1.1.6@325b17c24f3ee23cbecfa63ba809c6d89b5fa04a',
  'symfony/var-dumper' => 'v4.3.4@641043e0f3e615990a0f29479f9c117e8a6698c6',
  'tijsverkoyen/css-to-inline-styles' => '2.2.1@0ed4a2ea4e0902dac0489e6436ebcd5bbcae9757',
  'vlucas/phpdotenv' => 'v3.5.0@95cb0fa6c025f7f0db7fc60f81e9fb231eb2d222',
  'zendframework/zend-diactoros' => '2.1.5@6dcf9e760a6b476f3e9d80abbc9ce9c4aa921f9c',
  'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a',
  'facade/flare-client-php' => '1.0.1@6c3509372c20255ac19b3b5583216daea0c2f992',
  'facade/ignition' => '1.4.11@5082ea8e531894dca7ffcee25206d93cd25aca42',
  'facade/ignition-contracts' => '1.0.0@f445db0fb86f48e205787b2592840dd9c80ded28',
  'filp/whoops' => '2.5.0@cde50e6720a39fdacb240159d3eea6865d51fd96',
  'fzaninotto/faker' => 'v1.8.0@f72816b43e74063c8b10357394b6bba8cb1c10de',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'mockery/mockery' => '1.2.3@4eff936d83eb809bde2c57a3cea0ee9643769031',
  'myclabs/deep-copy' => '1.9.3@007c053ae6f31bba39dfa19a7726f56e9763bbea',
  'nunomaduro/collision' => 'v3.0.1@af42d339fe2742295a54f6fdd42aaa6f8c4aca68',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '1.0.1@21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
  'phpdocumentor/reflection-docblock' => '4.3.1@bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c',
  'phpdocumentor/type-resolver' => '0.4.0@9c977708995954784726e25d0cd1dddf4e65b0f7',
  'phpspec/prophecy' => '1.8.1@1927e75f4ed19131ec9bcc3b002e07fb1173ee76',
  'phpunit/php-code-coverage' => '7.0.7@7743bbcfff2a907e9ee4a25be13d0f8ec5e73800',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.0@e899757bb3df5ff6e95089132f32cd59aac2220a',
  'phpunit/phpunit' => '8.3.4@e31cce0cf4499c0ccdbbb211a3280d36ab341e36',
  'scrivo/highlight.php' => 'v9.15.10.0@9ad3adb4456dc91196327498dbbce6aa1ba1239e',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.2@f2a2c8e1c97c11ace607a7a667d73d47c19fe404',
  'sebastian/exporter' => '3.1.1@06a9a5947f47b3029d76118eb5c22802e5869687',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.5.0@88e6d84706d09a236046d686bbea96f07b3a34f4',
  'laravel/laravel' => 'dev-master@fb767fa4c7b35f8c5bac078de289534b17fa1f1d',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
