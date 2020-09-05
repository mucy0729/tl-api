<?php
namespace Zeevin\Libaip\Order\RequestAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;
use Zeevin\Libaip\Core\Struct\ProjectExtension\AgentCollectProtocolApply;

class AgentCollectProtocolApplyRequest extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("payer_id")
     * @JMS\Type("string")
     */
    protected $payer_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("amount")
     * @JMS\Type("integer")
     */
    protected $amount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("fee")
     * @JMS\Type("integer")
     */
    protected $fee = 0;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pay_method")
     * @JMS\Type("array<string,array>")
     */
    protected $pay_method;
    /**
     * @JMS\SkipWhenEmpty
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("goods_name")
     * @JMS\Type("string")
     */
    protected $goods_name;
    /**
     * 来源 1.移动端 2.pc端.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("source")
     * @JMS\Type("integer")
     */
    protected $source = 1;
    /**
     * @JMS\SkipWhenEmpty
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("summary")
     * @JMS\Type("string")
     */
    protected $summary;
    /**
     * @JMS\SkipWhenEmpty
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("extend_info")
     * @JMS\Type("string")
     */
    protected $extend_info;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("reciever_list")
     * @JMS\Type("array<array>")
     */
    protected $receiver_list;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("protocol_no")
     * @JMS\Type("string")
     */
    protected $protocol_no;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("goods_type")
     * @JMS\Type("string")
     */
    protected $goods_type;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_goods_no")
     * @JMS\Type("string")
     */
    protected $biz_goods_no;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("goods_desc")
     * @JMS\Type("string")
     */
    protected $goods_desc;

    /**
     * @var AgentCollectProtocolApply
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("Zeevin\Libaip\Core\Struct\ProjectExtension\AgentCollectProtocolApply")
     */
    protected $project_extension;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("validate_type")
     * @JMS\Type("integer")
     */
    protected $validate_type;

    /**
     * @return mixed
     */
    public function getPayerId()
    {
        return $this->payer_id;
    }

    /**
     * @param mixed $payer_id
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setPayerId($payer_id)
    {
        $this->payer_id = $payer_id;

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
     * @return AgentCollectProtocolApplyRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int
     */
    public function getFee(): int
    {
        return $this->fee;
    }

    /**
     * @param int $fee
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setFee(int $fee): self
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayMethod()
    {
        return $this->pay_method;
    }

    /**
     * @param mixed $pay_method
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setPayMethod($pay_method)
    {
        $this->pay_method = $pay_method;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoodsName()
    {
        return $this->goods_name;
    }

    /**
     * @param mixed $goods_name
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setGoodsName($goods_name)
    {
        $this->goods_name = $goods_name;

        return $this;
    }

    /**
     * @return int
     */
    public function getSource(): int
    {
        return $this->source;
    }

    /**
     * @param int $source
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setSource(int $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

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
     * @return AgentCollectProtocolApplyRequest
     */
    public function setExtendInfo($extend_info)
    {
        $this->extend_info = $extend_info;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiverList()
    {
        return $this->receiver_list;
    }

    /**
     * @param mixed $receiver_list
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setReceiverList($receiver_list)
    {
        $this->receiver_list = $receiver_list;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProtocolNo()
    {
        return $this->protocol_no;
    }

    /**
     * @param mixed $protocol_no
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setProtocolNo($protocol_no)
    {
        $this->protocol_no = $protocol_no;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoodsType()
    {
        return $this->goods_type;
    }

    /**
     * @param mixed $goods_type
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setGoodsType($goods_type)
    {
        $this->goods_type = $goods_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBizGoodsNo()
    {
        return $this->biz_goods_no;
    }

    /**
     * @param mixed $biz_goods_no
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setBizGoodsNo($biz_goods_no)
    {
        $this->biz_goods_no = $biz_goods_no;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoodsDesc()
    {
        return $this->goods_desc;
    }

    /**
     * @param mixed $goods_desc
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setGoodsDesc($goods_desc)
    {
        $this->goods_desc = $goods_desc;

        return $this;
    }

    /**
     * @return AgentCollectProtocolApply
     */
    public function getProjectExtension()
    {
        if (!$this->project_extension instanceof AgentCollectProtocolApply) {
            $this->project_extension = new AgentCollectProtocolApply();
        }

        return $this->project_extension;
    }

    /**
     * @param mixed $project_extension
     *
     * @return AgentCollectProtocolApplyRequest
     */
    public function setProjectExtension($project_extension)
    {
        $this->project_extension = $project_extension;

        return $this;
    }
}
