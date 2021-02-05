<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 17:40
 * Source: createMember.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User\RequestAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;
use Zeevin\Libaip\Core\Struct\ProjectExtension\CreateMember;

class CreateBankSubAcctNoRequest extends BaseRequestAttribute
{
    /**
     * 账户集编号.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("account_set_no")
     * @JMS\Type("string")
     */
    protected $account_set_no;

    /**
     * 统用户标识.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;

    /**
     * 开户机构类型.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("acct_org_type")
     * @JMS\Type("integer")
     */
    protected $acct_org_type;

    /**
     * @return string $account_set_no
     */
    public function getAccountSetNo()
    {
        return $this->account_set_no;
    }

    /**
     * @param string $account_set_no
     *
     * @return $this
     */
    public function setAccountSetNo(string $account_set_no)
    {
        $this->account_set_no = $account_set_no;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }

    /**
     * @param $biz_user_id
     *
     * @return $this
     */
    public function setBizUserId(string $biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcctOrgType()
    {
        return $this->acct_org_type;
    }

    /**
     * @param $acct_org_type
     *
     * @return $this
     */
    public function setAcctOrgType(int $acct_org_type)
    {
        $this->acct_org_type = $acct_org_type;
        return $this;
    }

}
