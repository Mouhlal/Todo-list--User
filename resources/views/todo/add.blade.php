<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Add To-do</title>
</head>
<body>
 @include('todo.nav')

 <form action={{route('store')}} method="post">
    @csrf
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
          <form action="" method="POST">
            @csrf
            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                 Your Tache:
              </label>
              <input
              type="text" value="{{old('todo')}}" name="todo" placeholder="Write your task ..."
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
              @error('todo')
              <span class="text-red-600">{{$message}}</span>
                  @enderror
            </div>
            <div class="mb-5">
              <label
                for="email"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
               Status :
              </label>
             <select name="status" value="{{old('status')}}">
                <option value="completed">Completed</option>
                <option value="in progress">In progress</option>
                <option value="incompleted">Incompleted</option>
            </select>
             @error('status')
             <span class="text-red-600">{{$message}}</span>
             @enderror <br>
            </div>

            <div class="mb-5">
              <label
                for="message"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Description
              </label>
              <input type="text" value="{{old('description')}}" name="description" placeholder="Description ..." class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
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
    {{-- <div class="m-5">
        <input type="text" value="{{old('todo')}}" name="todo" placeholder="Write your task ..." class="border-black border rounded-sm p-2"> <br>
            @error('todo')
        {{$message}}
            @enderror
        <br>
        <input type="text" value="{{old('status')}}" name="status" placeholder="Your task status ..." class="border-black border rounded-sm p-2"> <br> @error('status')
        {{$message}}
        @enderror <br>
        <input type="text" value="{{old('description')}}" name="description" placeholder="Description ..." class="border-black border rounded-sm p-2"> <br> @error('description')
{{$message}}
        @enderror <br>
        <button
        type="submit"
        class="middle none center mr-4 rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      >
        Enregistrer
      </button>
    </div> --}}
 </form>

</body>
</html>
