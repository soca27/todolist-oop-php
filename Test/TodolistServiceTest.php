<?php


require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Config/Database.php";

use Config\Database;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;


function testShowTodolist(): void
{
  $connection = Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->showTodolist();
}


function testAddTodolist(): void
{
  $connection = Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);

  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->addTodolist("SOCA");
  $todolistService->addTodolist("SOCA");
  $todolistService->addTodolist("SOCA");
}

// testAddTodolist();

function testRemoveTodolist(): void
{
  $connection = Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);
  $todolistService = new TodolistServiceImpl($todolistRepository);

  $todolistService->removeTodolist(1);
  $todolistService->removeTodolist(2);
  $todolistService->removeTodolist(4);
}


testShowTodolist();
