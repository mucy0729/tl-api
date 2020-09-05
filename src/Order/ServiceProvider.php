<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/18
 * Time: 11:01
 * Source: ServiceProvider.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['order_depositApply'] = function ($app) {
            return new DepositApplyClient($app);
        };
        $app['order_payFrontSms'] = function ($app) {
            return new PayFrontSmsClient($app);
        };
        $app['order_paySms'] = function ($app) {
            return new PaySmsClient($app);
        };
        $app['order_queryBalance'] = function ($app) {
            return new QueryBalanceClient($app);
        };
        $app['order_withdrawApply'] = function ($app) {
            return new WithdrawApplyClient($app);
        };
        $app['order_consumeApply'] = function ($app) {
            return new ConsumeApplyClient($app);
        };
        $app['order_agentCollectApply'] = function ($app) {
            return new AgentCollectApplyClient($app);
        };
        $app['order_agentCollectProtocolApply'] = function ($app) {
            return new AgentCollectProtocolApplyClient($app);
        };
        $app['order_singleAgentPay'] = function ($app) {
            return new SingleAgentPayClient($app);
        };
        $app['order_consumeProtocolApply'] = function ($app) {
            return new ConsumeProtocolApplyClient($app);
        };
        $app['order_applicationTransferClient'] = function ($app) {
            return new ApplicationTransferClient($app);
        };
        $app['order_refundClient'] = function ($app) {
            return new RefundClient($app);
        };
    }
}
