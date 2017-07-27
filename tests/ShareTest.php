<?php

class ShareTest extends TestCase
{
    /**
     * Check if consits of a link with id:repository-link
     *
     * @return void
     */
    public function testRepoLink()
    {
        $this->visit('/')
             ->see('<a id="repository-link"');
             // ->seePageIs('/readme');
    }

	/**
     * A basic test example.
     *
     * @return void
     */
    public function testReadmePage()
    {
        $this->visit('/readme')
             ->see('id="readme"')
             ->see('YoseTheGame');
    }    



    
}