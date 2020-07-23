<?php
namespace Zeevin\Libaip\User\ResponseAttribute;

use JMS\Serializer\Annotation as JMS;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class UnfreezeMoneyResponse extends BaseResponseAttribute
{
    /**
     * 解冻单号.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_freezen_no")
     * @JMS\Type("string")
     */
    protected $biz_freezen_no;

    /**
     * 解冻金额.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("amount")
     * @JMS\Type("string")
     */
    protected $amount;

    /**
     * @return mixed
     */
    public function getBizFreezenNo()
    {
        return $this->biz_freezen_no;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
