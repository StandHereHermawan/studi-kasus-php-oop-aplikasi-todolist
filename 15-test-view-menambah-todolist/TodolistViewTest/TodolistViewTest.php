<?php

require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";
require_once __DIR__ . "/../view/TodolistView.php";
require_once __DIR__ . "/../helper/InputHelper.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\ToDoListServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new ToDoListServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addToDoList("Belajar PHP Dasar");
    $todolistService->addToDoList("Belajar PHP OOP");
    $todolistService->addToDoList("Belajar PHP Web");

    $todolistView->showTodolist();
}

function testAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new ToDoListServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addToDoList("Belajar PHP Dasar");
    $todolistService->addToDoList("Belajar PHP OOP");
    $todolistService->addToDoList("Belajar PHP Web");

    $todolistService->showToDoList();
    
    $todolistView->showTodolist();
    $todolistView->addTodolist();

    $todolistService->showToDoList();
}

testAddTodolist();
