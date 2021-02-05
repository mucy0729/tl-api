<?php

namespace Zeevin\Libaip\User\ResponseAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class CreateBankSubAcctNoResponse extends BaseResponseAttribute
{
    /**
     * 通联用户ID.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sub_acct_no")
     * @JMS\Type("string")
     */
    protected $sub_acct_no;
    /**
     * 通联用户ID.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;
    /**
     * 通联用户ID.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("account_set_no")
     * @JMS\Type("string")
     */
    protected $account_set_no;

    /**
     * @return mixed
     */
    public function getSubAcctNo()
    {
        return $this->sub_acct_no;
    }

    /**
     * @return mixed
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }
    /**
     * @return mixed
     */
    public function getAccountSetNo()
    {
        return $this->account_set_no;
    }
}
