@extends('back-end.admin')

@section('title')
User
@endsection

@section('bodyAdmin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Profile</li>
</ol>

@endsection