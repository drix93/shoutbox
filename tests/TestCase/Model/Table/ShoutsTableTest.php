<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShoutsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShoutsTable Test Case
 */
class ShoutsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShoutsTable
     */
    public $Shouts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shouts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Shouts') ? [] : ['className' => 'App\Model\Table\ShoutsTable'];
        $this->Shouts = TableRegistry::get('Shouts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shouts);

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
