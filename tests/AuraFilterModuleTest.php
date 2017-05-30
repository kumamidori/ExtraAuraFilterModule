<?php
namespace Satomif\ExtraAuraFilterModule;

use Aura\Filter\SubjectFilter;
use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;
use Satomif\ExtraAuraFilterModule\Filter\MbStrlenMax;

class AuraFilterModuleTest extends TestCase
{
    public function testModule()
    {
        $config = ['mbStrlenMax' => MbStrlenMax::class];
        $subjectFilter = (new Injector(new AuraFilterModule($config)))->getInstance(SubjectFilter::class);
        $this->assertInstanceOf(SubjectFilter::class, $subjectFilter);
    }
}
