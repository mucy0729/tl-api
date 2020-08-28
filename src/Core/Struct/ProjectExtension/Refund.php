<?php
namespace Zeevin\Libaip\Core\Struct\ProjectExtension;

use JMS\Serializer\Annotation as JMS;

class Refund
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
     * @return mixed
     */
    public function getProjectOrderId()
    {
        return $this->project_order_id;
    }

    /**
     * @param mixed $project_order_id
     *
     * @return Refund
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
     * @return Refund
     */
    public function setProjectOrderType($project_order_type)
    {
        $this->project_order_type = $project_order_type;

        return $this;
    }
}
