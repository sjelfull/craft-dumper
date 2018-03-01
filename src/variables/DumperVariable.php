<?php
/**
 * Dumper plugin for Craft CMS 3.x
 *
 * A nicer dump()
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2018 Superbig
 */

namespace superbig\dumper\variables;

use superbig\dumper\Dumper;

use Craft;

/**
 * @author    Superbig
 * @package   Dumper
 * @since     1.0.0
 */
class DumperVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param $data
     *
     * @return null|string
     */
    public function dump($data)
    {
        return Dumper::$plugin->dumperService->dump($data);
    }
}
