<?php

namespace Tests\Feature\Dashboard;

use App\Http\Livewire\Dashboard\Club\Edit;
use App\Models\Club;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\HelperTrait;
use Tests\TestCase;

class ClubTest extends TestCase
{
    use RefreshDatabase, HelperTrait;

    private User $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->seed();

        $this->user = User::whereEmail('admin@admin.com')->first();
    }

    /**
     * Test Club Edit Page Show
     *
     * @test
     * @return void
     */
    public function club_show_edit_page(): void
    {
        $club = Club::first();

        $response = $this->actingAs($this->user)
                        ->get($this->dashboardUrl('dashboard.clubs.edit', $club->slug));

        $response->assertStatus(200);
    }

    /**
     * Test Club Edit Page Livewire Component
     *
     * @test
     * @return void
     */
    public function club_edit_page_contains_edit_club_livewire_component(): void
    {
        $club = Club::first();

        $this->actingAs($this->user)
            ->get($this->dashboardUrl('dashboard.clubs.edit', $club->slug))
            ->assertSeeLivewire(Edit::class);
    }

    /**
     * Test Update Club Info
     *
     * @test
     * @return void
     */
    public function club_can_update_successful(): void
    {
        $club = Club::first();

        Livewire::test(Edit::class, ['club' => $club])
            ->set('name', 'نادي قريات')
            ->set('foundedDate', '2022-01-24')
            ->set('description', 'وصف النادي')
            ->set('email', 'test@test.com')
            ->call('save')
            ->assertSessionHas('success_message')
            ->assertRedirect($this->dashboardUrl('dashboard.clubs.show', $club->slug));
    }

    /**
     * Test Update Club Validation
     *
     * @test
     * @return void
     */
    public function club_can_update_error_validation(): void
    {
        $club = Club::first();

        Livewire::test(Edit::class, ['club' => $club])
            ->call('save')
            ->assertHasErrors(['email', 'description', 'foundedDate']);
    }
}
