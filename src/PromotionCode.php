<?php declare(strict_types=1);
final class PromotionCode
{
    private $promotionCode;

    private function __construct(string $promotionCode)
    {
        $this->ensureIsValidPromotionCode($promotionCode);

        $this->promotionCode = $promotionCode;
    }

    public static function fromString(string $promotionCode): self
    {
        return new self($promotionCode);
    }

    private function ensureIsValidPromotionCode(string $promotionCode): void
    {
        if (strlen($promotionCode) != 6) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid promotion code',
                    $promotionCode
                )
            );
        }
    }
}
