<?php


namespace Tests\Unit;


use App\Src\Models\Hyper\Partner\PartnerModel;
use App\Src\Repositories\Hyper\Partner\IPartnerRepository;
use App\Src\Services\Hyper\Partner\PartnerService;
use Mockery as m;
use Tests\TestCase;

class PartnerServiceTest extends TestCase
{
    /**
     * @var IPartnerRepository
     */
    private $partnerRepository;

    /**
     * @var PartnerModel
     */
    private $partnerModel;

    public function setUp(): void
    {
        $this->partnerModel = m::mock(PartnerModel::class, function ($mock) {
            $mock->shouldReceive('getId')
                ->andReturn(1);

            $mock->shouldReceive('getName')
                ->andReturn(1);

            $mock->shouldReceive('getAddress')
                ->andReturn('straat');

            $mock->shouldReceive('getHouseNumber')
                ->andReturn('119');

            $mock->shouldReceive('getPostCode')
                ->andReturn('8224 HK');

            $mock->shouldReceive('getCity')
                ->andReturn('Duindorp');

            $mock->shouldReceive('getPhone')
                ->andReturn('1020');
        });

        $this->partnerRepository = m::mock(IPartnerRepository::class, function ($mock) {
            $mock->shouldReceive('store')
                ->with(PartnerModel::class)
                ->andReturn($this->partnerModel);

            $mock->shouldReceive('findById')
                ->with(1)
                ->andReturn($this->partnerModel);

            $mock->shouldReceive('update')
                ->with(1, PartnerModel::class)
                ->andReturn($this->partnerModel);

            $mock->shouldReceive('delete')
                ->with(1)
                ->andReturn('Partner was successfully removed from our servers');
        });
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testUpdatePartner()
    {
        $service = new PartnerService($this->partnerRepository);
        $service->update(1, $this->partnerModel);
    }

    public function testFindpartner()
    {
        $service = new PartnerService($this->partnerRepository);
        $service->find(1);
    }

    public function testStorePartner()
    {
        $service = new partnerService($this->partnerRepository);
        $service->store($this->partnerModel);
    }

    public function testDeletePartner()
    {
        $service = new PartnerService($this->partnerRepository);
        $service->delete(1);
    }
}
