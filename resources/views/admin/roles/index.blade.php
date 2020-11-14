@extends('admin.layouts.master')

@section('meta-content')
<title>Role &middot; {{ config('app.name') }} </title>
@endsection

@section('breadcrumbs')
{{ Breadcrumbs::render('admin.roles.index') }}
@endsection

@section('content')
<div class="flex-1 flex flex-col p-8">
  <livewire:admin.roles.roles-table>
</div>

@endsection

@push('styles')

@endpush

@section('scripts')

@endsection