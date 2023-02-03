<?php


namespace Service {

  use Repository\TodoListRepository;
  use Entity\TodoList;


  interface TodoListService
  {

    function showTodolist();

    function addTodolist(string $todo): void;

    function removeTodolist(int $number): void;
  }

  class TodolistServiceImpl implements TodoListService
  {

    private TodolistRepository $todolistRepository;

    public function __construct(TodolistRepository $todolistRepository)
    {
      $this->todolistRepository = $todolistRepository;
    }

    function showTodolist(): void
    {
      echo "TODOLIST" . PHP_EOL;
      $todolist = $this->todolistRepository->findAll();
      foreach ($todolist as $number => $value) {
        echo "{$value->getId()} . {$value->getTodo()}" . PHP_EOL;
      }
    }

    function addTodolist(string $todo): void
    {
      $todolist = new Todolist($todo);
      $this->todolistRepository->save($todolist);
      echo "Sukses Menambah Todolist" . PHP_EOL;
    }

    function removeTodolist(int $number): void
    {
      if ($this->todolistRepository->remove($number)) {
        echo " SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
      } else {
        echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
      }
    }
  }
}
