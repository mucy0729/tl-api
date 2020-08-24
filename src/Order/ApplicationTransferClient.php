<?php
namespace Zeevin\Libaip\Order;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\ConsumeProtocolApplyResponse;

/**
 * Class ConsumeProtocolApplyClient.
 *
 * @method ConsumeProtocolApplyResponse getResult($format = 'object', $extendNameSpace = null)
 */
class ApplicationTransferClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'applicationTransfer';
}
