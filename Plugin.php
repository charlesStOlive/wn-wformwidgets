<?php namespace Waka\Wformwidgets;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * wformwidget Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'wformwidget',
            'description' => 'AJout de formWidget perso...',
            'author'      => 'waka',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
    }

    public function registerFormWidgets(): array
    {
        return [
            'Waka\Wformwidgets\FormWidgets\Treejs' => 'treejs',
            'Waka\Wformwidgets\FormWidgets\RecordsFinder' => 'wrecordsfinder',
            'Waka\Wformwidgets\FormWidgets\StarRating' => 'wstarrating',
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate
    }
}
