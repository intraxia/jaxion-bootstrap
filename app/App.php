<?php
namespace Plugin_Name;

use Intraxia\Jaxion\Core\Application;

/**
 * Plugin's Application class.
 *
 * The main Application class holds all the plugin's Services and registers
 * them with the Loader, hooking them into WordPress's actions and filters.
 * Those Services can be registered array-like with a Closure:
 *
 * ```php
 * $this['ServiceName'] = function ($app) {
 *     return new ServiceName($app['ServiceDep']);
 * };
 *
 * $this['ServiceDep'] = function () {
 *     return new ServiceDep();
 * };
 * ```
 *
 * The Application class's parent constructor also initializes several properties
 * in the Application container, including:
 *
 * * 'url': result of plugin_dir_url
 * * 'path: result of plugin_dir_path
 * * 'basename': result of plugin_basename
 *
 * as well registering a built-in I18n class and the Loader. Finally, it registers
 * plugin de/activation hooks on the method `activate` and `deactivate` on the class.
 * Those methods are stubbed for you as part of the bootstrapping.
 *
 * An internal method is also exposed, `command`, to ease registration of WP-CLI
 * commands. `command`'s method signature matches `WP_CLI::add_command`, but the
 * second param is a Closure in the same style as the above Service registration.
 *
 * @package    Plugin_Name
 * @author     Your Name <email@example.com>
 * @link       http://example.com
 * @since      1.0.0
 */
class App extends Application
{
    /**
     * @inheritdoc
     */
    public function __construct($file)
    {
        parent::__construct($file);

        // register your plugin's services
    }

    /**
     * @inheritdoc
     */
    public function activate()
    {
        // add your activation logic
    }

    /**
     * @inheritdoc
     */
    public function deactivate()
    {
        // add your deactivation logic
    }
}
