<?php
namespace Zeevin\Libaip\Order\ResponseAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class RefundResponse extends BaseResponseAttribute
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
     * @SerializedName("pay_status")
     * @JMS\Type("string")
     */
    protected $pay_status;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_order_no")
     * @JMS\Type("string")
     */
    protected $biz_order_no;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("amount")
     * @JMS\Type("integer")
     */
    protected $amount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("fee_amount")
     * @JMS\Type("integer")
     */
    protected $fee_amount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("coupon_amount")
     * @JMS\Type("integer")
     */
    protected $coupon_amount;

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
    public function getPayStatus()
    {
        return $this->pay_status;
    }

    /**
     * @return mixed
     */
    public function getBizOrderNo()
    {
        return $this->biz_order_no;
    }
    /**
     * @return mixed
     */
    public function getCouponAmount()
    {
        return $this->coupon_amount;
    }
    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @return mixed
     */
    public function getFeeAmount()
    {
        return $this->fee_amount;
    }
}
