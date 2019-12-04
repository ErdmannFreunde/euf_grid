<?php

declare(strict_types=1);

/*
 * Contao Grid Bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2019, Erdmann & Freunde
 * @author     Erdmann & Freunde <https://erdmann-freunde.de>
 * @license    MIT
 * @link       http://github.com/erdmannfreunde/contao-grid
 */

class ContentColEnd extends ContentElement
{
    protected $strTemplate = 'ce_colEnd';

    public function compile()
    {
    }

    public function generate()
    {
        if (TL_MODE === 'BE') {
            $this->Template           = new BackendTemplate('be_wildcard');
            $this->Template->wildcard = '### E&F GRID: Spalte Ende ###';

            return $this->Template->parse();
        }

        return parent::generate();
    }
}
