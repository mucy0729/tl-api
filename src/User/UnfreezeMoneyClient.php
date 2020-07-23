<?php
namespace Zeevin\Libaip\User;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\User\ResponseAttribute\UnfreezeMoneyResponse;

/**
 * Class UnfreezeMoneyClient.
 *
 * @method UnfreezeMoneyResponse getResult($format = 'object', $extendNameSpace = null)
 */
class UnfreezeMoneyClient extends BaseClient
{
    protected $domain = 'User';
    protected $id = 'unfreezeMoney';
}
