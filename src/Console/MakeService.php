<?php

namespace VeseluyRodjer\ServiceGenerator\Console;

use Illuminate\Console\GeneratorCommand;

class MakeService extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../../stubs/service.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Services';
    }

    protected function replaceNamespace(&$stub, $name)
    {
        $classname = \Str::replace('Repository', '', $this->getNameInput());
        $stub = \Str::replace('{{ Model }}', $classname, $stub);
        $stub = \Str::replace('{{ namespacedModel }}', 'App\Models\\' . $classname, $stub);
        $repositoryClass = \Str::replace('Service', 'Repository', $classname);
        $repositoryVar = lcfirst($repositoryClass);
        $stub = \Str::replace('{{ RepositoryClass }}', $repositoryClass, $stub);
        $stub = \Str::replace('{{ repositoryVar }}', $repositoryVar, $stub);

        return parent::replaceNamespace($stub, $name);
    }
}
