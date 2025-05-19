<div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Data Pendaftaran Murid Ekskul </h1>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Kelas</th>
                    <th class="border px-4 py-2">NISN</th>
                    <th class="border px-4 py-2">Jenis Kelamin</th>
                    <th class="border px-4 py-2">Alamat</th>
                    <th class="border px-4 py-2">Ekskul ID</th>
                </tr>
            </thead>
            <tbody>
                @if ($pendaftarans->isEmpty())
                    <tr>
                        <td colspan="8" class="border px-4 py-2 text-center">Tidak ada data pendaftaran.</td>
                    </tr>
                     @else
                    @foreach ($pendaftarans as $data)
                        <tr>
                            <td class="border px-4 py-2">{{ $data->student_name}}</td>
                            <td class="border px-4 py-2">{{ $data->class  }}</td>
                            <td class="border px-4 py-2">{{ $data->nisn}}</td>
                            <td class="border px-4 py-2">{{ $data->jenis_kelamin }}</td>
                            <td class="border px-4 py-2">{{ $data->alamat }}</td>
                            <td class="border px-4 py-2">{{ $data->ekskul_id }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>            
        </table>
    </div>
</div>