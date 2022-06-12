<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form action="{{ route('test.result') }}" method="POST">
            @csrf
            @foreach(\App\Models\Question::with(['options' => function($query) { return $query->select(['id','question_id','option'])->inRandomOrder(); }])->take(5)->inRandomOrder()->get() as $question)
              <fieldset>
                <div class="my-4 space-y-4" x-data="{ checked: {{$question->options->first()->id}}, choices: {{$question->options}} }">
                  <legend class="font-large text-gray-900">{{$question->question_text}}</legend>
                  <template x-for="choice in choices">
                    <div>
                      <label
                        class="relative block bg-white border rounded-lg shadow-sm px-6 py-4 cursor-pointer sm:flex sm:justify-between focus:outline-none"
                        :class="{ 'border-indigo-500 ring-2 ring-indigo-500' : checked === choice.id, 'border-gray-300' : checked !== choice.id}"
                        @click="checked = choice.id"
                      >
                        <input
                          type="radio"
                          name="answers[{{$question->id}}]"
                          x-model="choice.id"
                          class="sr-only"
                        >
                        <span class="flex items-center">
                          <span class="text-sm flex flex-col">
                            <span class="font-medium text-gray-900" x-text="choice.option"></span>
                          </span>
                        </span>
                      </label>
                    </div>
                  </template>
                </div>
              </fieldset>
            @endforeach
            <button
              type="submit"
              class="my-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
