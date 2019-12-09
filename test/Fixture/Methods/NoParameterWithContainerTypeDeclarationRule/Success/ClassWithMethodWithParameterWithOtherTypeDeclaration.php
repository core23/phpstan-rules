<?php

declare(strict_types=1);

namespace Ergebnis\PHPStan\Rules\Test\Fixture\Methods\NoParameterWithContainerTypeDeclarationRule\Success;

final class ClassWithMethodWithParameterWithOtherTypeDeclaration
{
    public function method(ContainerInterface $container): void
    {
    }
}
