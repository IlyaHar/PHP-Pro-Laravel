<?php


class Autoloader
{

    protected array $namespaces = [];
    public function addNamespace(string $prefix, string $dir)
    {
        $this->namespaces = [$prefix => $dir];
    }

    public function register()
    {
        spl_autoload_register(array($this, 'autoload'));
    }

    public function autoload($class)
    {
        foreach ($this->namespaces as $prefix => $dir) {
            $path = str_replace($prefix, $dir, $class);
            $path = str_replace('\\', '/', $path);
            require_once $path . '.php';
        }
    }
}

$autoloader = new Autoloader();
$autoloader->addNamespace('Hillel\\', 'src/');
$autoloader->register();