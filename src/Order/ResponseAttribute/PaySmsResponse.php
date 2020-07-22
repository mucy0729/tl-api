<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 10:00
 * Source: PayFrontSmsResponse.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\ResponseAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class PaySmsResponse extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pay_status")
     * @JMS\Type("string")
     */
    protected $pay_status;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_order_no")
     * @JMS\Type("string")
     */
    protected $biz_order_no;

    /**
     * @return string
     */
    public function getPayStatus(): string
    {
        return $this->pay_status;
    }

    /**
     * @return string
     */
    public function getBizOrderNo(): string
    {
        return $this->biz_order_no;
    }
}
