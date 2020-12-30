<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <h1>
            Lesson creating
        </h1>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{route('lessons.store')}}">
                @csrf
                <label for="title">Title</label>
                <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" type="text" name="title"">
                @if ($errors->has('title'))
                    <li class="help is-danger">{{$errors->first('title')}}</li>
                    @endif
                    </br>
                    <label for="description">Description</label>
                    <input class="input {{$errors->has('description') ? 'is-danger' : ''}}" type="text" name="description" >
                    @if($errors->has('description'))
                        <li class="help is-danger">{{$errors->first('description')}}</li>
                        @endif
                        </br>
                    <input type="hidden" name="course_id" value="{{$id}}">
                        <input type="submit" name="create" value="Create">
            </form>
        </div>
    </div>
</x-guest-layout>
