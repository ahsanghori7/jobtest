<?php

class EmpCrudTest extends CDbTestCase
{
    public $fixtures = ['emps' => 'Emp'];

    // Test Create
    public function testCreate()
    {
        $emp = new Emp;
        $emp->name = 'John Doe';
        $emp->email = 'johndoe@example.com';
        $emp->password = CPasswordHelper::hashPassword('password123'); // Hash the password
        $this->assertTrue($emp->save());
    }

    // Test Read
    public function testRead()
    {
        $emp = Emp::model()->findByPk(1); // Adjust based on your fixture data
        $this->assertNotNull($emp);
        $this->assertEquals('Existing Employee', $emp->name); // Match fixture data
    }

    // Test Update
    public function testUpdate()
    {
        $emp = Emp::model()->findByPk(1); // Adjust based on your fixture data
        $emp->name = 'Updated Employee';
        $this->assertTrue($emp->save());
        $this->assertEquals('Updated Employee', $emp->name);
    }

    // Test Delete
    public function testDelete()
    {
        $emp = Emp::model()->findByPk(1); // Adjust based on your fixture data
        $this->assertTrue($emp->delete());
        $this->assertNull(Emp::model()->findByPk(1));
    }
}
