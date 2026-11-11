<?php

namespace Tests\\Feature;

use Tests\\TestCase;

class PortfolioPageTest extends TestCase
{
    public function test_homepage_displays_the_portfolio_sections(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Stefan Dishliovski')
            ->assertSee('Research')
            ->assertSee('Selected work')
            ->assertSee('Education')
            ->assertSee('Macedonian Sign Language Recognition');
    }
}
