<!-- resources/views/tasks/show.blade.php -->

@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
    <x-task :task="$task"/>
@endsection
