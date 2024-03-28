@auth
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    @include('todo.nav')

    @if (session('succes'))
            <div class="bg-blue-600 text-black p-3 mb-4">{{session('succes')}}</div>
    @endif
    @if (session('add'))
    <div class="bg-blue-400 text-black p-3 mb-4">{{session('add')}}</div>
@endif
@if (session('up'))
<div class="bg-blue-400 text-black p-3 mb-4">{{session('up')}}</div>
@endif
    @if (session('danger'))
            <div class="bg-blue-400 text-black p-3 mb-4">{{session('danger')}}</div>
    @endif

    <div
  class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
  <table class="w-full text-left table-auto min-w-max">
    <thead>
      <tr>
        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
            Tache
          </p>
        </th>
        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
            Status
          </p>
        </th>
        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
            Description
          </p>
        </th>
        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
            Action
          </p>
        </th>
      </tr>
    </thead>
    <tbody>

@foreach($todo as $td)
      <tr>
        <td class="p-4 border-b border-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
            {{$td->todo}}
          </p>
        </td>
        <td class="p-4 border-b border-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
            {{$td->status}}
          </p>
        </td>
        <td class="p-4 border-b border-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
            {{$td->description}}
          </p>
        </td>
        <td class="p-4 border-b border-blue-gray-50">
          <a href="{{route('edit' , $td->id )}}" class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
            Edit
          </a>
          <a href="{{route('delete',$td->id)}}"  class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
            Delete
        </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
@endauth


