<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {
        function save(Todolist $todolist): void;

        function delete(Todolist $todolist): bool;

        function findAll(): array;
    }
}
