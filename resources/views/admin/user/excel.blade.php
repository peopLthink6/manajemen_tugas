<table>
    <thead>
        <tr>
            <th colspan="5">Data User</th>
        </tr>
        <tr>
            <th colspan="5">
                Tanggal :  {{ $tanggal }} 
            </th>
        </tr>
        <tr>
            <th colspan="5">
                Pukul : {{ $jam }}
            </th>
        </tr>
        <tr>
        <th width="20" align="center">No</th>
        <th width="20" align="center">Nama</th>
        <th width="20" align="center">Email</th>
        <th width="20" align="center">Jabatan</th>
        <th width="20" align="center">Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $user as $item )
        <tr>
            <td>{{ $loop->iteration}}
            </td>
            <td>{{ $item->nama}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->jabatan}}</td>
            @if ($item->is_tugas == false)
                <td>Belum Ditugaskan</td>
            @else
                <td>Sudah Ditugaskan</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>