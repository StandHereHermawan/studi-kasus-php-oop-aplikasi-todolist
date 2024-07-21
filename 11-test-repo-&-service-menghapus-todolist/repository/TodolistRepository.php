<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {
        function save(Todolist $todolist): void;

        function delete(int $number): bool;

        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {
        private array $todolist = array();

        public function save(Todolist $todolist): void
        {
            $todolistSize = sizeof($this->todolist) + 1;
            $this->todolist[$todolistSize] = $todolist;
        }

        public function delete(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
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
