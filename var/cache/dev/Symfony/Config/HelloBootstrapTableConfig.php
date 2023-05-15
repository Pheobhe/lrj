<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HelloBootstrapTable'.\DIRECTORY_SEPARATOR.'TableDatasetOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HelloBootstrapTable'.\DIRECTORY_SEPARATOR.'TableOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HelloBootstrapTable'.\DIRECTORY_SEPARATOR.'ActionButtonOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HelloBootstrapTableConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $tableDatasetOptions;
    private $tableOptions;
    private $actionButtonOptions;
    private $_usedProperties = [];

    /**
     * @default {"icons":[]}
    */
    public function tableDatasetOptions(array $value = []): \Symfony\Config\HelloBootstrapTable\TableDatasetOptionsConfig
    {
        if (null === $this->tableDatasetOptions) {
            $this->_usedProperties['tableDatasetOptions'] = true;
            $this->tableDatasetOptions = new \Symfony\Config\HelloBootstrapTable\TableDatasetOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tableDatasetOptions()" has already been initialized. You cannot pass values the second time you call tableDatasetOptions().');
        }

        return $this->tableDatasetOptions;
    }

    /**
     * @default {"bulkActions":[]}
    */
    public function tableOptions(array $value = []): \Symfony\Config\HelloBootstrapTable\TableOptionsConfig
    {
        if (null === $this->tableOptions) {
            $this->_usedProperties['tableOptions'] = true;
            $this->tableOptions = new \Symfony\Config\HelloBootstrapTable\TableOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tableOptions()" has already been initialized. You cannot pass values the second time you call tableOptions().');
        }

        return $this->tableOptions;
    }

    public function actionButtonOptions(array $value = []): \Symfony\Config\HelloBootstrapTable\ActionButtonOptionsConfig
    {
        if (null === $this->actionButtonOptions) {
            $this->_usedProperties['actionButtonOptions'] = true;
            $this->actionButtonOptions = new \Symfony\Config\HelloBootstrapTable\ActionButtonOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "actionButtonOptions()" has already been initialized. You cannot pass values the second time you call actionButtonOptions().');
        }

        return $this->actionButtonOptions;
    }

    public function getExtensionAlias(): string
    {
        return 'hello_bootstrap_table';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('table_dataset_options', $value)) {
            $this->_usedProperties['tableDatasetOptions'] = true;
            $this->tableDatasetOptions = new \Symfony\Config\HelloBootstrapTable\TableDatasetOptionsConfig($value['table_dataset_options']);
            unset($value['table_dataset_options']);
        }

        if (array_key_exists('table_options', $value)) {
            $this->_usedProperties['tableOptions'] = true;
            $this->tableOptions = new \Symfony\Config\HelloBootstrapTable\TableOptionsConfig($value['table_options']);
            unset($value['table_options']);
        }

        if (array_key_exists('action_button_options', $value)) {
            $this->_usedProperties['actionButtonOptions'] = true;
            $this->actionButtonOptions = new \Symfony\Config\HelloBootstrapTable\ActionButtonOptionsConfig($value['action_button_options']);
            unset($value['action_button_options']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['tableDatasetOptions'])) {
            $output['table_dataset_options'] = $this->tableDatasetOptions->toArray();
        }
        if (isset($this->_usedProperties['tableOptions'])) {
            $output['table_options'] = $this->tableOptions->toArray();
        }
        if (isset($this->_usedProperties['actionButtonOptions'])) {
            $output['action_button_options'] = $this->actionButtonOptions->toArray();
        }

        return $output;
    }

}
