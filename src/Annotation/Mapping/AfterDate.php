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

/**
 * Class AfterDate
 *
 * @since 2.0
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
     * @param string $message
     * @param string $date
     */
    public function __construct(string $message = '', string $date = '')
    {
        $this->message = $message;
        $this->date = $date;
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
