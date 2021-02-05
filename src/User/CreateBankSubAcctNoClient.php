<?php
namespace Zeevin\Libaip\User;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\User\ResponseAttribute\CreateBankSubAcctNoResponse;

/**
 * Class CreateMemberClient.
 *
 * @method CreateBankSubAcctNoResponse|mixed getResult($format = 'array', $extendNameSpace = null)
 */
class CreateBankSubAcctNoClient extends BaseClient
{
    protected $domain = 'User';
    protected $id = 'createBankSubAcctNo';
}
