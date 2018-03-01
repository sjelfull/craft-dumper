<?php
/**
 * Dumper plugin for Craft CMS 3.x
 *
 * A nicer dump()
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2018 Superbig
 */

namespace superbig\dumper\services;

use craft\helpers\Template;
use superbig\dumper\Dumper;

use Craft;
use craft\base\Component;
use superbig\dumper\dumpers\DarculaHtmlDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

/**
 * @author    Superbig
 * @package   Dumper
 * @since     1.0.0
 */
class DumperService extends Component
{
    // Public Methods
    // =========================================================================
    protected $data;

    /*
     * @return mixed
     */
    public function dump($data = null)
    {
        $cloner = new VarCloner();
        $dumper = new DarculaHtmlDumper();
        $data   = $cloner->cloneVar($data);
        $result = $dumper->dump($data, true, [
            // 1 and 160 are the default values for these options
            'maxDepth'        => 3,
            'maxStringLength' => 160,
        ]);

        return Template::raw($result);
    }
}
