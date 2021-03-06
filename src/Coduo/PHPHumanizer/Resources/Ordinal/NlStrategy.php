<?php

declare(strict_types=1);

namespace Coduo\PHPHumanizer\Resources\Ordinal;

use Coduo\PHPHumanizer\Number\Ordinal\StrategyInterface;

final class NlStrategy implements StrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public function isPrefix()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function ordinalIndicator($number)
    {
        return 'e';
    }
}
