<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {
        function save(Todolist $todolist): void;

        function delete(Todolist $todolist): bool;

        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {
        private array $todolist = array();

        public function save(Todolist $todolist): void
        {
            $todolistSize = sizeof($this->todolist);
            $todolistIndex = $todolistSize + 1;
            $this->todolist[$todolistIndex] = $todolist;
        }

        public function delete(Todolist $todolist): bool
        {
            return false;
        }

        public function findAll(): array
        {
            return $this->todolist;
        }

        public function addForTesting(string|Todolist $todolist): void
        {
            $this->todolist[] = $todolist;
        }
    }
}
