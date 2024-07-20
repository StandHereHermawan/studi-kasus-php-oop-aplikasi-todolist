<?php

namespace Service {

    interface ToDoListService
    {
        function showToDoList(): void;
        function addToDoList(string $todo): void;
        function removeToDoList(int $number): void;
    }
}
