<?php declare(strict_types=1);

namespace Lemonade\PhoneNumber;
use Exception;

/**
 * Exception thrown when a phone number cannot be parsed.
 *
 * Lemonade\PhoneNumberParseException
 * @author Honza Mudrak <honzamudrak@gmail.com>
 */
final class PhoneNumberParseException extends PhoneNumberException
{
    /**
     * @internal
     */
    public static function wrap(Exception $e) : PhoneNumberParseException
    {
        return new PhoneNumberParseException($e->getMessage(), $e->getCode(), $e);
    }
}