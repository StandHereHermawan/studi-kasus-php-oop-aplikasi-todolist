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
        }

        public function delete(Todolist $todolist): bool
        {
            return false;
        }

        public function findAll(): array
        {
            return $this->todolist;
        }
    }
}
