@extends('layouts.app')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Adicionar Nova Tarefa
        </h2>
        

        <!-- General elements -->
        <form method="POST" action="{{ route('task.store') }}" >
            @csrf
            <div for="nome" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nome da nova tarefa</span>
                        <input name="nome" id="nome" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Nome da nova tarefa" />
                </label>

                <label for="descrição" class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Descrição</span>
                    <textarea
                        name="descrição" id="descrição"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3" placeholder="Digite aqui a descrição da tarefa"></textarea>
                </label>

                <div class="block mt-4 text-sm">
                    <label for="exampleFormControlSelect1" class="text-gray-700 dark:text-gray-400">Status:</label>
                    <select name="status" id="status" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="Em espera" >Em espera</option>
                        <option value="Em andamento">Em andamento</option>
                        <option value="Concluído" >Concluído</option>
                    </select>
                  </div>

                <div class="px-6 my-6 flex justify-end">
                    <button 
                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Criar nova Tarefa
                        <span class="ml-2" aria-hidden="true">+</span>
                    </button>
        
                </div>
            </div>
        </form>            
    </div>
@endsection
