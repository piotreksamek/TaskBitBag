<?php

declare(strict_types=1);

namespace App\Form\Extension;

use App\Enums\Color;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $colors = Color::getColors();
        $builder->add('color', ChoiceType::class, [
            'choices' => array_combine($colors, $colors),
            'required' => false,
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
