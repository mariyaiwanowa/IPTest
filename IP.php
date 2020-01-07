<?php
declare(strict_types=1);

final class IP
{
    private $ip;

    private function __construct(string $ip)
    {
        $this->ensureIsValidIP($ip);

        $this->ip = $ip;
    }

    public static function fromString(string $ip): self
    {
        return new self($ip);
    }

    public function __toString(): string
    {
        return $this->ip;
    }

    private function ensureIsValidIP(string $ip): void
    {
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid ip',
                    $ip
                )
            );
        }
    }
}