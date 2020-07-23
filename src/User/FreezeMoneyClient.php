<?php
namespace Zeevin\Libaip\User;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\User\ResponseAttribute\FreezeMoneyResponse;

/**
 * Class FreezeMoneyClient.
 *
 * @method FreezeMoneyResponse getResult($format = 'object', $extendNameSpace = null)
 */
class FreezeMoneyClient extends BaseClient
{
    protected $domain = 'User';
    protected $id = 'freezeMoney';
}
