<?php

namespace Service {

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
                $viewNumber = $number + 1;
                echo "$viewNumber. $value" . PHP_EOL;
            }
        }

        public function addToDoList(string $todo): void
        {
            # Kode Kosong.
        }

        public function removeToDoList(int $number): void
        {
            # Kode Kosong.
        }
    }
}
