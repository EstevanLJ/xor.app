@extends('layouts.master')

@section('username', Auth::guest() ? 'Guest' : Auth::user()->name)

