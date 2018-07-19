<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MemberTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MemberTable Test Case
 */
class MemberTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MemberTable
     */
    public $Member;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.member',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Member') ? [] : ['className' => MemberTable::class];
        $this->Member = TableRegistry::get('Member', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Member);

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
