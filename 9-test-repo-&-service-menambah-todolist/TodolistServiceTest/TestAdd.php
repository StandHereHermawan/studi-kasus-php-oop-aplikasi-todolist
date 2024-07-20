<?php

require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

##[Test]
function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addToDoList("Belajar PHP di PZN");
    $todolistService->addToDoList("Belajar Laravel di PZN");
    $todolistService->addToDoList("Belajar Bootstrap di PZN");

    $todolistService->showToDoList();
}

testShowTodolist();
