<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class PromotionCodeTest extends TestCase
{
    public function testCanBeCreatedFromValidPromotionCode(): void
    {
        $this->assertInstanceOf(
            PromotionCode::class,
            PromotionCode::fromString('A12345')
        );
    }

    public function testCannotBeCreatedFromInvalidPromotionCode(): void
    {
        $this->expectException(InvalidArgumentException::class);

        PromotionCode::fromString('12345');
    }

}
