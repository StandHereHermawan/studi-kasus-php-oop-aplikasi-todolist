<?php

namespace View {

    use Service\ToDoListService;
    use Helper\InputHelper;

    class TodolistView
    {
        private ToDoListService $toDoListService;

        public function __construct(ToDoListService $toDoListService)
        {
            $this->toDoListService = $toDoListService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->toDoListService->showToDoList();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah to do." . PHP_EOL;
                echo "2. Hapus to do." . PHP_EOL;
                echo "x. Keluar dari aplikasi to do list." . PHP_EOL;

                $pilihan = InputHelper::input("Pilih Menu");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } elseif ($pilihan == "2") {

                    $this->removeTodolist();
                } elseif ($pilihan == "x") {
                    break;
                } else {

                    echo "Pilihan tidak ada pada program." . PHP_EOL;
                }
            }

            echo "Sampai Jumpa Lagi." . PHP_EOL;
        }

        function addTodolist(): void
        {
            # Kode Kosong
        }

        function removeTodolist(): void
        {
            # Kode Kosong
        }
    }
}
