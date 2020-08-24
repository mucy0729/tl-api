<?php
namespace Zeevin\Libaip\Order;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\ApplicationTransferResponse;

/**
 * Class ApplicationTransferClient.
 *
 * @method ApplicationTransferResponse getResult($format = 'object', $extendNameSpace = null)
 */
class ApplicationTransferClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'applicationTransfer';
}
