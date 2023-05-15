<?php

namespace Symfony\Config\HelloBootstrapTable;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TableDatasetOptions'.\DIRECTORY_SEPARATOR.'IconsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TableDatasetOptionsConfig 
{
    private $pagination;
    private $search;
    private $showcolumns;
    private $showcolumnstoggleall;
    private $showfooter;
    private $showrefresh;
    private $filtercontrol;
    private $toolbar;
    private $pagelist;
    private $pagesize;
    private $sortreset;
    private $paginationVAlign;
    private $undefinedtext;
    private $locale;
    private $advancedsearch;
    private $idtable;
    private $iconsprefix;
    private $icons;
    private $clicktoselect;
    private $showjumpto;
    private $showexport;
    private $exporttypes;
    private $detailview;
    private $detailformatter;
    private $detailviewalign;
    private $detailviewicon;
    private $detailviewbyclick;
    private $stickyheader;
    private $stickyheaderoffsetleft;
    private $stickyheaderoffsetright;
    private $stickyheaderoffsety;
    private $checkboxheader;
    private $escape;
    private $height;
    private $multipleselectrow;
    private $sortname;
    private $sortorder;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function pagination($value): static
    {
        $this->_usedProperties['pagination'] = true;
        $this->pagination = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
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
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showcolumns($value): static
    {
        $this->_usedProperties['showcolumns'] = true;
        $this->showcolumns = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showcolumnstoggleall($value): static
    {
        $this->_usedProperties['showcolumnstoggleall'] = true;
        $this->showcolumnstoggleall = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showfooter($value): static
    {
        $this->_usedProperties['showfooter'] = true;
        $this->showfooter = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showrefresh($value): static
    {
        $this->_usedProperties['showrefresh'] = true;
        $this->showrefresh = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function filtercontrol($value): static
    {
        $this->_usedProperties['filtercontrol'] = true;
        $this->filtercontrol = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function toolbar($value): static
    {
        $this->_usedProperties['toolbar'] = true;
        $this->toolbar = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pagelist($value): static
    {
        $this->_usedProperties['pagelist'] = true;
        $this->pagelist = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pagesize($value): static
    {
        $this->_usedProperties['pagesize'] = true;
        $this->pagesize = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sortreset($value): static
    {
        $this->_usedProperties['sortreset'] = true;
        $this->sortreset = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationVAlign($value): static
    {
        $this->_usedProperties['paginationVAlign'] = true;
        $this->paginationVAlign = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function undefinedtext($value): static
    {
        $this->_usedProperties['undefinedtext'] = true;
        $this->undefinedtext = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locale($value): static
    {
        $this->_usedProperties['locale'] = true;
        $this->locale = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function advancedsearch($value): static
    {
        $this->_usedProperties['advancedsearch'] = true;
        $this->advancedsearch = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function idtable($value): static
    {
        $this->_usedProperties['idtable'] = true;
        $this->idtable = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iconsprefix($value): static
    {
        $this->_usedProperties['iconsprefix'] = true;
        $this->iconsprefix = $value;

        return $this;
    }

    public function icons(array $value = []): \Symfony\Config\HelloBootstrapTable\TableDatasetOptions\IconsConfig
    {
        if (null === $this->icons) {
            $this->_usedProperties['icons'] = true;
            $this->icons = new \Symfony\Config\HelloBootstrapTable\TableDatasetOptions\IconsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "icons()" has already been initialized. You cannot pass values the second time you call icons().');
        }

        return $this->icons;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function clicktoselect($value): static
    {
        $this->_usedProperties['clicktoselect'] = true;
        $this->clicktoselect = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showjumpto($value): static
    {
        $this->_usedProperties['showjumpto'] = true;
        $this->showjumpto = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showexport($value): static
    {
        $this->_usedProperties['showexport'] = true;
        $this->showexport = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function exporttypes($value): static
    {
        $this->_usedProperties['exporttypes'] = true;
        $this->exporttypes = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function detailview($value): static
    {
        $this->_usedProperties['detailview'] = true;
        $this->detailview = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function detailformatter($value): static
    {
        $this->_usedProperties['detailformatter'] = true;
        $this->detailformatter = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function detailviewalign($value): static
    {
        $this->_usedProperties['detailviewalign'] = true;
        $this->detailviewalign = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function detailviewicon($value): static
    {
        $this->_usedProperties['detailviewicon'] = true;
        $this->detailviewicon = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function detailviewbyclick($value): static
    {
        $this->_usedProperties['detailviewbyclick'] = true;
        $this->detailviewbyclick = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function stickyheader($value): static
    {
        $this->_usedProperties['stickyheader'] = true;
        $this->stickyheader = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function stickyheaderoffsetleft($value): static
    {
        $this->_usedProperties['stickyheaderoffsetleft'] = true;
        $this->stickyheaderoffsetleft = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function stickyheaderoffsetright($value): static
    {
        $this->_usedProperties['stickyheaderoffsetright'] = true;
        $this->stickyheaderoffsetright = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function stickyheaderoffsety($value): static
    {
        $this->_usedProperties['stickyheaderoffsety'] = true;
        $this->stickyheaderoffsety = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function checkboxheader($value): static
    {
        $this->_usedProperties['checkboxheader'] = true;
        $this->checkboxheader = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function escape($value): static
    {
        $this->_usedProperties['escape'] = true;
        $this->escape = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function height($value): static
    {
        $this->_usedProperties['height'] = true;
        $this->height = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function multipleselectrow($value): static
    {
        $this->_usedProperties['multipleselectrow'] = true;
        $this->multipleselectrow = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sortname($value): static
    {
        $this->_usedProperties['sortname'] = true;
        $this->sortname = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sortorder($value): static
    {
        $this->_usedProperties['sortorder'] = true;
        $this->sortorder = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('pagination', $value)) {
            $this->_usedProperties['pagination'] = true;
            $this->pagination = $value['pagination'];
            unset($value['pagination']);
        }

        if (array_key_exists('search', $value)) {
            $this->_usedProperties['search'] = true;
            $this->search = $value['search'];
            unset($value['search']);
        }

        if (array_key_exists('show-columns', $value)) {
            $this->_usedProperties['showcolumns'] = true;
            $this->showcolumns = $value['show-columns'];
            unset($value['show-columns']);
        }

        if (array_key_exists('show-columns-toggle-all', $value)) {
            $this->_usedProperties['showcolumnstoggleall'] = true;
            $this->showcolumnstoggleall = $value['show-columns-toggle-all'];
            unset($value['show-columns-toggle-all']);
        }

        if (array_key_exists('show-footer', $value)) {
            $this->_usedProperties['showfooter'] = true;
            $this->showfooter = $value['show-footer'];
            unset($value['show-footer']);
        }

        if (array_key_exists('show-refresh', $value)) {
            $this->_usedProperties['showrefresh'] = true;
            $this->showrefresh = $value['show-refresh'];
            unset($value['show-refresh']);
        }

        if (array_key_exists('filter-control', $value)) {
            $this->_usedProperties['filtercontrol'] = true;
            $this->filtercontrol = $value['filter-control'];
            unset($value['filter-control']);
        }

        if (array_key_exists('toolbar', $value)) {
            $this->_usedProperties['toolbar'] = true;
            $this->toolbar = $value['toolbar'];
            unset($value['toolbar']);
        }

        if (array_key_exists('page-list', $value)) {
            $this->_usedProperties['pagelist'] = true;
            $this->pagelist = $value['page-list'];
            unset($value['page-list']);
        }

        if (array_key_exists('page-size', $value)) {
            $this->_usedProperties['pagesize'] = true;
            $this->pagesize = $value['page-size'];
            unset($value['page-size']);
        }

        if (array_key_exists('sort-reset', $value)) {
            $this->_usedProperties['sortreset'] = true;
            $this->sortreset = $value['sort-reset'];
            unset($value['sort-reset']);
        }

        if (array_key_exists('pagination-V-Align', $value)) {
            $this->_usedProperties['paginationVAlign'] = true;
            $this->paginationVAlign = $value['pagination-V-Align'];
            unset($value['pagination-V-Align']);
        }

        if (array_key_exists('undefined-text', $value)) {
            $this->_usedProperties['undefinedtext'] = true;
            $this->undefinedtext = $value['undefined-text'];
            unset($value['undefined-text']);
        }

        if (array_key_exists('locale', $value)) {
            $this->_usedProperties['locale'] = true;
            $this->locale = $value['locale'];
            unset($value['locale']);
        }

        if (array_key_exists('advanced-search', $value)) {
            $this->_usedProperties['advancedsearch'] = true;
            $this->advancedsearch = $value['advanced-search'];
            unset($value['advanced-search']);
        }

        if (array_key_exists('id-table', $value)) {
            $this->_usedProperties['idtable'] = true;
            $this->idtable = $value['id-table'];
            unset($value['id-table']);
        }

        if (array_key_exists('icons-prefix', $value)) {
            $this->_usedProperties['iconsprefix'] = true;
            $this->iconsprefix = $value['icons-prefix'];
            unset($value['icons-prefix']);
        }

        if (array_key_exists('icons', $value)) {
            $this->_usedProperties['icons'] = true;
            $this->icons = new \Symfony\Config\HelloBootstrapTable\TableDatasetOptions\IconsConfig($value['icons']);
            unset($value['icons']);
        }

        if (array_key_exists('click-to-select', $value)) {
            $this->_usedProperties['clicktoselect'] = true;
            $this->clicktoselect = $value['click-to-select'];
            unset($value['click-to-select']);
        }

        if (array_key_exists('show-jump-to', $value)) {
            $this->_usedProperties['showjumpto'] = true;
            $this->showjumpto = $value['show-jump-to'];
            unset($value['show-jump-to']);
        }

        if (array_key_exists('show-export', $value)) {
            $this->_usedProperties['showexport'] = true;
            $this->showexport = $value['show-export'];
            unset($value['show-export']);
        }

        if (array_key_exists('export-types', $value)) {
            $this->_usedProperties['exporttypes'] = true;
            $this->exporttypes = $value['export-types'];
            unset($value['export-types']);
        }

        if (array_key_exists('detail-view', $value)) {
            $this->_usedProperties['detailview'] = true;
            $this->detailview = $value['detail-view'];
            unset($value['detail-view']);
        }

        if (array_key_exists('detail-formatter', $value)) {
            $this->_usedProperties['detailformatter'] = true;
            $this->detailformatter = $value['detail-formatter'];
            unset($value['detail-formatter']);
        }

        if (array_key_exists('detail-view-align', $value)) {
            $this->_usedProperties['detailviewalign'] = true;
            $this->detailviewalign = $value['detail-view-align'];
            unset($value['detail-view-align']);
        }

        if (array_key_exists('detail-view-icon', $value)) {
            $this->_usedProperties['detailviewicon'] = true;
            $this->detailviewicon = $value['detail-view-icon'];
            unset($value['detail-view-icon']);
        }

        if (array_key_exists('detail-view-by-click', $value)) {
            $this->_usedProperties['detailviewbyclick'] = true;
            $this->detailviewbyclick = $value['detail-view-by-click'];
            unset($value['detail-view-by-click']);
        }

        if (array_key_exists('sticky-header', $value)) {
            $this->_usedProperties['stickyheader'] = true;
            $this->stickyheader = $value['sticky-header'];
            unset($value['sticky-header']);
        }

        if (array_key_exists('sticky-header-offset-left', $value)) {
            $this->_usedProperties['stickyheaderoffsetleft'] = true;
            $this->stickyheaderoffsetleft = $value['sticky-header-offset-left'];
            unset($value['sticky-header-offset-left']);
        }

        if (array_key_exists('sticky-header-offset-right', $value)) {
            $this->_usedProperties['stickyheaderoffsetright'] = true;
            $this->stickyheaderoffsetright = $value['sticky-header-offset-right'];
            unset($value['sticky-header-offset-right']);
        }

        if (array_key_exists('sticky-header-offset-y', $value)) {
            $this->_usedProperties['stickyheaderoffsety'] = true;
            $this->stickyheaderoffsety = $value['sticky-header-offset-y'];
            unset($value['sticky-header-offset-y']);
        }

        if (array_key_exists('checkbox-header', $value)) {
            $this->_usedProperties['checkboxheader'] = true;
            $this->checkboxheader = $value['checkbox-header'];
            unset($value['checkbox-header']);
        }

        if (array_key_exists('escape', $value)) {
            $this->_usedProperties['escape'] = true;
            $this->escape = $value['escape'];
            unset($value['escape']);
        }

        if (array_key_exists('height', $value)) {
            $this->_usedProperties['height'] = true;
            $this->height = $value['height'];
            unset($value['height']);
        }

        if (array_key_exists('multiple-select-row', $value)) {
            $this->_usedProperties['multipleselectrow'] = true;
            $this->multipleselectrow = $value['multiple-select-row'];
            unset($value['multiple-select-row']);
        }

        if (array_key_exists('sort-name', $value)) {
            $this->_usedProperties['sortname'] = true;
            $this->sortname = $value['sort-name'];
            unset($value['sort-name']);
        }

        if (array_key_exists('sort-order', $value)) {
            $this->_usedProperties['sortorder'] = true;
            $this->sortorder = $value['sort-order'];
            unset($value['sort-order']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['pagination'])) {
            $output['pagination'] = $this->pagination;
        }
        if (isset($this->_usedProperties['search'])) {
            $output['search'] = $this->search;
        }
        if (isset($this->_usedProperties['showcolumns'])) {
            $output['show-columns'] = $this->showcolumns;
        }
        if (isset($this->_usedProperties['showcolumnstoggleall'])) {
            $output['show-columns-toggle-all'] = $this->showcolumnstoggleall;
        }
        if (isset($this->_usedProperties['showfooter'])) {
            $output['show-footer'] = $this->showfooter;
        }
        if (isset($this->_usedProperties['showrefresh'])) {
            $output['show-refresh'] = $this->showrefresh;
        }
        if (isset($this->_usedProperties['filtercontrol'])) {
            $output['filter-control'] = $this->filtercontrol;
        }
        if (isset($this->_usedProperties['toolbar'])) {
            $output['toolbar'] = $this->toolbar;
        }
        if (isset($this->_usedProperties['pagelist'])) {
            $output['page-list'] = $this->pagelist;
        }
        if (isset($this->_usedProperties['pagesize'])) {
            $output['page-size'] = $this->pagesize;
        }
        if (isset($this->_usedProperties['sortreset'])) {
            $output['sort-reset'] = $this->sortreset;
        }
        if (isset($this->_usedProperties['paginationVAlign'])) {
            $output['pagination-V-Align'] = $this->paginationVAlign;
        }
        if (isset($this->_usedProperties['undefinedtext'])) {
            $output['undefined-text'] = $this->undefinedtext;
        }
        if (isset($this->_usedProperties['locale'])) {
            $output['locale'] = $this->locale;
        }
        if (isset($this->_usedProperties['advancedsearch'])) {
            $output['advanced-search'] = $this->advancedsearch;
        }
        if (isset($this->_usedProperties['idtable'])) {
            $output['id-table'] = $this->idtable;
        }
        if (isset($this->_usedProperties['iconsprefix'])) {
            $output['icons-prefix'] = $this->iconsprefix;
        }
        if (isset($this->_usedProperties['icons'])) {
            $output['icons'] = $this->icons->toArray();
        }
        if (isset($this->_usedProperties['clicktoselect'])) {
            $output['click-to-select'] = $this->clicktoselect;
        }
        if (isset($this->_usedProperties['showjumpto'])) {
            $output['show-jump-to'] = $this->showjumpto;
        }
        if (isset($this->_usedProperties['showexport'])) {
            $output['show-export'] = $this->showexport;
        }
        if (isset($this->_usedProperties['exporttypes'])) {
            $output['export-types'] = $this->exporttypes;
        }
        if (isset($this->_usedProperties['detailview'])) {
            $output['detail-view'] = $this->detailview;
        }
        if (isset($this->_usedProperties['detailformatter'])) {
            $output['detail-formatter'] = $this->detailformatter;
        }
        if (isset($this->_usedProperties['detailviewalign'])) {
            $output['detail-view-align'] = $this->detailviewalign;
        }
        if (isset($this->_usedProperties['detailviewicon'])) {
            $output['detail-view-icon'] = $this->detailviewicon;
        }
        if (isset($this->_usedProperties['detailviewbyclick'])) {
            $output['detail-view-by-click'] = $this->detailviewbyclick;
        }
        if (isset($this->_usedProperties['stickyheader'])) {
            $output['sticky-header'] = $this->stickyheader;
        }
        if (isset($this->_usedProperties['stickyheaderoffsetleft'])) {
            $output['sticky-header-offset-left'] = $this->stickyheaderoffsetleft;
        }
        if (isset($this->_usedProperties['stickyheaderoffsetright'])) {
            $output['sticky-header-offset-right'] = $this->stickyheaderoffsetright;
        }
        if (isset($this->_usedProperties['stickyheaderoffsety'])) {
            $output['sticky-header-offset-y'] = $this->stickyheaderoffsety;
        }
        if (isset($this->_usedProperties['checkboxheader'])) {
            $output['checkbox-header'] = $this->checkboxheader;
        }
        if (isset($this->_usedProperties['escape'])) {
            $output['escape'] = $this->escape;
        }
        if (isset($this->_usedProperties['height'])) {
            $output['height'] = $this->height;
        }
        if (isset($this->_usedProperties['multipleselectrow'])) {
            $output['multiple-select-row'] = $this->multipleselectrow;
        }
        if (isset($this->_usedProperties['sortname'])) {
            $output['sort-name'] = $this->sortname;
        }
        if (isset($this->_usedProperties['sortorder'])) {
            $output['sort-order'] = $this->sortorder;
        }

        return $output;
    }

}
