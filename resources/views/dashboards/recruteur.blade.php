@extends('layouts.app')

@section('content')
<div class="bg-[#f3f2f1] min-h-screen py-6">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-12 gap-6">

        <div class="md:col-span-3">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="h-16 bg-[#004182]"></div>
                
                <div class="px-4 -mt-8 mb-4 flex flex-col items-center">
                    <div class="w-16 h-16 bg-white rounded-lg border-2 border-white shadow-sm flex items-center justify-center overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=Company&background=0a66c2&color=fff" class="w-full h-full" alt="Logo">
                    </div>
                    <h2 class="mt-3 font-semibold text-gray-900 hover:underline cursor-pointer text-center">
                        {{ auth()->user()->name }}
                    </h2>
                    <p class="text-xs text-gray-500 text-center mt-1 italic">Gestionnaire de recrutement</p>
                </div>

                <div class="border-t border-gray-200 py-3">
                    <div class="px-4 py-1 flex justify-between">
                        <span class="text-xs text-gray-500 font-semibold">Offres actives</span>
                        <span class="text-xs text-[#0a66c2] font-bold">12</span>
                    </div>
                    <div class="px-4 py-1 flex justify-between">
                        <span class="text-xs text-gray-500 font-semibold">Vues totales</span>
                        <span class="text-xs text-[#0a66c2] font-bold">1.2k</span>
                    </div>
                </div>

                <a href="{{ route('recruteur.company.edit') }}" class="border-t border-gray-200 px-4 py-3 flex items-center hover:bg-gray-100 transition group">
                    <svg class="w-4 h-4 text-gray-500 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/></svg>
                    <span class="text-xs font-bold text-gray-700">Modifier page entreprise</span>
                </a>
            </div>
        </div>

        <div class="md:col-span-6 space-y-4">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <div class="flex items-center justify-between">
                    <h3 class="font-bold text-gray-900">Publier un nouveau poste</h3>
                    <a href="{{ route('recruteur.jobs.create') }}" class="bg-[#0a66c2] text-white px-4 py-2 rounded-full text-sm font-bold hover:bg-[#004182] transition">
                        + Créer une offre
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-bold text-gray-900">Vos offres récentes</h3>
                    <a href="{{ route('recruteur.jobs.index') }}" class="text-xs text-[#0a66c2] font-bold hover:underline">Gérer tout</a>
                </div>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-3 border-b border-gray-100 pb-4 last:border-0">
                        <div class="flex-1">
                            <h4 class="text-sm font-bold text-gray-900">Développeur Fullstack React/Laravel</h4>
                            <p class="text-xs text-gray-500">Postée il y a 3 jours · <span class="text-green-600 font-semibold">24 candidatures</span></p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-xs font-bold text-gray-600 hover:bg-gray-100 px-3 py-1 rounded">Modifier</button>
                            <button class="text-xs font-bold text-[#0a66c2] border border-[#0a66c2] px-3 py-1 rounded-full hover:bg-blue-50">Candidats</button>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 border-b border-gray-100 pb-4 last:border-0">
                        <div class="flex-1">
                            <h4 class="text-sm font-bold text-gray-900">UI/UX Designer</h4>
                            <p class="text-xs text-gray-500">Postée il y a 1 semaine · <span class="text-gray-600 font-semibold">8 candidatures</span></p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-xs font-bold text-gray-600 hover:bg-gray-100 px-3 py-1 rounded">Modifier</button>
                            <button class="text-xs font-bold text-[#0a66c2] border border-[#0a66c2] px-3 py-1 rounded-full hover:bg-blue-50">Candidats</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:col-span-3 space-y-4">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <h3 class="font-bold text-gray-900 text-sm mb-4">Analyse du recrutement</h3>
                <div class="space-y-4">
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-[#0a66c2]">154</span>
                        <span class="text-[10px] text-gray-500 uppercase font-bold">Vues des offres (7 jours)</span>
                    </div>
                    <div class="flex flex-col border-t border-gray-100 pt-3">
                        <span class="text-2xl font-bold text-gray-800">32</span>
                        <span class="text-[10px] text-gray-500 uppercase font-bold">Nouveaux candidats</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <h3 class="font-bold text-gray-900 text-sm mb-2">Conseil Recruteur</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Les offres avec un **salaire affiché** reçoivent en moyenne 30% de candidatures en plus.
                </p>
            </div>
        </div>

    </div>
</div>
@endsection