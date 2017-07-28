<?php

class ShareTest extends TestCase
{
    /**
     * Check if consits of a link with id:repository-link
     *
     * @return void
     */
    public function testLinkId()
    {
        $this->visit('/')
             ->see('<a id="repository-link"');
    }

    public function testTarget()
    {
        $this->visit('/')
             ->see('href="readme"');
    }

    public function testLinkTarget()
    {

        $this->visit('/')
             ->see('<a id="repository-link"')
             ->see('href="readme"');
    }    

    public function testIdReadme()
    {
        $this->visit('/readme')
              ->see('id="readme"');
    }

    public function testCheckText()
    {
        $this->visit('/readme')
                ->see('YoseTheGame');
    }

    public function testReadmeUrl()
    {
        $this->visit('/readme')
                ->see('id="readme"')
                ->see('YoseTheGame');
    }    
}