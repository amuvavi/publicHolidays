<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
    <h1 class="mt-5">List of South African Holidays</h1>
    <div class="d-flex justify-content-end mb-4">
    <a href="{{ URL::to('/holiday/pdf') }}"><b>Download as PDF</b></a>
</div>
<div class="mt-3">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Holiday Name</th>
      <th scope="col">Date</th>
      <th scope="col">Holiday Type</th>
     
    </tr>
  </thead>
  <tbody>
    @forelse($holidays  as $holiday)
    <tr>
      <th scope="row">{{$holiday->name}}</th>
      <td>{{$holiday->date}}</td>
      <td>{{$holiday->holidayType}}</td>
      
    </tr>
    @empty
    <p>You have no Holiday Entries</p>
   @endforelse
  </tbody>
</table>
</div>


    </div>
</body>
</html>