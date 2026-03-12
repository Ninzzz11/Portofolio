@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('sections.hero')
    @include('sections.skills')
    @include('sections.services')
    @include('sections.projects')
    @include('sections.process')
    @include('sections.about')
    @include('sections.contact')
    @include('sections.faq')
@endsection
