<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 18:10
 * Source: ServiceProvider.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['user_createMember'] = function ($app) {
            return new CreateMemberClient($app);
        };
        $app['user_applyBindAcct'] = function ($app) {
            return new ApplyBindAcctClient($app);
        };
        $app['user_destroyMember'] = function ($app) {
            return new DestroyMemberClient($app);
        };
        $app['user_unbindBankCard'] = function ($app) {
            return new UnbindBankCardClient($app);
        };
        $app['user_freezeMoney'] = function ($app) {
            return new FreezeMoneyClient($app);
        };
        $app['user_unfreezeMoney'] = function ($app) {
            return new UnfreezeMoneyClient($app);
        };
    }
}
