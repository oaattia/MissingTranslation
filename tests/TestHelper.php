<?php

class TestHelper extends TestCase
{

    /** @test */
    public function it_should_extract_string_trimmed()
    {
        $html = '<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button><h4 class="modal-title"><i class="fa fa-edit"></i>  string   </h4></div>';

        $factory = $this->app[\Oaattia\MissingTranslation\Helper::class];

        $this->assertContains('string', $factory->extractText($html));
    }

    /** @test */
    public function it_should_not_get_blade_templates_but_return_string_only()
    {
        $html = '<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button><h4 class="modal-title"><i class="fa fa-edit"></i>  string   </h4></div><label for="name">{{ trans(\'string.formTitle\') }}<span class="required">*</span></label>';
	
	    $factory = $this->app[\Oaattia\MissingTranslation\Helper::class];

        $this->assertCount(1, $factory->extractText($html));
        $this->assertContains('string', $factory->extractText($html));
    }

    /** @test */
    public function it_should_return_all_views_content()
    {
	    $factory = $this->app[\Oaattia\MissingTranslation\Helper::class];
	    
    }


}