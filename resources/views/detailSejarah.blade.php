@extends('layouts.main')
@section('title', 'Sejarah')
@section('content')

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-navy-900 mb-8">Sejarah DINSOS</h1>

        <div class="flex flex-col gap-8 items-center">
            <div class="w-full space-y-4">
                <p class="text-gray-600 leading-relaxed">{!! $sejarah !!}</p>
            </div>
        </div>
    </div>

    <body class="bg-gray-100">
        <div class="container mx-auto p-6">
            <h1 class="text-xl font-bold mb-4">Sejarah Pimpinan Dinas Sosial</h1>
            <table class="table-auto w-full border-collapse border border-gray-300 bg-white shadow">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Tahun</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Nama Pimpinan</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Nama Instansi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">1946 – 1947</td>
                        <td class="border border-gray-300 px-4 py-2">Bgd. M. Thahar</td>
                        <td class="border border-gray-300 px-4 py-2">Pejabat Sosial</td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">2</td>
                        <td class="border border-gray-300 px-4 py-2">1947 – 1947</td>
                        <td class="border border-gray-300 px-4 py-2">Marah Kaharuddin</td>
                        <td class="border border-gray-300 px-4 py-2">Pejabat Sosial</td>
                    </tr>
                    <!-- Row 3 -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">3</td>
                        <td class="border border-gray-300 px-4 py-2">1947 – 1958</td>
                        <td class="border border-gray-300 px-4 py-2">A. Malik Ahmad</td>
                        <td class="border border-gray-300 px-4 py-2">Jawatan Provinsi Sumatera Barat</td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">4</td>
                        <td class="border border-gray-300 px-4 py-2">1958 – 1963</td>
                        <td class="border border-gray-300 px-4 py-2">Abdul Muis</td>
                        <td class="border border-gray-300 px-4 py-2">Inspeksi Sosial Sumatera Barat</td>
                    </tr>
                    <!-- Row 5 -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">5</td>
                        <td class="border border-gray-300 px-4 py-2">1963 – 1977</td>
                        <td class="border border-gray-300 px-4 py-2">H. M. Hasan Byk Dt. Maradjo</td>
                        <td class="border border-gray-300 px-4 py-2">Isori / Jasos / Kanwil Depsos Sumbar</td>
                    </tr>
                    <!-- Row 6 -->
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">6</td>
                        <td class="border border-gray-300 px-4 py-2">1977 – 1981</td>
                        <td class="border border-gray-300 px-4 py-2">Sofyan Yahya, BA</td>
                        <td class="border border-gray-300 px-4 py-2">Kanwil Depsos</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">7</td>
                        <td class="border border-gray-300 px-4 py-2">1981 – 1988</td>
                        <td class="border border-gray-300 px-4 py-2">M. Sjafe'l Andjasmaja, SH</td>
                        <td class="border border-gray-300 px-4 py-2">Kanwil Depsos</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">8</td>
                        <td class="border border-gray-300 px-4 py-2">1988 – 1994</td>
                        <td class="border border-gray-300 px-4 py-2">Drs. Muchson Surachman</td>
                        <td class="border border-gray-300 px-4 py-2">Kanwil Depsos</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">9</td>
                        <td class="border border-gray-300 px-4 py-2">1994 – 1997</td>
                        <td class="border border-gray-300 px-4 py-2">Drs. Burhanuddin</td>
                        <td class="border border-gray-300 px-4 py-2">Kanwil Depsos</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">10</td>
                        <td class="border border-gray-300 px-4 py-2">1997 – 1999</td>
                        <td class="border border-gray-300 px-4 py-2">Drs. Himathul Anwar</td>
                        <td class="border border-gray-300 px-4 py-2">Kanwil Depsos</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">11</td>
                        <td class="border border-gray-300 px-4 py-2">1999 – 2000</td>
                        <td class="border border-gray-300 px-4 py-2">H.Amry, SH</td>
                        <td class="border border-gray-300 px-4 py-2">Kanwil Depsos</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">12</td>
                        <td class="border border-gray-300 px-4 py-2">2000 – 2003</td>
                        <td class="border border-gray-300 px-4 py-2">Dr. H. Abdul Rivai, M. Kes</td>
                        <td class="border border-gray-300 px-4 py-2">Dinas Kesehatan dan Kesejahteraan Sosial</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">13</td>
                        <td class="border border-gray-300 px-4 py-2">2003 – 2006</td>
                        <td class="border border-gray-300 px-4 py-2">H. Amry, SH</td>
                        <td class="border border-gray-300 px-4 py-2">Dinas Sosial</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">14</td>
                        <td class="border border-gray-300 px-4 py-2">2006 – 2008</td>
                        <td class="border border-gray-300 px-4 py-2">Drs. H. Muchsis Malik</td>
                        <td class="border border-gray-300 px-4 py-2">Dinas Sosial</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">15</td>
                        <td class="border border-gray-300 px-4 py-2">2009 – 2010</td>
                        <td class="border border-gray-300 px-4 py-2">Drs. Kafrawi Bakhtiar</td>
                        <td class="border border-gray-300 px-4 py-2">Dinas Sosial</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">16</td>
                        <td class="border border-gray-300 px-4 py-2">2011 – 2018</td>
                        <td class="border border-gray-300 px-4 py-2">H. Abdul Gafar. SE. MM</td>
                        <td class="border border-gray-300 px-4 py-2">Dinas Sosial</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">17</td>
                        <td class="border border-gray-300 px-4 py-2">2019 – 2022</td>
                        <td class="border border-gray-300 px-4 py-2">Jumaidi, S.Pd, M.Pd</td>
                        <td class="border border-gray-300 px-4 py-2">Dinas Sosial</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">18</td>
                        <td class="border border-gray-300 px-4 py-2">2022 – 2023</td>
                        <td class="border border-gray-300 px-4 py-2">Arry Yuswandi, S.K.M, M.K.M</td>
                        <td class="border border-gray-300 px-4 py-2">Dinas Sosial</td>
                    </tr>
                    <!-- Rows truncated for brevity -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">19</td>
                        <td class="border border-gray-300 px-4 py-2">2023 – sekarang</td>
                        <td class="border border-gray-300 px-4 py-2">Drs. Syaifullah, MM</td>
                        <td class="border border-gray-300 px-4 py-2">Dinas Sosial</td>
                    </tr>
                </tbody>
            </table>
        </div>

</section>

@endsection