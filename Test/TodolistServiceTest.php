<?php


require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Entity/Todolist.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;


function testShowTodolist(): void
{
  $todolistRepository = new TodolistRepositoryImpl();

  $todolistService = new TodolistServiceImpl($todolistRepository);

  $todolistService->showTodolist();
}


function testAddTodolist(): void
{
  $todolistRepository = new TodolistRepositoryImpl();

  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->addTodolist("SOCA");
  $todolistService->addTodolist("SOCA");
  $todolistService->addTodolist("SOCA");
  $todolistService->addTodolist("SOCA123");
  $todolistService->addTodolist("SOCA123");
  $todolistService->addTodolist("SOCA123");
  $todolistService->showTodolist();
}

// testAddTodolist();

function testRemoveTodolist(): void
{
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->addTodolist("SOCA");
  $todolistService->addTodolist("Rian");
  $todolistService->showTodolist();

  $todolistService->removeTodolist(1);
  $todolistService->showTodolist();
  $todolistService->removeTodolist(1);
  $todolistService->showTodolist();
}


testRemoveTodolist();
