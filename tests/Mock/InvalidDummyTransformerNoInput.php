<?php

declare(strict_types=1);

namespace ITB\ObjectTransformer\Tests\Mock;

use ITB\ObjectTransformer\TransformationEnvelope;
use ITB\ObjectTransformer\TransformerInterface;
use stdClass;

final class InvalidDummyTransformerNoInput implements TransformerInterface
{
    public static function supportedTransformations(): array
    {
        return [['output' => Object2::class]];
    }

    public function transform(TransformationEnvelope $envelope, string $outputClassName): object
    {
        return new stdClass();
    }
}
