<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-row w-10/12 mx-auto">
        <div class="py-12 w-1/2">
            <div class="w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div class="h-[400px] overflow-y-auto">
                        <div class="flex justify-between">
                            <h2 class="text-gray-700 text-2xl font-bold">Notas</h2> <a href="{{ route('new_nota') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> + Criar Nota</a>
                        </div>

                        <table class="table-auto mt-10">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Ascepcao</th>
                                <th>Classificação</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notas as $nota)
                                <tr class="border-b w-full">
                                    <td class="whitespace-nowrap px-6 py-4">#{{ $nota->IdeNota }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $nota->NomEntradaPadrao }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $nota->TxtAscepcao }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $nota->DscClassificacao }}</td>
                                    <td><a class="bg-blue-400 p-1 rounded-md text-white font-bold" href="{{route('edit_nota', ['id' => $nota->IdeNota])}}">Atualizar</a>
                                        <button onclick="confirm('Tem certeza que deseja excluir?') && deleteEntity('{{$nota->IdeNota}}', 'Nota')" class="bg-red-400 p-1 rounded-md text-white font-bold">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12 w-1/2 ">
            <div class="w-full mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div class="h-[400px] overflow-y-auto">
                        <div class="flex justify-between">
                            <h2 class="text-gray-700 text-2xl font-bold">Fontes</h2> <a href="{{ route('new_fonte') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> + Criar Fonte</a>
                        </div>

                        <table class="table-auto">
                            <thead>
                            <tr>
                                <th>Especie</th>
                                <th>Titulo</th>
                                <th>Inst. Produtora</th>
                                <th>Ações</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fontes as $fonte)
                                <tr class="border-b w-full">
                                    <td class="whitespace-nowrap px-6 py-4">{{ $fonte->IdcEspecie }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $fonte->NomTitulo }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $fonte->NomInstituicaoProdutora }}</td>
                                    <td>
                                        <a class="bg-blue-400 p-1 rounded-md text-white font-bold" href="{{route('edit_fonte', ['id' => $fonte->IdeFonte])}}">Atualizar</a>
                                        <button onclick="confirm('Tem certeza que deseja excluir?') && deleteEntity('{{$fonte->IdeFonte}}', 'Fonte')" class="bg-red-400 p-1 rounded-md text-white font-bold">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row w-10/12 mx-auto">
        <div class="py-4 w-1/2 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div>
                        <div class="flex justify-between">
                            <h2 class="text-gray-700 text-2xl font-bold">Publicações</h2> <a href="{{ route('new_publicacao') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> + Criar Publicação</a>
                        </div>

                        <table class="table-auto">
                            <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Veiculo</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($publicacoes as $publicacao)
                                <tr class="border-b w-full">
                                    <td class="whitespace-nowrap px-6 py-4">{{ $publicacao->NomTitulo }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $publicacao->IdcVeiculo }}</td>

                                    <td><a class="bg-blue-400 p-1 rounded-md text-white font-bold" href="">Atualizar</a>
                                        <button onclick="confirm('Tem certeza que deseja excluir?') && deleteEntity('{{$publicacao->IdePublicacao}}', 'Publicacao')" class="bg-red-400 p-1 rounded-md text-white font-bold">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

        <div class="py-4 w-1/2 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div>
                        <div class="flex justify-between">
                            <h2 class="text-gray-700 text-2xl font-bold">Areas</h2> <a href="{{ route('new_area') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> + Criar Area</a>
                        </div>

                        <table class="table-auto">
                            <thead>
                            <tr>
                                <th>Cod.</th>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($areas as $area)
                                <tr class="border-b w-full">
                                    <td class="whitespace-nowrap px-6 py-4">#{{ $area->CodArea }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $area->NomNome }}</td>

                                    <td><a class="bg-blue-400 p-1 rounded-md text-white font-bold" href="">Atualizar</a>
                                        <button onclick="confirm('Tem certeza que deseja excluir?') && deleteEntity('{{$area->IdeArea}}', 'Area')" class="bg-red-400 p-1 rounded-md text-white font-bold">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="flex flex-row w-10/12 mx-auto">
        <div class="py-4 w-1/2 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div>
                        <div class="flex justify-between">
                            <h2 class="text-gray-700 text-2xl font-bold">Estudos</h2> <a href="{{ route('new_publicacao') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> + Criar Estudos</a>
                        </div>

                        <table class="table-auto">
                            <thead>
                            <tr>
                                <th>Cod.</th>
                                <th>Nome</th>
                                <th>Justificativa</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($estudos as $estudo)
                                <tr class="border-b w-full">
                                    <td class="whitespace-nowrap px-6 py-4">#{{ $estudo->IdeEstudo }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $estudo->NomNome }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $estudo->DscJustificativa }}</td>

                                    <td><a class="bg-blue-400 p-1 rounded-md text-white font-bold" href="">Atualizar</a>
                                        <button onclick="confirm('Tem certeza que deseja excluir?') && deleteEntity('{{$estudo->IdeEstudo}}', 'Estudo')" class="bg-red-400 p-1 rounded-md text-white font-bold">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>
