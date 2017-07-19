<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CatsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAllCats()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cats')
                    ->assertSee('Furbook');
        });
    }
    
    public function testSeeKoss()
    {
        $this->browse(function (Browser $browser) {
            $koss = \App\Cat::find(8);
            
            $browser->visit('/cats/8')
                    ->assertSee($koss->name);
        });
    }
}
