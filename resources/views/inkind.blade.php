@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('partials.header', ['header' => $header])
@include('partials.inkind', ['inKindData' => $inKindData])
@include('partials.footer', ['footerData' => $footerData])