<?php

namespace Symfony\Config\HelloBootstrapTable;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ActionButtonOptionsConfig 
{
    private $classNames;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function classNames($value): static
    {
        $this->_usedProperties['classNames'] = true;
        $this->classNames = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('classNames', $value)) {
            $this->_usedProperties['classNames'] = true;
            $this->classNames = $value['classNames'];
            unset($value['classNames']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['classNames'])) {
            $output['classNames'] = $this->classNames;
        }

        return $output;
    }

}
