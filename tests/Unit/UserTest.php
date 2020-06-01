<?php

namespace Tests\Unit;

use App\User;
use Facades\Tests\Setup\ProjectFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_has_projects()
    {
       $user = factory('App\User')->create();

       $this->assertInstanceOf(Collection::class, $user->projects);
    }

    /** @test */
    function a_user_has_accessible_project()
    {
        $dani = $this->signIn();

        ProjectFactory::ownedBy($dani)->create();

        $this->assertCount(1, $dani->accessibleProjects());

        $tsukihi = factory(User::class)->create();
        $karen = factory(User::class)->create();

        $project = tap(ProjectFactory::ownedBy($tsukihi)->create())->invite($karen);

        $this->assertCount(1, $dani->accessibleProjects());

        $project->invite($dani);

        $this->assertCount(2, $dani->accessibleProjects());
    }
}
