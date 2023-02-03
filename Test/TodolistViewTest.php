<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/TodolistView.php";


use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistview = new TodolistView($todolistService);

  $todolistService->addTodolist("Main Bola");
  $todolistService->addTodolist("Main Tenis");
  $todolistService->addTodolist("Main Futsal");

  $todolistview->showTodolist();
}


function testViewAddTodolist(): void
{
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistView = new TodolistView($todolistService);

  $todolistService->addTodolist("Main Bola");
  $todolistService->addTodolist("Main Tenis");
  $todolistService->addTodolist("Main Futsal");
  $todolistService->showTodolist();
  $todolistView->addTodolist();
  $todolistService->showTodolist();
  $todolistView->addTodolist();
  $todolistService->showTodolist();
}

function testViewRemoveTodolist(): void
{
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistView = new TodolistView($todolistService);

  $todolistService->addTodolist("Main Bola");
  $todolistService->addTodolist("Main Tenis");
  $todolistService->addTodolist("Main Futsal");
  $todolistService->showTodolist();
  $todolistView->removeTodolist();
  $todolistService->showTodolist();
  $todolistView->removeTodolist();
  $todolistService->showTodolist();
}

testViewRemoveTodolist();
