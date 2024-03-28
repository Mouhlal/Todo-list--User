<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Edit Tache</title>
</head>
<body>
    @include('todo.nav')
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
          <form action="{{route('update' , $todo->id)}}" method="POST">
            @csrf
            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                 Your Tache:
              </label>
              <input
                type="text"
                name="todo"
                value="{{$todo->todo}}"
                placeholder="Tache To-do"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for="email"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
               Status :
              </label>
             <select name="status" value="{{$todo->status}}" id="">
            <option value="completed">Completed</option>
            <option value="in progress">In progress</option>
            <option value="incompleted">Incompleted</option></select>
            </div>

            <div class="mb-5">
              <label
                for="message"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Description
              </label>
              <input type="text" value="{{$todo->description}}" name="description" placeholder="Description ..." class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              > <br> @error('description')
<span class="text-red-600">{{$message}}</span>
        @enderror <br>
            </div>
            <div>
              <button
              type="submit"
                class="hover:shadow-form rounded-md py-3 px-8 text-base font-semibold text-white bg-black outline-none"
              >
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
</body>
</html>
