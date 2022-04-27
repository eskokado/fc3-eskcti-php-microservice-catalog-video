<?php

namespace tests\Unit\Domain\Entity;

use Core\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase 
{
  public function testAttributes()
  {
    $category = new Category(
      id: 'asdf',
      name: 'Action',
      description: 'Action description',
      isActive: true
    );

    $this->assertEquals('Action', $category->name);
    $this->assertEquals('Action description', $category->description);
    $this->assertEquals(true, $category->isActive);
  }
}