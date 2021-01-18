<?php

declare(strict_types=1);


namespace Pixelant\Demander\DemandProvider;

use Pixelant\Demander\Utility\ConfigurationUtility;


class TypoScriptDemandProvider implements DemandProviderInterface
{
    /**
     * @return array
     */
    public function getDemand(): array
    {
        $config = ConfigurationUtility::getExtensionConfiguration();

        if ($config['demands']){
            return $config['demands'];
        }
        return [];
    }
}
