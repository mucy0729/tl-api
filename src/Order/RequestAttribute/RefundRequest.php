<?php
namespace Zeevin\Libaip\Order\RequestAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;
use Zeevin\Libaip\Core\Struct\ProjectExtension\Refund;

class RefundRequest extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("ori_biz_order_no")
     * @JMS\Type("string")
     */
    protected $ori_biz_order_no;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $amount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $fee_amount;
    /**
     * @SerializedName("refund_list")
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("array<array>")
     */
    protected $refund_list;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $refund_type;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $coupon_amount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $extend_info;
    /**
     * @var Refund
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("Zeevin\Libaip\Core\Struct\ProjectExtension\Refund")
     */
    protected $project_extension;


    /**
     * @return mixed
     */
    public function getOriBizOrderNo()
    {
        return $this->ori_biz_order_no;
    }

    /**
     * @param mixed $ori_biz_order_no
     *
     * @return RefundRequest
     */
    public function setOriBizOrderNo($ori_biz_order_no)
    {
        $this->ori_biz_order_no = $ori_biz_order_no;
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
     * @param mixed $biz_user_id
     *
     * @return RefundRequest
     */
    public function setBizUserId($biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     *
     * @return RefundRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeeAmount()
    {
        return $this->fee_amount;
    }

    /**
     * @param mixed $fee_amount
     *
     * @return RefundRequest
     */
    public function setFee($fee_amount)
    {
        $this->fee_amount = $fee_amount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefundList()
    {
        return $this->refund_list;
    }

    /**
     * @param mixed $refund_list
     *
     * @return RefundRequest
     */
    public function setRefundList($refund_list)
    {
        $this->refund_list = $refund_list;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefundType()
    {
        return $this->refund_type;
    }

    /**
     * @param mixed $refund_type
     *
     * @return RefundRequest
     */
    public function setRefundType($refund_type)
    {
        $this->refund_type = $refund_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCouponAmount()
    {
        return $this->coupon_amount;
    }

    /**
     * @param mixed $coupon_amount
     *
     * @return RefundRequest
     */
    public function setCouponAmount($coupon_amount)
    {
        $this->coupon_amount = $coupon_amount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtendInfo()
    {
        return $this->extend_info;
    }

    /**
     * @param mixed $extend_info
     *
     * @return RefundRequest
     */
    public function setExtendInfo($extend_info)
    {
        $this->extend_info = $extend_info;

        return $this;
    }

    /**
     * @return Refund
     */
    public function getProjectExtension(): Refund
    {
        if (!$this->project_extension instanceof Refund) {
            $this->project_extension = new Refund();
        }

        return $this->project_extension;
    }
}
