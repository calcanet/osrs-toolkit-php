<?php

use OpenSRS\domains\lookup\LookupDomain;

class LookupDomainTest extends PHPUnit_Framework_TestCase
{
    /**
     * New LookupDomain should throw an exception if 
     * data->domain is ommitted 
     * 
     * @return void
     */
    public function testValidateMissingDomain()
    {
        $data = (object) array (
            'func' => 'premiumDomain',
            'data' => (object) array (
                // 'domain' => 'hockey.com',
                'selected' => '.com;.net;.org',
                'alldomains' => '.com;.net;.org', 
            ),
        );

        $this->setExpectedException('OpenSRS\Exception');
        $ld = new LookupDomain('array', $data);
    }
}
