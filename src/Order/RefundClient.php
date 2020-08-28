<?php
namespace Zeevin\Libaip\Order;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\RefundResponse;

/**
 * Class RefundClient.
 *
 * @method  RefundResponse getResult($format = 'object', $extendNameSpace = null)
 */
class RefundClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'refund';
}
