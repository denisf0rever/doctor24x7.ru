@extends('app')
@section('title', $consultation->title)
@section('description', $consultation->metadescription)
@section('keywords', $consultation->metakey)
@section('canonical', 'consultation/'. $consultation->id)

@section('content')


@endsection