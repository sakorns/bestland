<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssetsTable Test Case
 */
class AssetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssetsTable
     */
    public $Assets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.assets',
        'app.asset_types',
        'app.customer_assets',
        'app.zones',
        'app.customers',
        'app.addresses',
        'app.provinces',
        'app.amphurs',
        'app.geos',
        'app.user_addresses',
        'app.users',
        'app.user_images',
        'app.images',
        'app.asset_images',
        'app.asset_options',
        'app.options'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Assets') ? [] : ['className' => AssetsTable::class];
        $this->Assets = TableRegistry::get('Assets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Assets);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
