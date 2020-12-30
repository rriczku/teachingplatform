<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <h1>
            Course
        </h1>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h1>Name: {{$course->name}}</h1>
            <p>Description: {{$course->description}}</p>
            <strong>List of lessons:</strong>
            <table>
            @foreach ($lessons as $lesson)
                    <tr>
                        <td>
                            {{$lesson->title}}
                        </td>
                        <td>
                            {{$lesson->description}}
                        </td>
                        <td>
                            <a href="{{route('lessons.show',$lesson->id)}}">Join</a>
                        </td>
                    </tr>
            @endforeach
            </table>
            @can('lecturer')
                <a href="{{route('lessons.create',$course->id)}}">Create new lesson</a>
            @endcan
        </div>
    </div>
</x-guest-layout>
