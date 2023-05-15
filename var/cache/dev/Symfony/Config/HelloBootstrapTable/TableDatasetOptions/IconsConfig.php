<?php

namespace Symfony\Config\HelloBootstrapTable\TableDatasetOptions;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class IconsConfig 
{
    private $advancedSearchIcon;
    private $paginationSwitchDown;
    private $paginationSwitchUp;
    private $columns;
    private $refresh;
    private $export;
    private $detailOpen;
    private $detailClose;
    private $toggleOff;
    private $toggleOn;
    private $fullscreen;
    private $search;
    private $clearSearch;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function advancedSearchIcon($value): static
    {
        $this->_usedProperties['advancedSearchIcon'] = true;
        $this->advancedSearchIcon = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationSwitchDown($value): static
    {
        $this->_usedProperties['paginationSwitchDown'] = true;
        $this->paginationSwitchDown = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationSwitchUp($value): static
    {
        $this->_usedProperties['paginationSwitchUp'] = true;
        $this->paginationSwitchUp = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function columns($value): static
    {
        $this->_usedProperties['columns'] = true;
        $this->columns = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function refresh($value): static
    {
        $this->_usedProperties['refresh'] = true;
        $this->refresh = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function export($value): static
    {
        $this->_usedProperties['export'] = true;
        $this->export = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function detailOpen($value): static
    {
        $this->_usedProperties['detailOpen'] = true;
        $this->detailOpen = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function detailClose($value): static
    {
        $this->_usedProperties['detailClose'] = true;
        $this->detailClose = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function toggleOff($value): static
    {
        $this->_usedProperties['toggleOff'] = true;
        $this->toggleOff = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function toggleOn($value): static
    {
        $this->_usedProperties['toggleOn'] = true;
        $this->toggleOn = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fullscreen($value): static
    {
        $this->_usedProperties['fullscreen'] = true;
        $this->fullscreen = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function search($value): static
    {
        $this->_usedProperties['search'] = true;
        $this->search = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clearSearch($value): static
    {
        $this->_usedProperties['clearSearch'] = true;
        $this->clearSearch = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('advancedSearchIcon', $value)) {
            $this->_usedProperties['advancedSearchIcon'] = true;
            $this->advancedSearchIcon = $value['advancedSearchIcon'];
            unset($value['advancedSearchIcon']);
        }

        if (array_key_exists('paginationSwitchDown', $value)) {
            $this->_usedProperties['paginationSwitchDown'] = true;
            $this->paginationSwitchDown = $value['paginationSwitchDown'];
            unset($value['paginationSwitchDown']);
        }

        if (array_key_exists('paginationSwitchUp', $value)) {
            $this->_usedProperties['paginationSwitchUp'] = true;
            $this->paginationSwitchUp = $value['paginationSwitchUp'];
            unset($value['paginationSwitchUp']);
        }

        if (array_key_exists('columns', $value)) {
            $this->_usedProperties['columns'] = true;
            $this->columns = $value['columns'];
            unset($value['columns']);
        }

        if (array_key_exists('refresh', $value)) {
            $this->_usedProperties['refresh'] = true;
            $this->refresh = $value['refresh'];
            unset($value['refresh']);
        }

        if (array_key_exists('export', $value)) {
            $this->_usedProperties['export'] = true;
            $this->export = $value['export'];
            unset($value['export']);
        }

        if (array_key_exists('detailOpen', $value)) {
            $this->_usedProperties['detailOpen'] = true;
            $this->detailOpen = $value['detailOpen'];
            unset($value['detailOpen']);
        }

        if (array_key_exists('detailClose', $value)) {
            $this->_usedProperties['detailClose'] = true;
            $this->detailClose = $value['detailClose'];
            unset($value['detailClose']);
        }

        if (array_key_exists('toggleOff', $value)) {
            $this->_usedProperties['toggleOff'] = true;
            $this->toggleOff = $value['toggleOff'];
            unset($value['toggleOff']);
        }

        if (array_key_exists('toggleOn', $value)) {
            $this->_usedProperties['toggleOn'] = true;
            $this->toggleOn = $value['toggleOn'];
            unset($value['toggleOn']);
        }

        if (array_key_exists('fullscreen', $value)) {
            $this->_usedProperties['fullscreen'] = true;
            $this->fullscreen = $value['fullscreen'];
            unset($value['fullscreen']);
        }

        if (array_key_exists('search', $value)) {
            $this->_usedProperties['search'] = true;
            $this->search = $value['search'];
            unset($value['search']);
        }

        if (array_key_exists('clearSearch', $value)) {
            $this->_usedProperties['clearSearch'] = true;
            $this->clearSearch = $value['clearSearch'];
            unset($value['clearSearch']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['advancedSearchIcon'])) {
            $output['advancedSearchIcon'] = $this->advancedSearchIcon;
        }
        if (isset($this->_usedProperties['paginationSwitchDown'])) {
            $output['paginationSwitchDown'] = $this->paginationSwitchDown;
        }
        if (isset($this->_usedProperties['paginationSwitchUp'])) {
            $output['paginationSwitchUp'] = $this->paginationSwitchUp;
        }
        if (isset($this->_usedProperties['columns'])) {
            $output['columns'] = $this->columns;
        }
        if (isset($this->_usedProperties['refresh'])) {
            $output['refresh'] = $this->refresh;
        }
        if (isset($this->_usedProperties['export'])) {
            $output['export'] = $this->export;
        }
        if (isset($this->_usedProperties['detailOpen'])) {
            $output['detailOpen'] = $this->detailOpen;
        }
        if (isset($this->_usedProperties['detailClose'])) {
            $output['detailClose'] = $this->detailClose;
        }
        if (isset($this->_usedProperties['toggleOff'])) {
            $output['toggleOff'] = $this->toggleOff;
        }
        if (isset($this->_usedProperties['toggleOn'])) {
            $output['toggleOn'] = $this->toggleOn;
        }
        if (isset($this->_usedProperties['fullscreen'])) {
            $output['fullscreen'] = $this->fullscreen;
        }
        if (isset($this->_usedProperties['search'])) {
            $output['search'] = $this->search;
        }
        if (isset($this->_usedProperties['clearSearch'])) {
            $output['clearSearch'] = $this->clearSearch;
        }

        return $output;
    }

}
