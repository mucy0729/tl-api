<?php
namespace Zeevin\Libaip\Core\Struct\ProjectExtension;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class ApplicationTransfer
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_order_id")
     * @JMS\Type("string")
     */
    protected $project_order_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_order_type")
     * @JMS\Type("integer")
     */
    protected $project_order_type;

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
     * @return ApplicationTransfer
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
     * @return ApplicationTransfer
     */
    public function setProjectOrderType($project_order_type)
    {
        $this->project_order_type = $project_order_type;

        return $this;
    }
}
