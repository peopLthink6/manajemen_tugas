<table>
    <thead>
        <tr>
            <th colspan="6">Data Tugas</th>
        </tr>
        <tr>
            <th colspan="6">
                Tanggal :  {{ $tanggal }} 
            </th>
        </tr>
        <tr>
            <th colspan="6">
                Pukul : {{ $jam }}
            </th>
        </tr>
        <tr>
        <th width="20" style="text-align: center;">No</th>
        <th width="20" style="text-align: center;">Nama</th>
        <th width="20" style="text-align: center;">Email</th>
        <th width="20" style="text-align: center;">Tugas</th>
        <th width="20" style="text-align: center;">Tanggal Mulai</th>
        <th width="20" style="text-align: center;">Tanggal Selesai</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $tugas as $item )
        <tr>
            <td>{{ $loop->iteration}}
            </td>
            <td>{{ $item->user->nama}}</td>
            <td>{{ $item->user->email}}</td>
            <td>{{ $item->tugas}}</td>
            <td width="20" style="text-align: center;"> {{ $item->tanggal_mulai}}</td>
            <td width="20" style="text-align: center;">{{ $item->tanggal_selesai}}</td>
        </tr>
        @endforeach
    </tbody>
</table>