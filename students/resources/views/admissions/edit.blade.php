@extends('layouts.app')
@extends('content')

<style>
    .teacher-image{
        height:160px;
        padding-left:1px;

        background:#eee;
        width:140px;
        margin:0 auto;
        border-radius:50%;
        vertical-align:middle;
    }
    .image{
        vertical-align:middle;
        width:50px;
        height:50px;
        border-radius:50%;
    }
    .image > input[type="file"]{
        display:none;
    }
    .btn-choose{
        padding:5px;
        text-align:center;
        background:gray;
        border:none;
        color:black;
        border-radius:50%
    }
    fieldset{
        margin-top:5px;
    }
    fieldset legend{
        display:block;
        width:100%;
        padding:0;
        font-size:15px;
        border:0;
        line-height:inherit;
        color:#797979;
        border-bottom:1px solid #e5e5e5;
    }
    </style>
    <h1>
    Admission
    </h1>
<div class="content">
    <div class="box box-primary"