<?php
namespace Zeevin\Libaip\Order\RequestAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;
use Zeevin\Libaip\Core\Struct\ProjectExtension\ApplicationTransfer;

class ApplicationTransferRequest extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("source_account_set_no")
     * @JMS\Type("string")
     */
    protected $source_account_set_no;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("target_biz_user_id")
     * @JMS\Type("string")
     */
    protected $target_biz_user_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("target_account_set_no")
     * @JMS\Type("string")
     */
    protected $target_account_set_no;

    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $amount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("extend_info")
     * @JMS\Type("string")
     */
    protected $extend_info;

    /**
     * @var ApplicationTransfer
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("Zeevin\Libaip\Core\Struct\ProjectExtension\ApplicationTransfer")
     */
    protected $project_extension;

    /**
     * @return string
     */
    public function getTargetBizUserId(): string
    {
        return $this->target_biz_user_id;
    }

    /**
     * @param string $target_biz_user_id
     *
     * @return ApplicationTransferRequest
     */
    public function setTargetBizUserId(string $target_biz_user_id): self
    {
        $this->target_biz_user_id = $target_biz_user_id;
        return $this;
    }
    /**
     * @return string
     */
    public function getSourceAccountSetNo(): string
    {
        return $this->source_account_set_no;
    }

    /**
     * @param string $source_account_set_no
     *
     * @return ApplicationTransferRequest
     */
    public function setSourceAccountSetNo(string $source_account_set_no): self
    {
        $this->source_account_set_no = $source_account_set_no;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetAccountSetNo(): string
    {
        return $this->target_account_set_no;
    }

    /**
     * @param string $target_account_set_no
     *
     * @return ApplicationTransferRequest
     */
    public function setTargetAccountSetNo(string $target_account_set_no): self
    {
        $this->target_account_set_no = $target_account_set_no;
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
     * @return ApplicationTransferRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

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
     * @return ApplicationTransferRequest
     */
    public function setExtendInfo($extend_info)
    {
        $this->extend_info = $extend_info;

        return $this;
    }

    /**
     * @return ApplicationTransfer
     */
    public function getProjectExtension()
    {
        if (!$this->project_extension instanceof ApplicationTransfer) {
            $this->project_extension = new ApplicationTransfer();
        }

        return $this->project_extension;
    }

    /**
     * @param mixed $project_extension
     *
     * @return ApplicationTransferRequest
     */
    public function setProjectExtension($project_extension)
    {
        $this->project_extension = $project_extension;

        return $this;
    }

}
