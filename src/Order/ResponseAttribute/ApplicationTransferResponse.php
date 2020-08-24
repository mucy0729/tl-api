<?php
namespace Zeevin\Libaip\Order\ResponseAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class ApplicationTransferResponse extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_transfer_no")
     * @JMS\Type("string")
     */
    protected $biz_transfer_no;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("extend_info")
     * @JMS\Type("string")
     */
    protected $extend_info;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("transfer_no")
     * @JMS\Type("string")
     */
    protected $transfer_no;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("amount")
     * @JMS\Type("string")
     */
    protected $amount;

    /**
     * @return string
     */
    public function getBizTransferNo()
    {
        return $this->biz_transfer_no;
    }

    /**
     * @return mixed
     */
    public function getExtendInfo()
    {
        return $this->extend_info;
    }

    /**
     * @return string
     */
    public function getTransferNo()
    {
        return $this->transfer_no;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
