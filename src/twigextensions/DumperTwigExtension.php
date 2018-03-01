<?php
/**
 * Dumper plugin for Craft CMS 3.x
 *
 * A nicer dump()
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2018 Superbig
 */

namespace superbig\dumper\twigextensions;

use superbig\dumper\Dumper;

use Craft;

/**
 * @author    Superbig
 * @package   Dumper
 * @since     1.0.0
 */
class DumperTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Dumper';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('dump', [$this, 'dumper']),
            new \Twig_SimpleFilter('dumper', [$this, 'dumper']),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('dumper', [$this, 'dumper']),
        ];
    }

    /**
     * @param null $data
     *
     * @return string
     */
    public function dumper($data = null)
    {
        return Dumper::$plugin->dumperService->dump($data);
    }
}
