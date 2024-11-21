@extends('layout')

@section('title',__('userDashboard.tabTitle', ["websiteTitle" => __('general.websiteTitle')]))

@section('head')
    <meta name="robots" content="noindex,nofollow">
    @vite(['resources/css/userDashboard.css',])
@endsection

@section('body')
    <x-main-nav-bar homeActive="active"/>

    <x-password-edit-modal />

    <x-user-update-form />

    <x-footer />

    {{--Passing data to JS files--}}
    <div class="visually-hidden" id="userRegionCode">{{ Auth::user()->region_id }}</div>
    <div class="visually-hidden" id="userTownshipCode">{{ Auth::user()->township_id }}</div>
    <div class="visually-hidden" id="userIsReadyToGive">{{ Auth::user()->readyToGive }}</div>
@endsection

@section('beforeBodyEnd')
    @vite(['resources/js/userDashboard.js', 'resources/js/gettingTownships.js',])
@endsection
