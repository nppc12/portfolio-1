<?php
// application/tests/example.test.php
class Project extends PHPUnit_Framework_TestCase {
    /**
     * Test that a given condition is met.
     *
     * @return void
     */
    public function testOfTest(){
    	$project = new Project; 
    	$this->assertTrue($project instanceof Laravel\Database\Eloquent\Model
);
    }

    /*public function testCreatingProject()
    {
   		$project = Project::create(array('name'=>'testName', 'desc'=> 'desc'));
		$this->assertTrue($project->save);    
    }*/
}