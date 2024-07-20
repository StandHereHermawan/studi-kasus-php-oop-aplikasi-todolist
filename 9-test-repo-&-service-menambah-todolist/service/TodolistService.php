<?php

namespace Service {

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface ToDoListService
    {
        function showToDoList(): void;
        function addToDoList(string $todo): void;
        function removeToDoList(int $number): void;
    }

    class ToDoListServiceImpl implements ToDoListService
    {
        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        public function showToDoList(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number. " . $value->getTodolist() . PHP_EOL;
            }
        }

        public function addToDoList(string $todo): void
        {
            # Kode Kosong.
            $thingsTodo = new Todolist($todo);
            $this->todolistRepository->save($thingsTodo);
            echo "SUKSES MENAMBAH TODO $todo." . PHP_EOL;
        }

        public function removeToDoList(int $number): void
        {
            # Kode Kosong.
        }
    }
}
