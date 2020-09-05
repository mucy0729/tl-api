<?php
namespace Zeevin\Libaip\Order\ResponseAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class AgentCollectProtocolApplyResponse extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("order_no")
     * @JMS\Type("string")
     */
    protected $order_no;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("extend_info")
     * @JMS\Type("string")
     */
    protected $extend_info;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pay_info")
     * @JMS\Type("string")
     */
    protected $pay_info;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_order_no")
     * @JMS\Type("string")
     */
    protected $biz_order_no;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pay_fail_message")
     * @JMS\Type("string")
     */
    protected $pay_fail_message;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pay_status")
     * @JMS\Type("string")
     */
    protected $pay_status;

    /**
     * @return mixed
     */
    public function getPayStatus()
    {
        return $this->pay_status;
    }
    /**
     * @return mixed
     */
    public function getPayFailMessage()
    {
        return $this->pay_fail_message;
    }
    /**
     * @return mixed
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }

    /**
     * @return mixed
     */
    public function getExtendInfo()
    {
        return $this->extend_info;
    }

    /**
     * @return mixed
     */
    public function getPayInfo()
    {
        return $this->pay_info;
    }

    /**
     * @return mixed
     */
    public function getBizOrderNo()
    {
        return $this->biz_order_no;
    }
}
