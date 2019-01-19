<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthorTable Test Case
 */
class AuthorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthorTable
     */
    public $Author;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.author'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Author') ? [] : ['className' => AuthorTable::class];
        $this->Author = TableRegistry::get('Author', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Author);

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
}
