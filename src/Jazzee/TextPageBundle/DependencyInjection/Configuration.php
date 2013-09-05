<?php

namespace Jazzee\TextPageBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Setup Text page configuration
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('jazzee_text_page');
        $rootNode
            ->children()
                ->scalarNode('routeLoaderClass')
                ->defaultValue('Jazzee\TextPageBundle\RouteLoader')
                ->cannotBeEmpty()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
