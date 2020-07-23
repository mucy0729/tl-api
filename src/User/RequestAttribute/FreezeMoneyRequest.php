<?php
namespace Zeevin\Libaip\User\RequestAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;

class FreezeMoneyRequest extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("account_set_no")
     * @JMS\Type("string")
     */
    protected $account_set_no = '';
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("amount")
     * @JMS\Type("string")
     */
    protected $amount;

    /**
     * @Notes:
     * @Interface getBizUserId
     * @return mixed
     * @author: kai.chen
     * @Time: 2020/7/23   10:14 下午
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }

    /**
     * @Notes:
     * @Interface setBizUserId
     * @param $biz_user_id
     * @return $this
     * @author: kai.chen
     * @Time: 2020/7/23   10:13 下午
     */
    public function setBizUserId($biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;

        return $this;
    }

    /**
     * @Notes:
     * @Interface getAccountSetNo
     * @return string
     * @author: kai.chen
     * @Time: 2020/7/23   10:17 下午
     */
    public function getAccountSetNo()
    {
        return $this->account_set_no;
    }

    /**
     * @Notes:
     * @Interface setAccountSetNo
     * @param string $account_set_no
     * @return $this
     * @author: kai.chen
     * @Time: 2020/7/23   10:17 下午
     */
    public function setAccountSetNo($account_set_no = '')
    {
        $this->account_set_no = $account_set_no;

        return $this;
    }

    /**
     * @Notes:
     * @Interface getAmount
     * @return mixed
     * @author: kai.chen
     * @Time: 2020/7/23   10:15 下午
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @Notes:
     * @Interface setAmount
     * @param int $amount
     * @return $this
     * @author: kai.chen
     * @Time: 2020/7/23   10:16 下午
     */
    public function setAmount($amount = 0)
    {
        $this->amount = $amount;

        return $this;
    }
}
