<?php
namespace Zeevin\Libaip\Order;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\AgentCollectProtocolApplyResponse;

/**
 * Class AgentCollectApplyClient.
 *
 * @method  AgentCollectProtocolApplyResponse getResult($format = 'object', $extendNameSpace = null)
 */
class AgentCollectProtocolApplyClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'agentCollectProtocolApply';
}
