<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Swoft\Validator\Annotation\Mapping;

use Attribute;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * Class AfterDate
 *
 * @since 2.0
 *
 * @Annotation
 * @Target("PROPERTY")
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class AfterDate
{
    /**
     * @var string
     */
    private $date = '';

    /**
     * @var string
     */
    private $message = '';

    /**
     * AfterDate constructor.
     *
     * @param array|string $values
     */
    public function __construct($values = [])
    {
        if (is_string($values)) {
            $this->message = $values;
        } elseif (is_array($values)) {
            if (isset($values['value'])) {
                $this->message = $values['value'];
            }
            if (isset($values['message'])) {
                $this->message = $values['message'];
            }
            if (isset($values['date'])) {
                $this->date = $values['date'];
            }
        }
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
}
