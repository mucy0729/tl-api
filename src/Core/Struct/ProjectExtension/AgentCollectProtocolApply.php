<?php
namespace Zeevin\Libaip\Core\Struct\ProjectExtension;

use JMS\Serializer\Annotation as JMS;

class AgentCollectProtocolApply
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $project_order_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $project_order_type;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("array<array>")
     */
    protected $receiver_list;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $inviter_biz_user_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $inviter_project_user_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $inviter_project_user_type;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("array<array>")
     */
    protected $arrears_list;

    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("array<array>")
     */
    protected $validate_type;

    /**
     * @return mixed
     */
    public function getProjectOrderId()
    {
        return $this->project_order_id;
    }

    /**
     * @param mixed $project_order_id
     *
     * @return AgentCollectProtocolApply
     */
    public function setProjectOrderId($project_order_id)
    {
        $this->project_order_id = $project_order_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectOrderType()
    {
        return $this->project_order_type;
    }

    /**
     * @param mixed $project_order_type
     *
     * @return AgentCollectProtocolApply
     */
    public function setProjectOrderType($project_order_type)
    {
        $this->project_order_type = $project_order_type;

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
     * @return AgentCollectProtocolApply
     */
    public function setReceiverList($receiver_list)
    {
        $this->receiver_list = $receiver_list;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInviterBizUserId()
    {
        return $this->inviter_biz_user_id;
    }

    /**
     * @param mixed $inviter_biz_user_id
     *
     * @return AgentCollectProtocolApply
     */
    public function setInviterBizUserId($inviter_biz_user_id)
    {
        $this->inviter_biz_user_id = $inviter_biz_user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInviterProjectUserId()
    {
        return $this->inviter_project_user_id;
    }

    /**
     * @param mixed $inviter_project_user_id
     *
     * @return AgentCollectProtocolApply
     */
    public function setInviterProjectUserId($inviter_project_user_id)
    {
        $this->inviter_project_user_id = $inviter_project_user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInviterProjectUserType()
    {
        return $this->inviter_project_user_type;
    }

    /**
     * @param mixed $inviter_project_user_type
     *
     * @return AgentCollectProtocolApply
     */
    public function setInviterProjectUserType($inviter_project_user_type)
    {
        $this->inviter_project_user_type = $inviter_project_user_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArrearsList()
    {
        return $this->arrears_list;
    }

    /**
     * @param mixed $arrears_list
     *
     * @return AgentCollectProtocolApply
     */
    public function setArrearsList($arrears_list)
    {
        $this->arrears_list = $arrears_list;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getValidateType()
    {
        return $this->validate_type;
    }

    /**
     * @param mixed $validate_type
     *
     * @return AgentCollectProtocolApply
     */
    public function setValidateType($validate_type)
    {
        $this->validate_type = $validate_type;

        return $this;
    }
}
