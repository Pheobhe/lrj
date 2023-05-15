<?php

namespace Symfony\Config\HelloBootstrapTable;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TableOptionsConfig 
{
    private $tableClassNames;
    private $enableCheckbox;
    private $bulkIdentifier;
    private $bulkUrl;
    private $bulkActionSelectClassNames;
    private $bulkButtonName;
    private $bulkButtonClassNames;
    private $bulkActions;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tableClassNames($value): static
    {
        $this->_usedProperties['tableClassNames'] = true;
        $this->tableClassNames = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableCheckbox($value): static
    {
        $this->_usedProperties['enableCheckbox'] = true;
        $this->enableCheckbox = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bulkIdentifier($value): static
    {
        $this->_usedProperties['bulkIdentifier'] = true;
        $this->bulkIdentifier = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bulkUrl($value): static
    {
        $this->_usedProperties['bulkUrl'] = true;
        $this->bulkUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bulkActionSelectClassNames($value): static
    {
        $this->_usedProperties['bulkActionSelectClassNames'] = true;
        $this->bulkActionSelectClassNames = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bulkButtonName($value): static
    {
        $this->_usedProperties['bulkButtonName'] = true;
        $this->bulkButtonName = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bulkButtonClassNames($value): static
    {
        $this->_usedProperties['bulkButtonClassNames'] = true;
        $this->bulkButtonClassNames = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function bulkActions(string $name, mixed $value): static
    {
        $this->_usedProperties['bulkActions'] = true;
        $this->bulkActions[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('tableClassNames', $value)) {
            $this->_usedProperties['tableClassNames'] = true;
            $this->tableClassNames = $value['tableClassNames'];
            unset($value['tableClassNames']);
        }

        if (array_key_exists('enableCheckbox', $value)) {
            $this->_usedProperties['enableCheckbox'] = true;
            $this->enableCheckbox = $value['enableCheckbox'];
            unset($value['enableCheckbox']);
        }

        if (array_key_exists('bulkIdentifier', $value)) {
            $this->_usedProperties['bulkIdentifier'] = true;
            $this->bulkIdentifier = $value['bulkIdentifier'];
            unset($value['bulkIdentifier']);
        }

        if (array_key_exists('bulkUrl', $value)) {
            $this->_usedProperties['bulkUrl'] = true;
            $this->bulkUrl = $value['bulkUrl'];
            unset($value['bulkUrl']);
        }

        if (array_key_exists('bulkActionSelectClassNames', $value)) {
            $this->_usedProperties['bulkActionSelectClassNames'] = true;
            $this->bulkActionSelectClassNames = $value['bulkActionSelectClassNames'];
            unset($value['bulkActionSelectClassNames']);
        }

        if (array_key_exists('bulkButtonName', $value)) {
            $this->_usedProperties['bulkButtonName'] = true;
            $this->bulkButtonName = $value['bulkButtonName'];
            unset($value['bulkButtonName']);
        }

        if (array_key_exists('bulkButtonClassNames', $value)) {
            $this->_usedProperties['bulkButtonClassNames'] = true;
            $this->bulkButtonClassNames = $value['bulkButtonClassNames'];
            unset($value['bulkButtonClassNames']);
        }

        if (array_key_exists('bulkActions', $value)) {
            $this->_usedProperties['bulkActions'] = true;
            $this->bulkActions = $value['bulkActions'];
            unset($value['bulkActions']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['tableClassNames'])) {
            $output['tableClassNames'] = $this->tableClassNames;
        }
        if (isset($this->_usedProperties['enableCheckbox'])) {
            $output['enableCheckbox'] = $this->enableCheckbox;
        }
        if (isset($this->_usedProperties['bulkIdentifier'])) {
            $output['bulkIdentifier'] = $this->bulkIdentifier;
        }
        if (isset($this->_usedProperties['bulkUrl'])) {
            $output['bulkUrl'] = $this->bulkUrl;
        }
        if (isset($this->_usedProperties['bulkActionSelectClassNames'])) {
            $output['bulkActionSelectClassNames'] = $this->bulkActionSelectClassNames;
        }
        if (isset($this->_usedProperties['bulkButtonName'])) {
            $output['bulkButtonName'] = $this->bulkButtonName;
        }
        if (isset($this->_usedProperties['bulkButtonClassNames'])) {
            $output['bulkButtonClassNames'] = $this->bulkButtonClassNames;
        }
        if (isset($this->_usedProperties['bulkActions'])) {
            $output['bulkActions'] = $this->bulkActions;
        }

        return $output;
    }

}
