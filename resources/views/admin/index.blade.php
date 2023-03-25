@extends('components.admin.app')

@section('content')

        {{--Component for the card placeholder--}}
        <x-admin.cards>
            {{--Loopinng through a single card whilst placing new attributes via props--}}
            <x-admin.single-card class_1="card l-bg-cherry" class_2="fas fa-shopping-cart" card_title="Users" class_3="l-bg-cyan" counter="{{ $user_counter }}" growth_percentage="{{ $user_growth }}"/>
            <x-admin.single-card class_1="card l-bg-blue-dark" class_2="fas fa-users" card_title="Articles" class_3="l-bg-green" counter="{{ $article_counter }}" growth_percentage="{{ $article_growth }}"/>
            <x-admin.single-card class_1="card l-bg-green-dark" class_2="fas fa-ticket-alt" card_title="Admins" class_3="l-bg-orange" counter="{{ $admin_counter }}" growth_percentage="{{ $admin_growth }}"/>
        </x-admin.cards>



@endsection
