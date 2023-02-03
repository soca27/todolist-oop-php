<?php



namespace View {

  use Repository\TodolistRepositoryImpl;
  use Service\TodoListService;
  use Helper\InputHelper;
  use Service\TodolistServiceImpl;

  class TodolistView
  {
    private TodoListService $todolistService;


    public function __construct(TodoListService $todolistService)
    {
      $this->todolistService = $todolistService;
    }


    function showTodolist(): void
    {
      while (true) {
        $this->todolistService->showTodolist();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2  Hapus Todo" . PHP_EOL;
        echo "3 TEKAN X untuk keluar" . PHP_EOL;

        $pilihan = strtolower(InputHelper::input("Pilih : "));

        if ($pilihan == "1") {
          $this->addTodolist();
        } else if ($pilihan == "2") {
          $this->removeTodolist();
        } else if ($pilihan  == ("x")) {
          break;
        } else {
          echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
      }

      echo "Sampai jumpa lagi" . PHP_EOL;
    }

    function addTodolist(): void
    {
      echo "Menambah Todo" . PHP_EOL;

      $todo = strtolower(InputHelper::input("Tambah Todo (x untuk batal) :"));

      if ($todo == 'x') {
        echo "batal menambah todo";
      } else {
        $this->todolistService->addTodolist($todo);
      }
    }

    function removeTodolist(): void
    {
      echo "Menghapus Todo" . PHP_EOL;

      $todo = strtolower(InputHelper::input("Hapus Todo (x untuk batal) :"));

      if ($todo == 'x') {
        echo "batal menghapus todo" . PHP_EOL;
      } else {
        $this->todolistService->removeTodolist($todo);
      }
    }
  }
}
