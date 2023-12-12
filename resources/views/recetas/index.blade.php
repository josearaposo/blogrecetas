<x-app-layout>
    <div class="relative overflow-x-auto w-auto mx-8 mshadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
{{--                         <a href="{{ route('recetas.index', ['order' => 'titulo', 'order_dir' => order_dir($order == 'titulo', $order_dir)]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Titulo {{ order_dir_arrow($order == 'titulo', $order_dir) }}
                        </a> --}}
                        Titulo

                    </th>
                    <th scope="col" class="px-6 py-3">
                        <a href="{{ route('recetas.index', ['order' => 'body', 'order_dir' => order_dir($order == 'body', $order_dir)]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Texto {{ order_dir_arrow($order == 'body', $order_dir) }}
                        </a>
                        Texto
                    </th>
                    <th scope="col" class="px-6 py-3">
                     <a href="{{ route('recetas.index', ['order' => 'por', 'order_dir' => order_dir($order == 'user', $order_dir)]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Usuario {{ order_dir_arrow($order == 'user_id', $order_dir) }}
                        </a>
                    </th>
                    <th scope="col" class="px-6 py-3">
{{--                         <a href="{{ route('recetas.index', ['order' => 'nombre', 'order_dir' => order_dir($order == 'nombre', $order_dir)]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Categoría {{ order_dir_arrow($order == 'nombre', $order_dir) }}
                        </a> --}}
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3" colspan="2">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recetas as $receta)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $receta->titulo }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $receta->body }}
                        </th>
                       <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" title="{{ $receta->user->name }}">
                            {{ $receta->user->name }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('categorias.edit', ['categoria' => $receta->categoria]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                {{ $receta->categoria->nombre }}
                            </a>
                        </th>
                        <td class="px-6 py-4">
                            <a href="{{ route('recetas.edit', ['receta' => $receta]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <x-primary-button>
                                    Editar
                                </x-primary-button>
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('recetas.destroy', ['receta' => $receta]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button class="bg-red-500">
                                    Borrar
                                </x-primary-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('recetas.create') }}" class="flex justify-center mt-4 mb-4">
            <x-primary-button class="bg-green-500">Nueva Receta</x-primary-button>
        </form>
      {{--   {{ $receta->withQueryString()->links() }} --}}
    </div>
</x-app-layout>
