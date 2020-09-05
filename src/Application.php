<?php
namespace Zeevin\Libaip;

use Zeevin\Libaip\Core\ServiceContainer;

/**
 * Class Application.
 *
 * @property \DusanKasan\Knapsack\Collection $config;
 * @property \Zeevin\Libaip\User\CreateMemberClient $user_createMember
 * @property \Zeevin\Libaip\User\UnfreezeMoneyClient $user_unfreezeMoney
 * @property \Zeevin\Libaip\User\FreezeMoneyClient $user_freezeMoney
 * @property \Zeevin\Libaip\Order\DepositApplyClient $order_depositApply
 * @property \Zeevin\Libaip\Order\PayFrontSmsClient $order_payFrontSms
 * @property \Zeevin\Libaip\Order\PaySmsClient $order_paySms
 * @property \Zeevin\Libaip\Order\QueryBalanceClient $order_queryBalance
 * @property \Zeevin\Libaip\Order\WithdrawApplyClient $order_withdrawApply
 * @property \Zeevin\Libaip\Order\ConsumeApplyClient $order_consumeApply
 * @property \Zeevin\Libaip\User\ApplyBindAcctClient $user_applyBindAcct
 * @property \Zeevin\Libaip\Tool\CheckSignClient $tool_checkSign
 * @property \Zeevin\Libaip\Order\AgentCollectApplyClient $order_agentCollectApply
 * @property \Zeevin\Libaip\User\DestroyMemberClient $user_destroyMember
 * @property \Zeevin\Libaip\Order\SingleAgentPayClient $order_singleAgentPay
 * @property \Zeevin\Libaip\Order\ConsumeProtocolApplyClient $order_consumeProtocolApply
 * @property \Zeevin\Libaip\User\UnbindBankCardClient $user_unbindBankCard
 * @property \Zeevin\Libaip\Order\ApplicationTransferClient $order_applicationTransferClient
 * @property \Zeevin\Libaip\Order\RefundClient $order_refundClient
 * @property \Zeevin\Libaip\Order\AgentCollectProtocolApplyClient $order_agentCollectProtocolApplyClient
 */
class Application extends ServiceContainer
{
    protected $providers = [
        \Zeevin\Libaip\User\ServiceProvider::class,
        \Zeevin\Libaip\Order\ServiceProvider::class,
        \Zeevin\Libaip\Tool\ServiceProvider::class,
    ];

    public function __get($name)
    {
        return $this[$name];
    }
}
