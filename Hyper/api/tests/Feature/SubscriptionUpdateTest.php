<?php

namespace Tests\Feature;

use App\Partner;
use App\Project;
use App\Subscription;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubscriptionUpdateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUpdate()
    {
        $user = factory(User::class)->create([
            'is_active' => true,
            'role_id' => 1
        ]);

        $subscription = factory(Subscription::class)->create([
            'project_id' => factory(Project::class)->create([
                'partner_id' => factory(Partner::class)->create()->id
            ])->id
        ]);

        $response = $this->post(
            '/api/subscriptions/' . $subscription->id . '/update',
            [
                'title' => 'Telegraaf',
                'gross_amount' => 14, 68,
                'duration_in_months' => 6,
                'starting_date' => '2019-01-01',
                'reward' => 15.99,
                'is_bonus_calc' => true,
                'bw_code' => "20192020",
                "project_id" => factory(Project::class)->create([
                    'partner_id' => factory(Partner::class)->create()->id
                ])->id
            ],
            [
                'api-key' => $user->api_token
            ]
        );
        $response->assertStatus(200);
    }

    public function testUpdateInvalidSubscription()
    {
        $user = factory(User::class)->create([
            'is_active' => true,
            'role_id' => 1
        ]);

        $response = $this->post(
            '/api/subscriptions/0/update',
            [
                'title' => 'Telegraaf',
                'gross_amount' => 14, 68,
                'duration_in_months' => 6,
                'starting_date' => '2019-01-01',
                'reward' => 15.99,
                'is_bonus_calc' => true,
                'bw_code' => "20192020",
                "project_id" => factory(Partner::class)->create()->id
            ],
            [
                'api-key' => $user->api_token
            ]
        );

        $response->assertStatus(404);
    }

    public function testUpdateInvalidProjectId()
    {
        $user = factory(User::class)->create([
            'is_active' => true,
            'role_id' => 1
        ]);

        $subscription = factory(Subscription::class)->create([
            'project_id' => factory(Project::class)->create([
                'partner_id' => factory(Partner::class)->create()->id
            ])->id
        ]);

        $response = $this->post(
            '/api/subscriptions/' . $subscription->id . '/update',
            [
                'title' => 'Telegraaf',
                'gross_amount' => 14, 68,
                'duration_in_months' => 6,
                'starting_date' => '2019-01-01',
                'reward' => 15.99,
                'is_bonus_calc' => true,
                'bw_code' => "20192020",
                "project_id" => 0
            ],
            [
                'api-key' => $user->api_token
            ]
        );

        $response->assertStatus(404);
    }
}
